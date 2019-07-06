<?php

require_once(__DIR__ . '/../php/classes/db.php');

//todo rewrite for general purpose...
session_start();

if (!$_SERVER["REQUEST_METHOD"] == "POST"){
    http_response_code(403);
    echo 'There was a problem with your submission. Please try again.';
    return false;
}

$errors = array();
$data = array();

try {
    // validate variables
    isset($_POST['username']) ? $username = $_POST['username'] : $username = $_SESSION["username"];
    //string trim for security
    $username = strip_tags(trim($_POST["username"]));
    $username = str_replace(array("\r","\n"),array(" "," "),$username);
    if(empty($username))
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
        $_SESSION['username'] = $username;
        return $username;
    }
} catch(Exception $e) {
    echo $e->getMessage();
}