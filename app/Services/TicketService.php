<?php

namespace App\Services;

use CodeIgniter\HTTP\CURLRequest;
use Config\Services;

class TicketService
{
    private TicketConfigService $ticketConfigService;
    private CURLRequest $client;

    public function __construct()
    {
        $this->ticketConfigService = new TicketConfigService();
        $this->client = Services::curlrequest();
    }

    public function getWilayah(): array
    {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/getWilayah'),
                ['headers' => self::getHeader()]
            );
        } catch (\Exception $exception) {
            return [];
        }

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result['arrData'] ?? [];
    }

    private function url(string $path): string
    {
        return $this->ticketConfigService->getBaseUrl().$path;
    }

    private function getHeader(): array
    {
        return [
            'Accept' => 'application/json',
            'x-api-key' => $this->ticketConfigService->getKey(),
        ];
    }

    private function formatResult(string $response): array
    {
        $res = json_decode($response, true);

        if (isset($res['result'])) {
            return $res['result'] ?? [];
        }

        return [];
    }

    public function getAvalaibleBusByWilayah(int $wilayahAsal, int $wilayahTujuan, \DateTime $tglBerangkat): array
    {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/getAvalaibleBusByWilayah'),
                [
                    'headers' => self::getHeader(),
                    'query' => [
                        'tglBerangkat' => $tglBerangkat->format('Y-m-d'),
                        'wilayahAsal' => $wilayahAsal,
                        'wilayahTujuan' => $wilayahTujuan,
                    ],
                ]
            );
        } catch (\Exception $exception) {
            return [];
        }

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result['arrData'] ?? [];
    }

    public function getTempatNaik(int $idWilayah, int $idArmada): array
    {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/getTempatNaik'),
                [
                    'headers' => self::getHeader(),
                    'query' => [
                        'idWilayah' => $idWilayah,
                        'idArmada' => $idArmada,
                    ],
                ]
            );
        } catch (\Exception $exception) {
            return [];
        }

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result['arrData'] ?? [];
    }

    public function getTempatTurun(int $idWilayah, int $idArmada): array
    {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/getTempatTurun'),
                [
                    'headers' => self::getHeader(),
                    'query' => [
                        'idWilayah' => $idWilayah,
                        'idArmada' => $idArmada,
                    ],
                ]
            );
        } catch (\Exception $exception) {
            return [];
        }

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result['arrData'] ?? [];
    }

    public function grabChairInfo(
        int $idArmada,
        int $idTempatNaik,
        int $idTempatTurun,
        \DateTime $tglBerangkat
    ): array {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/grabChairInfo'),
                [
                    'headers' => self::getHeader(),
                    'query' => [
                        'tglBerangkat' => $tglBerangkat->format('Y-m-d'),
                        'idArmada' => $idArmada,
                        'idTempatNaik' => $idTempatNaik,
                        'idTempatTurun' => $idTempatTurun,
                    ],
                ]
            );
        } catch (\Exception $exception) {
            return [];
        }

        if ($response->getStatusCode() !== 200) {
            return [];
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result;
    }

    public function getPriceChair(
        int $idArmada,
        int $idTempatNaik,
        int $idTempatTurun,
        int $idBusKursi,
        \DateTime $tglBerangkat
    ): ?int {
        try {
            $response = $this->client->request(
                'GET',
                self::url('/getPriceChair'),
                [
                    'headers' => self::getHeader(),
                    'query' => [
                        'tglBerangkat' => $tglBerangkat->format('Y-m-d'),
                        'idArmada' => $idArmada,
                        'idTempatNaik' => $idTempatNaik,
                        'idTempatTurun' => $idTempatTurun,
                        'idBusKursi' => $idBusKursi,
                    ],
                ]
            );
        } catch (\Exception $exception) {
            return null;
        }

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        $result = self::formatResult($response->getBody() ?? '');

        return $result['result'] ?? null;
    }
}