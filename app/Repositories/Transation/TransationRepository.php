<?php

namespace App\Repositories\Transation;

use App\Models\Transation;

class TransationRepository
{
    public function __construct(
        private Transation $model
    ){}

    public function getAllTransations()
    {
        return $this->model::query()->get();
    }
}