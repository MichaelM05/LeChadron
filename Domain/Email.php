<?php

class Email {

    private $idEmail;
    private $email;
    
    function Email($idEmail, $email) {
        $this->idEmail = $idEmail;
        $this->email = $email;
    }

    function getIdEmail() {
        return $this->idEmail;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdEmail($idEmail) {
        $this->idEmail = $idEmail;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
