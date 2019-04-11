<?php

namespace Krankenhaus\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultaController extends Controller
{
    public function cDecalog($expediente){
        $id = $expediente;
        $resulta = DB::selectOne("select * from hgchp.dbo.decalogohg where IDExpediente = '$id'");

        if ($resulta){
            $pdf = PDF::loadView('pdfDeca',['nombre'=>$resulta->cNombre,'paterno'=>$resulta->cPaterno,'materno'=>$resulta->cMaterno,'localidad'=>$resulta->lNombre,'municipio'=>$resulta->mNombre,'fecha'=>$resulta->dFechaNacimiento,'curp'=>$resulta->IDPaciente,'expediente'=>$resulta->IDExpediente]);
            $pdf->setPaper('a4','portrait');
            return $pdf->download('HGChilpancingo-Decalogo-'.$expediente.'.pdf');
        }
        else
            return view('vacio')->with('resulta',$expediente);
    }

    public function consulto()
    {
        $resulta = DB::selectOne("select * from hgchp.dbo.bernahg where IDExpediente = '177545'");
        if ($resulta) {
        	return view('vistaconsulta')->with('resulta',$resulta);
        }
        else
        	return 'Tenemos un problema';
    }

    public function busco()
    {
    	return view('buscador');
    }

    public function recibo(Request $recibir)
    {
    	print_r($recibir->input('idpaciente'));
    	return " :: Done krankenhaus!";
    }

    public function abuscar(Request $recibir)
    {
    	$id = $recibir->input('idpaciente');
        $resulta = DB::selectOne("select * from hgchp.dbo.bernahg where IDExpediente = '$id'");
        if ($resulta)
        	return view('vistaconsulta')->with('resulta',$resulta);
        else
        	return view('vacio');
    }

    public function crearpdf($nombre, $paterno, $materno,$expediente,$fecha)
    {
 		$pdf = PDF::loadView('repdf',['expediente'=>$expediente,'nombre'=>$nombre,'paterno'=>$paterno,'materno'=>$materno,'fecha'=>$fecha]);
		$pdf->setPaper('a4','landscape');
		return $pdf->download('HGChilpancingo-Expediente-'.$expediente.'.pdf');
    }

}
