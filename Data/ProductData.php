<?php

include_once 'Data.php';
include './Domain/Product.php';

class ProductData extends Data {

    public function insertTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbproduct) AS idtbproduct  FROM tbproduct";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbproduct VALUES (" . $nextId . ",'" .
                $product->getNameProduct() . "','" .
                $product->getDescriptionProduct() . "'," .
                $product->getCreamType() . "," .
                $product->getCheeseType() . ");";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbproduct SET " .
                "nameproduct='" . $product->getNameProduct() .
                "', descriptionproduct='" . $product->getDescriptionProduct() .
                "', creamtype=" . $product->getCreamType() .
                ", cheesetype=" . $product->getCheeseType() .
                " WHERE idtbproduct=" . $product->getIdProduct() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBProduct($idProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbproduct where idtbproduct=" . $idProduct . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBProduct() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT pr.idtbproduct, pr.nameproduct, pr.descriptionproduct, crt.creamtype,"
                . " cht.cheesetype FROM tbproduct pr INNER join tbcheesetype "
                . "cht on pr.cheesetype = cht.idtbcheesetype inner join tbcreamtype "
                . "crt on pr.creamtype = crt.idtbcreamtype;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $products = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentProduct = new Product($row['idtbproduct'], $row['nameproduct'], $row['descriptionproduct'], $row['creamtype'], $row['cheesetype']);
            array_push($products, $currentProduct);
        }
        return $products;
    }

    public function getProductById($id) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT pr.idtbproduct, pr.nameproduct, pr.descriptionproduct, crt.creamtype,"
                . " cht.cheesetype FROM tbproduct pr INNER join tbcheesetype "
                . "cht on pr.cheesetype = cht.idtbcheesetype inner join tbcreamtype "
                . "crt on pr.creamtype = crt.idtbcreamtype where pr.idtbproduct = " .
                $id . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $row = mysqli_fetch_array($result);
        $currentProduct = new Product($row['idtbproduct'],
                $row['nameproduct'], $row['descriptionproduct'],
                $row['creamtype'], $row['cheesetype']);
        return $currentProduct;
    }

}
