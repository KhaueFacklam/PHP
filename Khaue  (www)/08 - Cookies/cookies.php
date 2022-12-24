<?php

//CRIANDO COOKIES
    setcookie("usuario", "Felipe");
    setcookie("aluno", "Khaue", (time() + (2 * 15)));

    echo $_COOKIE["usuario"] . "<br>";

    echo $_COOKIE["aluno"];

//APAGANDO COOKIE
    setcookie("usuario"); //declare apenas o nome do cookie
    setcookie("aluno", );
    







?>