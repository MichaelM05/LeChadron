<?php

class ExcursionReservation {

    private $idExcursionReservation;
    private $excursion;
    private $namePerson;
    private $emailPerson;
    private $phonePerson;
    private $numberAdults;
    private $numberChildrens;
    private $dateExcursion;
    private $payment;
    private $specialRequirements;
    
    function ExcursionReservation($idExcursionReservation, $excursion, 
            $namePerson, $emailPerson, $phonePerson, $numberAdults, 
            $numberChildrens, $dateExcursion, $payment, $specialRequirements) {
        $this->idExcursionReservation = $idExcursionReservation;
        $this->excursion = $excursion;
        $this->namePerson = $namePerson;
        $this->emailPerson = $emailPerson;
        $this->phonePerson = $phonePerson;
        $this->numberAdults = $numberAdults;
        $this->numberChildrens = $numberChildrens;
        $this->dateExcursion = $dateExcursion;
        $this->payment = $payment;
        $this->specialRequirements = $specialRequirements;
    }

    function getIdExcursionReservation() {
        return $this->idExcursionReservation;
    }

    function getExcursion() {
        return $this->excursion;
    }

    function getNamePerson() {
        return $this->namePerson;
    }

    function getEmailPerson() {
        return $this->emailPerson;
    }

    function getPhonePerson() {
        return $this->phonePerson;
    }

    function getNumberAdults() {
        return $this->numberAdults;
    }

    function getNumberChildrens() {
        return $this->numberChildrens;
    }

    function getDateExcursion() {
        return $this->dateExcursion;
    }

    function getPayment() {
        return $this->payment;
    }

    function getSpecialRequirements() {
        return $this->specialRequirements;
    }

    function setIdExcursionReservation($idExcursionReservation) {
        $this->idExcursionReservation = $idExcursionReservation;
    }

    function setExcursion($excursion) {
        $this->excursion = $excursion;
    }

    function setNamePerson($namePerson) {
        $this->namePerson = $namePerson;
    }

    function setEmailPerson($emailPerson) {
        $this->emailPerson = $emailPerson;
    }

    function setPhonePerson($phonePerson) {
        $this->phonePerson = $phonePerson;
    }

    function setNumberAdults($numberAdults) {
        $this->numberAdults = $numberAdults;
    }

    function setNumberChildrens($numberChildrens) {
        $this->numberChildrens = $numberChildrens;
    }

    function setDateExcursion($dateExcursion) {
        $this->dateExcursion = $dateExcursion;
    }

    function setPayment($payment) {
        $this->payment = $payment;
    }

    function setSpecialRequirements($specialRequirements) {
        $this->specialRequirements = $specialRequirements;
    }


    
}
