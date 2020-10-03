<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodytech</title>
</head>

    <!-- El gimnasio Bodytech, lo contrata para desarrollar una
    aplicación web que permita a sus usuarios calcular el índice
    de masa corporal basado en el formula: -->
    
<body style="position:absolute; top:60px; left:520px; font-style:italic">

    <header>
        <h2 style="font-size:32px"> Índice de masa corporal </h2>
    </header>

    <form style="position:absolute; left:7.5px; top:115px" method="POST">
        <div>
            <label for="peso" style="font-size:20px"> ¿Cuánto pesas? </label>
            <input type="number" name="peso" style="font-style:italic" placeholder="Peso (KG)">
        </div>
        <br>
        <div>
            <label for="altura" style="font-size:20px"> ¿Cuánto mides? </label>
            <input type="number" name="altura" style="font-style:italic" placeholder="Altura (M)">
        </div>
        <button style="background-color:lightsteelblue; font-style:italic; border-radius:10px; position:absolute; left:50px; top:90px" name="IMC" > Calcula tu índice de masa corporal </button> 
    </form>
        
    <div style="position:absolute; left:20px; top:260px; font-size:20px">
        <?php 
            if(isset($_POST["IMC"])){
                $peso=$_POST["peso"];
                $altura=$_POST["altura"];
                $IMC=$peso/($altura*$altura);
                echo("Su índice de masa corporal es de " .$IMC);
            }
        ?>
    </div>

    <div style="position:absolute; left:20px; top:320px; font-size:20px">
        <?php
            if(isset($_POST["IMC"])){
                if ($IMC<18.5) {
                    echo("Su peso es insuficiente.");
                }
                if (18.5<$IMC && $IMC<24.9) {
                    echo("Tiene un peso normal.");
                }
                if (25<$IMC && $IMC<26.9) {
                    echo("Usted sufre de sobrepeso grado I.");
                }
                if (27<$IMC && $IMC<29.9) {
                    echo("Usted sufre de sobrepeso grado II, preobesidad.");
                }            
                if (30<$IMC && $IMC<34.9) {
                    echo("Usted sufre de obesidad de tipo I.");
                }
                if (35<$IMC && $IMC<39.9) {
                    echo("Usted sufre de obesidad de tipo II.");
                }
                if (40<$IMC && $IMC<49.9) {
                    echo("Usted sufre de obesidad de tipo III, obesidad mórbida.");
                }
                if (50<$IMC) {
                    echo("Usted sufre de obesidad de tipo IV, obesidad extrema.");
                }
            }
        ?>
    </div>

</body>

</html>