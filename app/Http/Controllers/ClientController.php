<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }

    public function postById($id){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $response->json();
    }

    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userid' => 1,
            'title' => 'New post title',
            'body' => 'New post description'
        ]);
        return $post->json();
    }

    public function updatePost(){
        $reponse = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'updated title',
            'body' => 'updated desc',
        ]);
        return $reponse->json();
    }

    public function deletePost($id){
        $reponse = Http::delete('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $reponse->json();
    }
}
