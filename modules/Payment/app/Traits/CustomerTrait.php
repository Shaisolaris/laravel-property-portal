<?php

namespace Modules\Payment\app\Traits;

trait CustomerTrait
{
    public function getCustomers(): array
    {
        return $this->getEssences('Customer');
    }


    public function retrieveCustomer(){}
    public function updateCustomer(){}
    public function deleteCustomer(){}
}