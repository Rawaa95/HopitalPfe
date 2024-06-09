<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use App\Models\Comment; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccueilController extends Controller
{
    //
    public function welcome()
    {
        $posts = Post::withCount('comments')->orderBy('datePost', 'desc')->get();
        return view('welcome', compact('posts'));
    }

    public function articles($id)
    {
        $post = Post::with(['comments' => function($query) {
            $query->orderBy('date', 'desc')->take(5);
        }])
        ->findOrFail($id);

        return view('articles', compact('post', 'id'));
    }

    public function articlescommentpost(Request $request)
    {
     
        $comment = new Comment();

        $comment->post_id= $request->post_id;
        $comment->name= $request->name;
        $comment->email= $request->email;
        $comment->commentaire= $request->commentaire;
        $comment->date = now();

        $comment->save();

        return redirect()->back()->with(['success' => ' Votre commentaire a été ajouté avec succès']);
    }
}
