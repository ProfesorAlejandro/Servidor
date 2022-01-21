<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>REGISTRAS COCHES</h1>

    <form action="index.php" method="POST">
        <input type="text" name="modelo" placeholder="Modelo" /><br>
        <input type="text" name="num_motor" placeholder="Nº Motor" /><br>

        <select name="marca">
            <option>Seleccionar opción</option>
            <option value="1">Ford</option>
            <option value="2">Seat</option>
            <option value="3">Renault</option>
        </select>

        <button type="submit" name="btn_submit">Guardar</button>

    </form>

    <!-- =================================================================== -->

    <h2>Buscar coche por marca</h2>

    <form action="index.php">
        <select name="marca_coche">
            <option>Sleccionar una marca</option>
            <option value="1">Ford</option>
            <option value="2">Seat</option>
            <option value="3">Renault</option>

        </select>

        <button type="submit">Buscar</button>
    </form>
    
</body>
</html>