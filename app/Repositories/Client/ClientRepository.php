<?php

namespace App\Repositories\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientRepository
{
    public function __construct(
        private Client $model
    ){}

    public function getAllClients()
    {
        return $this->model::query()->select('username', 'email', 'img')->get();
    }
}