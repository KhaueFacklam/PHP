<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>back</title>
</head>

<?php

$id = 1;
$cadastros = array(
    array(
        "id" => $id++,
        "nome" => "admin",
        "email" => "admin",
        "senha" => "admin",
    )
);

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["password"])) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // busca email
    foreach ($cadastros as $cadastro) {
        if ($cadastro["email"] != $email) {

            $novoUsuario = array(
                "id" => $id++,
                "nome" => $_POST['nome'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            );

            $cadastros[] = $novoUsuario;

            session_start();
            $_SESSION["nome"] = $cadastro["nome"];
            break;
        } else if ($cadastro["email"] == $email) {
            //usuario ja existe
        }
    }
} else if (empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    $_POST["nome"] = "";
    $_POST["email"] = "";
    $_POST["password"] = "";
}


?>



<body>

    <div id="box" class="large">

        <?php

        if (isset($_SESSION["nome"])) {
            echo "<h1>Logado com sucesso.</h1>
            <h2> Bem-vindo " . $_SESSION["nome"] . "</h2>";
        } else if (empty($_POST["email"]) || empty($_POST["password"])) {
            echo "<h1>Campos não preenchidos</h1>";
        } else {
            echo "<h1>Nenhum usuário cadastrado.</h1>";
        }

        ?>

        <form action="index.php" method="post">
            <button class="button">VOLTAR</button>
        </form>



    </div>

</body>

</html>