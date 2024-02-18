<?php

namespace App\Controllers;

use App\Services\TicketService;

class Home extends BaseController
{
    private TicketService $ticketService;

    public function __construct()
    {
        $this->ticketService = new TicketService();
    }

    public function index(): string
    {
        $bus = [];
        $wilayah = $this->ticketService->getWilayah();
        $req = [];
        if ($this->request->getGet()) {
            $rule = [
                'wilayahAsal' => 'required|integer',
                'wilayahTujuan' => 'required|integer',
                'tglBerangkat' => 'required|string',
            ];

            if ($this->validateData($this->request->getGet(), $rule)) {
                $req = $this->request->getGet();
                $date = \DateTime::createFromFormat('Y-m-d', $req['tglBerangkat']);
                
                $bus = $this->ticketService->getAvalaibleBusByWilayah(
                    $req['wilayahAsal'],
                    $req['wilayahTujuan'],
                    $date
                );
            }
        }

        return view('home', [
            'wilayah' => $wilayah,
            'bus' => $bus,
            'cari' => $req
        ]);
    }
}
