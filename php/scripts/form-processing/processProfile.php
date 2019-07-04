<?php

require_once( __DIR__ . '/../../../config/head.php');


//todo rewrite for general purpose...
$errors = array();
$data = array();

// validate variables

if (empty($_POST['username']))
    $errors['name'] = 'Can\'t be empty!';

if ( !empty($errors)) {
    // if there are items in our errors array, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {
    $db = DB::getInstance();
    $db->setUsername($_POST['username']);

    $data['success'] = true;
    $data['message'] = 'Success!';
}