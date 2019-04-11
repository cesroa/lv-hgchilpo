<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Listado-PDF</title>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <span style="font-size: 18px; margin-right:250px;">Nombre de quien realizó: <span style="font-size: 24px;">{{$grids[0]->usuarioarchivo}}</span></span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span style="font-size: 18px;"> Fecha: <span style="font-size: 24px;">{{$grids[0]->fechalista}}</span></span>
        </div>
        <br>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>Número</th>
                    <th>Expediente</th>
                    <th>Nombre</th>
                    <th>Estatus</th>
                </tr>
                @foreach ($grids as $grid)
                    <tr>
                        <td>{{$grid->id}}</td>
                        <td>{{$grid->expediente}}</td>
                        <td>{{$grid->nombrepaciente}}</td>
                        <td>{{$grid->estatuspaciente}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>