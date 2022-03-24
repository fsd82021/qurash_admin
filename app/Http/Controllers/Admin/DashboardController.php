<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $categories_count = DB::table('categories')->count();
        $faq_count = DB::table('faqs')->count();
        $features_count = DB::table('features')->count();
        $services_count = DB::table('services')->count();
        $galleries_count = DB::table('galleries')->count();
        $sliders_count = DB::table('sliders')->count();
        $teams_count = DB::table('teams')->count();
        $testimonials_count = DB::table('testimonials')->count();
        $contacts_count = DB::table('contacts')->count();
        // dd($categories_count, $recipes_count);
        return(view('admin.index', compact('categories_count', 'faq_count', 'features_count', 'services_count', 'galleries_count', 'sliders_count','teams_count', 'testimonials_count','contacts_count')));
    }
}
