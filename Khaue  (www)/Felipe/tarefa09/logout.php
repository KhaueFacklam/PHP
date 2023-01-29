<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php
    session_start();
    session_destroy();
    ?>

<body>
    <div id="box" class="text">
        <?php
            echo "Logout realizado com sucesso!";
        ?>
        <a href="index.php"><button class="button">Voltar</button></a>
    </div>
</body>
</html>