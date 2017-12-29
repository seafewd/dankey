<?php
session_start();
session_unset();
session_destroy();
require_once (__DIR__ . '/../scripts/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
</head>
<body>

<h1>Logout</h1>
<p>You have successfully logged out. We hope to see you again soon! <a href="<?php rootDir();?>index.php">Back to site...</a></p>
<div style="width:100%;height:0;padding-bottom:75%;position:relative;">
  <iframe src="https://giphy.com/embed/LPouSsdIp6Wgo" width="50%" height="50%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen>
  </iframe>
</div>
<p>
  <a href="https://giphy.com/gifs/donkey-kong-country-LPouSsdIp6Wgo">via GIPHY</a>
</p>

</body>
</html>
