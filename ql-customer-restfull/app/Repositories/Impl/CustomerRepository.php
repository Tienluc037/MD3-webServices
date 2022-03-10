<?php


namespace App\Repositories\Impl;

use App\Models\Customer;
use App\Repositories\Eloquent\EloquentRepository;
use CustomerInterface;

class CustomerRepository extends EloquentRepository implements CustomerInterface
{

    public function getModel()
    {
        return Customer::class;
    }
}
