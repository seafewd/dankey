<?php
$title = 'Contact & Customer Service';

require_once(__DIR__ . '/../config/head.php');
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
echo '
    <h1>404 error</h1></br>
    <p>The page couldn\'t be found!</p></br>
    <p>'.$_SERVER['REQUEST_URI'].' does not exist.</p>
';

