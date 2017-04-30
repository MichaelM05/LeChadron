<?php

include_once './Business/OrganizationBusiness.php';
include_once './Business/ProductBusiness.php';
include_once './Business/PhoneBusiness.php';
include_once './Business/EmailBusiness.php';
include_once './Business/ExcursionBusiness.php';
include_once './Business/RecognitionBusiness.php';
include_once './Business/SalesFairBusiness.php';
include_once './Business/SalesTradeBusiness.php';
include_once './Business/SocialRedBusiness.php';
include_once './Business/CheeseTypeBusiness.php';

$organizationBusiness = new OrganizationBusiness();
$organization = $organizationBusiness->getAllTBOrganization();

$productBusiness = new ProductBusiness();
$product = $productBusiness->getAllTBProduct();

$phoneBusiness = new PhoneBusiness();
$phone = $phoneBusiness->getAllTBPhone();

$emailBusiness = new EmailBusiness();
$email = $emailBusiness->getAllTBEmail();

$excursionBusiness = new ExcursionBusiness();
$excursion = $excursionBusiness->getAllTBExcursion();

$recognitionBusiness = new RecognitionBusiness();
$recognition = $recognitionBusiness->getAllTBRecognition();

$salesFairBusiness = new SalesFairBusiness();
$salesFair = $salesFairBusiness->getAllTBSalesFair();

$salesTradeBusiness = new SalesTradeBusiness();
$salesTrade = $salesTradeBusiness->getAllTBSalesTrade();

$socialRedBusiness = new SocialRedBusiness();
$socialRed = $socialRedBusiness->getAllTBSocialRed();

$cheeseTypeBusiness = new CheeseTypeBusiness();
$cheseeType = $cheeseTypeBusiness->getAllTBCheeseType();