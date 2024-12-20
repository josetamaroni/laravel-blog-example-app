<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->only('create','store','edit','update','destroy');
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        // $posts = [
        //     ['title' => 'Post 1'],
        //     ['title' => 'Post 2'],
        //     ['title' => 'Post 3'],
        //     ['title' => 'Post 4']
        // ];
        // $posts = DB::raw(); Se puede escribir la query directamente
        // $posts = DB::table('posts')->get();

        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Una forma de hacerlo:
    // public function show($post)
    // {
    //     return Post::findOrFail($post);
    // }

    // Con Eloquent utilizando type hints definimos que la variable es de tipo Post
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    // Vista para Crear Post
    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    // Metodo para crear Post en la BD
    public function store(SavePostRequest $request)
    {
        // $request->validate([
        //     'title' => ['required'],
        //     'body' => ['required']
        // ]
        // ,[
        //     'title' => 'El Título es requerido',
        //     'body' => 'El Contenido es requerido'
        // ]
        // );

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();
        // session()->flash('status', 'Post created!');

        Post::create($request->validated());
        return to_route('posts.index')->with('status', 'Post created!');
    }

    // Vista para editar un post
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    // Editar un post
    public function update(SavePostRequest $request, Post $post)
    {
        // dd($post); Die and Dump
        /*
        $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]
        ,[
            'title' => 'El Título es requerido',
            'body' => 'El Contenido es requerido'
        ]
        );
        */ 
        // $post = Post::find($post);  No se requiere ya que se define Post $post lo busca automaticamente 
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();
        // session()->flash('status', 'Post updated!');

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post updated!');
    }

    // Editar un post
    public function destroy(Post $post)
    {
        // dd($post);
        $post->delete();
        return to_route('posts.index')->with('status', 'Post deleted!');
    }
}