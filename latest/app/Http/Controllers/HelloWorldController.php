<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HelloWorldController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function get(): JsonResponse
    {
        return response()->json('hello');
    }
}
