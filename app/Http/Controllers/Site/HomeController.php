<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactFormRequest;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $about = Page::where('identifier', 'about')->first();
        $video = Page::where('identifier', 'video')->first();
        $construction = Page::where('identifier', 'construction')->first();
        $renovation = Page::where('identifier', 'renovation')->first();
        $servicePage = Page::where('identifier', 'service')->first();
        $subscribe = Page::where('identifier', 'subscribe')->first();
        $feature = Page::where('identifier', 'feature')->first();
        $services = Service::get();
        $categories = Category::get();
        $gallery = Gallery::get();
        $testimonials = Testimonial::get();
        $team_members = Team::get();
        $partners = Partner::get();
        $features = Feature::get();

        return view('site.index', compact(
            'sliders',
            'about',
            'construction',
            'renovation',
            'servicePage',
            'services',
            'categories',
            'gallery',
            'video',
            'testimonials',
            'team_members',
            'subscribe',
            'features',
            'feature',
            'partners'
        ));
    }

    public function contacts()
    {
        $contact_text = Page::where('identifier', 'contact')->first();
        $subscribe = Page::where('identifier', 'subscribe')->first();
        return view('site.contact', compact('contact_text', 'subscribe'));
    }

    public function contactForm(ContactFormRequest $request)
    {
        Contact::create($request->all());
        return response()->json(trans('frontend.messagedSent'));
    }

    public function projects()
    {
        $gallery = Gallery::get();
        $subscribe = Page::where('identifier', 'subscribe')->first();
        $project = Page::where('identifier', 'projects')->first();
        $categories = Category::get();
        return view('site.projects.index', compact('gallery', 'subscribe', 'project', 'categories'));
    }

    public function services()
    {
        $subscribe = Page::where('identifier', 'subscribe')->first();
        $servicePage = Page::where('identifier', 'service')->first();
        $lastService = Service::orderBy('id', 'desc')->first();
        $services = Service::get();
        return view('site.services', compact('subscribe', 'servicePage', 'services', 'lastService'));
    }

    public function about()
    {
        $mission = Page::where('identifier', 'our-mission')->first();
        $about = Page::where('identifier', 'about')->first();
        $subscribe = Page::where('identifier', 'subscribe')->first();
        $features = Feature::get();
        $testimonials = Testimonial::get();
        $team_members = Team::get();
        $partners = Partner::get();
        $feature = Page::where('identifier', 'feature')->first();

        return view('site.about', compact('subscribe', 'mission', 'features', 'testimonials', 'team_members', 'partners','feature','about'));
    }
}
