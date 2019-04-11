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
    .texto-vertical{
        margin-top: 150px;
        transform: rotate(90deg);
    }

.thumbnail {
    position: relative;
}

.caption {
    position: absolute;
    top: 29%;
    left: 0;
    width: 100%;
}
.exp{
    position: absolute;
    top: 35%;
    left: 0;
    width: 100%;    
}
</style>
    </head>
    <body>

        <div class="container-fluid">
  
            <div class="encabezadopdf text-right">
                HG CHILPANCINGO, GRO.    FECHA: <b>{{date('d-m-Y',strtotime($fecha))}}</b> EXP. <b style="font-size: 22px;">{{substr($expediente,0,3).'-'.substr($expediente,3,1).'-'.substr($expediente,4,2)}}</b>
                <br><br>
                <span class="text-right"><h2>{{$nombre.' '.$paterno.' '.$materno}}</h2></span>
            </div>
            <div class="row" id="box-search">
                <div class="thumbnail text-center texto-vertical">
                    <img src="{{asset('svg/sello.png')}}" width="410" alt="" class="img-responsive">
                    <div class="caption">
                        <h3>{{$nombre.' '.$paterno.' '.$materno}}</h3>
                    </div>
                    <div class="exp"><b style="font-size: 20px;">{{substr($expediente,0,3).'-'.substr($expediente,3,1).'-'.substr($expediente,4,2)}}</b></div>
                </div>
            </div>
  
        </div>
    </body>
</html>
