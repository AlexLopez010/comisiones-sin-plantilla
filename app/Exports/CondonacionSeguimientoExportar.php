<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Condonacion;

class CondonacionSeguimientoExportar implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Condonacion::where('estatus','!=','pendiente')->get();
    }
}