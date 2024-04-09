<html>
<head>
<body>
<h1> ej calculadora 2php </h1> 

<?php
if(isset($_POST["send"])){
    $num1= $_POST ["num1"];
    $num2= $_POST ["num2"];
    $operacio= $_POST ["operacio"];
    
    
    echo "La operacio es ".$operacio."<br>";
    if($operacio == "suma") {
        echo "la suma de $num1 y $num2 es: ".suma($num1,$num2);
    } else if($operacio == "resta") {
        echo "la resta de $num1 y $num2 es: ".resta($num1,$num2);
    }
   else if($operacio == "multiplicacio") {
    echo "la resta de $num1 y $num2 es: ".multiplicacio($num1,$num2);
    } 
}
function suma($num1, $num2) {
    if ($num1 && $num2)
        return $num1+$num2;
    else
        return "no se puede";
}

function resta($num1, $num2) {
    if ($num1 && $num2)
        return $num1-$num2;
    else
        return "no se puede";
}

function multiplicacio($num1, $num2) {
    if ($num1 && $num2)
        return $num1*$num2;
    else
        return "no se puede";
}
?>

<form  method = "post">
    <label> numero 1 : </label>
    <input type ="number" name = "num1"><br>
    <label> numero 2 : </label>
    <input type ="number" name = "num2"><br>

    <input type="radio" name="operacio" value="suma">suma <br>
    <input type="radio" name="operacio" value="resta">resta <br>
    <input type="radio" name="operacio" value="multiplicacio">multiplicacio <br>

    <input type="submit" name=send value="calcula">
</form>

<br><br>

</html>

