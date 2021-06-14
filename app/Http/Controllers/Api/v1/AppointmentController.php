<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use App\Models\AppointmentHost;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

class AppointmentController extends ApiController
{
    public function index(): AppointmentResource
    {
        return new AppointmentResource(Appointment::paginate());
    }

    public function store(Request $request)
    {
        // You can't have an appointment with a host
        try {
            AppointmentHost::create($request->all());

            return Appointment::create($request->all());
        } catch (\Exception $e) {
            return response()->json(null, 500);
        }
    }

    public function show(int $id): AppointmentResource
    {
        return new AppointmentResource(Appointment::findOrFail($id));
    }

    public function update(Request $request, Appointment $appointment): JsonResponse
    {
        return response()->json($appointment, 200);
    }

    public function destroy(Appointment $appointment): JsonResponse
    {
        $appointment->delete();

        return response()->json(null, 204);
    }
}
