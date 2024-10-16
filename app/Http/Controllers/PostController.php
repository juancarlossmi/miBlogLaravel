<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        //
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {

        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public'); // Guardar en public/images
            $post->image_url = $path; // Guardar la ruta correcta en la base de datos
        }
        
        $post->save();
        return redirect()->route('posts.index');
    }

    public function view($id)
    {
        $post = Post::find($id);
    
        if (!$post) {
            return view('notFoundPage'); // Redirige a la página de error personalizada
        }
    
        return view('view', compact('post'));
    }

    public function edit($id)
    {

    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $post->image = $imagePath;
        }
    
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }
    
    

    public function destroy($post_id)
    {
        // Encuentra el post a eliminar
        $post = Post::find($post_id);
    
        // Elimina la imagen asociada, si existe
        if ($post->image_url) {
            // Usa el disco 'public' para eliminar la imagen correctamente
            Storage::disk('public')->delete($post->image_url);
        }
    
        // Elimina el registro del post
        $post->delete();
    
        // Redirige a la vista de todos los posts
        return redirect()->route('posts.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'LIKE', "%{$query}%")
                     ->orWhere('body', 'LIKE', "%{$query}%")
                     ->where('active', true)
                     ->get();
    
        return view('allPosts', compact('posts', 'query'));
    }

}