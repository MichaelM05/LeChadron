<?php

include_once '../BusinessAdmin/CreamTypeBusiness.php';
include_once '../Domain/CreamType.php';

if (isset($_POST['update'])) {

    $creamType = $_POST['txtCreamType'];
    $idCreamType = $_POST['idCreamType'];

    if (strlen($creamType) > 2) {
        $creamType = new CreamType($idCreamType, $creamType);
        $creamTypeBusiness = new CreamTypeBusiness();
        $result = $creamTypeBusiness->updateTBCreamType($creamType);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationCreamType.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationCreamType.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationCreamType.php?errorData=error');
    }
} else if ($_POST['create']) {

    $creamType = $_POST['txtCreamType'];

    if (strlen($creamType) > 2) {
        $creamType = new CreamType(0, $creamType);
        $creamTypeBusiness = new CreamTypeBusiness();
        $result = $creamTypeBusiness->insertTBCreamType($creamType);

        if ($result) {
            header('location: ../PresentationAdmin/adminCreateDeleteCreamType.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteCreamType.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCreamType.php?errorData=error');
    }
} else if (isset($_POST['delete'])) {

    $idCreamType = $_POST['idCreamType'];

    $creamTypeBusiness = new CreamTypeBusiness();
    $result = $creamTypeBusiness->deleteTBCreamType($idCreamType);

    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteCreamType.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteCreamType.php?errorDelete=error');
    }
}