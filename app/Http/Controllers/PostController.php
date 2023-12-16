<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
    
    $getAllPost = Post::all();
    return view('index', compact('getAllPost'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
      $categories = Category::all();
     return view('create', compact('categories'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'image' => ['required', 'max:2028', 'mimes:jpeg,png,jpg', 'image'],
        'title' => ['required', 'string', 'max:250', 'min:20'],
        'description' => ['required', 'string' , 'max:20000', 'min:100'],
        'category_id' => ['required', 'integer', 'numeric', 'between:0,1000009'],
       ]); 
       
       $ImageFileNameChangedWithTime = time().'_'.$request->image->getClientOriginalName();
       $fileName = $request->image->storeAs('ImageDirectory', $ImageFileNameChangedWithTime);
    
       $post = new Post();
       $post->title = $request->title;
       $post->description = $request->description;
       $post->category_id = $request->category_id;
       $post->image = 'storage/'.$fileName;
       $post->save(); 
     
       return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {    
        $singleData = Post::findOrFail($id);
        
        return view('show', compact('singleData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $updatePost = Post::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('updatePost', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:250', 'min:20'],
            'description' => ['required', 'string' , 'max:20000', 'min:100'],
            'category_id' => ['required', 'integer', 'numeric', 'between:0,1000009'],
           ]); 

           $post = Post::findOrFail($id);
           if($request->hasFile('image')){
            $request->validate([
                'image' => ['required', 'max:2028', 'mimes:jpeg,png,jpg', 'image'],
            ]);

            $ImageFileNameChangedWithTime = time().'_hunter_'.$request->image->getClientOriginalName();
            $fileName = $request->image->storeAs('ImageDirectory', $ImageFileNameChangedWithTime);
            //delete previous image
            File::delete(public_path($post->image));
            //save new image in the storage
            $post->image = 'storage/'.$fileName;
           }
           
           $post->title = $request->title;
           $post->description = $request->description;
           $post->category_id = $request->category_id;
           $post->save(); 

           return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $deleteSingleData = Post::findOrFail($id);
        $deleteSingleData->delete();
        // File::delete(public_path($deleteSingleData->image));
        return redirect()->route('post.index');
    }
}
