<?php

namespace Modules\Payment\app\Traits;

use Stripe\Charge;
use Laravel\Cashier\Cashier;
use Stripe\Exception\ApiErrorException;

trait ChargeTrait
{
    /**
     * @throws ApiErrorException
     */
    public function getCharges(array $where = []): \Stripe\Collection
    {
        return Cashier::stripe()->charges->all($where);
    }


    /**
     * @throws ApiErrorException
     */
    public function createCharge(array $data)
    {
        return Charge::create($data);
    }


    public function retrieveCharge(){}
    public function updateCharge(){}
    public function captureCharge(){}
}