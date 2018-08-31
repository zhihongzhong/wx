@extends('layouts.default')
@section('title',$user->name)
@section('content')
<h1>
{{$user->name}} - {{$user->email}}
</h1>
@stop

