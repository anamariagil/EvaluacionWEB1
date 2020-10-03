<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>

    <!-- 1.Hacer un programa en PHP que permita mostrar en pantalla la
    suma, resta, mtiplicación, de dos números enteros almacenados
    en 2 variables diferentes (utilice formarios HTML). -->

<body style= "position:absolute; top:60px; left:1000px; font-style:italic">

    <h1 style="font-size:5; position:absolute; left:-490px; font-style:italic">
        Operaciones matemáticas
    </h1>

    <form style="position:absolute; top:110px; left:-400px" method="POST">
        <div>
            <label for="numero1"></label>
            <input type="number" name="numero1" style="font-style:italic" placeholder="Número 1">
        </div>
        <br>
        <div>
            <label for="numero2"></label>
            <input type="number" name="numero2" style="font-style:italic" placeholder="Número 2">
        </div>
        <br>
        <div id= "botones" style="position:absolute; left:-70px; top:90px">
            <li> <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px" name="suma"> Suma </button> </li>
            <br>
            <li> <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px" name="resta"> Resta </button> </li>
            <br>
            <li> <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px" name="multiplicacion"> Multiplicación </button> </li>
            <br>
            <li> <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px" name="todo"> Todas las operaciones </button> </li>
        </div>
    </form>

    <div style="position:absolute; left:-330px; top:200px">
        <?php 
            if(isset($_POST["suma"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $suma=$numero1+$numero2;
                echo("La suma de " .$numero1. " y " .$numero2. ", es " .$suma);
            }
        ?>
    </div>

    <div style="position:absolute; left:-330px; top:240px">
        <?php 
            if(isset($_POST["resta"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $resta=$numero1-$numero2;
                echo("La resta de " .$numero1. " y " .$numero2. ", es " .$resta);
            }
        ?>
    </div>

    <div style="position:absolute; left:-330px; top:280px">
        <?php 
            if(isset($_POST["multiplicacion"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $multiplicacion=$numero1*$numero2;
                echo("La multiplicación de " .$numero1. " y " .$numero2. ", es " .$multiplicacion);
            }
        ?>
    </div>

    <div style="position:absolute; left:-330px; top:200px">
        <?php 
            if(isset($_POST["todo"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $suma=$numero1+$numero2;
                echo("La suma de " .$numero1. " y " .$numero2. ", es " .$suma);
            }
        ?>
    </div>

    <div style="position:absolute; left:-330px; top:240px">
        <?php 
            if(isset($_POST["todo"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $resta=$numero1-$numero2;
                echo("La resta de " .$numero1. " y " .$numero2. ", es " .$resta);
            }
        ?>
    </div>

    <div style="position:absolute; left:-330px; top:280px">
        <?php 
            if(isset($_POST["todo"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $multiplicacion=$numero1*$numero2;
                echo("La multiplicación de " .$numero1. " y " .$numero2. ", es " .$multiplicacion);
            }
        ?>
    </div>

</body>

</html>