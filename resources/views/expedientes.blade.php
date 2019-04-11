@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Guardar información en el listado
                        {{
                        setlocale(LC_ALL,'es_ES')


                        }}</div>

                    <div class="card-body">
                        <form action="/grids" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Expediente</label>
                                <input type="text" class="form-control" name="expediente" id="expediente" readonly value="{{$resulta->IDExpediente}}">
                                <label for="exampleInputEmail1">Nombre paciente</label>
                                <input type="text" class="form-control" name="nombrepaciente" id="nombrepaciente" readonly value="{{$resulta->cNombre.' '.$resulta->cPaterno.' '.$resulta->cMaterno}}">
                                <label for="exampleInputEmail1">Estatus</label>
                                <input type="text" class="form-control" name="estatuspaciente" id="estatuspaciente">
                                <label for="exampleInputEmail1">Nombre quien realiza</label>
                                <input type="text" class="form-control" name="usuarioarchivo" id="usuarioarchivo">
                                <label for="exampleInputEmail1">Fecha</label>
                                <input type="text" class="form-control" name="fechalista" readonly id="fechalista" value="{{ucfirst(strftime("%A %d de %B del %Y"))}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar en listado</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection