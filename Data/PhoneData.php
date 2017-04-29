<?php

include_once 'data.php';
include '../Domain/Phone.php';

class PhoneData extends Data {

    public function insertTBPhone($phone) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbphone) AS idtbphone  FROM tbphone";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbphone VALUES (" . $nextId . ",'" .
                $phone->getPhone() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBPhone($phone) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbphone SET " . 
                "phone='" . $phone->getPhone() .
                "' WHERE idtbphone=" . $phone->getIdPhone() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBPhone($idPhone) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbphone where idtbphone=" . $idPhone . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBPhone() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbphone;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $phones = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPhone = new Phone($row['idtbphone'], 
                    $row['phone']);
            array_push($phones, $currentPhone);
        }
        return $phones;
    }
    
}



