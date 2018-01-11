<?php
require_once ( __DIR__ . '/../scripts/functions.php');
?>

<body>
    <header>
        <div class="container">
            <div id="utility_header">
                <div id="login_register-box">
                    <?php
                    if(isset($_SESSION["username"])){
                        $username=$_SESSION["username"];
                        echo t("hello") . ' <a href="'. ABS_URL.'account.php">' . $username . '</a>, ' . t("nice_to_see_you") .'&nbsp;&nbsp;';
                        echo '<a href="'. ABS_URL . 'public/logout.php">' . t("logout") . '</a>';
                    } else {
                        echo '<a href="#" data-featherlight="'. ABS_URL . 'public/login.php">'.t("login").'</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="'. ABS_URL . 'public/register.php">'.t("register").'</a>';
                    }?>
                </div>
                <h1 class="companyHeader"><a href="<?php rootDir();?>index.php"><span class="highlight">Dankey's</span> TecShop</a></h1>
                <div id="searchBar">
                    <form action="<?php rootDir();?>public/product_list.php" method=get>
                        <input type="text" name="search_text" id="search_text" placeholder="<?php echo t("search_placeholder")?>" autocomplete="off"/>
                        <div id="search_result"></div>
                        <button type="submit" class="searchBar_button"><?php echo t("search") ?></button>
                    </form>
                </div>
                <div id="header-lower">
                    <nav>
                        <ul>
                            <li><a href="<?php rootDir();?>public/contact.php"><?php echo t("contact") ?></a></li>
                            <li><a href="<?php rootDir();?>public/contact.php"><?php echo t("help") ?></a></li>
                            <li><a href="<?php rootDir();?>public/contact.php"><?php echo t("about us") ?></a></li>
                            <li><a href="<?php rootDir();?>public/contact.php"><?php echo t("social media") ?></a></li>
                        </ul>
                    </nav>
                    <?php require_once ( ABS_FILE . '/php/includes/shoppingCart.php' ); ?>
                </div>

            </div>
        </div>
    </header>
