<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Illuminate\Support\Facades\Storage;
use App\Mail\solicitudesmail;
use App\Mail\rechazadomail;
use Illuminate\Support\Facades\Mail;

use App\Exports\FormularioExportar;
use App\Exports\SeguimientoExportar;
use Maatwebsite\Excel\Facades\Excel;

class FormularioController extends Controller {
   
   public function index() {
      //$formularios=Formulario::all();
      $formularios=Formulario::where('estatus','pendiente')->get();
      return view('solicitudes',compact('formularios'));
   }

   public function SeguimientoSolicitudes() {
            //$formularios=Formulario::all();
      $formularios=Formulario::where('estatus','!=','pendiente')->get();
      //$formularios=Formulario::where('estatus','pendiente')->get();
      return view('seguimiento',compact('formularios'));
   }

   public function show($id) {
      $formularios = Formulario::find($id);
      return view('mostrar', compact('formularios'));
   }

   public function create() {

   }

   public function store(Request $request) {
      $request->validate([
         'nombre' => 'required|string|max:255',
         'codigo' => 'required|digits_between:2,16',
         'correo' => 'required|string|email',
         'telefono' => 'required|digits_between:10,20',
         'ciclo' => 'required',
         'carrera' => 'required',
         'avance' => 'required|numeric|min:1|max:100',
         'faltante' => 'required|numeric|min:1|max:1000',
         'incurrido' => 'required',
         'materias' => 'required',
         'reprobada35' => 'required',
         'reprobada33' => 'required',
         'motivo' => 'required',
         'explicacion' => 'required',
         'documento' => 'required|mimes:pdf|max:5000',
         'carta' => 'required|mimes:pdf|max:5000',
         
      //    'correo' => 'required|email',
      //    'telefono' => 'required|string|max:20',
      //    'ciclo' => 'required|string|max:255',
      //    'carrera' => 'required|string|max:255',
      //    'avance' => 'required|string|max:255',
      //    'faltante' => 'required|numeric',
      //    'incurrido' => 'required|numeric',
      //    'materias' => 'required|string|max:255',
      //    'reprobada35' => 'required|string|max:255',
      //    'reprobada33' => 'nullable|string|max:255',
      //    'motivo' => 'required|string',
      //    'documento' => 'nullable|string|max:255',
      //    'explicacion' => 'required|string',
      //    'carta' => 'required|string|max:255',
      //    'estatus' => 'required|string|max:255',
      ]);
      $formulario = new Formulario();

      $documento=$request->documento;        
	   $filename=time().'.'.$documento->getClientOriginalExtension();
      $request->documento->move('assets',$filename);
      $formulario->documento=$filename; 
      
      $carta=$request->carta;
		$filename2=time().'.'.$carta->getClientOriginalExtension();
		$request->carta->move('cartas',$filename2);
      $formulario->carta=$filename2;


      $formulario->nombre = $request->nombre;
      $formulario->codigo = $request->codigo;
      $formulario->correo = $request->correo;
      $formulario->telefono = $request->telefono;
      $formulario->ciclo = $request->ciclo;
      $formulario->carrera = $request->carrera;
      $formulario->avance = $request->avance;
      $formulario->faltante = $request->faltante;
      $formulario->incurrido = $request->incurrido;
      $formulario->materias = $request->materias;
      $formulario->reprobada35 = $request->reprobada35;
      $formulario->reprobada33 = $request->reprobada33;
      $formulario->motivo = $request->motivo;
      //$formulario->documento = $request->documento;
      $formulario->explicacion = $request->explicacion;
      //$formulario->carta = $request->carta;
      $formulario->estatus = $request->estatus??'pendiente';
      $formulario->save();
      return back();
   }

   public function rechazar_solicitud($id,$correo) {
      $formulario = Formulario::find($id);
      $formulario->estatus='rechazado';
      Mail::to($correo)->send(new rechazadomail());
      $formulario->save();
      return back();
   }

   public function aceptar_solicitud($id,$correo) {
      $formulario = Formulario::find($id);
      $formulario->estatus='aceptado';
      Mail::to($correo)->send(new solicitudesmail());
      $formulario->save();
      return back();
   }

   public function descargarexcel() {
      
      return Excel::download(new FormularioExportar, 'SolicitudAlumno.xlsx');
   }

   public function DescargarExcelSeguimiento() {
      
      return Excel::download(new SeguimientoExportar, 'SeguimientoAlumno.xlsx');
   }

}
