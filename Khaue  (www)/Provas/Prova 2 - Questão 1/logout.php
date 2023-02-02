<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div id="box" class="large">
        
        <?php

        session_start();

        if(!isset($_SESSION['nome'])) {
            echo "Não há sessão ativa";
            setcookie('administrador');
            setcookie('nome');

        } else if(!isset($_SESSION['administrador'])){
            echo "Não há sessão ativa";
            setcookie('administrador');
            setcookie('nome');
            
        } else if(isset($_SESSION['nome'])){
            session_destroy();
            setcookie('administrador');
            setcookie('nome', $nome);
            echo "Sessão terminada, faça login novamente";

        } else if(isset($_SESSION['administrador'])){
            session_destroy();
            setcookie('nome');
            setcookie('administrador', $administradorNome);
            echo "Sessão terminada, faça login novamente";

        } else {
            echo "Sessão terminada, faça login novamente";
        }
           
        ?>

        <a href="index.php">Login<a/>

    </div>

</body>
</html>
