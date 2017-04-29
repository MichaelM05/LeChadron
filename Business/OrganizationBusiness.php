<?php

include '../data/OrganizationData.php';

class OrganizationBusiness {

    private $organizationData;
    
    function OrganizationBusiness() {
        $this->organizationData = new OrganizationData();
    }

    public function insertTBOrganization($organization) {
        return $this->organizationData->insertTBOrganization($organization);
    }

    public function updateTBOrganization($organization) {
        return $this->organizationData->updateTBOrganization($organization);
    }

    public function deleteTBOrganization($idOrganization) {
        return $this->organizationData->deleteTBOrganization($idOrganization);
    }

    public function getAllTBOrganization() {
        return $this->organizationData->getAllTBOrganization();
    }
    
}
