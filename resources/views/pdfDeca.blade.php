<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Reporte-PDF</title>

<style>
    body{
        background-color: #FFF !important;
    }  
	.borderless td{
	    border: none;
	}
</style>
    </head>
    <body>
		<div class="container-fluid">
            <div class="row">
            	<table class="table borderless" style="font-size: 13px;">
            		<tr>
            			<td align="center"><b style="font-size: 18px;">DECALOGO DEL BUEN PACIENTE</b></td>
            			<td style="border: 0.5px solid black; font-size: 11px;" rowspan="3" align="center">Fotografía</td>
            			<td align="center"><span style="font-size: 9px;">SECRETARÍA DE SALUD DEL ESTADO DE GUERRERO</span></td>
            		</tr>
            		<tr>
            			<td align="justify">1. Tiene confianza en su médico y se toma el tratamiento que le indica.</td>
            			<td colspan="2"><img src="{{asset('svg/saludgro.jpg')}}" width="70" class="img-responsive"> <img src="{{asset('svg/ssa.png')}}" width="70" class="img-responsive"> <img src="{{asset('svg/hgchilpo.jpg')}}" width="70" class="img-responsive"></td>
            		</tr>
            		<tr>
            			<td align="justify">2.	No le quita al médico más tiempo del necesario porque sabe que otros pacientes lo esperan.</td>
            			<td colspan="2"><b>HOSPITAL GENERAL</b></td>
            		</tr>
            		<tr>
            			<td align="justify">3.	Va al doctor cuando empieza a sentirse mal y no hasta que se siente grave.</td>
            			<td colspan="2" align="center"><b style="font-size: 16px;">“DR. RAYMUNDO ABARCA ALARCON”</b></td>
            		</tr>
            		<tr>
            			<td align="justify">4.	Sabe que la unidad de salud es suya y que debe cuidarla.</td>
            			<td colspan="2" align="center"><b style="font-size: 13px;">CHILPANCINGO, GRO.</b></td>
            		</tr>
            		<tr>
            			<td align="justify">5.	Le pregunta a su médico como cuidarse.</td>
            			<td colspan="2" align="center"><b style="font-size: 22px;">TARJETA DE CITAS</b></td>
            		</tr>
            		<tr>
            			<td align="justify">6.	Es respetuoso con los doctores y enfermeras.</td>
            			<td colspan="2" align="center"><b style="font-size: 15px;">{{$nombre.' '.$paterno.' '.$materno}}</b></td>
            		</tr>
            		<tr>
            			<td align="justify">7.	Se preocupa por no hacer cosas que dañen su salud.</td>
            			<td colspan="2">Fecha de Nacimiento: <b style="font-size: 14px;">{{date('d-m-Y',strtotime($fecha))}}</b></td>
            		</tr>
            		<tr>
            			<td align="justify">8.	Mantiene adecuados hábitos higiénicos y dietéticos.</td>
            			<td colspan="2">Municipio: <b style="font-size: 14px;">{{$municipio}}</b></td>
            		</tr>
            		<tr>
            			<td align="justify">9.	Trae a la mano sus estudios de laboratorio e Imagenología para su consulta.</td>
            			<td colspan="2">Localidad: <b style="font-size: 14px;">{{$localidad}}</b></td>
            		</tr>
            		<tr>
            			<td align="justify">10.	En caso de ser necesario acude con su acompañante el cual debe saber del seguimiento de la enfermedad.</td>
            			<td colspan="2">Curp: <b style="font-size: 14px;">{{$curp}}</b></td>
            		</tr>
            		<tr>
            			<td align="right">Teléfono:  01 (747) 49 422 00</td>
            			<td align="center" style="border: 0.1px solid black;"><b style="font-size: 8px;">NUMERO DE EXPEDIENTE</b>
            				<br><b style="font-size: 16px;">{{substr($expediente,0,3).'-'.substr($expediente,3,1).'-'.substr($expediente,4,2)}}</b></td>
            			<td style="border: 0.1px solid black;"><b style="font-size: 8px;">CLASIFICACION DE TRABAJO SOCIAL</b></td>
            		</tr>
            	</table>

        </div>
    </body>
</html>