<?php

namespace App\Services;


use Config\Api;

class TicketConfigService
{
    public function getBaseUrl(): string
    {
        return self::getApiConfig()->url;
    }

    /**
     * @throws \Exception
     */
    private function getApiConfig(): Api
    {
        $config = config('Api');

        if (!$config instanceof Api) {
            throw new \RuntimeException('Api config not found', 500);
        }

        return $config;
    }

    public function getKey(): string
    {
        return self::getApiConfig()->key;
    }
}