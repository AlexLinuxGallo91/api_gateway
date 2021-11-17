<?php

namespace App\Http\Controllers;

use App\Services\EmailService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    use ApiResponser;

    public $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendEmailText(Request $request)
    {
        return $this->successResponse(
            $this->emailService->sendEmailText($request->all())
        );
    }

    public function sendEmailHtml(Request $request)
    {
        return $this->successResponse(
            $this->emailService->sendEmailHtml($request->all())
        );
    }

    public function sendSnmpTrap(Request $request)
    {
        return $this->successResponse(
            $this->emailService->sendSnmpTrap($request->all())
        );
    }

    public function sendPhoneMessage(Request $request)
    {
        return $this->successResponse(
            $this->emailService->sendPhoneMessage($request->all())
        );
    }

    public function sendPhoneCall(Request $request)
    {
        return $this->successResponse(
            $this->emailService->sendPhoneCall($request->all())
        );
    }
}
