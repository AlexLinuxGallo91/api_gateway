<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class EmailService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.itoc_email_api.base_uri');
        $this->secret = config('services.itoc_email_api.secret');
    }

    public function sendEmailText($data){
        return $this->performRequest('POST', '/notifications/email/text', $data);
    }

    public function sendEmailHtml($data){
        return $this->performRequest('POST', '/notifications/email/html', $data);
    }

    public function sendSnmpTrap($data){
        return $this->performRequest('POST', '/notifications/snmptrap', $data);
    }

    public function sendPhoneMessage($data){
        return $this->performRequest('POST', '/notifications/phone/app', $data);
    }

    public function sendPhoneCall($data){
        return $this->performRequest('POST', '/notifications/phone/call', $data);
    }
}
