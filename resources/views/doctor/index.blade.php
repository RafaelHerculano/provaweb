@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doctor index</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br/>
      <a href="{{action('DoctorController@create')}}" class="btn btn-primary">Cadastrar</a>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($doctors as $doctor)
      <tr>
        <td>{{$doctor['id']}}</td>
        <td>{{$doctor['nome']}}</td>
        <td>{{$doctor['email']}}</td>
        
        <td><a href="{{action('Doctor@edit', $doctors['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('Doctor@destroy', $doctors['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection