@extends('main.main')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col-md-6">
              <h4>All post</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{route('post.create')}}" class="btn btn-secondary">Create</a>
                <a href="{{route('post.recyclebin')}}" class="btn btn-warning">Recycle Bin</a>
            </div>
           </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getAllPost as $post)
                            
                        
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" class="img-fluid" width="80">
                            </td>
                            <td>{{$post->title}}</td>
                            <td>{{Illuminate\Support\Str::limit($post->description, 50)}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{ $post->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-success btn-sm">Show</a>
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm d-none d-sm-inline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
