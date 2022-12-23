<?php

//CRIANDO COOKIES
    setcookie("usuario", "Felipe");
    setcookie("aluno", "Khaue", (time() + (2 * 15)));

    echo $_COOKIE["usuario"] . "<br>";

    echo $_COOKIE["aluno"];

//APAGAR COOKIE
    setcookie("usuario"); //apenas declare os nomedo cookie, ou
    setcookie("aluno", );
    







?>