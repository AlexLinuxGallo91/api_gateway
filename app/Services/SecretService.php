<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class SecretService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.secret_api.base_uri');
        $this->secret = config('services.secret_api.secret');
    }

    public function sendSecret($data)
    {
        return $this->performRequest('GET', '/gateway/secret', $data);
    }
}
