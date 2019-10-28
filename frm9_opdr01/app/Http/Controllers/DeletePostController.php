<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class DeletePostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $photos = Post::select('*')->get();


        $request->user()->authorizeRoles('admin');
        return view('deletepost',compact('photos'));
    }

    public function del(Request $request, Post $photo)
    {
       $del = $request->input('cat');
      // $int = (int)
        //$del;// dd($del);

      //  DB::table('posts')->where('post_id', '=',$del ->delete());
     //   $test =Post::where('post_id',$del)->first();
      //  $test->delete();
        DB::delete('delete from posts where post_id = ?',[$del]);
        return view('dashboard');
    }
}
