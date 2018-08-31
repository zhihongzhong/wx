@extends('layouts.default')
@section('title','sign up')
@section('content')

<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>注册</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')
            <form class="form-horizontal" method="post" action="{{route('users.store')}}" role="form">
            {{csrf_field() }}
                <div class="form-group">
                    <label for="username" class="control-label col-md-2">username:</label>
                    <div class="col-md-10">
                        <input type="text" name="username" class="form-control" id="username" holderplace="enter your name here" value="{{old('username')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">email:</label>
                    <div class="col-md-10">
                        <input type="text" name="email" class="form-control" id="email" holderplace="enter your email address" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label col-md-2">password:</label>
                    <div class="col-md-10">
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="password-confirm" class="control-label col-md-2">confirm:</label>
                    <div class="col-md-10">
                        <input type="password" name="password_confirmation" class="form-control" id="password-confirm">
                    </div>
                </div>
             
                <button type="submit" class="btn btn-primary">sign up</button>
                
            </form>
        </div>
    </div>
</div>
@stop