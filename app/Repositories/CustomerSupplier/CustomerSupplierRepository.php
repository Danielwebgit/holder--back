<?php

namespace App\Repositories\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientRepository
{
    public function __construct(
        private Client $model
    ){}

    public function getAllCustomerSupplier()
    {
        return $this->model::query()->select('corporate_name', 'cnpj')->get();
    }
}