@extends('layout.layout')
@section('content')
<form action="{{route('logout')}}">
    <button  type="submit" class="btn btn-primary">logout</button>
</form>
<h1> Welcome, {{$user->name}}</h1>
@endsection