<?php
session_start();
$c = mysqli_connect('localhost', 'root', '', 'sklep_komputerowy');

foreach($_SESSION['cart_products'] as $id => $quan){
    mysqli_query($c, "UPDATE products SET qt_in_stock = qt_in_stock - " . $quan . " WHERE id=" . $id . ";");
}

unset($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienie złożone!</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\style7.css">
</head>
<body>
    <h1>Twoje zamówienie zostało złożone!</h1><br><br>
    <h3><a href="..\PHP\index.php">Powrót na stronę główną</a></h3>
</body>
</html>