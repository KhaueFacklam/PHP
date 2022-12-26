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
                echo "<h1>Logout realizado com sucesso!</h1>";
            ?>
            
        </div>
        
    </body>
</html>