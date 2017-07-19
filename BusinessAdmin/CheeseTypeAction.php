<?php

include_once '../BusinessAdmin/CheeseTypeBusiness.php';
include_once '../Domain/CheeseType.php';

if (isset($_POST['update'])) {

    $cheeseType = $_POST['txtCheeseType'];
    $idCheeseType = $_POST['idCheeseType'];

    if (strlen($cheeseType) > 2) {
        $cheeseType = new CheeseType($idCheeseType, $cheeseType);
        $cheeseTypeBusiness = new CheeseTypeBusiness();
        $result = $cheeseTypeBusiness->updateTBCheeseType($cheeseType);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationCheeseType.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationCheeseType.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationCheeseType.php?errorData=error');
    }
} else if ($_POST['create']) {

    $cheeseType = $_POST['txtCheeseType'];

    if (strlen($cheeseType) > 2) {
        $cheeseType = new CheeseType(0, $cheeseType);
        $cheeseTypeBusiness = new CheeseTypeBusiness();
        $result = $cheeseTypeBusiness->insertTBCheeseType($cheeseType);

        if ($result) {
            header('location: ../PresentationAdmin/adminCreateDeleteCheeseType.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteCheeseType.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCheeseType.php?errorData=error');
    }
} else if (isset($_POST['delete'])) {

    $idCheeseType = $_POST['idCheeseType'];

    $cheeseTypeBusiness = new CheeseTypeBusiness();
    $result = $cheeseTypeBusiness->deleteTBCheeseType($idCheeseType);

    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteCheeseType.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCheeseType.php?errorDelete=error');
    }
}