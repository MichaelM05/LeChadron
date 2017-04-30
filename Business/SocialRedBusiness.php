<?php

include_once './Data/SocialRedData.php';

class SocialRedBusiness {

    private $socialRedData;
    
    function SocialRedBusiness() {
        $this->socialRedData = new SocialRedData();
    }

    public function insertTBSocialRed($socialRed) {
        return $this->socialRedData->insertTBSocialRed($socialRed);
    }

    public function updateTBSocialRed($socialRed) {
        return $this->socialRedData->updateTBSocialRed($socialRed);
    }

    public function deleteTBSocialRed($idSocialRed) {
        return $this->socialRedData->deleteTBSocialRed($idSocialRed);
    }

    public function getAllTBSocialRed() {
        return $this->socialRedData->getAllTBSocialRed();
    }
    
}
