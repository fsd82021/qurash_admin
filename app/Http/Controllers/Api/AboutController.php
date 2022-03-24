<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resource\AboutResource;
use App\Http\Resources\Resource\FaqReosource;
use App\Http\Resources\Resource\FaqSectionResource;
use App\Http\Resources\Resource\OurMisssionResource;
use App\Models\Faq;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index()
    {
        $data['our_mission']  = OurMisssionResource::collection(Page::where('identifier', 'our-mission')->get());
        $data['faqsection']  =FaqSectionResource::collection(Page::where('identifier', 'faq')->get()); 
        $data['galle']  = FaqReosource::collection(Faq::all());
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
