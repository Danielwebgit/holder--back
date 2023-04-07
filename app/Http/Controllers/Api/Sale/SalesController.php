<?php

namespace App\Http\Controllers\Api\Sale;

use App\Http\Controllers\Controller;
use App\Repositories\Sale\SaleRepository;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    private $itens = array();

    public function __construct(
        private SaleRepository $productRepository
    ){}

    public function addItem($products, $qtd) 
    {
        $this->itens[] = array(
          'products' => $products,
          'qtd' => $qtd
        );
    }

}