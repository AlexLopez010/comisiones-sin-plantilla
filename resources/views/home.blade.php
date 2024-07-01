@extends('adminlte::page')

@section('title','Comisiones articulo 35')

@section('content_header')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Solicitud de oportunidad 2023B por incurrir en baja definitiva por Articulo 35</h1>
    </div>

    <div class="card-body">
        <p>Si desde el ciclo 2022-A o antes, llevaste alguna materia que no has logrado pasar o acreditar en el periodo ordinario del ciclo 2023-A, entonces has incurrido en el Articulo 35 del Reglamento de Evaluacion y Promocion de Alumnos. En este caso, no se te autoriza el reingreso, salvo que la Comision de Educacion del H. Consejo de Centro te de una oportunidad. Por ello te pedimos llenes este formulario con cuidado, de tal forma que la Comision de Educacion tenga elementos suficientes para analizar tu caso. La resolucion de la Comision se enviara al correo electronico que nos indiques</p>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-header card-header-primary card-header-icon">
        <h4 class="card-title">Formulario</h4>
    </div>
    <div class="card-body">
        <form action="{{route('formulario.store')}}" method="POST" enctype="multipart/form-data">
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
                    @error('telefono')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Ciclo en el que fuiste admitido en el CUCEI:</label>
                    <select name="ciclo" id="lang" class="form-control" value="{{ old('ciclo') }}">
                        <option value="2022A">2022A</option>
                        <option value="2021B">2021B</option>
                        <option value="2021A">2021A</option>
                        <option value="2020B">2020B</option>
                        <option value="2020A">2020A</option>
                        <option value="2019B">2019B</option>
                        <option value="2019A">2019A</option>
                        <option value="2018B">2018B</option>
                        <option value="2018A">2018A</option>
                        <option value="2017B">2017B</option>
                        <option value="2017A">2017A</option>
                        <option value="2016B">2016B</option>
                        <option value="2016A">2016A</option>
                        <option value="2015B">2015B</option>
                        <option value="2015A">2015A</option>
                        <option value="2014B">2014B</option>
                        <option value="2014A">2014A</option>
                        <option value="2013B">2013B</option>
                        <option value="2013A">2013A</option>
                        <option value="2012B">2012B</option>
                        <option value="2012A">2012A</option>
                        <option value="2011B">2011B</option>
                        <option value="2011A">2011A</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="carrera">Carrera:</label>
                    <select name="carrera" id="lang" class="form-control" value="{{ old('carrera') }}">
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
                </div>

                <div class="col-md-6">
                    <label for="avance">Cual es el porcentaje de avance que tienes de tu carrera en creditos:</label>
                    <img height="400"  width="800" src="{{ asset('assets/images/porcentajeavance.png') }}" alt="Imagen 1">
                    <input type="text" name="avance" id="avance" class="form-control" value="{{ old('avance') }}">
                    @error('avance')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label>Número de creditos que te faltan para concluir la carrera:</label>
                    <img height="400"  width="800" src="{{ asset('assets/images/creditosrestantes.png') }}" alt="Imagen 2">
                    <input type="text" name="faltante" id="faltante" class="form-control" value="{{ old('faltante') }}">
                    @error('faltante')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Has incurrido en el articulo 35 en el pasado:</label>
                    <select name="incurrido" id="lang" class="form-control" value="{{ old('incurrido') }}">
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="lang">¿Cuántas materias que llevaste por primera vez en el ciclo 2022-A o antes, no has aprobado a la fecha?:</label>
                    <select name="materias" id="lang" class="form-control" value="{{ old('materias') }}">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3 o mas">3 o mas</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="reprobada35">
                        Escribe las materias que no has aprobado desde el ciclo 2022-A o antes. Anotar  la clave y el nombre completo de la materia, tal como aparece en tu kardex. Estas son las materias por las que estás en baja por Art. 35. <br>
                        Ejemplo: <br>
                        IC577 ALGEBRA LINEAL, <br>                        
                        IC581 ESTATICA
                    </label>
                    <img height="200"  width="300" src="{{ asset('assets/images/materias35.jpg') }}" alt="Imagen 3">
                    <textarea name="reprobada35" id="reprobada35" cols="90" rows="5" class="form-control" value="{{ old('reprobada35') }}"></textarea>
                    @error('reprobada35')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="reprobada33">
                        Además las materias anteriores, anota las otras que no lograste pasar en el ciclo 2023-A. Escribir  la clave y el nombre completo de la materia, tal como aparece en tu kardex. <br>
                        Ejemplo: <br>
                        I7490	FISICOQUIMICA II, <br>
                        I6910	ECUACIONES DIFERENCIALES ORDINARIAS,
                    </label>
                    <img height="200"  width="300" src="{{ asset('assets/images/materias33.jpg') }}" alt="Imagen 4">
                    <textarea name="reprobada33" id="reprobada33" cols="90" rows="5" class="form-control" value="{{ old('reprobada33') }}"></textarea>
                    @error('reprobada33')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="lang">Qué motivos influyeron en tu desempeño académico y por los cuales incurriste en baja por artículo 35 (deberás adjuntar los probatorios correspondientes a los motivos por los cuales no has podido acreditar las materias en artículo 35):</label>
                    <select name="motivo" id="lang" class="form-control" value="{{ old('motivo') }}">
                        <option value="Enfermedad o problemas de salud">Enfermedad o problemas de salud</option>
                        <option value="Problemas psicológicos/ psiquiátricos">Problemas psicológicos/ psiquiátricos</option>
                        <option value="Problemas financieros">Problemas financieros</option>
                        <option value="Situación laboral">Situación laboral</option>
                        <option value="Problemas de aprendizaje o falta de preparación escolar">Problemas de aprendizaje o falta de preparación escolar</option>
                        <option value="Conflictos familiares">Conflictos familiares</option>
                        <option value="Falta de interacción de calidad con el/los profesor(es)">Falta de interacción de calidad con el/los profesor(es)</option>
                        <option value="No contar con los medios y herramientas tecnológicas">No contar con los medios y herramientas tecnológicas</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="documento">
                        Adjunte los documentos que justifiquen tu petición o prueben los motivos de su reprobación  (en PDF) Ejemplo: <br>
                        - Constancias médicas, laborales, legales o cualquier otro documento que sirva de evidencia con firma autógrafa.
                    </label>
                    <input type="file" name="documento" id="documento" class="form-control" value="{{ old('documento') }}">
                    @error('documento')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="explicacion">
                        Escribir una breve explicación de los motivos por los cuales no has podido pasar las materias por las que incurriste en baja por Artículo 35 (Máximo 250 palabras)
                    </label>
                    <textarea name="explicacion" id="explicacion" cols="90" rows="2" class="form-control" value="{{ old('explicacion') }}"></textarea>
                    @error('explicacion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="carta">
                        Adjuntar carta elaborada por tu padre/madre o tutor, con su firma, en donde señale que está enterado del grave problema escolar en el que está su hijo(a) o toturado(a), y pide se le dé otro oportunidad de continuar sus estudios.
                    </label>
                    <input type="file" name="carta" id="carta" class="form-control" value="{{ old('carta') }}">
                    @error('carta')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                

                <div class="col-md-12 p-4 text-right">
                    <button type="submit" class="btn btn-primary">Enviar Formulario</button>
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

