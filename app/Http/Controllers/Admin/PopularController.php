<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PagesRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = Page::where('identifier', 'popular_post')->first();
        return view('admin.popular.edit', compact('data'));
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
        $general = Page::where('identifier', 'popular_post')->first();
        $general->fill($data)->save();
        return $general ? redirect(route('popular.edit'))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }
}
