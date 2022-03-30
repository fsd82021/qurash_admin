<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\ServiceReosource;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Resources\Resource\AboutResource;
use App\Models\Page;

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
            $data['single_service'] = new ServiceReosource($service);
            $data['contact'] = new AboutResource(Page::where('identifier', 'contact')->first());
            $data['services'] = ServiceReosource::collection(Service::get());
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return $this->sendError([], 'not avilable');
        }
    }
}
