@extends('layouts.default')
@section('title','Login')
@section('content')

<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Login</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <form method="post" action="{{route('login')}}" >
                {{csrf_field()}}

                <div class="form-group">
                    <label for="email" class="control-label col-md-2">email:</label>
                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" holdplace="username@example.com" value="{{old('email')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label col-md-2">password:</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                
                <div class="checkbox">
                    <label><input type="checkbox" name="remember">remember me</label>
                </div>

                <button type="submit" class="btn btn-primary">submit</button>
            </form>

            <hr />
            <p>no account? click to <a href="{{route('users.create')}}">sign up</a></p>
        </div>
    </div>
</div>
@stop