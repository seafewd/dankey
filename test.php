<html>
    <head>
        <title>Test File</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
    </head>
    <body>
<?php

# Enable Error Reporting and Display:
error_reporting(~0);
ini_set('display_errors', 1);

$adr = 'Sydney+NSW';
echo $adr;
$url = "en.json";
echo '<p>'.$url.'</p>';

$jsonData = file_get_contents("https://dankeytec.internet-box.ch/languages/en.json");


# Output information about allow_url_fopen:
if (ini_get('allow_url_fopen') == 1) {
    echo '<p style="color: #0A0;">fopen is allowed on this host.</p>';
} else {
    echo '<p style="color: #A00;">fopen is not allowed on this host.</p>';
}


# Decide what to do based on return value:
if ($jsonData === FALSE) {
    echo "Failed to open the URL ", htmlspecialchars($url);
} elseif ($jsonData === NULL) {
    echo "Function is disabled.";
} else {
   echo $jsonData;
}

?>
    </body>
</html>
