<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use View;
use File;

class GalleryController extends Controller
{
    public function __construct(){
        $this->middleware(function($request, $next){
            $category = Category::withTranslation()->get();
            View::share('category', $category);
            return $next($request);
        });
    }

    public function index()
    {
        $data = Gallery::all();
        return view('admin.gallery.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.gallery.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'gallery');
        } else {
            unset($data['image']);
        }
        $general = Gallery::create($data);
        return $general ? redirect(route('gallery.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Gallery::findorfail($id);
        return view('admin.gallery.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gallery::findOrfail($id);
        $categories = Category::all();
        return view('admin.gallery.edit', compact('data','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =  $request->all();
        $general = Gallery::findOrfail($id);
        if ($request->hasFile('image')) {
            File::delete(public_path($general->image));
            $data['image'] = upload_image($request->file('image'), 'Gallery_update');
        } else {
            unset($data['image']);
        }
        $general->fill($data)->save();
        return $general ? redirect(route('gallery.index', $id))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Gallery::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('gallery.index'))->with(['success' => trans('general.deleted_success')]);
    }
}
