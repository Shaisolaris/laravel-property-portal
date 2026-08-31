<?php

namespace Modules\Payment\app\Traits\Stripe;

use Stripe\Charge;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;

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
