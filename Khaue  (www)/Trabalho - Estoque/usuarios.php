<?php
if (!isset($_SESSION)) {
    session_start();
}

$usuarios = array(
    array(
        "nome" => "Fulano",
        "email" => "fulano@gmail.com",
        "password" => '$2y$10$X0d3F8KJGvra9dggmeIKeuNqvfhISVP61TVAgF4oWrJbyyRKGoyvi'
    ),
        array(
            "nome" => "Beltrano",
            "email" => "beltrano@gmail.com",
            "password" => '$2y$10$Ycdvw9rYdtkkJBjNVrr/MOc6WPGXdER7GdOWH/s6Bf4dpGWeCgDoa'
            )
        );
?>