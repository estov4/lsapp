<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //posts = Post::all();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title','asc')->take(1)->get(); 
        //$posts = Post::orderBy('title','asc')->get();
        $posts = Post::orderBy('title','asc')->get();
        return view('posts.index', compact('posts'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
        // Get the file name with extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalImage();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload image
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        // Create Post
        $post = new Post;
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        ##Check for correct user
        if(auth()->user()->id !==$post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorized page');
        }
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        // Create Post
        $post = Post::find( $id );
        $post -> title = $request->input('title');
        $post -> body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        ##Check for correct user
        if(auth()->user()->id !==$post->user_id)
        {
            return redirect('/posts')->with('error','Unauthorized page');
        }
        return view('posts.edit')->with('post',$post);
        $post -> delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }   
}
