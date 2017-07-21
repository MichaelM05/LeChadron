<?php

include_once '../Data/Data.php';
include '../Domain/ImageProduct.php';

class ImageProductData extends Data {

    public function insertTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbimageproduct) AS idtbimageproduct  FROM "
                . "tbimageproduct;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbimageproduct VALUES (" . $nextId . ",'" .
                $imageProduct->getPathImageProduct() . "'," .
                $imageProduct->getProduct() . ");";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbimageproduct SET " .
                "pathimageproduct='" . $imageProduct->getPathImageProduct() .
                "', product=" . $imageProduct->getProduct() .
                " WHERE idtbimageproduct=" . $imageProduct->getIdImageProduct() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageProduct($idImageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbimageproduct where idtbimageproduct=" .
                $idImageProduct . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageProduct() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimageproduct;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $imageProducts = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageProduct = new ImageProduct($row['idtbimageproduct'], $row['pathimageproduct'], $row['product']);
            array_push($imageProducts, $currentImageProduct);
        }
        return $imageProducts;
    }

    public function getImageByProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimageproduct where product = " . $product . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $imageProducts = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageProduct = new ImageProduct($row['idtbimageproduct'], $row['pathimageproduct'], $row['product']);
            array_push($imageProducts, $currentImageProduct);
        }
        return $imageProducts;
    }

}
