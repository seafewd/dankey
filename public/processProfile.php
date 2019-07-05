<?php


require_once( __DIR__ . '/../php/classes/db.php');


//todo rewrite for general purpose...
$errors = array();
$data = array();

try {
    // validate variables
    isset($username) ? $username = $_POST['username'] : null;
    if (empty($username))
        $errors['name'] = 'Can\'t be empty!';

    if ( !empty($errors) ) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
        error_log("ERRORRS");
    } else {
        $db = DB::getInstance();
        $db->setUsername($username);
        $data['success'] = true;
        $data['message'] = 'Success!';
        return $data['errors'];
    }
} catch(Exception $e) {
    echo $e->getMessage();
}