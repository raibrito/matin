@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ url('users ') }} ">
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
                            <form action="{{url('users/update')}}/{{$user->id}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email"  class="form-control" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            @else

                            <form action="{{url('users/add')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Register</button>
                            </form>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
