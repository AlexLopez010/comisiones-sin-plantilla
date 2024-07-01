@extends('adminlte::page')

@section('title','Comisiones articulo 35')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Solicitud del alumno {{$formularios->nombre}}</h1>
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
                {{$formularios->nombre}} <br>
            </div>
      
        
        <div class="col-md-6">

            <label for="codigo">Código de estudiante:</label>
            <br>
            {{$formularios->codigo}} <br>
           </div>
        
        <div class="col-md-6">

            <label for="correo">Correo electrónico:</label>
            <br>
            {{$formularios->correo}} <br>
           </div>
        <div class="col-md-6">

            <label for="telefono">teléfono:</label>
            <br>
            {{$formularios->telefono}} <br>
           </div>
        <div class="col-md-6">

            <label for="ciclo">Ciclo de admisión:</label>
            <br>
            {{$formularios->ciclo}} <br>
           </div>
        <div class="col-md-6">

            <label for="carrera">Carrera:</label>
            <br>
            {{$formularios->carrera}} <br>
           </div>
        <div class="col-md-6">

            <label for="avance">Porcentaje de avance de carrera en creditos:</label>
            <br>
            {{$formularios->avance}} <br>
           </div>
        <div class="col-md-6">

            <label for="faltante">Creditos restantes para concluir la carrera:</label>
            <br>
            {{$formularios->faltante}} <br>
           </div>
        <div class="col-md-6">

            <label for="incurrido">Incurrido en el articulo 35 en el pasado:</label>
            <br>
            {{$formularios->incurrido}} <br>
           </div>
        <div class="col-md-6">

            <label for="incurrido">Materias que llevadas por primera vez en el ciclo 2022-A o antes, no aprobadas a la fecha:</label>
            <br>
            {{$formularios->materias}} <br>
           </div>
        <div class="col-md-6">

            <label for="reprobada35">Estas son las materias por las que está en baja por Art. 35:</label>
            <br>
            {{$formularios->reprobada35}} <br>
           </div>
        <div class="col-md-6">

            <label for="reprobada33">Otras que no logró pasar en el ciclo 2023-A:</label>
            <br>
            {{$formularios->reprobada33}} <br>
           </div>

        <div class="col-md-6">

            <label for="motivo">Qué motivos influyeron en tu desempeño académico y por los cuales incurriste en baja por artículo 35:</label>
            <br>
            {{$formularios->motivo}} <br>
        </div>

    <div class="col-md-6">
           <label for="documento">Documentos adjuntos que justifiquen tu petición o prueben los motivos de su reprobación:</label>
            <br>
            <iframe height="400"  width="400" src="/assets/{{$formularios->documento}}"></iframe>
            <br>
     </div>

     <div class="col-md-6">

        <label for="explicacion">Breve explicación de los motivos por los cuales no ha podido pasar las materias por las que incurrió en baja por Artículo 35:</label>
        <br>
        {{$formularios->explicacion}} <br>
    </div>
    <div class="col-md-6">
        <label for="carta">Carta elaborada por padre/madre o tutor:</label>
         <br>
         <iframe height="400"  width="400" src="/cartas/{{$formularios->carta}}"></iframe>
        <br>
       </div>

        <div class="col-md-6">

            <label for="estatus">Estatus de solicitud:</label>
            <br>
            {{$formularios->estatus}} <br>
        
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