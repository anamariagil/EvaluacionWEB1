<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobón</title>
</head>

    <!-- Hacer un programa en PHP para ayudar a un trabajador de
    Postobón a saber cuál será su sueldo semanal, se sabe que, si
    trabaja 40 horas o menos, se le pagará $20000 por hora, pero
    si trabaja más de 40 horas entonces las horas extras se le
    pagarán a $25000 por hora. -->

<body style="font-style:italic; position:absolute; left:900px; top:80px">

    <header>
        <h1 style="position:absolute; top:-20px; left:-350px"> Sueldo semanal </h1>
    </header>

    <p style="position:absolute; top:60px; left:-390px; font-size:20px"> ¿Cuántas horas trabaja a la semana? </p>

    <form style="position:absolute; left:-330px; top:120px" method="POST">
        <div>
            <label for="horas" style="font-size:20px"></label>
            <input type="number" name="horas" style="font-style:italic">
        </div>
        <br>
        <button style="background-color:lightsteelblue; font-style:italic; position:absolute; left:-0px; top:45px; border-radius: 10px" name="total" > Calcula tu sueldo semanal </button> 
    </form>

    <div style="position:absolute; left:-380px; top:230px; font-size:20px">
        <?php 
            if(isset($_POST["total"])){
                $horas=$_POST["horas"];
                if ($horas>40) {
                    $horasex=$horas-40;
                    $totalex=$horasex*25000;
                    $total=800000+$totalex;
                }
                if ($horas<=40) {
                    $total=$horas*20000;
                }
                echo("Su salario semanal es ".$total);
            }
        ?>
    </div>

</body>

</html>
