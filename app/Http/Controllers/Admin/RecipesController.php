<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecipesRequest;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\KitchenType;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $data = Recipe::get();
        return view('admin.recipes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $kitchenTypes = KitchenType::all();
        return view('admin.recipes.create', compact('categories', 'kitchenTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecipesRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'image');
        } else {
            unset($data['image']);
        }
        if ($request->is_slider) {
            $data['is_slider'] = 'on';
        } else {
            $data['is_slider'] = 'off';
        }
        $general = Recipe::create($data);
        return $general ? redirect(route('recipes.index'))->with(['success' => trans('general.added_success')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Recipe::findorfail($id);
        return view('admin.recipes.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $kitchenTypes = KitchenType::all();
        $data = Recipe::findOrfail($id);
        return view('admin.recipes.edit', compact('data', 'categories', 'kitchenTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RecipesRequest $request, $id)
    {
        $data =  $request->all();
        $general = Recipe::findOrfail($id);
        if ($request->hasFile('image')) {
            $data['image'] = upload_image($request->file('image'), 'image');
        } else {
            unset($data['image']);
        }
        if($request->is_slider == null) {
            $data['is_slider'] = 'off';
        }
        $general->fill($data)->save();
        return $general ? redirect(route('recipes.index', $id))->with(['success' => trans('general.updated_success')]) : redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Recipe::findOrfail($id);
        $general->translations()->delete();
        $general->delete();
        return redirect(route('recipes.index'))->with(['success' => trans('general.deleted_success')]);
    }
}