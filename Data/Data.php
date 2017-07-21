<?php

class Data {

    public $server;
    public $user;
    public $password;
    public $db;
    public $connection;
    public $isActive;

    public function Data() {

        $hostName = gethostname();

        switch ($hostName) {
            case "admin": //Joseph's PC
                $this->isActive = false;
                $this->server = "127.0.0.1";
                $this->user = "root";
                $this->password = "";
                $this->db = "lechaudron";
                break;
            case "Michael": //Michael's PC
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "root";
                $this->password = "";
                $this->db = "lechaudron";
                break;
            default: //Hosting
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "id2310969_lechaudron";
                $this->password = "lechaudron";
                $this->db = "id2310969_lechaudron";
                break;
        }
    }

}
