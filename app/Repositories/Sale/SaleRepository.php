<?php

namespace App\Repositories\Sale;

use App\Models\Transation;

class SaleRepository
{
    public function __construct(
        private Transation $model
    ){}

    public function makeSale()
    {
        dd("dd");
    }
}