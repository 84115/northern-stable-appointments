<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\AppointmentResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class ServiceController extends ApiController
{
    public function index(): AppointmentResource
    {
        return new AppointmentResource(Service::paginate());
    }

    public function show(int $id): AppointmentResource
    {
        return new AppointmentResource(Service::findOrFail($id));
    }
}
