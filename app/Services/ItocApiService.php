<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class ItocApiService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.api_services.base_uri');
    }

    public function getStatus()
    {
        return $this->performRequest('GET', '/apiservices/login/echoping');
    }
}
