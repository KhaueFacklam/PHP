<?php
if (!isset($_SESSION)) {
    session_start();
}

$usuarios = array(
    array(
        "nome" => "Fulano",
        "email" => "fulano@gmail.com",
        "password" => "fulano@gmail.com"
    ),
        array(
            "nome" => "Beltrano",
            "email" => "beltrano@gmail.com",
            "password" => "beltrano@gmail.com"
            )
        );
?>