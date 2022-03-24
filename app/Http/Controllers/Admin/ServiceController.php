<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Option;
use App\Models\Service;
use App\Models\ServImages;
use Illuminate\Http\Request;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
         $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'Service');
        } else {
            unset($data['image']);
        }
        $general = Service::create($data);
        return $general ? redirect(getRoute('service.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Service::findorfail($id);
        return view('admin.service.show', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Service::findOrfail($id);
        return view('admin.service.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $data =  $request->all();
        $general = Service::findOrfail($id);


        if ($request->hasFile('image')) {
            File::delete(public_path($general->image));
            $data['image'] = upload_image($request->file('image'), 'update');
        } else {
            unset($data['image']);
        }
         $general->fill($data)->save();
        return $general ? redirect(getRoute('service.index'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Service::findOrfail($id);
        $general->translations()->delete();
        $option = Option::where('service_id',$id)->delete();
        $servImages = ServImages::where('service_id',$id)->delete();
        $general->delete();
        return redirect(getRoute('service.index'))->with(['success' => trans('general.deleted_success')]);
    }

    public function option ($service_id)
    {
        $data = Option::where('service_id', $service_id)->get();
        return view('admin.option.index', compact('data', 'service_id'));
    }
    public function serveImages ($service_id){
        $data = ServImages::where('service_id',$service_id)->get();
        return view('admin.servimages.index',compact('data','service_id'));
    }
}
