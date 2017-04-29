<?php

class Phone {

    private $idPhone;
    private $phone;
    
    function Phone($idPhone, $phone) {
        $this->idPhone = $idPhone;
        $this->phone = $phone;
    }

    function getIdPhone() {
        return $this->idPhone;
    }

    function getPhone() {
        return $this->phone;
    }

    function setIdPhone($idPhone) {
        $this->idPhone = $idPhone;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }


    
}
