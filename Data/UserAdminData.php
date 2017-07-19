<?php 

include_once 'Data.php';
include './Domain/UserAdmin.php';

class UserAdminData extends Data {

    public function insertTBUserAdmin($userAdmin) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbuseradmin) AS idtbuseradmin  FROM tbuseradmin";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }
        
        $queryInsert = "INSERT INTO tbuseradmin VALUES (" . $nextId . ",'" .
                $userAdmin->getNameUserAdmin() . "','" .
                $userAdmin->getEmailUserAdmin() . "','" .
                $userAdmin->getPasswordUserAdmin() . "');";

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    public function updateTBUserAdmin($userAdmin) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbuseradmin SET " . 
                "nameuseradmin='" . $userAdmin->getNameUserAdmin() .
                "', emailuseradmin='" . $userAdmin->getEmailUserAdmin() .
                "', passworduseradmin='" . $userAdmin->getPasswordUserAdmin() .
                "' WHERE idtbuseradmin=" . $userAdmin->getIdUserAdmin() . ";";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBUserAdmin($idUserAdmin) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbuseradmin where idtbuseradmin=" . $idUserAdmin . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBUserAdmin() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbuseradmin;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $userAdmins = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentUserAdmin = new UserAdmin($row['idtbuseradmin'], $row['nameuseradmin'], 
                    $row['emailuseradmin'], $row['passworduseradmin']);
            array_push($userAdmins, $currentUserAdmin);
        }
        return $userAdmins;
    }
    
    function login($userName, $password) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $result = mysqli_query($conn, "select * from tbuseradmin where"
                . " nameuseradmin = '" . $userName . "' and passworduseradmin = '"
                . $password . "';");

        mysqli_close($conn);
        
        $count = mysqli_num_rows($result);

        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
    
}