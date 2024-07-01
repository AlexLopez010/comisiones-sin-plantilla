@extends('adminlte::page')

@section('title','Comisiones articulo 35')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Solicitudes de oportunidad 2023B por incurrir en baja definitiva por Articulo 35</h1>
    </div>

    {{-- <div class="card-body">
        <p>Si desde el ciclo 2022-A o antes, llevaste alguna materia que no has logrado pasar o acreditar en el periodo ordinario del ciclo 2023-A, entonces has incurrido en el Articulo 35 del Reglamento de Evaluacion y Promocion de Alumnos. En este caso, no se te autoriza el reingreso, salvo que la Comision de Educacion del H. Consejo de Centro te de una oportunidad. Por ello te pedimos llenes este formulario con cuidado, de tal forma que la Comision de Educacion tenga elementos suficientes para analizar tu caso. La resolucion de la Comision se enviara al correo electronico que nos indiques</p>
    </div> --}}

</div>

@stop

@section('content')
<p>Solicitudes pendientes</p>
<div class="container">
    <div class="card">
        <div class="card-body">
            
      
<div class="row">
    <div class="col-xl-12">
        <p>
            <a href="{{url('descargarexcel')}}" class="btn btn-primary btn-sm">Descargar xlsx </a>
        </p>
             <div class="table-responsive">
                


                <table class="table table-striped" id="usuarios"> 
                   <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>correo</th>
                        <th>codigo</th>
                        <th>carrera</th>
                        <th>estatus</th>

                        <th>opciones</th>
                        <th></th>
                        <th></th>

                    </tr>
                   </thead>
                   
                   <tbody>
                   @foreach ($formularios as $formulario)
                   
                        <tr>
                            <td>{{$formulario->nombre}}</td>
                            <td>{{$formulario->correo}}</td>
                            <td>{{$formulario->codigo}}</td>
                            <td>{{$formulario->carrera}}</td>
                            <td>{{$formulario->estatus}}</td>
                            
                            <td>
                                <a href="{{url('mostrar',$formulario->id)}}" 
                                  class="btn btn-primary btn-sm">mostrar</a>
                            </td>
                            <td>
                                {{--<a href="{{url('rechazar_solicitud',$formulario->id)}}" 
                                  class="btn btn-danger btn-sm">rechazar</a>--}}
                                  <a href="#victorModal" role="button" class="btn btn-danger btn-sm" data-toggle="modal">Rechazar</a>
  
                            </td>
                        
                            <td>
                                
                                  <a href="#victorModal2" role="button" class="btn btn-success btn-sm" data-toggle="modal">Aceptar</a>
  
                            </td>
                            

                        </tr>
                   
                   <!-- Botón en HTML (lanza el modal en Bootstrap) -->

<!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Solicitud rechazada</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                <p>La solicitud será rechazada y se le enviará un correo de notificación al alumno</p>
                
                <!--<p class="text-warning"><small>Ingrese las razones por las que la solicitud fue rechazada:.</small></p>
                <textarea name="explicacion" cols="90" rows="2" class="form-control"></textarea>-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                
                
                <a href="{{url('rechazar_solicitud',[$formulario->id,$formulario->correo])}}" 
                    class="btn btn-danger btn-sm">rechazar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal / Ventana / Overlay en HTML -->
<div id="victorModal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Solicitud Aceptada</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                <p>La solicitud ha sido aceptada y se le enviará un correo de notificación al alumno</p>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                
                
                <a href="{{url('aceptar_solicitud',[$formulario->id,$formulario->correo])}}" 
                    class="btn btn-success btn-sm">aceptar</a>
            </div>
        </div>
    </div>
</div>


                   @endforeach
                </tbody>
                </table>
            </div>
        </div>
             </div>
    </div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable();
</script>
@endsection

