@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{route('product.update', $product->id)}}" method="post">
                                @csrf
                                @method('PUT')
                               
                                <div class="mb-3 mt-3">
                                    <label  class="form-label">Name</label>
                                    <input type="text" name = "name" class="form-control" value="{{ $product->name }}">
                                    
                                    @error('name')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Price</label>
                                    <input type="number" name = "price"  class="form-control" value="{{ $product->price }}">

                                    @error('price')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Size</label>
                                    <input type="text" name = "size"  class="form-control" value="{{ $product->size }}">

                                    @error('size')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Quantity</label>
                                    <input type="number" name = "quantity"  class="form-control" value="{{ $product->quantity }}">

                                    @error('quantity')
                                    <div class="text-danger">* {{ $message }}</div>
                                    @enderror
                                    
                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection