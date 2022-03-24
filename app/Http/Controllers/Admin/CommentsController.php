<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index() {
        $data = Comment::all();
        return view('admin.comments.index', compact('data'));
    }

    public function show($id)
    {
        $data = Comment::findorfail($id);
        return view('admin.comments.show', compact('data'));
    }

    public function commentStatus(Request $request) {
        $data =  $request->all();
        $commentFromSQL = Comment::find($data['comment_id']);
        $commentFromSQL->comment_status == 'approved' ? $commentFromSQL['comment_status'] = 'unapproved' : $commentFromSQL['comment_status'] = 'approved';
        $commentFromSQL->save();

        if ($commentFromSQL) {
            return response()->json([
                'success' => true,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $general = Comment::findOrfail($id);
        $general->delete();
        return redirect(route('comments.index'))->with(['success' => trans('general.deleted_success')]);
    }
}
