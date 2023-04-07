<?php

namespace App\Repositories\Product;

use App\Models\Product;

class ProductRepository
{
    public function __construct(
        private Product $model
    ){}

    public function getAllProducts()
    {
        return $this->model::query()->get();
    }
}