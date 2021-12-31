<?php

namespace App\Http\Controllers;

use App\Services\SecretService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class SecretController extends Controller
{
    use ApiResponser;

    public $secretService;

    public function __construct(SecretService $secretService)
    {
        $this->secretService = $secretService;
    }

    public function sendSecret(Request $request)
    {
        return $this->successResponse(
            $this->secretService->sendSecret($request->all())
        );
    }

}
