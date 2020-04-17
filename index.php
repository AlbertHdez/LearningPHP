<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession =  new UserSession();
$user = new User();

if(isset($_SESSION['user']))
{
    $user->setUser($userSession->getCurrentUser());
    include_once 'views/home.php';
}
else if(isset($_POST['username']) && isset($_POST['password']))
{
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExist($userForm, $passForm))
    {
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);
        include_once 'views/home.php';
    }
    else
    {
        $errorLogin="Usuario y/o contraseña incorrectos";
        include_once 'views/login.php';
    }
}
else
{
    include_once 'views/login.php';
}