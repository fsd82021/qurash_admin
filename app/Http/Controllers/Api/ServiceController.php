<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\ServiceReosource;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class ServiceController extends BaseController
{
    public function index()
    {
        $data = ServiceReosource::collection(Service::all());
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function single(Request $request)
    {
        $service = Service::find($request->id);
        if ($service) {
            $data = new ServiceReosource($service);
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return $this->sendError([], 'not avilable');
        }
    }
}
