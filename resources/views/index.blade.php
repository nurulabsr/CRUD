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
                <a href="" class="btn btn-secondary">Create</a>
                <a href="" class="btn btn-warning">Recycle Bin</a>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="https://picsum.photos/200" alt="" class="img-fluid" width="80">
                            </td>
                            <td>Lorem ipsum dolor sit amet</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing el. Lorem ipsum dolor sit amet.</td>
                            <td>Hunter</td>
                            <td>12/14/2023</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Show</a>
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
