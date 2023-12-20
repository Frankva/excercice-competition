<?php
include_once "models/peopleModel.php"; 
include_once "models/CountriesModel.php"; 
if (empty($_POST)) {
    $peopleModel = new CountriesModel();
    $countries = $peopleModel->find_all();
    include_once "views/register_form.php"; 
} else {
    $peopleModel = new PeopleModel();
    $form = $_POST;
    $peopleModel->insert_for_form($form);
    include_once "views/confirmation.php"; 
}

