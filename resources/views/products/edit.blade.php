@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong>Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Product Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Category:</strong>
                   <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Category Name">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Image Link:</strong>
                   <input type="text" name="imageLink" value="{{ $product->imageLink }}" class="form-control" placeholder="Image Link">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Product Link:</strong>
                   <input type="text" name="productLink" value="{{ $product->productLink }}" class="form-control" placeholder="Product Link">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                   <strong>Price:</strong>
                   <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
               </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-12">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back </a>
                <button type="submit" class="btn btn-primary"> Update </button>
            </div>
        </div>
    </form>
@endsection




