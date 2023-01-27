<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return response()->json([
            'success' => true,
            'response' => $posts,
        ]);
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();

        if ($post) {
            return response()->json([
                'success' => true,
                'response' => $post,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'response' => 'il post selezionato non esiste',
            ]);
        }
    }
}
