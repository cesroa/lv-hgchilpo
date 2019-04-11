@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listado expedientes</div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Expediente</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
                            </tr>
                        @foreach ($grids as $grid)
                            <tr>
                                <td>{{$grid->expediente}}</td>
                                <td>{{$grid->nombrepaciente}}</td>
                                <td>{{$grid->estatuspaciente}}</td>
                            </tr>
                        @endforeach
                        </table>
                        <span class="badge badge-primary"><h4><a class="badge badge-primary" href="{{ route('listado') }}">Descargar listado</a></h4></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection