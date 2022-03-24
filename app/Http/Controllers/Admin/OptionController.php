<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Http\Requests\OptionRequest;
use App\Models\Faq;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function option_create($service_id)

    {
        // 
        return view('admin.option.create', compact('service_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request)
    {
        $data =  $request->all();
        $option = new Option();
        $option->service_id = $request->service_id;
         $option->fill($data)->save();
        return $option ? redirect(route('service.option',$request->service_id))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //\
        $data = Option::findOrfail($id);
        return view('admin.option.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Option::findOrfail($id);
        return view('admin.option.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OptionRequest $request, $id)
    {
        //
        $data = $request->all();
        $general = Option::findorfail($id);
       
        $general->fill($data)->save();
         return $general ? redirect(route('service.option', $general->service_id))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Option::findorfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('service.option',$general->service_id))->with(['success' => trans('general.deleted_success')]);
    }
}
