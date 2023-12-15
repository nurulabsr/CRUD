@extends('main.main')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col-md-6">
              <h4>Create post</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="" class="btn btn-secondary m-1">Back</a>
                <a href="" class="btn btn-warning m-1">Recycle Bin</a>
            </div>
           </div>
        </div>
        <div class="card-body">
           <form action="{{route(post.store)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="form-label" for="">Image</label>
                <input name='image' type="file" class="form-control">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="">Category</label>
                <select name="category_id" class="form-control" id="">
                    <option value="">Assembly Language</option>
                    <option value="">Rust Language</option>
                    <option value="">C++ Language</option>
                    <option value="">Java Language</option>
                </select>

            </div>
            <div class="form-group">
                <label class="form-label" for="">Description</label>
                <textarea name="description" class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary">Submit</button>
            </div>
           </form>
        </div>
    </div>
</div>

@endsection
