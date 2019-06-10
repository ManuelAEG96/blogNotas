<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Sesión iniciada";
}elseif(isset($_POST['username']) && isset($_POST['password']))
{
    echo "Validación de login";
}else
{
    echo "Login";
}

?>