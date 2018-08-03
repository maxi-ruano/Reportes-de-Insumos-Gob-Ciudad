<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    //Funcion Global para Exportar un archivo en cualquier formato
    function exportFile($data, $type, $namefile = 'exportfile', $nameSheet = 'hoja' ){
        /** 
         * Creamos nuestro archivo
         * expected xls, xlsx, xml, csv, txt, html, pdf, htm, xlsm, xltx, xltm,  xlt, ods, ots, slk, gnumeric.
         * */

        Excel::create($namefile, function ($excel) use ($data, $nameSheet) {
            /** Creamos una hoja */
            $excel->sheet($nameSheet, function ($sheet) use ($data) {
                /**
                 * Insertamos los datos en la hoja con el método with/fromArray
                 * Parametros: (Datos, encabezado de la columna, Celda de Inicio, Comparación estricta de los valores del encabezado, Impresión de los encabezados)
                 * */
                //$sheet->fromArray($data, null, 'A1', false, false);
                $sheet->fromArray($data);
            });
        
        /** Descargamos nuestro archivo pasandole la extensión deseada (xls, xlsx) */
        })->export($type);
    }

}