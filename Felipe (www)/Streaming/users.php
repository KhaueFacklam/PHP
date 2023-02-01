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
        "password" => '$2y$10$Tbaa5EdnEUx8Ba.J8xFplOFNsxNtLn0YxaFQFf3TIIeZBZtPCa1u2'
    ),
    array(
        "id" => $id++,
        "nome" => "Rafael",
        "email" => "rafacardoso@gmail.com",
        "password" => '$2y$10$Acu/bMx0bniRT2oNh.VswOkf07s3QZY5LPOzkOxGa7sV8kx2.EQau'
    ),
    array(
        "id" => $id++,
        "nome" => "Gabriela",
        "email" => "gabischidt@gmail.com",
            "password" => '$2y$10$v3HZiYEnP3i5rMmn468euulW8G6/biNb0qe5Nn3v1.j20OWC.P7nC'
        ),
        array(
            "id" => $id++,
            "nome" => "Roberta",
            "email" => "roberta.oliveira@gmail.com",
            "password" => '$2y$10$CVpDzlyo3y1YgO.kADVEGuhrp8shFgRSoaYMjI06ewliVFnoVBq7S'
        ),
        array(
            "id" => $id++,
            "nome" => "Pedro",
            "email" => "pebolado@gmail.com",
            "password" => '$2y$10$J8tRy2iXkM98hVjoWNHg4uA.mpyHiWOjMuSLmkuvv60McmtVKUl9G'
        ),
        array(
            "id" => $id++,
            "nome" => "Felipe",
            "email" => "felipe@gmail.com",
            "password" => '$2y$10$PI3QP/9nsuya7XjYCyG2mu2WRIqoCEH4iWdLGEpT8kGF2ooVV6vMG'
            )
        );

?>