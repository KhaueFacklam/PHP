<?php
include('verifyLogin.php');
session_start();
session_destroy();
header('Location: login.php');
?>