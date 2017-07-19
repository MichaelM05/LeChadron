<?php

include_once './AdministratorBusiness.php';
include_once '../Domain/User.php';

if (isset($_POST['create'])) {

    $userName = $_POST['txtUserName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    $user = new User($userName, $email, $password);
    $adminBusiness = new AdministratorBusiness();
    $result = $adminBusiness->insertTBuser($user);
    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successCreate=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorCreate=error');
    }
} else if (isset($_POST['delete'])) {

    $idUser = $_POST['idUser'];

    $adminBusiness = new AdministratorBusiness();
    $result = $adminBusiness->deleteTBuser($idUser);

    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorDelete=error');
    }
} else if (isset($_POST['update'])) {

    $userName = $_POST['txtUserName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['password'];
    $idUser = $_POST['idUser'];

    if (strlen($userName) > 2 && strlen($email) > 2 && strlen($password) > 2) {
        $user = new User($userName, $email, $password);
        $user->setIdUser($idUser);
        $adminBusiness = new AdministratorBusiness();
        $result = $adminBusiness->updateTBuser($user);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationAdministrator.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationAdministrator.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationAdministrator.php?errorData=error');
    }
}