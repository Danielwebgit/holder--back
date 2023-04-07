<?php

namespace App\Http\Controllers\Api\Transation;

use App\Http\Controllers\Controller;
use App\Repositories\Transation\TransationRepository;


class TransationsController extends Controller
{

    public function __construct(
        private TransationRepository $transationRepository
    ){}

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->transationRepository->getAllTransations();

        return response()->json($clients);
    }
}