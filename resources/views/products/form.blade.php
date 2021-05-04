@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{url('products/')}}">Products</a>
                        <a href="{{ url('/products') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if(Request::is('*/edit'))
                            <form action="{{url('products/update')}}/{{$product->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="text" name="quantity" class="form-control" value="{{$product->quantity}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" name="description" rows="3" value="{{$product->description}}"></textarea>
                                </div>
                                    <div class="form-group">
                                        <label for="photo">Photo:</label>
                                        <input type="file" name="photo" class="form-control-file" value="{{$product->photo}}">
                                    </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            @else

                            <form action="{{url('products/add')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price:</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="text" name="quantity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>

                                    <div class="form-group">
                                        <label for="photo">Photo:</label>
                                        <input type="file" name="photo" class="form-control-file">
                                    </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                            @endif

                        <a class="nav-link" href="{{url('products')}}">List Products</a>
                        <a class="nav-link" href="{{url('users')}}">Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

