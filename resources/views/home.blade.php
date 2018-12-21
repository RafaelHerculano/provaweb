@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Olá!
                    <div class="row justify-content-md-center">
                    <div class="col-4">
                        <a href="/appointment" class="btn btn-primary col-12">Consulta</a> 
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
