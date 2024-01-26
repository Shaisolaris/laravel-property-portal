<?php

namespace Modules\Payment\app\Traits;

use Stripe\Charge;
use Stripe\Product;
use Laravel\Cashier\Cashier;
use Stripe\Exception\ApiErrorException;

trait ProductTrait
{
	/**
	 * @throws ApiErrorException
	 */
	public function getProducts(array $where = []): \Stripe\Collection
	{
		return Cashier::stripe()->products->all($where);
	}


    /**
     * @throws ApiErrorException
     */
    public function retrieveProduct(): Product
    {
        return Cashier::stripe()->products->retrieve(config('services.stripe.product'));
	}


	/**
	 * @throws ApiErrorException
	 */
	public function createProduct(array $data)
	{
		return Product::create($data);
	}


	public function updateProduct(){}
	public function captureProduct(){}
}
