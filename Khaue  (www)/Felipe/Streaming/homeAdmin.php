<?php
include_once 'users.php';
if (!isset($_SESSION)) {
    session_start();
}
include('verifyLogin.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Home Admin</title>
</head>

<body>

    <?php

    echo "<h1>Bem vindo, $_SESSION[login] !</h1>";
    echo "<header>
        <form method='get'>
            <input type='text' name='search' placeholder='Pesquisar usuarios' class='inputText' id='pesquisar'>
            <input type='submit' name='submit' value='Pesquisar' class='inputSubmit'>
            <input type='submit' name='submit' value='Listar Usuários' class='inputSubmit'>
        </form>
        <a href='logout.php'><p id='logout'>Logout</p></a>
    </header>";

    if (isset($_GET['search']) && ($_GET['search']) != '') {
        header("Location: search.php?search='$_GET[search]'");
        exit;
    }

    if (isset($_GET['submit'])) {
        echo "<table style='width: 60vw; height: 30vh;
        border: solid 2px var(--darkYellow); border-collapse: collapse;'>
                <thead style='text-align: left; font-size: 1.2rem'>
                    <tr style='border: solid 1px var(--darkYellow);'>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($users as $user) {
                    echo "<tr>";
                    foreach ($user as $value) {
                        echo "<td>$value</td>";
                    };
                    echo "</tr>";
                };
                echo "</tbody>
            </table>";
            exit;
    }
    ?>
</body>

</html>