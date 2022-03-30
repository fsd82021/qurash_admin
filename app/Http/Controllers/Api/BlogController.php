<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\BlogReosource;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Resources\Resource\AboutResource;
use App\Models\Page;

class BlogController extends BaseController
{
    public function index()
    {
        $data = BlogReosource::collection(Feature::get());
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function single(Request $request)
    {
        $blog = Feature::find($request->id);
        if ($blog) {
            $data['blogDetails'] = new BlogReosource($blog);
            $data['contact'] = new AboutResource(Page::where('identifier', 'contact')->first());
            $data['blogs'] = BlogReosource::collection(Feature::get());
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return $this->sendError([], 'not avilable');
        }
    }
}
