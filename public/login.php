<?php
require_once ( __DIR__ . '/../config/head.php' );
 ?>

<form id="login" action="<?php rootDir() ?>index.php"; method="post" accept-charset="UTF-8">
    <h2>Login</h2>
    <input type="hidden" name="submitted" id="submitted" value="1"/>

    <input type="text" placeholder="Username" name="username" id="username" maxlength="50"/></br>

    <input type="password" placeholder="Password" name="password" id="password" maxlength="50"/></br>

    <input type="submit" name="login" value="Login"/>
    <a href="#" data-featherlight="<p>Too bad for you. Feature not implemented!</p>"<span class="forgotpassword">Forgot your password?</span>
</form>
