<?php

namespace App\Services;

use Stripe\Stripe;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Modules\Payment\app\Traits\Stripe\ChargeTrait;
use Modules\Payment\app\Traits\Stripe\ProductTrait;
use Modules\Payment\app\Traits\Stripe\CustomerTrait;
use Modules\Payment\app\Traits\Stripe\PaymentIntentTrait;

class StripeService
{
    use
        ChargeTrait;
    use ProductTrait;
    use CustomerTrait;
    use PaymentIntentTrait;



    /** Method for search different entities Price, Product, Customer etc */
    public function search(string $essence, array $keys)
    {
        $this->setApiKey();
        $query = $this->transformKeys($keys);

        return resolve('Stripe\\' . Str::ucfirst($essence))->search(['query' => $query]);
    }


    protected function getEssences(string $essence, array $where = []): array
    {
        $this->setApiKey();

        $elements = [];

        $limit = 100;
        $startingAfter = null;

        do {
            $params = [
                'limit' => $limit,
                'starting_after' => $startingAfter
            ];

            $params = Arr::collapse([$params, $where]);
            $essences = resolve('Stripe\\' . Str::ucfirst($essence))::all($params);

            foreach ($essences->data as $essenceItem) {
                $elements[] = $essenceItem;
            }

            if (!empty($essences->data)) {
                $startingAfter = end($essences->data)->id;
            }
        } while ($essences->has_more);

        return $elements;
    }


    /** This method for 'search' need change format under stripe */
    private function transformKeys(array $keys, $isArray = false): string
    {
        $query = [];

        foreach ($keys as $key => $value) {
            if (is_array($value)) {
                $nestedConditions = $this->transformKeys($value, true);
                $query[] = "{$key}{$nestedConditions}";
            } else {
                if ($isArray) {
                    $query[] = "['{$key}']:'{$value}'";
                } else {
                    $query[] = "{$key}:'{$value}'";
                }
            }
        }

        return implode(' AND ', $query);
    }


    private function setApiKey(): void
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }
}
