<?php

include_once '../Business/UserAdminBusiness.php';
include_once '../Domain/User.php';


$userName = str_replace("'", "", $_POST['txtUser']);
$password = str_replace("'", "", $_POST['txtPassword']);

if (strlen($userName) > 2 && strlen($password) > 2) {
    $adminBusiness = new UserAdminBusiness();
    $result = $adminBusiness->login($userName, $password);
    if ($result) {
        if (@session_start() == false) {
            session_start();
            $_SESSION['userName'] = $userName;
        } else {
            $_SESSION['userName'] = $userName;
        }
        header('location: ../PresentationAdmin/indexAdmin.php');
    } else {
        header('location: ../PresentationAdmin/login.php?errorE=error');
    }
} else {
    header('location: ../PresentationAdmin/login.php?error=error');
}
