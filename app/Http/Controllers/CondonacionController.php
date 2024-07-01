<?php

namespace App\Http\Controllers;

use App\Mail\solicitudesmail;
use Illuminate\Http\Request;
use App\Models\condonacion;
use Illuminate\Support\Facades\Storage;
use App\Mail\rechazadomail;
use Illuminate\Support\Facades\Mail;

use App\Exports\CondonacionExportar;
use App\Exports\CondonacionSeguimientoExportar;
use Maatwebsite\Excel\Facades\Excel;

class CondonacionController extends Controller {
   
    public function index() {
       //$condonaciones=condonacion::all();
       $condonaciones=condonacion::where('estatus','pendiente')->get();
       return view('condonaciones-enviadas',compact('condonaciones'));
    }
 
    public function SeguimientoSolicitudes() {
       $condonaciones=condonacion::all();
       //$condonaciones=condonacion::where('estatus','pendiente')->get();
       return view('seguimiento-condonaciones',compact('condonaciones'));
    }
 
    public function show($id) {
       $condonacion = condonacion::find($id);
       return view('mostrar-condonaciones', compact('condonacion'));
    }
 
    public function create() {
 
    }
 
    public function store(Request $request) {
      
       $request->validate([
          'nombre' => 'required|string|max:255',
          'codigo' => 'required|string|max:15',
          'correo' => 'required|string|email',
          'telefono' => 'required|digits_between:10,20',
          'carrera' => 'required',
          'primeringreso' => 'required',
          'situacion' => 'required',
          'justificacion' => 'required|string|max:1000',
          'ordendepago' => 'required|mimes:pdf|max:5000',
          'adeudo' => 'required',
          'comprobante' => 'required|mimes:pdf|max:5000',
          'imss' => 'required|mimes:pdf|max:5000',
          'fm2fm3' => 'nullable|mimes:pdf|max:5000',
          'porcentaje' => 'required',
         
       ]);


       $condonacion = new condonacion();

       //    campos que requieren ingreso de documentos
       $ordendepago=$request->ordendepago;        
        $filename=time().'.'.$ordendepago->getClientOriginalExtension();
       $request->ordendepago->move('ordendepago',$filename);
       $condonacion->ordendepago=$filename; 

       $comprobante=$request->comprobante;
         $filename2=time().'.'.$comprobante->getClientOriginalExtension();
         $request->comprobante->move('comprobante',$filename2);
       $condonacion->comprobante=$filename2;

       $imss=$request->imss;
         $filename3=time().'.'.$imss->getClientOriginalExtension();
         $request->imss->move('imss',$filename3);
       $condonacion->imss=$filename3;
       
       $fm2fm3=$request->fm2fm3;
         $filename4=time().'.'.$fm2fm3->getClientOriginalExtension();
         $request->fm2fm3->move('fm2fm3',$filename4);
       $condonacion->fm2fm3=$filename4;

//    campos strings
       $condonacion->nombre = $request->nombre;
       $condonacion->codigo = $request->codigo;
       $condonacion->correo = $request->correo;
       $condonacion->telefono = $request->telefono;
       $condonacion->carrera = $request->carrera;
       $condonacion->primeringreso = $request->primeringreso;
       $condonacion->situacion = $request->situacion;
       $condonacion->justificacion = $request->justificacion;
       $condonacion->adeudo = $request->adeudo;
       $condonacion->porcentaje = $request->porcentaje;
       $condonacion->estatus = $request->estatus??'pendiente';
       $condonacion->save();
       return back();
    }

    public function descargarexcel() {
      
      return Excel::download(new CondonacionExportar, 'SolicitudCondonacionAlumnos.xlsx');
   }

   public function DescargarExcelSeguimiento() {
      
      return Excel::download(new CondonacionSeguimientoExportar, 'SeguimientoCondonacionAlumnos.xlsx');
   }
 
    public function rechazar_solicitud($id,$correo) {
      $condonacion = condonacion::find($id);
      $condonacion->estatus='rechazado';
      Mail::to($correo)->send(new rechazadomail());
      $condonacion->save();
      return back();
   }

   public function aceptar_solicitud($id,$correo) {
      $condonacion = condonacion::find($id);
      $condonacion->estatus='aceptado';
      Mail::to($correo)->send(new solicitudesmail());

      $condonacion->save();
      return back();
   }
 }
 
