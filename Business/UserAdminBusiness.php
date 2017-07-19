<?php

include_once '../Data/UserAdminData.php';

class UserAdminBusiness {

    private $userAdminData;
    
    function UserAdminBusiness() {
        $this->userAdminData = new UserAdminData();
    }

    public function insertTBUserAdmin($userAdmin) {
        return $this->userAdminData->insertTBUserAdmin($userAdmin);
    }

    public function updateTBUserAdmin($userAdmin) {
        return $this->userAdminData->updateTBUserAdmin($userAdmin);
    }

    public function deleteTBUserAdmin($idUserAdmin) {
        return $this->userAdminData->deleteTBUserAdmin($idUserAdmin);
    }

    public function getAllTBUserAdmin() {
        return $this->userAdminData->getAllTBUserAdmin();
    }
    
    function login($userName, $password) {
        return $this->userAdminData->login($userName, $password);
    }
    
}
