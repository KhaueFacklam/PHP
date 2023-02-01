<?php
include_once 'usuarios.php';
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>admin</title>
</head>

<body>

    <div id="box" class="large">

        <?php

        if (isset($_SESSION["cadastro"])) {
            $usuarios[] = $_SESSION["cadastro"];
        }

        if (isset($_SESSION["Admin"])) {
            echo "<h1> Bem-vindo, " . $_SESSION["Admin"] . "!</h1>
            <div  class='bold'> Usuários cadastrados: </div><br></br>";

            foreach ($usuarios as $linha) {
                foreach ($linha as $chave => $conteudo) {
                    echo "<div>" . "<b>" . ucfirst($chave) . ": </b>" . $newtext = wordwrap($conteudo, 30, "\n", true) . "</div>";
                }
                echo "<br></br>";
            }
        } else {
            header("Location: login.php");
        }

        ?>

        <button class="button"><a href="logout.php" class="link">Log Out</a></button>


</body>

</html>