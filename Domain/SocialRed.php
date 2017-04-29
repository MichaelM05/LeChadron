<?php

class SocialRed {

    private $idSocialRed;
    private $socialRed;
    private $nameSocialRed;
    private $urlSocialRed;
    
    function SocialRed($idSocialRed, $socialRed, $nameSocialRed, $urlSocialRed) {
        $this->idSocialRed = $idSocialRed;
        $this->socialRed = $socialRed;
        $this->nameSocialRed = $nameSocialRed;
        $this->urlSocialRed = $urlSocialRed;
    }

    function getIdSocialRed() {
        return $this->idSocialRed;
    }

    function getSocialRed() {
        return $this->socialRed;
    }

    function getNameSocialRed() {
        return $this->nameSocialRed;
    }

    function getUrlSocialRed() {
        return $this->urlSocialRed;
    }

    function setIdSocialRed($idSocialRed) {
        $this->idSocialRed = $idSocialRed;
    }

    function setSocialRed($socialRed) {
        $this->socialRed = $socialRed;
    }

    function setNameSocialRed($nameSocialRed) {
        $this->nameSocialRed = $nameSocialRed;
    }

    function setUrlSocialRed($urlSocialRed) {
        $this->urlSocialRed = $urlSocialRed;
    }


    
}
