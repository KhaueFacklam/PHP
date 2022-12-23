<?php

    $table = array(
        array(
            "nome" => "fulano",
            "idade" => 25,
            "sexo" => "masculino"
        ),
        array(
            "nome" => "fulano",
            "idade" => 25,
            "sexo" => "masculino"
        ),
        array(
            "nome" => "fulano",
            "idade" => 25,
            "sexo" => "masculino"
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach($tabela as $item){
                echo "<tr>";
                foreach($item as $valor){
                    echo "<td>$valor</td>";
                };
                echo "</tr>";
            };

            ?>
        </tbody>
    </table>
</body>
</html>