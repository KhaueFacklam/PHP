<?php 
    
    $tabela = array(
        array(
            "nome" => "João Silva",
            "idade" => 25,
            "email" => "joaosilva@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 1950,
        ),
        array(
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacard@gmail.com",
            "e.civil" => "Casado",
            "salario" => 5520,
        ),
        array(
            "nome" => "Antonia Moraes",
            "idade" => 53,
            "email" => "antonia.m@gmail.com",
            "e.civil" => "Casado",
            "salario" => 4000,
        ),
        array(
            "nome" => "Eduardo Andrade",
            "idade" => 20,
            "email" => "duduandrade@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 1500,
        ),
        array(
            "nome" => "Maria Antunes",
            "idade" => 42,
            "email" => "mariantunes@gmail.com",
            "e.civil" => "Casada",
            "salario" => 2300,
        )
    )

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        td {
            border: 1px solid black;
            width: 50px;
            height: 20px;
            padding: 3px 0;
            text-align: center;
            background-color: rgb(181, 238, 219);
            font-weight: bold;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>E.Civil</th>
                <th>Salário</th>
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

