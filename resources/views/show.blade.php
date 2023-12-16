@extends('main.main')
@section('content')

<div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset($singleData->image)}}" alt="Product Image" class="img-fluid product-image">
      </div>
      <div class="col-md-6">
        <h2>{{$singleData->title}}</h2>
        <p class="text-muted">Category: {{$singleData->category->name}}</p>
        <p>{{$singleData->description}}</p>
        <h3>$99.99</h3>
        <button class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
      

    <div class="row mt-4">
        <div class="col-md-12">
          
          <h3>Customer Reviews</h3>
          <div class="media">
            <img src="https://placehold.it/64x64" class="mr-3" alt="Customer Image">
            <div class="media-body">
              <h5 class="mt-0">Customer Name</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <!-- Add more reviews as needed -->
        </div>
      </div>
    </div>
</div>

@endsection