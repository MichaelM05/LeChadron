<?php

include_once '../BusinessAdmin/RecognitionBusiness.php';
include_once '../Domain/Recognition.php';

if (isset($_POST["createReco"])) {

    $name = $_POST["txtNameRecognition"];
    $description = $_POST["txtDescription"];

    if (strlen($name) > 2 && strlen($description) > 2) {
        $ds = DIRECTORY_SEPARATOR;

        $storeFolder = '../Resources/ImagesRecognition/';

        if (!empty($_FILES)) {

            $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            if (in_array($_FILES['file']['type'], $allowed)) {
                $tempFile = $_FILES['file']['tmp_name'];

                $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

                $targetFile = $targetPath . $_FILES['file']['name'];

                if (move_uploaded_file($tempFile, $targetFile)) {
                    $recognition = new Recognition(0, $name, $description, $_FILES['file']['name']);
                    $recognitionBusiness = new RecognitionBusiness();
                    $result = $recognitionBusiness->insertTBRecognition($recognition);

                    if ($result) {
                        header('location: ../PresentationAdmin/adminCreateRecognition.php?success=success');
                    } else {
                        header('location: ../PresentationAdmin/adminCreateRecognition.php?error=error');
                    }
                } else {
                    header('location: ../PresentationAdmin/adminCreateRecognition.php?error=error');
                }
            }
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateRecognition.php?errorData=error');
    }
} else if (isset($_POST['update'])) {

    $name = $_POST["txtNameRecognition"];
    $description = $_POST["txtDescriptionRecognition"];
    $idRecognition = $_POST["idRecognition"];

    if (strlen($name) > 2 && strlen($description) > 2) {

        $ds = DIRECTORY_SEPARATOR;

        $storeFolder = '../Resources/ImagesRecognition/';
        
        if (!empty($_FILES['file'])) {
            
            $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
            if (in_array($_FILES['file']['type'], $allowed)) {
                $tempFile = $_FILES['file']['tmp_name'];

                $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

                $targetFile = $targetPath . $_FILES['file']['name'];

                if (move_uploaded_file($tempFile, $targetFile)) {

                    $image = $_FILES['file']['name'];
                    
                    $recognition = new Recognition($idRecognition, $name, $description, $image);

                    $recognitionBusiness = new RecognitionBusiness();
                    $result = $recognitionBusiness->updateTBRecognition($recognition);

                    if ($result) {
                        header('location: ../PresentationAdmin/adminInformationRecognition.php?success=success');
                    } else {
                        header('location: ../PresentationAdmin/adminInformationRecognition.php?error=error');
                    }
                }
            }
        } else {
            
            $image = $_POST['image'];
            
            $recognition = new Recognition($idRecognition, $name, $description, $image);

            $recognitionBusiness = new RecognitionBusiness();
            $result = $recognitionBusiness->updateTBRecognition($recognition);

            if ($result) {
                header('location: ../PresentationAdmin/adminInformationRecognition.php?success=success');
            } else {
                header('location: ../PresentationAdmin/adminInformationRecognition.php?error=error');
            }
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationRecognition.php?error=error');
    }
}    