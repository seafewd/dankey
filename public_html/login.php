<?php
require_once ( __DIR__ . '/../php/scripts/functions.php' );
require_once ( __DIR__ . '/../php/scripts/languages.php' );
 ?>

<form id="login" action="<?php rootDir() ?>index.php"; method="post" accept-charset="UTF-8">
    <h2><?php echo t("login") ?></h2>
    <input type="hidden" name="submitted" id="submitted" value="1"/>

    <input type="text" placeholder="<?php echo t("username")?>" name="username" id="username" maxlength="50"/></br>

    <input type="password" placeholder="<?php echo t("password")?>" name="password" id="password" maxlength="50"/></br>

    <input type="submit" name="login" value="<?php echo t("login")?>"/>
    <a href="#" data-featherlight="<p><?php echo t("not_implemented")?></p>"<span class="forgotpassword"><?php echo t("forgot") ?></span>
</form>
