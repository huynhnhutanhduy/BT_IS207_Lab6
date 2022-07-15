@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2> Show Product</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Category:</strong>
              {{ $product->category }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Image Link:</strong>
              {{ $product->imageLink }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Product Link:</strong>
              {{ $product->productLink }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Price:</strong>
              {{ $product->price }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <a class="btn btn-primary" 
           href="{{ route('products.index') }}"> 
            Back 
        </a>
    </div>
    </div>
@endsection

