<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPosts(){
        $post = DB::table('posts')->get();
        return view('post',compact('post'));
    }

    public function addPost(){

        return view('add-post');
    }

    public function addPostSubmit(Request $req){
        DB::table('posts')->insert([
            'title' => $req->title,
            'body' => $req->body
        ]);
        return back()->with('post_created','Post has been created successfully');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id){
        $post = DB::table('posts')->where('id',$id)->delete();
        return back()->with('delete_success','Post have been successfully deleted');
    }

    public function editPost($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));

    }

    public function updatePost(Request $req){
        DB::table('posts')->where('id',$req->id)->update([
            'title' => $req->title,
            'body' => $req->body
        ]);
        return back()->with('post_updated','Post successfully updated');
    }

    public function innerJoinClause(Request $req){
            $req = DB::table('users')
            ->join('posts','users.id','=','posts.user_id')
            ->select('users.name','posts.title','posts.body')
            ->get();
            return $req;
    }

    public function leftjoinClause(){
        $result= DB::table('users')
        ->leftjoin('posts','users.id','=','posts.user_id')
        ->get();
        return $result;

    }

    public function rightjoinClause(){
        $result= DB::table('users')
        ->rightjoin('posts','users.id','=','posts.user_id')
        ->get();
        return $result;

    }

    public function getAllPostUsingModel(){
         $post = Post::all();
         return $post;
    }
}
