@extends('master')


@section('title', $user->name.' details')

@section('content')
<h2>{{$user->password}}</h2>
<a href="/user" class="btn btn-primary">Listado de usuarios</a>
@endsection