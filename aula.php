<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<h3 align='center'>ARRAY SIMPLES CM PHP</h3>";
    echo"<hr>";

    //definindo a array

    $_transporte = array ("Carro","Moto","Bicicleta","Avião","Ônibus","Navio");
    echo $_transporte[0];
    echo"<hr>";

    
    echo $_transporte[1];
    echo"<hr>";

   
    echo $_transporte[2];
    echo"<hr>";

    
    echo $_transporte[3];
    echo"<hr>";

    
    echo $_transporte[4];
    echo"<hr>";


    echo $_transporte[5];
    echo"<hr>";


?>

<select name="select">
    <option value="carro">0</option>
    <option value="Moto">1</option>
    <option value="Bicicleta">2</option>
    <option value="Avião">3</option>
    <option value="Ônibus">4</option>
    <option value="Navio">5</option>
</select>

 <button type="submit">Exibir</button>
</body>
</html>