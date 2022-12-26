<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php

    $cadastros = array(
        array(
            "id" => 1,
            "nome" => "João Silva",
            "idade" => 25,
            "email" => "joao.silva@gmail.com",
            "senha" => "joao.silva@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 1950
        ),
        array(
            "id" => 2,
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacardoso@gmail.com",
            "senha" => "rafacardoso@gmail.com",
            "e.civil" => "Casado",
            "salario" => 5541
        ),
        array(
            "id" => 3,
            "nome" => "Gabriela Schidt",
            "idade" => 21,
            "email" => "gabischidt@gmail.com",
            "senha" => "gabischidt@gmail.com",
            "e.civil" => "Solteira",
            "salario" => 3214
        ),
        array(
            "id" => 4,
            "nome" => "Roberta Oliveira",
            "idade" => 38,
            "email" => "roberta.oliveira@gmail.com",
            "senha" => "roberta.oliveira@gmail.com",
            "e.civil" => "Divorciada",
            "salario" => 4258
        ),
        array(
            "id" => 5,
            "nome" => "Pedro Santos",
            "idade" => 17,
            "email" => "pebolado@gmail.com",
            "senha" => "pebolado@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 2100
        )
    );

    if (isset($_POST["email"]) && isset($_POST["password"])){
        
        $email = $_POST["email"];
        $password = $_POST["password"];        

        // busca email
        foreach($cadastros as $i){
            if ($i["email"] == $email && $i["senha"] == $password){
                session_start();
                $_SESSION["nome"] = $i["nome"];
                break;
            }
        }
    }


?>



    <body>

        <div id="box" class="large">
            
            <?php

                if(!isset($_SESSION["nome"])) {
                    echo "<h1>Usuário/senha incorreta.</h1>";
                } else {
                    echo "<h1>Logado com sucesso.</h1>
                        <h2> Bem-vindo(a) " . $_SESSION["nome"] . "</h2>";
                }
                
            ?>

            <form action="logout.php" method="post">

                <button class="button">LOGOUT</button>
                
            </form>

        </div>

    </body>
</html>
