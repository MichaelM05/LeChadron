<?php

include_once './OrganizationBusiness.php';
if (isset($_POST["basicInfo"])) {

    $txtBasicInfo = $_POST["txtBasicInfo"];

    if (strlen($txtBasicInfo) > 10) {
        $organization = new OrganizationBusiness();
        $result = $organization->updateBasicInfo($txtBasicInfo, 1);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationBasic.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationBasic.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationBasic.php?errorData=error');
    }
}else if(isset ($_POST["history"])){
    
    $txtHistory = $_POST["txtHistory"];
    if (strlen($txtHistory) > 10) {
        $organization = new OrganizationBusiness();
        $result = $organization->updateHistory($txtHistory, 1);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationHistory.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationHistory.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationHistory.php?errorData=error');
    }
    
    
}