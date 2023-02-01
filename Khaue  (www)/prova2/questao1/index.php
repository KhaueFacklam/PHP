<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <form action="back.php" method="post" id="box">
        <h1>Login</h1>
        <?php
        
        if (isset($_COOKIE['nome'])) {
            $valor = $_COOKIE['nome'];
            echo "<h1>Último usuário logado: " . $valor . "</h1>";
        } else if (isset($_COOKIE['administrador'])){
            $valor = $_COOKIE['nome'];
            echo "<h1>Último usuário logado: " . $valor . "</h1>";
        }

        ?>
        <span>E-mail</span>
        <input id="email" name="email" class="text" type="text">
    
        <span>Senha</span>
        <input id="password" name="password" class="text" type="password">
    
    <input type="submit" class="button">


</form>
    
</body>
</html>
