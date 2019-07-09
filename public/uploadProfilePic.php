<?php

/**
 *   upload a new profile picture
 *   ajax post transaction
 */

$db = DB::getInstance();

if(isSet($_POST['upload'])){
    if( $_FILES['image']['name'] <> ""){
        $validation = array("image/png", "image/jpeg", "image/gif");
        if(! in_array($_FILES["image"]["type"], $validation)){
            echo "<p>".t("picture_error")."<p>";
        }else{
            $temp = explode(".", $_FILES["image"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            move_uploaded_file($_FILES["image"]["tmp_name"], ABS_URL.'img/avatars/'.$newfilename);
            $_SESSION["avatar"] = $newfilename;
            $statement = $db->db->prepare("UPDATE users SET avatar='$newfilename' WHERE id = :userid");
            $result = $statement->execute(array('userid' => $_SESSION['userid']));
            $user = $statement->fetch();
        }
    }
}