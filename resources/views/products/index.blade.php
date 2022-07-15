@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Product Management</h2>
            </div>
            <div class="pull-right" style="margin-bottom: 10px">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create a new product </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr class="text-center">
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            {{-- <th>Product Link</th> --}}
            <th>Price</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td><img src="{{ $product->imageLink }}"></td>
            {{-- <td>{{ $product->productLink }}</td> --}}
            <td>{{ $product->price }}</td>
            <td class="text-center">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" 
                       onclick="return confirm('Edit product! Are you sure?')" 
                       href="{{ route('products.edit',$product->id) }}"
                       >Edit
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" 
                            onclick="return confirm('Delete product! Are you sure?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- <span class="text-right"> {{$products->links()}} </span>
    <style>
        .text-sm{
            margin: 15px 0 15px 0;
        }
        .container{
            margin-bottom: 10px;
        }
        .w-5{
            display: none;
        }
    </style> --}}
    {{$products->links()}}
@endsection



