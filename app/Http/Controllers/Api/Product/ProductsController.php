<?php

namespace App\Http\Controllers\Api\Product;

use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepository;

class ProductsController extends Controller
{
    public function __construct(
        private ProductRepository $productRepository
    ){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getAllProducts();

        return response()->json($products);
    }
}
