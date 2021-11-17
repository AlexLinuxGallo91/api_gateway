<?php

namespace App\Http\Controllers;

use App\Services\ApiEmailService;
use App\Services\ItocApiService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class ApiEmailController extends Controller
{
    use ApiResponser;

    public $apiEmailService;

    public function __construct(ApiEmailService $apiEmailService)
    {
        $this->apiEmailService = $apiEmailService;
    }

    public function sendEmailText(Request $request)
    {
        return $this->successResponse(
            $this->apiEmailService->sendEmailText($request->all())
        );
    }

    public function sendEmailHtml(Request $request)
    {
        return $this->successResponse(
            $this->apiEmailService->sendEmailHtml($request->all())
        );
    }
}
