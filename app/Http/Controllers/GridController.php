<?php

namespace Krankenhaus\Http\Controllers;

use Krankenhaus\Grid;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class GridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        setlocale(LC_ALL,'es_ES');
        $dhoy = ucfirst(strftime("%A %d de %B del %Y"));

        //$grids = Grid::all();
        $grids = DB::connection('DB_MYSQL')->select("SELECT * FROM krankenhausdb.grids where fechalista = '$dhoy'");
        return view('listado',compact('grids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grid = new Grid();
        $grid->expediente = $request->input('expediente');
        $grid->nombrepaciente = $request->input('nombrepaciente');
        $grid->estatuspaciente = $request->input('estatuspaciente');
        $grid->usuarioarchivo = $request->input('usuarioarchivo');
        $grid->fechalista = $request->input('fechalista');
        $grid->save();
        //return 'Hecho, se guardaron los datos';
        //return $request->all();
        return view('bexpediente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Krankenhaus\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function show(Grid $grid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Krankenhaus\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function edit(Grid $grid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Krankenhaus\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grid $grid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Krankenhaus\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grid $grid)
    {
        //
    }

    public function listadopdf()
    {
        setlocale(LC_ALL,'es_ES');
        $dhoy = ucfirst(strftime("%A %d de %B del %Y"));

        //$grids = Grid::all();
        $grids = DB::connection('DB_MYSQL')->select("SELECT * FROM krankenhausdb.grids where fechalista = '$dhoy'");
        if($grids) {
            $pdf = PDF::loadView('listadopdf', compact('grids'));
            $pdf->setPaper('a4', 'landscape');
            return $pdf->stream('HGChilpancingo-ListadoExpediente.pdf');
        }else{
            return view('vacio');
        }
    }
}
