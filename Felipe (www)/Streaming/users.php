<?php
if (!isset($_SESSION)) {
    session_start();
}

$id = 1;
$users = array(
    array(
        "id" => $id++,
        "nome" => "João",
        "email" => "joao.silva@gmail.com",
        "password" => "joao.silva@gmail.com"
    ),
    array(
        "id" => $id++,
        "nome" => "Rafael",
        "email" => "rafacardoso@gmail.com",
        "password" => "rafacardoso@gmail.com"
    ),
    array(
        "id" => $id++,
        "nome" => "Gabriela",
        "email" => "gabischidt@gmail.com",
            "password" => "gabischidt@gmail.com"
        ),
        array(
            "id" => $id++,
            "nome" => "Roberta",
            "email" => "roberta.oliveira@gmail.com",
            "password" => "roberta.oliveira@gmail.com"
        ),
        array(
            "id" => $id++,
            "nome" => "Pedro",
            "email" => "pebolado@gmail.com",
            "password" => "pebolado@gmail.com"
        ),
        array(
            "id" => $id++,
            "nome" => "Felipe",
            "email" => "felipe@gmail.com",
            "password" => "felipe@gmail.com"
            )
        );

?>