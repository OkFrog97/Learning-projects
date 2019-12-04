<?php
session_start();
if (!isset($_SESSION['autorisation'])){
    header("Location: oops.php");
}
?>


<HTML>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Do Androids Dream of Electric Sheep?</title>
</head>
<body>
<h1>Это какой-то клевый стафф, который достпен только после регистрации!</h1>
<p>А это еще более клевый стафф, который вообще огонь!</p>
<p><a href="index.php">На главную</a></p>
</body>
</HTML>
