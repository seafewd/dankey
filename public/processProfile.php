<?php

require_once(__DIR__ . '/../php/scripts/config.php');
require_once( ABS_FILE . '/php/classes/db.php');

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
        $username = isset($_POST['username']) ? $_POST['username'] : $_SESSION["username"],
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : $_SESSION["firstname"],
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : $_SESSION["lastname"],
        $city = isset($_POST['city']) ? $_POST['city'] : $_SESSION["city"],
        $email = isset($_POST['email']) ? $_POST['email'] : $_SESSION["email"],
        $phone = isset($_POST['phone']) ? $_POST['phone'] : $_SESSION["phone"],
        $language = isset($_POST['language']) ? $_POST['language'] : $_SESSION["language"],
        $sex = isset($_POST['sex']) ? $_POST['sex'] : $_SESSION["sex"],
        $address = isset($_POST['address']) ? $_POST['address'] : $_SESSION["address"],
        $avatar = isset($_POST['avatar']) ? $_POST['avatar'] : $_SESSION["avatar"]
    );

    //check if user is changing a field like "username" and not uploading a picture
    if ($_POST['fieldEdit']) {
        $fieldName = isset($_POST['field']) ? $_POST['field'] : null;
        if(empty($fieldName))
            $errors['name'] = 'No field name available';
        $value = isset($_POST['value']) ? $_POST['value'] : null;
        if(empty($value))
            $errors['name'] = 'No value available';

        // if there are items in errors array, return those errors
        // otherwise carry on with query
        if ( !empty($errors) ) {
            $data['success'] = false;
            $data['errors'] = $errors;
            foreach ($data['errors'] as $error ){
                echo $error;
            }
            return false;
        }
    }

    $db = DB::getInstance();
    //image upload
    if (isset($_FILES['image'])) {
        $fieldName = 'avatar';

        if(!is_array($_FILES)) {
            echo 'Something went wrong. Try again.';
            return false;
        }
        //check if file is uploaded
        if(!is_uploaded_file($_FILES['image']['tmp_name'])) {
            echo 'Something went wrong when uploading your file. Try again.';
            return false;
        }
        $sourcePath = $_FILES['image']['tmp_name'];
        $targetPath = ABS_FILE.'/img/avatars/'.$_FILES['image']['tmp_name'];
        if(move_uploaded_file($sourcePath, $targetPath)) {
            echo 'PHP SUCCESS!!!!!';
            $fieldName = 'avatar';
            $value = basename($_FILES['image']['name']);
        } else {
            echo 'Unable to move file. Try again.';
            return false;
        }
    }
    $db->setUserInfo($fieldName, $value);
    $data['success'] = true;
    $data['message'] = 'Success!';
    $_SESSION[$fieldName] = $value;
    unset($_POST[$fieldName]);
    return $value;

} catch(Exception $e) {
    echo $e->getMessage();
}