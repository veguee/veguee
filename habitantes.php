<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
</head>

<body>

Poblacion:<br>
<form method="post">
    Habitantes de A: <input type="number" name="A" min="0"><br>
    Habitantes de B: <input type="number" name="B" min="0"><br>
    Habitantes de C: <input type="number" name="C" min="0"><br>
    <input type="submit" name="ok" value="Pasar un año">
</form>

<?php
session_start();

if(isset($_REQUEST['ok'])){

    $A=$_SESSION['A'] ?? $_REQUEST['A'];
    $B=$_SESSION['B'] ?? $_REQUEST['B'];
    $C=$_SESSION['C'] ?? $_REQUEST['C'];

    $A=$A-0.05*$A-0.07*$A+0.1*$B+0.08*$C;
    $B=$B-0.1*$B-0.02*$B+0.05*$A+0.06*$C;
    $C=$C-0.08*$C-0.06*$C+0.07*$A+0.02*$B;

    $_SESSION['A'] = $A;
    $_SESSION['B'] = $B;
    $_SESSION['C'] = $C;

    $decimales_A = number_format($A, 2);
    $decimales_B = number_format($B, 2);
    $decimales_C = number_format($C, 2);

    echo "Habitantes de A $decimales_A<br>";
    echo "Habitantes de B $decimales_B<br>";
    echo "Habitantes de C $decimales_C<br>";

}
?>

</body>
</html>