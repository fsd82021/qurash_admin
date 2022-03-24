<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = Page::all();
        return view('admin.pages.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Page::findorfail($id);
        return view('admin.pages.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Page::findOrfail($id);
        return view('admin.pages.edit', compact('data'));
    }
    // about page
    public function about()
    {
        $data = Page::where('identifier', 'about')->first();
        $haveImage = true;
        return view('admin.pages.edit', compact('data','haveImage'));
    }
    public function ourMission()
    {
        $data = Page::where('identifier', 'our-mission')->first();
        $haveImage = true;
        return view('admin.pages.edit', compact('data','haveImage'));
    }
      // about page
      public function construction ()
      {
          $data = Page::where('identifier', 'construction')->first();
          $haveImage = true;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
        // about page
        public function renovation ()
        {
            $data = Page::where('identifier', 'renovation')->first();
            $haveImage = true;
            return view('admin.pages.edit', compact('data','haveImage'));
        }

          // about page
      public function video ()
      {
          $data = Page::where('identifier', 'video')->first();
          $haveImage = true;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
        // about page
        public function welcome()
        {
            $data = Page::where('identifier', 'welcome')->first();
            $haveImage = true;
            return view('admin.pages.edit', compact('data','haveImage'));
        }
          // about page
      public function subscribe()
      {
          $data = Page::where('identifier', 'subscribe')->first();
          $haveImage = false;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
      public function feature()
      {
          $data = Page::where('identifier', 'feature')->first();
          $haveImage = true;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
      public function faq()
      {
          $data = Page::where('identifier', 'faq')->first();
          $haveImage = false;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
      public function projects()
      {
          $data = Page::where('identifier', 'projects')->first();
          $haveImage = false;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
      public function services()
      {
          $data = Page::where('identifier', 'service')->first();
          $haveImage = true;
          return view('admin.pages.edit', compact('data','haveImage'));
      }
      public function contact()
      {
          $data = Page::where('identifier', 'contact')->first();
          $haveImage = false;
          return view('admin.pages.edit', compact('data','haveImage'));
      }

    //   update pages
    public function update(PagesRequest $request, $id)
    {
        $page = Page::findOrfail($id);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'image');
        } else {
            unset($data['image']);
        }
        $data['video'] = str_replace("watch?v=", "embed/", $request->video);
        $page->fill($data)->save();
        return $page ? redirect()->back()->with(['success' => trans('general.page.page_updated')]) : redirect()->back();
    }
}
