<?php

class Organization {

    private $idOrganization;
    private $nameOrganization;
    private $basicInformation;
    private $history;
    private $mission;
    private $vission;

    function Organization(
    $idOrganization, $nameOrganization, $basicInformation, $history, 
            $mission, $vission) {

        $this->idOrganization = $idOrganization;
        $this->nameOrganization = $nameOrganization;
        $this->basicInformation = $basicInformation;
        $this->history = $history;
        $this->mission = $mission;
        $this->vission = $vission;
    }

    function getIdOrganization() {
        return $this->idOrganization;
    }

    function getNameOrganization() {
        return $this->nameOrganization;
    }

    function getBasicInformation() {
        return $this->basicInformation;
    }

    function getHistory() {
        return $this->history;
    }

    function getMission() {
        return $this->mission;
    }

    function getVission() {
        return $this->vission;
    }

    function setIdOrganization($idOrganization) {
        $this->idOrganization = $idOrganization;
    }

    function setNameOrganization($nameOrganization) {
        $this->nameOrganization = $nameOrganization;
    }

    function setBasicInformation($basicInformation) {
        $this->basicInformation = $basicInformation;
    }

    function setHistory($history) {
        $this->history = $history;
    }

    function setMission($mission) {
        $this->mission = $mission;
    }

    function setVission($vission) {
        $this->vission = $vission;
    }

}
