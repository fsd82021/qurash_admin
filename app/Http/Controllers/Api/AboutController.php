<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\AboutResource;
use App\Models\Page;

class AboutController extends Controller
{

    public function about()
    {
        $data  =new AboutResource(Page::where('identifier', 'about')->first());

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
