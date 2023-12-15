<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view('index');
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
        'title' => ['required', 'max:250'],
        'description' => ['required', 'max:20000', 'min:100'],
        'category_id' => ['required', 'integer', 'numeric', 'between:0,1000000000099'],
       ]);   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return view('trashed');
    }
}
