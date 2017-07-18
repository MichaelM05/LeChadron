<?php

include_once '../Data/Data.php';
include_once '../Domain/Organization.php';

class OrganizationData extends Data {

    
    public function updateBasicInfo($info, $id) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tborganization SET " .
                "basicinformation= '" . $info ."' WHERE idtborganization=" . $id . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }
    
     public function updateHistory($history, $id) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tborganization SET " .               
                "history='" . $history . "' WHERE idtborganization=" . $id . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }
    
    public function getAllTBOrganization() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tborganization;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $organizations = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentOrganization = new Organization($row['idtborganization'], $row['nameorganization'], 
                    $row['basicinformation'], $row['history'], 
                    $row['mission'], $row['vission']);
            array_push($organizations, $currentOrganization);
        }
        return $organizations;
    }
    
}
