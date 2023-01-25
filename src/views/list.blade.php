@extends('master')
@section('title', 'User list')
@section('content')
<a href="/user/create" class="btn btn-primary">Create user</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
  <tr>
    <th scope="row">{{$user->id}}</th>
    <td>{{$user->name}}</td>
    <td>{{$user->password}}</td>
    <td>
      <a href="/user/{{$user->id}}" class="btn btn-primary">Mostrar</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>
@endsection