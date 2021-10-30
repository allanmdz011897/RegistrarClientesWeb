@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <a class="btn btn-success mb-2" href="{{'/form'}}">Agregar Cliente</a>
                <a class="btn btn-success mb-2" href="{{'/'}}">Listar Cliente</a>

                <div class="card-body">
                
                    <h2 class="text-center mb-2">Consumiendo API</h2>
                   
                </div>
               

            </div>
        </div>
        @foreach ($usuariosArray as $usuario)
            <div class="col-md-6">
                <ul class="list-group-item mt-2 mb-4">
                    <li class="list-group-item active">{{$usuario['name']}}</li>
                    <li class="list-group-item active">{{$usuario['username']}}</li>
                    <li class="list-group-item active">{{$usuario['email']}}</li>
                    <li class="list-group-item active">{{$usuario['phone']}}</li>
                    <li class="list-group-item active">{{$usuario['website']}}</li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection
