@extends('adminlte::page')

@section('title','Condonación orden de pago 2024B')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Estimados alumnos de Licenciatura
        </h1>
    </div>

    <div class="card-body">
        <p>Se les solicita ser cuidadosos en el llenado del formato y tener a la mano en formato digital PDF, la siguiente documentación:</p>
        <p>-	Orden de pago (la descargas de SIIAU)</p>
        <p>-	Comprobante de ingresos o carta que justifique por qué no tienes comprobante de ingresos</p>
        <p>-	Afiliación al IMSS</p>
        <p>-	Si eres extranjero/a el FM2 o FM3</p>
        <br>
        <p>Todos los documentos se deberán adjuntar en el espacio que corresponda en PDF.</p>
        <br>
        <p>En caso de dudas, revisar la guía de llenado y el anexo de preguntas frecuentes al final de este documento. Para aclaraciones que no correspondan al llenado, pueden escribir un correo a la siguiente dirección: comisiones.consejo@cucei.udg.mx</p>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header card-header-primary card-header-icon">
        <h4 class="card-title">Formulario</h4>
    </div>
    <div class="card-body">
        <form action="{{route('condonaciones.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <section class="row">
                <div class="col-md-6">

                    <label for="nombre">Nombre completo (Iniciando por apellidos):</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
                    @error('nombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="codigo">Código de estudiante:</label>
                    <input type="text" name="codigo" id="codigo" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="15" value="{{ old('codigo') }}">
                    @error('codigo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="correo">Correo electrónico:</label>
                    <input type="text" name="correo" id="correo" class="form-control" value="{{ old('correo') }}">
                    @error('correo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="telefono">Teléfono celular:</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}">
                    @error('codigo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="carrera">Carrera:</label>
                    <select name="carrera" id="lang" class="form-control">
                        <option value="INGENIERIA BIOMEDICA">INGENIERIA BIOMEDICA</option>
                        <option value="INGENIERIA EN COMUNICACIONES Y ELECTRONICA">INGENIERIA EN COMUNICACIONES Y ELECTRONICA</option>
                        <option value="INGENIERIA INFORMATICA">INGENIERIA INFORMATICA</option>
                        <option value="INGENIERIA FOTONICA">INGENIERIA FOTONICA</option>
                        <option value="INGENIERIA EN COMPUTACION">INGENIERIA EN COMPUTACION</option>
                        <option value="INGENIERIA ROBOTICA">INGENIERIA ROBOTICA</option>
                        <option value="INGENIERIA INDUSTRIAL">INGENIERIA INDUSTRIAL</option>
                        <option value="INGENIERIA MECANICA ELECTRICA">INGENIERIA MECANICA ELECTRICA</option>
                        <option value="INGENIERIA QUIMICA">INGENIERIA QUIMICA</option>
                        <option value="INGENIERIA EN TOPOGRAFIA GEOMATICA">INGENIERIA EN TOPOGRAFIA GEOMATICA</option>
                        <option value="INGENIERIA EN LOGISTICA Y TRANSPORTE">INGENIERIA EN LOGISTICA Y TRANSPORTE</option>
                        <option value="INGENIERIA CIVIL">INGENIERIA CIVIL</option>
                        <option value="LICENCIATURA EN INGENIERIA EN ALIMENTOS Y BIOTECNOLOGIA">LICENCIATURA EN INGENIERIA EN ALIMENTOS Y BIOTECNOLOGIA</option>
                        <option value="LICENCIATURA EN FISICA">LICENCIATURA EN FISICA</option>
                        <option value="LICENCIATURA EN MATEMATICAS">LICENCIATURA EN MATEMATICAS</option>
                        <option value="LICENCIATURA EN QUIMICA">LICENCIATURA EN QUIMICA</option>
                        <option value="LICENCIATURA EN QUIMICO FARMACEUTICO BIÓLOGO">LICENCIATURA EN QUIMICO FARMACEUTICO BIÓLOGO</option>
                        <option value="LICENCIATURA EN CIENCIA DE MATERIALES">LICENCIATURA EN CIENCIA DE MATERIALES</option>
                    </select>
                    @error('carrera')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Selecciona si eres de primer ingreso 2024B o no:</label>
                    <select name="primeringreso" id="lang" class="form-control"  value="{{ old('telefono') }}">
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                    @error('primeringreso')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="situacion">
                         Situación Personal / Economica 
                         <br>
                         Motivos por los cuales solicitas la Condonación ( Situación Personal / Económica)  Marca las casillas que consideres necesarias.
                    </label>
                    <select name="situacion" id="lang" class="form-control">
                        <option value="Enfermedad o problemas de salud personal">Enfermedad o problemas de salud personal</option>
                        <option value="Enfermedad o problemas de salud de un familiar">Enfermedad o problemas de salud de un familiar</option>
                        <option value="Problemas financieros personales / familiares">Problemas financieros personales / familiares</option>
                        <option value="Conflictos laborales">Conflictos laborales</option>
                        <option value="Conflictos personales / familiares">Conflictos personales / familiares</option>
                        
                    </select>
                    @error('situacion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="justificacion">
                        Escribe una breve justificación de los motivos por los que estás solicitando una condonación parcial de la Aportación Desarrollo CUCEI. (Este campo es obligatorio)
                    </label>
                    <textarea name="justificacion" id="justificacion" cols="90" rows="2" class="form-control"  value="{{ old('justificacion') }}"></textarea>
                    @error('justificacion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="ordendepago">
                        Orden de pago * (adjuntar archivo en PDF, lo descargas de SIIAU)
                    </label>
                    <input type="file" name="ordendepago" id="ordendepago" class="form-control" value="{{ old('ordendepago') }}">
                    @error('ordendepago')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Selecciona cuantos Desarrollo CUCEI adeudas</label>
                    <select name="adeudo" id="lang" class="form-control" value="{{ old('adeudo') }}">
                        <option value="Desarrollo de CUCEI 2024A">"Desarrollo de CUCEI" 2023B   $1,302.80</option>
                        <option value="Desarrollo de CUCEI 2023B">"Desarrollo de CUCEI" 2023B   $1,244.80 </option>
                        <option value="Desarrollo de CUCEI 2023A">"Desarrollo de CUCEI" 2023A   $1,449.00</option>
                        <option value="Desarrollo de CUCEI 2022B">"Desarrollo de CUCEI" 2022B   $1,210.00</option>
                        <option value="Desarrollo de CUCEI 2022A">"Desarrollo de CUCEI" 2022A   $1,210.00</option>
                        <option value="Desarrollo de CUCEI 2021B">"Desarrollo de CUCEI" 2021B   $992.00</option>
                        <option value="Desarrollo de CUCEI 2021A">"Desarrollo de CUCEI" 2021A   $992.00</option>
                        <option value="Desarrollo de CUCEI 2020B">"Desarrollo de CUCEI" 2020B   $862.50</option>
                    </select>
                    @error('adeudo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="comprobante">
                        Comprobante de ingresos* (adjuntar archivo en PDF, puede ser nomina, en caso de no contar con el comprobante de ingresos, revisar el apartado de preguntas frecuentes)
                    </label>
                    <input type="file" name="comprobante" id="comprobante" class="form-control" value="{{ old('comprobante') }}">
                    @error('comprobante')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="imss">
                        IMSS* (adjuntar archivo en PDF, lo obtienes cuando te das de alta en el IMSS por ser alumno de CUCEI)
                    </label>
                    <input type="file" name="imss" id="imss" class="form-control" value="{{ old('imss') }}">
                    @error('imss')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="fm2fm3">
                        FM2 / FM3 (en caso de ser extranjero)* (adjuntar archivo en PDF)
                    </label>
                    <input type="file" name="fm2fm3" id="fm2fm3" class="form-control" value="{{ old('fm2fm3') }}">
                    @error('fm2fm3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Que porcentaje de Desarrollo CUCEI que podrias pagar específicamente?</label>
                    <select name="porcentaje" id="lang" class="form-control">
                        <option value="50%">50%</option>
                        <option value="70%">70%</option>
                        <option value="25%">25%</option>
                        
                    </select>
                    @error('porcentaje')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label>Número de creditos que te faltan para concluir la carrera:</label>
                    <img height="400"  width="800" src="{{ asset('assets/images/creditosrestantes.png') }}" alt="Imagen 2">
                    <input type="text" name="faltante" id="faltante" class="form-control">
                </div>

                

                <div class="col-md-6">
                    <label for="reprobada35">
                        Escribe las materias que no has aprobado desde el ciclo 2022-A o antes. Anotar  la clave y el nombre completo de la materia, tal como aparece en tu kardex. Estas son las materias por las que estás en baja por Art. 35. <br>
                        Ejemplo: <br>
                        IC577 ALGEBRA LINEAL, <br>                        
                        IC581 ESTATICA
                    </label>
                    <img height="200"  width="300" src="{{ asset('assets/images/materias35.jpg') }}" alt="Imagen 3">
                    <textarea name="reprobada35" id="reprobada35" cols="90" rows="5" class="form-control"></textarea>
                </div>

                <div class="col-md-6">
                    <label for="reprobada33">
                        Además las materias anteriores, anota las otras que no lograste pasar en el ciclo 2023-A. Escribir  la clave y el nombre completo de la materia, tal como aparece en tu kardex. <br>
                        Ejemplo: <br>
                        I7490	FISICOQUIMICA II, <br>
                        I6910	ECUACIONES DIFERENCIALES ORDINARIAS,
                    </label>
                    <img height="200"  width="300" src="{{ asset('assets/images/materias33.jpg') }}" alt="Imagen 4">
                    <textarea name="reprobada33" id="reprobada33" cols="90" rows="5" class="form-control"></textarea>
                </div>

                

                <div class="col-md-12 p-4 text-right">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </section>
        </form>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
<script> console.log('Hi'); </script>
@endsection

