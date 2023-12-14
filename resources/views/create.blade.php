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
                <a href="" class="btn btn-secondary">Create</a>
                <a href="" class="btn btn-warning">Recycle Bin</a>
            </div>
           </div>
        </div>
        <div class="card-body">
           <form action="">
            <div class="form-group">
                <label class="form-label" for="">Image</label>
                <input type="file" class="form-control">
            </div>
            
            <div class="form-group">
                <label class="form-label" for="">Title</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="form-label" for="">Description</label>
                <input type="text" class="form-control">
            </div>

            
           </form>
        </div>
    </div>
</div>

@endsection
