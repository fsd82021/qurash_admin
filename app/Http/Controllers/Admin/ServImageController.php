<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServImageRequest;
use App\Models\ServImages;
use Illuminate\Http\Request;

class ServImageController extends Controller
{
    public function servImages_create($service_id)
    {
        return view('admin.servimages.create', compact('service_id'));
    }

    /**
     * 
     * 
     */
    public function store(ServImageRequest $request)
    {
        $data =  $request->all();
        
        if($request->image){
            foreach ($request->image as $gallary) {
                if ($gallary) {
                    $images = upload_multifile($gallary, 'image');
                } else {
                    unset($data['images']);
                }
                $servImages = new ServImages();
                $servImages->service_id = $request->service_id;
                $servImages->images =  $images;
                 $servImages->save();
            }
        }   
        return $servImages ? redirect(route('service.serveImages',$request->service_id))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    public function show($id)
    {
        //\
        $data = ServImages::findOrfail($id);
        return view('admin.servimages.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ServImages::findOrfail($id);
        return view('admin.servimages.edit',compact('data'));
    }
  
    // destory 

    
    public function destroy($id)
    {
        $general = ServImages::findorfail($id);
        $general->delete();
        return redirect(route('service.serveImages',$general->service_id))->with(['success' => trans('general.deleted_success')]);
    }
}
