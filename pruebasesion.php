<?php
    session_start();

    if (!isset($_SESSION['correo'])){
        echo '
        <script>
            alert("Por favor debes iniciar session");
           
            </script>
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola puta</h1>
    <a href="php/logout.php">Logout</a>
</body>
</html>