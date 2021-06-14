<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;

/**
 * Class ApiController.
 */
abstract class ApiController extends Controller
{
    /**
     * The guard this controller uses.
     *
     * @var string
     */
    protected $auth = 'api';
}
