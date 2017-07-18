<?php

include '../DataAdmin/OrganizationData.php';

class OrganizationBusiness {

    private $organizationData;
    
    function OrganizationBusiness() {
        $this->organizationData = new OrganizationData();
    }

    public function updateHistory($history,$id) {
        return $this->organizationData->updateHistory($history,$id);
    }
     public function updateBasicInfo($info, $id) {
        return $this->organizationData->updateBasicInfo($info, $id);
    }

    public function getAllTBOrganization() {
        return $this->organizationData->getAllTBOrganization();
    }
    
    
    
}
