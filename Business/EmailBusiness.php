<?php

include '../data/EmailData.php';

class EmailBusiness {

    private $emailData;
    
    function EmailBusiness() {
        $this->emailData = new EmailData();
    }

    public function insertTBEmail($email) {
        return $this->emailData->insertTBEmail($email);
    }

    public function updateTBEmail($email) {
        return $this->emailData->updateTBEmail($email);
    }

    public function deleteTBEmail($idEmail) {
        return $this->emailData->deleteTBEmail($idEmail);
    }

    public function getAllTBEmail() {
        return $this->emailData->getAllTBEmail();
    }
    
}
