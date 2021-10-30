@extends('layouts.base')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links text-danger">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <h2 class="text-center mb-5">Clientes</h2>
            <a class="btn btn-success mb-4" href="{{'/form'}}">Agregar Cliente</a>
            
            <a class="btn btn-success mb-4" href="{{ '/home' }}">HOME</a>

            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>DPI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Cuenta GitHub</th>
                        <th>Celular</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $clientes)
                        
                    
                    <tr>
                        <td>{{$clientes->dpi}}</td>
                        <td>{{$clientes->name}}</td>
                        <td>{{$clientes->email}}</td>
                        <td>{{$clientes->github}}</td>
                        <td>{{$clientes->phone}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        
            </div>
        </div>
    </div>