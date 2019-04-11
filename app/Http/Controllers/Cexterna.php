<?php

namespace Krankenhaus\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Cexterna extends Controller
{
    public function consultaExterna()
    {
        $resulta = DB::selectOne("select * from hgchp.dbo.cexterna where IDPACIENTE='CXCA670424MGRSSLZZ'");
        if ($resulta) {
            return 'Conectado y listo';
        }
        else
            return 'Tenemos un problema';
    }
}
//http://laravel.krankenhaus:8080/cexterna