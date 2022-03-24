<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\AboutResource;
use App\Http\Resources\Resource\BlogReosource;
use App\Http\Resources\Resource\ServiceReosource;
use App\Http\Resources\Resource\SliderResource;
use App\Http\Resources\Resource\TeamReosource;
use App\Models\Feature;
use App\Models\Page;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['slider'] = SliderResource::collection(Slider::all());
        $data['about']  =new AboutResource(Page::where('identifier', 'about')->first());
        $data['service_page']  =new AboutResource(Page::where('identifier', 'service')->first());
        $data['services'] = ServiceReosource::collection(Service::take(6)->get());
        $data['blogs'] = BlogReosource::collection(Feature::take(3)->get());
        $data['team'] = TeamReosource::collection(Team::all());
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
