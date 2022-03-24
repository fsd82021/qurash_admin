<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Page::where('identifier', 'about_page')->first();
        return view('admin.about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request)
    {
        $data =  $request->all();
        $general = Page::where('identifier', 'about_page')->first();
        $general->fill($data)->save();
        return $general ? redirect(route('about.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }
}
