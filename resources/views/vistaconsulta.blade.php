@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultado consulta</div>

                <div class="card-body">
					<?php 
					echo "Nombre de paciente: $resulta->cNombre $resulta->cPaterno $resulta->cMaterno <br >
						  Número de expediente: $resulta->IDExpediente<br >
						  Identificador de paciente: $resulta->IDPaciente<br >
						  Fecha de registro: $resulta->dFechaRegistro<br >
						  Nombre usuario: $resulta->Nombre $resulta->Paterno $resulta->Materno
						 ";
					?>
					<br><br>

					<span class="badge badge-info"><h4><a class="badge badge-info" href="{{ route('crearpdf',['nombre' => str_replace('/','-',$resulta->cNombre), 'paterno' => $resulta->cPaterno, 'materno' => $resulta->cMaterno, 'expediente' => $resulta->IDExpediente, 'fecha'=>$resulta->dFechaRegistro]) }}"> Impresión de folders</a></h4></span>
					<span class="badge badge-primary"><h4><a class="badge badge-primary" href="{{ route('decapdf',['expediente' => $resulta->IDExpediente]) }}">Descargar Carnet</a></h4></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection