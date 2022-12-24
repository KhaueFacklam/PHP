<?php

//CRIANDO
    setcookie("usuario", "Felipe");
    setcookie("aluno", "Khaue", (time() + (2 * 15)));

    echo $_COOKIE["usuario"] . "<br>";

    echo $_COOKIE["aluno"];

//APAGANDO








?>