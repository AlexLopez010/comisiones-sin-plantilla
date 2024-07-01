@extends('adminlte::page')

@section('title','Condonación de orden de pago')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Solicitud del alumno {{$condonacion->nombre}}</h1>
    </div>

    <div class="card-body">
        <p></p>
    </div>

</div>

@stop

@section('content')

<div class="card">
    <p class="description">
        
            <div class="col-md-6">

                <label for="nombre">Nombre completo (Iniciando por apellidos):</label>
                <br>
                {{$condonacion->nombre}} <br>
            </div>
      
        
        <div class="col-md-6">

            <label for="codigo">Código de estudiante:</label>
            <br>
            {{$condonacion->codigo}} <br>
           </div>
        
        <div class="col-md-6">

            <label for="correo">Correo electrónico:</label>
            <br>
            {{$condonacion->correo}} <br>
           </div>
        <div class="col-md-6">

            <label for="telefono">teléfono:</label>
            <br>
            {{$condonacion->telefono}} <br>
           </div>
        <div class="col-md-6">

            <label for="carrera">Carrera:</label>
            <br>
            {{$condonacion->carrera}} <br>
           </div>
        <div class="col-md-6">

            <label for="primeringreso">Primer ingreso:</label>
            <br>
            {{$condonacion->primeringreso}} <br>
           </div>
        <div class="col-md-6">

            <label for="situacion">Motivos por los cuales solicitas la Condonación ( Situación Personal / Económica)</label>
            <br>
            {{$condonacion->situacion}} <br>
           </div>
        <div class="col-md-6">

            <label for="justificacion">Justificación de los motivos por los que estás solicitando una condonación parcial de la Aportación Desarrollo CUCEI.</label>
            <br>
            {{$condonacion->justificacion}} <br>
           </div>
       
           <div class="col-md-6">
            <label for="ordendepago">Orden de pago:</label>
             <br>
             <iframe height="400"  width="400" src="/assets/{{$condonacion->ordendepago}}"></iframe>
             <br>
           </div>

        <div class="col-md-6">

            <label for="adeudo">Cuantos Desarrollo CUCEI adeudas:</label>
            <br>
            {{$condonacion->adeudo}} <br>
           </div>

           <div class="col-md-6">
            <label for="comprobante">Comprobante de ingresos:</label>
             <br>
             <iframe height="400"  width="400" src="/assets/{{$condonacion->comprobante}}"></iframe>
             <br>
           </div>

           <div class="col-md-6">
            <label for="imss">IMSS:</label>
             <br>
             <iframe height="400"  width="400" src="/assets/{{$condonacion->imss}}"></iframe>
             <br>
           </div>

           <div class="col-md-6">
            <label for="fm2fm3">FM2 / FM3:</label>
             <br>
             <iframe height="400"  width="400" src="/assets/{{$condonacion->fm2fm3}}"></iframe>
             <br>
           </div>

           <div class="col-md-6">

            <label for="porcentaje">Nombre completo (Iniciando por apellidos):</label>
            <br>
            {{$condonacion->porcentaje}} <br>
        </div>


           <div class="col-md-6">

            <label for="estatus">Estatus de solicitud:</label>
            <br>
            {{$condonacion->estatus}} <br>
        
            </div>
       
           </div>
        
           
        
        
        
        
        
        
        </p>
    
        
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi'); </script>
@stop