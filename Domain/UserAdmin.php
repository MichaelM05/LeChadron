<?php

class UserAdmin {

    private $idUserAdmin;
    private $nameUserAdmin;
    private $emailUserAdmin;
    private $passwordUserAdmin;
    
    function __construct($idUserAdmin, $nameUserAdmin, $emailUserAdmin, 
            $passwordUserAdmin) {
        $this->idUserAdmin = $idUserAdmin;
        $this->nameUserAdmin = $nameUserAdmin;
        $this->emailUserAdmin = $emailUserAdmin;
        $this->passwordUserAdmin = $passwordUserAdmin;
    }
    
    function getIdUserAdmin() {
        return $this->idUserAdmin;
    }

    function getNameUserAdmin() {
        return $this->nameUserAdmin;
    }

    function getEmailUserAdmin() {
        return $this->emailUserAdmin;
    }

    function getPasswordUserAdmin() {
        return $this->passwordUserAdmin;
    }

    function setIdUserAdmin($idUserAdmin) {
        $this->idUserAdmin = $idUserAdmin;
    }

    function setNameUserAdmin($nameUserAdmin) {
        $this->nameUserAdmin = $nameUserAdmin;
    }

    function setEmailUserAdmin($emailUserAdmin) {
        $this->emailUserAdmin = $emailUserAdmin;
    }

    function setPasswordUserAdmin($passwordUserAdmin) {
        $this->passwordUserAdmin = $passwordUserAdmin;
    }

}
