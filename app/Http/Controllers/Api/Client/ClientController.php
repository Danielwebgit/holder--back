<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Repositories\Client\ClientRepository;

class ClientController extends Controller
{
    public function __construct(
        private ClientRepository $clientRepository
    ){}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->clientRepository->getAllClients();

        return response()->json($clients);
    }
}
