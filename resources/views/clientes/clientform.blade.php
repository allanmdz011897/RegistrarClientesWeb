@extends('layouts.base')

<div class="container mt-5">
     <div class="container row justify-content-center">
         <div class="col-md-7 mt-5">

            @if(session('clienteGuardado'))
            <div class="alert alert-success">
                {{session('clienteGuardado')}}
            </div>
            @endif

          <div class="card">
              <form action="{{ url ('/save')}}" method="POST">
                @csrf
                <a class="btn btn-success mb-4" href="{{'/'}}">Consultar Cliente</a>
                  <div class="card-header text-center">AGREGAR CLIENTE </div>

                  <div class="card-body">
                      <div class="row form-group">
                          <label for="" class="col-2">DPI</label>
                          <input type="text" name="dpi" class="form-control col-md-9">
                      </div>
                      <div class="row form-group">
                        <label for="" class="col-2">Nombre</label>
                        <input type="text" name="name" class="form-control col-md-9">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Correo</label>
                        <input type="text" name="email" class="form-control col-md-9">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Cuenta GitHub</label>
                        <input type="text" name="github" class="form-control col-md-9">
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-2">Celular</label>
                        <input type="text" name="phone" class="form-control col-md-9">
                    </div>

                    <div <div class="form-group">
                        <button type="submit" class="btn btn-access col-md-9 offset-2">Guardar</button>
                    </div>

                  </div>

                </form>
         </div>

     </div>
         
        
    </div>
    
</div>