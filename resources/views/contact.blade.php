@extends('layout.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Formulario de Consulta</h1>
     <div>
       @if ($errors->any())
         
       @endif
         <form method="post" action="{{ route('contact.store') }}">
             @csrf
             <div class="form-group">    
                 <label for="name">Nombre:</label>
                 <input type="text" class="form-control" name="name"/>
             </div>
   
             <div class="form-group">
                 <label for="email">Correo:</label>
                 <input type="text" class="form-control" name="email"/>
             </div>
   
             <div class="form-group">
                 <label for="subject">Asunto:</label>
                 <input type="text" class="form-control" name="subject"/>
             </div>
             <div class="form-group">
                 <label for="content">contenido:</label>
                 <input type="text" class="form-control" name="content"/>
             </div>                                      
             <button type="submit" class="btn btn-primary-outline">Agregar Gasto</button>
         </form>
     </div>
   </div>
   </div>

@endsection