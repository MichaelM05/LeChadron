<?php

include_once '../Domain/Product.php';
include_once './ProductBusiness.php';
include_once './ImageProductBusiness.php';
if (isset($_POST["create"])) {

    $nameProduct = $_POST["txtNameProduct"];
    $descriptionProduct = $_POST["txtDescription"];
    $cheeseType = $_POST["cheeseType"];
    $creamType = $_POST["creamType"];

    if (strlen($nameProduct) > 2 && strlen($descriptionProduct) > 2) {

        $product = new Product(0, $nameProduct, $descriptionProduct, $creamType, $cheeseType);
        $productBusiness = new ProductBusiness();
        $result = $productBusiness->insertTBProduct($product);
        if ($result != -1) {
            header('location: ../PresentationAdmin/adminUpdateProduct.php?id='.$result);
        } else {
            header('location: ../PresentationAdmin/adminCreateProduct.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateProduct.php?errorData=error');
    }
}else if(isset($_POST["update"])){
    
    $nameProduct = $_POST["txtNameProduct"];
    $descriptionProduct = $_POST["txtDescription"];
    $cheeseType = $_POST["cheeseType"];
    $creamType = $_POST["creamType"];
    $id = $_POST["id"];

    if (strlen($nameProduct) > 2 && strlen($descriptionProduct) > 2) {

        $product = new Product($id, $nameProduct, $descriptionProduct, $creamType, $cheeseType);
        $productBusiness = new ProductBusiness();
        $result = $productBusiness->updateTBProduct($product);
        if ($result) {
            header('location: ../PresentationAdmin/adminUpdateProduct.php?id='.$id.'&success=success');
        } else {
            header('location: ../PresentationAdmin/adminUpdateProduct.php?id='.$id.'&error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminUpdateProduct.php?id='.$id.'&errorData=error');
    }
}else if(isset ($_POST["delete"])){
    
    
    $idProduct = $_POST["id"];
    $productBusiness = new ProductBusiness();
    $result = $productBusiness->deleteTBProduct($idProduct);
    if($result){
        header('location: ../PresentationAdmin/adminInformationProduct.php?success=success');
    }else{
        header('location: ../PresentationAdmin/adminInformationProduct.php?error=error');
    }
    
}else if(isset ($_POST["deleteImage"])){
    
    $idProduct = $_POST["id"];
    $path = $_POST["path"];
    $imageProduct = new ImageProductBusiness();
    $result = $imageProduct->deleteTBImageProduct($idProduct);    
    if($result){
        unlink("../Resources/ImagesProduct/".$path);
        header('location: ../PresentationAdmin/adminInformationProduct.php?success=success');
    }else{
        header('location: ../PresentationAdmin/adminInformationProduct.php?error=error');
    }
    
    
}
