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
                <a href="{{route('post.store')}}" class="btn btn-secondary m-1">Back</a>
                <a href="" class="btn btn-warning m-1">Recycle Bin</a>
            </div>
           </div>
        </div>
        <div class="card-body">
           <form action="{{route('post.update', $updatePost->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <img src="{{asset($updatePost->image)}}" width="80px" alt="">
                <label class="form-label" for="">Image</label>
                <input name="image" type="file" class="form-control">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input name="title" type="text" class="form-control" value="{{$updatePost->title}}">
            </div>
            <div class="form-group">
                <label class="form-label" for="">Category</label>
                <select class="form-control" name="" id="">
                    <option value="">Select</option>
                    @foreach($categories as $category)
                    <option name="category_id" {{$category->id == $updatePost->category_id ? 'Selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label class="form-label" for=""></label>
                <textarea name="description" class="form-control"  id="" cols="30" rows="10">{{$updatePost->description}}</textarea>
            </div>

            <div class="form-group mt-3">
                <button class="btn btn-primary">Submit</button>
            </div>
           </form>
        </div>
    </div>
</div>

@endsection
