@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <form action="{{route('product.store')}}" method="post">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label  class="form-label">Name <small class="danger">*</small></label>
                                    <input type="text" name = "name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">

                                    @error('name')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Price <small class="danger">*</small></label>
                                    <input type="number" name = "price"  class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">

                                    @error('price')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Size <small class="danger">*</small></label>
                                    <input type="text" name = "size"  class="form-control @error('size') is-invalid @enderror" value="{{ old('size') }}">

                                    @error('size')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Quantity <small class="danger">*</small></label>
                                    <input type="number" name = "quantity"  class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">

                                    @error('quantity')
                                    <div class="text-danger">* {{ $message }} </div>
                                    @enderror

                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Submit</button>
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