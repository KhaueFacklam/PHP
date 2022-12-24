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
            "senha" => '$2y$10$eMO.Qlddr9jIRedbmxGJ..G9NOFXJiynrsCYQArfdcKn7GH0WIQdq',
            "e.civil" => "Solteiro",
            "salario" => 1950
        ),
        array(
            "id" => 2,
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacardoso@gmail.com",
            "senha" => '$2y$10$wjTqRe8wF52GTxrG6jwhger.5efySKMyl6lfCAjExxixqo5GrhrKK',
            "e.civil" => "Casado",
            "salario" => 5541
        ),
        array(
            "id" => 3,
            "nome" => "Gabriela Schidt",
            "idade" => 21,
            "email" => "gabischidt@gmail.com",
            "senha" => '$2y$10$veYFmsGKCwjNUIoNQoUXDuThuI3ns2nRNyNAGjDyj.C/HvUomKv4a',
            "e.civil" => "Solteira",
            "salario" => 3214
        ),
        array(
            "id" => 4,
            "nome" => "Roberta Oliveira",
            "idade" => 38,
            "email" => "roberta.oliveira@gmail.com",
            "senha" => '$2y$10$lzm06HNSBqOBPFTT7pyTTOnSUGuQC3pdDhiIHCkrqFdjH9TirUMGG',
            "e.civil" => "Divorciada",
            "salario" => 4258
        ),
        array(
            "id" => 5,
            "nome" => "Pedro Santos",
            "idade" => 17,
            "email" => "pebolado@gmail.com",
            "senha" => '$2y$10$TwUMGlLknw090R6mn/MMUeIiudu24Abu1e/kw6IA9CYXFpAFjp0jy',
            "e.civil" => "Solteiro",
            "salario" => 2100
        )
    );

    if (isset($_POST["email"]) && isset($_POST["password"])){
        
        $email = $_POST["email"];
        $hash = $_POST["password"];      

        // busca email
        foreach($cadastros as $i){
            if ($i["email"] == $email && $i["senha"] == $hash){

                $nome = $i["nome"];

                session_start();
                $_SESSION["nome"] = $nome;
                break;
            }
        }
    }


?>



<body>

    <div id="box" class="large">
        
        <?php

            if(isset($_SESSION["nome"]))
                echo "<h1>Logado com sucesso.</h1>
                      <h2> Bem-vindo " . $_SESSION["nome"];
            else {
                echo "<h1>Nenhum usuário logado.</h1>";
            }
        ?>

        </h2>
        <button class="button">LOGOUT</button>
    </div>
</body>
</html>
