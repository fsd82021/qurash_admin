<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return view('admin.team.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'image');
        } else {
            unset($data['image']);
        }
        $general = Team::create($data);
        return $general ? redirect(route('team.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Team::findorfail($id);
        return view('admin.team.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Team::findorfail($id);
        return view('admin.team.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $data =  $request->all();
        $general = Team::findOrfail($id);
        if ($request->hasFile('image')) {
            File::delete(public_path($general->image));
            $data['image'] = upload_image($request->file('image'), 'image');
        } else {
            unset($data['image']);
        }
        $general->fill($data)->save();
        return $general ? redirect(route('team.edit', $id))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Team::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('team.index'))->with(['success' => trans('general.deleted_success')]);
    }
}
