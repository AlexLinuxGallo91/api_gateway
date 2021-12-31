<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class ItocApiService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.api_services.base_uri');
        $this->secret = config('services.api_services.secret');
    }

    public function getStatus()
    {
        return $this->performRequest('GET', '/apiservices/login/echoping');
    }
}
