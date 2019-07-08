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
    // get variables
    $sessionVarList = array(
        $username = isset($_POST['username']) ? $_POST['username'] :$_SESSION["username"],
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] :$_SESSION["firstname"],
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] :$_SESSION["lastname"],
        $city = isset($_POST['city']) ? $_POST['city'] :$_SESSION["city"],
        $email = isset($_POST['email']) ? $_POST['email'] :$_SESSION["email"],
        $phone = isset($_POST['phone']) ? $_POST['phone'] :$_SESSION["phone"],
        $language = isset($_POST['language']) ? $_POST['language'] :$_SESSION["language"],
        $sex = isset($_POST['sex']) ? $_POST['sex'] :$_SESSION["sex"],
        $address = isset($_POST['address']) ? $_POST['address'] :$_SESSION["address"],
        $avatar = isset($_POST['avatar']) ? $_POST['avatar'] :$_SESSION["avatar"]
    );

    //trim strings
    foreach ($sessionVarList as $item) {

        //$item = strip_tags(trim($item));
        //$item = str_replace(array("\r","\n"),array(" "," "),$item);
        if(empty($item))
            $errors['name'] .= 'Can\'t be empty! {in '.$item.'}';
    }

    $fieldName = isset($_POST['field']) ? $_POST['field'] : null;
    if(empty($fieldName))
        $errors['name'] = 'No field name available';
    $value = isset($_POST['value']) ? $_POST['value'] : null;
    if(empty($value))
        $errors['name'] = 'No value available';

    if ( !empty($errors) ) {
        // if there are items in errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
        error_log("ERRORRS");
        return false;

    } else {
        $db = DB::getInstance();
        $db->setUserInfo($fieldName, $value);
        $data['success'] = true;
        $data['message'] = 'Success!';
        $_SESSION[$fieldName] = $value;
        return $value;
    }
} catch(Exception $e) {
    echo $e->getMessage();
}