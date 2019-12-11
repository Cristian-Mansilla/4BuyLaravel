<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$producto}} </h1>
    @if ($producto->info->Modelo)
        Modelo: {{$producto->info->Modelo}}
    @endif
    <br>
    @if($producto->info->Linea)
        Linea: {{$producto->info->Linea}}
    @endif
    <br>
    @if($producto->info->Ram)
        Ram: {{$producto->info->Ram}}
    @endif
</body>
</html>
