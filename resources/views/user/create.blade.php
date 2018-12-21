@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar consulta</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
 	<body>
 		<div class="container">
      <h2>Consulta</h2><br/>
      <form method="post" action="{{url('appointment')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="text">Profissional</label>
              @if (!empty($doctors))
                <select name="partido" class="form-control">
                  <option value="default">Selecione</option>
                @foreach($doctors as $doctor)
                  <option value="{{ $doctor->id }}">{{ $doctor->nome }}</option>
                @endforeach
                </select>
                @else
                  <input type="text" class="form-control" name="doutor" required="">
              @endif
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">Data</label>
              <input type="date" class="form-control" name="date" required="">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="time">Hora</label>
              <input type="time" class="form-control" name="time" required="">
            </div>
          </div>
 
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
 		
@endsection