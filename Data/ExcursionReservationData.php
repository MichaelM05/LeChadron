<?php

include_once 'data.php';
include '../Domain/ExcursionReservation.php';

class ExcursionReservationData extends Data {

    public function insertTBExcursionReservation($excursionReservation) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(ibtbexcursionreservation) AS ibtbexcursionreservation  "
                . "FROM tbexcursionreservation";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbexcursionreservation VALUES (" . $nextId . ",'" .
                $excursionReservation->getExcursion() . "','" .
                $excursionReservation->getNamePerson() . "','" .
                $excursionReservation->getEmailPerson() . "','" .
                $excursionReservation->getPhonePerson() . "'," .
                $excursionReservation->getNumberAdults() . "," .
                $excursionReservation->getNumberChildrens() . ",'" .
                $excursionReservation->getDateExcursion() . "','" .
                $excursionReservation->getPayment() . "','" .
                $excursionReservation->getSpecialRequirements() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBExcursionReservation($excursionReservation) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbexcursionreservation SET " . 
                "excursion = '" . $excursionReservation->getExcursion() . "'," .
                "nameperson = '" . $excursionReservation->getNamePerson() . "'," .
                "emailperson = '" . $excursionReservation->getEmailPerson() . "'," .
                "phoneperson = '" . $excursionReservation->getPhonePerson() . "'," .
                "numberadults = " . $excursionReservation->getNumberAdults() . "," .
                "numberchildrens = " . $excursionReservation->getNumberChildrens() . "," .
                "dateexcursion = '" . $excursionReservation->getDateExcursion() . "'," .
                "payment = '" . $excursionReservation->getPayment() . "'," .
                "specialrequirements = '" . $excursionReservation->getSpecialRequirements() .
                "' WHERE ibtbexcursionreservation=" . $excursionReservation->getIdExcursionReservation() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBExcursionReservation($idExcursionReservation) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbexcursionreservation where "
                . "ibtbexcursionreservation=" . $idExcursionReservation . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBExcursionReservation() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbexcursionreservation;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $excursionReservations = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentReservation = new ExcursionReservation($row['ibtbexcursionreservation'], 
                    $row['excursion'], 
                    $row['nameperson'], $row['emailperson'], 
                    $row['phoneperson'], $row['numberadults'], $row['numberchildrens'],
                    $row['dateexcursion'], $row['payment'], $row['specialrequirements']);
            array_push($excursionReservations, $currentReservation);
        }
        return $excursionReservations;
    }
    
}