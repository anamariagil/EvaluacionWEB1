<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fútbol</title>

</head>

    <!--La federación nacional de fútbol necesita de sus servicios como desarrollador de software, 
    para codificar una función en PHP que permita calcular la edad de los jugadores, 
    de acuerdo al año de nacimiento de estos. Declare la función calcularEdad() y pruebe su funcionamiento.-->

<body style="font-style:italic; position:absolute; left:1000px; top:60px">
    <header>
        <h1 style="position:absolute; left:-385px; top:0px">Edad</h1>
    </header>
    <p style="position:absolute; top:85px; left:-425px; font-size:20px"> ¿Cuándo naciste? </p>
    <form style="position:absolute; left:-430px; top:165px" method="POST">
        <div>
            <label for="dia" style="font-size:20px"></label>
            <input type="number" name="dia" style="font-style:italic" placeholder="Día">
        </div>
        <br>
        <div>
            <label for="mes" style="font-size:20px"></label>
            <input type="number" name="mes" style="font-style:italic" placeholder="Mes">
        </div>
        <br>
        <div>
            <label for="año" style="font-size:20px"></label>
            <input type="number" name="año" style="font-style:italic" placeholder="Año">
        </div>
        <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px; position:absolute; left:25px; top:130px" name="boton" > Calcula tu edad </button> 
    </form>
    <div style="position:absolute; left:-420px; top:350px">
    <?php
        if(isset($_POST["boton"])){
            $dia=$_POST["dia"];
            $mes=$_POST["mes"];
            $año=$_POST["año"];
            if ($dia>04 && $mes>10) {
                $año=$año+1;   
            }
            $edad=2020-$año;
            echo("Tu edad es de " .$edad. " años");
        }
    ?>
    </div>  
</body>
        
</html>