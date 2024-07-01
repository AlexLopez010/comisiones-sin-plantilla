@extends('adminlte::page')

@section('title','Comisiones articulo 35')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Solicitudes de Condonación de orden de pago</h1>
    </div>

    {{-- <div class="card-body">
        <p>Si desde el ciclo 2022-A o antes, llevaste alguna materia que no has logrado pasar o acreditar en el periodo ordinario del ciclo 2023-A, entonces has incurrido en el Articulo 35 del Reglamento de Evaluacion y Promocion de Alumnos. En este caso, no se te autoriza el reingreso, salvo que la Comision de Educacion del H. Consejo de Centro te de una oportunidad. Por ello te pedimos llenes este condonacion con cuidado, de tal forma que la Comision de Educacion tenga elementos suficientes para analizar tu caso. La resolucion de la Comision se enviara al correo electronico que nos indiques</p>
    </div> --}}

</div>

@stop

@section('content')
<p>Solicitudes de condonación evaluadas</p>
<div class="container">
    <div class="card">
        <div class="card-body">
            
      
<div class="row">
    <div class="col-xl-12">
             <div class="table-responsive">
                <p>
                    <a href="{{url('DescargarExcelSeguimiento')}}" class="btn btn-primary btn-sm">Descargar xlsx </a>
                </p>
                <table class="table table-striped" id="usuarios"> 
                   <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>correo</th>
                        <th>codigo</th>
                        <th>carrera</th>
                        <th>pre-estatus</th>
                        <th>estatus</th>
                        
                        <th>opciones</th>
                        <th></th>
                        <th></th>

                    </tr>
                   </thead>

                   @foreach ($condonaciones as $condonacion)
                   <tbody>
                        <tr>
                            <td>{{$condonacion->nombre}}</td>
                            <td>{{$condonacion->correo}}</td>
                            <td>{{$condonacion->codigo}}</td>
                            <td>{{$condonacion->carrera}}</td>
                            <?php
                                $preEstatus = "pre-" . (rand(0,1)? "rechazado" : "aceptado");
                                $color = ($preEstatus === "pre-aceptado") ? "green" : "red";
                            ?>
                            <td style="color: <?php echo $color; ?>">
                                {{ $preEstatus }}
                            </td>

                            <td>{{$condonacion->estatus}}</td>
                            
                            <td>
                                <a href="{{url('mostrar-condonaciones',$condonacion->id)}}" 
                                  class="btn btn-primary btn-sm">mostrar</a>
                            </td>
                            <td>
                                <a href="{{url('rechazar_solicitud',$condonacion->id)}}" 
                                  class="btn btn-danger btn-sm">rechazar</a>
                            </td>
                        
                            <td>
                                <a href="{{url('aceptar_solicitud',$condonacion->id)}}" 
                                  class="btn btn-success btn-sm">aceptar</a>
                            </td>
                            

                        </tr>
                   </tbody>
                   @endforeach
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
@stop

@section('js')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#usuarios').DataTable();
</script>
@stop