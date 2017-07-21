<?php

include_once '../BusinessAdmin/ImageProductBusiness.php';
include_once '../Domain/ImageProduct.php';


$ds = DIRECTORY_SEPARATOR;

$storeFolder = '../Resources/ImagesProducts/';

if (!empty($_FILES)) {

    $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    
    if (in_array($_FILES['file']['type'], $allowed)) {
        $tempFile = $_FILES['file']['tmp_name'];

        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

        $targetFile = $targetPath . $_FILES['file']['name'];

        if (move_uploaded_file($tempFile, $targetFile)) {

            $image = new ImageProduct(0, $_FILES['file']['name'],$_POST['idProduct']);
            $imagesBusiness = new ImageProductBusiness();
            $result = $imagesBusiness->insertTBImageProduct($image);
        }
    }
}
?> 