<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Edita Pieza</title>
</head>
<body>
    <h1 class="h1" style="width:60vw; margin: 15vh auto 2vh auto;">Edita Pieza</h1>
    @if(!is_null($refaccion))
        <form action="/refacciones/actualiza" method="POST" style="width:60vw; margin: 0 auto 0 auto;">
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$refaccion->nombre}}">
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="descripcion" value="{{$refaccion->descripcion}}">
            </div>
            <div class="form-group">
                <label>Numero de Piezas</label>
                <input type="text" class="form-control" name="num_piezas" value="{{$refaccion->num_piezas}}">
            </div>
            <div class="form-group">
                <label>Costo por unidad</label>
                <input type="text" class="form-control" name="costo_pieza" value="{{$refaccion->costo_pieza}}">
            </div>
            <input type="hidden" name="id" value="{{$refaccion->id}}">
            <br>
            <button type="submit" class="btn btn-primary">Actualiza</button>
        </form>
    @endif

</body>
</html>