<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Nueva pieza</title>
</head>
<body>
    <h1 class="h1" style="width:60vw; margin: 15vh auto 2vh auto;">Nueva pieza</h1>
    
    <form action="/refacciones" method="POST" style="width:60vw; margin: 0 auto 0 auto;">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <br>
            <input type="text" name="nombre">
        </div>
        <div class="form-group">
            <label>Descripción</label>
            <br>
            <input type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label>Numero de Piezas</label>
            <br>
            <input type="text" name="num_piezas">
        </div>
        <div class="form-group">
            <label>Costo por unidad</label>
            <br>
            <input type="text" name="costo_pieza">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>