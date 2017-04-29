<?php

include_once 'data.php';
include '../Domain/Email.php';

class EmailData extends Data {

    public function insertTBEmail($email) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbemail) AS idtbemail  FROM tbemail";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbemail VALUES (" . $nextId . ",'" .
                $email->getEmail() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBEmail($email) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbemail SET " . 
                "email='" . $email->getEmail() .
                "' WHERE idtbemail=" . $email->getIdEmail() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBEmail($idEmail) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbemail where idtbemail=" . $idEmail . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBEmail() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbemail;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $emails = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentEmail = new Email($row['idtbemail'], 
                    $row['email']);
            array_push($emails, $currentEmail);
        }
        return $emails;
    }
    
}

