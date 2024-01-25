<?php

namespace Modules\Payment\app\Traits;

use Stripe\Charge;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;

trait PaymentIntentTrait
{
    /**
     * @throws ApiErrorException
     */
    public function getPaymentIntents(array $where = []): \Stripe\Collection
    {
        $this->setApiKey();

        return Charge::all($where);
    }


    public function retrievePaymentIntent()
    {
    }


    /**
     * @throws ApiErrorException
     */
    public function createPaymentIntent(array $data)
    {
        return PaymentIntent::create($data);
    }


    public function updatePaymentIntent()
    {
    }


    public function capturePaymentIntent()
    {
    }
}
