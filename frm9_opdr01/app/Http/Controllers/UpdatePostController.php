<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UpdatePostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        $photos = Post::select('*')->get();


        $request->user()->authorizeRoles('admin');
        return view('updatepost',compact('photos'));
    }

    public function update(Request $request){

      // $post = Post::select('*')->where('post_id',  $request->input('id'))->get()->first();

      $title = $request->input('title');
      $cat = $request->input('category');
      $id = $request->input('id');

    //    $post->save();

        DB::update('UPDATE posts
       SET post_title = ?, post_category = ?
       WHERE post_id = ?; ',[$title,$cat,$id]);

        return view('photos');

    }
}
