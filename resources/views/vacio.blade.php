@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultado consulta</div>

                <div class="card-body">
					<h2>No se encontró el expediente en los registros</h2>
					{{$resulta}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection