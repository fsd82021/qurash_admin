<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KitchenRequest;
use App\Models\KitchenType;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KitchenType::all();
        return view('admin.kitchen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kitchen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KitchenRequest $request)
    {
        $data = $request->all();
        $general = KitchenType::create($data);
        return $general ? redirect(route('kitchen.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = KitchenType::findOrFail($id);
        return view('admin.kitchen.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KitchenType::findOrFail($id);
        return view('admin.kitchen.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KitchenRequest $request, $id)
    {
        $data = $request->all();
        $general = KitchenType::findOrFail($id);
        $general->fill($data)->save();
        return $general ? redirect(route('kitchen.index', $id))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = KitchenType::findOrFail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('kitchen.index'))->with(['success'=>trans('general.deleted_success')]);
    }
}
