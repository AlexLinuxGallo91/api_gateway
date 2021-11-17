<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class ApiEmailService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.api_itoc_email.base_uri');
    }

    public function sendEmailText($data)
    {
        return $this->performRequest('POST', '/notificacion/mail/solotexto', $data);
    }

    public function sendEmailHtml($data)
    {
        return $this->performRequest('POST', '/notificacion/mail/avanzado', $data);
    }
}
