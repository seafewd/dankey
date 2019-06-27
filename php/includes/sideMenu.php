<nav id="sideMenu">
    <div class="sMenu-heading-wrap">
        <h3><?php echo t("products") ?></h3>
        <div class="menu-icon-wrap" onclick="toggleMenuIcon(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
  <?php
    require_once( ABS_FILE . '/php/scripts/functions.php');
    require_once( ABS_FILE . '/php/scripts/menuLoop.php');
   ?>
</nav>
