<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Reclamation; 
use App\Models\Comment;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function adminarticles()
    {
        $posts = Post::orderBy('datePost', 'desc')->get();

        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('admin.adminarticles', compact('posts','recepteurs','reclamations'));
    }

    public function adminAddarticlesPost(Request $request)
    {
        
        $post = new Post();

        $post->user_id= \Auth::user()->id;
        $post->contenu= $request->contenu;
        $post->datePost = now();

        if ($request->hasfile('legende')) {
            $file = $request->file('legende');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('legendsposts/', $filename);
            $post->legende = $filename;
        }

        $post->save();

        return redirect()->route('adminarticles')->with(['success' => 'Un article a été cré avec succès']);
    }


    public function adminEDITarticle($id)
    {
        $post = Post::where('id', $id)->first();
        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('admin.adminEDITarticle', compact('post','recepteurs','reclamations'));
    }

    public function adminEDITarticlePost(Request $request)
    {       
        
        $post = Post::findOrFail($request->id);

        $post->user_id= \Auth::user()->id;
        $post->contenu= $request->contenu;
        $post->datePost = now();

        if ($request->hasfile('legende')) {

            if (File::exists('legendsposts/'.$post->legende)) {
                File::delete('legendsposts/'.$post->legende);
            }

            $file = $request->file('legende');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('legendsposts/', $filename);
            $post->legende = $filename;
        }

        $post->update();

        return redirect()->route('adminarticles')->with(['success' => 'Un article a été modifié avec succès']);
    }


    public function adminDELETEarticlePost(Request $request)
    {
        $post = Post::findOrFail($request->id);

        $post->delete();

        return redirect()->route('adminarticles')->with(['success' => 'L\'article  a été supprimé avec succès']);
    }

    public function admincommentaires($id)
    {
        $commentaires = Comment::where('post_id', $id)->get();
        $user = auth()->user();
        $userId = auth()->id();
        $recepteurs = User::whereIn('role', [1, 2, 3])->whereNotIn('id', [$userId])->get();
        
        $reclamations = Reclamation::where('recepteur_id', \Auth::user()->id)->orderBy('date', 'desc')->take(5)->get();

        return view('admin.admincommentaires', compact('commentaires','recepteurs','reclamations'));
    }


    public function adminDELETEcommentaires(Request $request)
    {
        $commentaire = Comment::find($request->id);
        $commentaire->delete();
        return redirect()->back()->with(['success' => 'Un commentaire  a été supprimé avec succès']);
    }
}
