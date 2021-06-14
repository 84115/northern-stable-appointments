<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

class UsersController extends ApiController
{
    public function index(Request $request)
    {
        return $request->user();
    }
}
