@extends('main.main')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
           <div class="row">
            <div class="col-md-6">
              <h4>Recycle Bin</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a href="{{route('post.store')}}" class="btn btn-secondary">Back</a>
                <a href="{{route('post.create')}}" class="btn btn-warning">Create</a>
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
                            <th scope="col" style="width: 10%">Delete Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($onlyTrashed as $datum)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="{{asset($datum->image)}}" alt="" class="img-fluid" width="80">
                            </td>
                            <td>{{$datum->title}}</td>
                            <td>{{Illuminate\Support\Str::limit($datum->description, 50)}}</td>
                            <td>Hunter</td>
                            <td>{{$datum->deleted_at->format('Y-m-d H:i:s')}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Show</a>
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
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
