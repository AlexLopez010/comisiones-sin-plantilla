<?php

namespace App\Exports;
use App\Models\Formulario;


use Maatwebsite\Excel\Concerns\FromCollection;

class FormularioExportar implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Formulario::where('estatus','=','pendiente')->get();
    }
}