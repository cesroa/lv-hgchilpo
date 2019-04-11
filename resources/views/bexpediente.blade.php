@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Buscar expedientes</div>

                    <div class="card-body">
                        <form action="{{URL::to('/expedientes')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID Paciente</label>
                                <input type="text" class="form-control" name="idpaciente" id="idpaciente" aria-describedby="idHelp" placeholder="Introduce el ID">
                                <small id="idHelp" class="form-text text-muted">Escribe el identificador del paciente.</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection