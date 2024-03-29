@extends('layout.layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BILLETERA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ route('contacto.index')}}">CONTACTOS <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ route('ingreso.index')}}">INGRESOS</a>
      <a class="nav-item nav-link" href="{{ route('gasto.index')}}">GASTOS</a>
      <a class="nav-item nav-link" href="{{url('logout')}}">cerrar sesion</a>
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Ingresos</h1>    
      <table class="table table-striped">
        <thead>
            <tr>
              <td>Nombre</td>  
              <td>Descripcion</td>
              <td>Fecha</td>
              <td>Monto</td>
              <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $ingreso)
            <tr>
                <td>{{$ingreso->nombre}}</td>
                <td>{{$ingreso->descripcion}}</td>
                <td>{{$ingreso->fecha}}</td>
                <td>{{$ingreso->monto}}</td>
                <td>
                    <a href="{{ route('ingreso.edit',$ingreso->id)}}" class="btn btn-primary">Editar</a>
                </td>
                <td>
                    <form action="{{ route('ingreso.destroy', $ingreso->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            <a href="{{ route('ingreso.create')}}" class="btn btn-primary">Nuevo</a>
        </tbody>
      </table>
    <div>
    </div>
    
@endsection