<?php

namespace App\Http\Controllers;

use App\Services\ItocApiService;
use App\Traits\ApiResponser;

class ItocApiController extends Controller
{
    use ApiResponser;

    public $itocApiService;

    public function __construct(ItocApiService $itocApiService)
    {
        $this->itocApiService = $itocApiService;
    }

    public function getStatus()
    {
        return $this->successResponse(
            $this->itocApiService->getStatus()
        );
    }
}
