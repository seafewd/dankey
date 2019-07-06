<?php
require_once ( __DIR__ . '/../scripts/functions.php');
?>

<body>
    <header>
        <section class="header-top-wrap">
            <div id="utility_header">
                <div class="header-1stlvl-wrap">
                    <div id="login_register-box">
                        <?php
                        if(isset($_SESSION["username"])){
                            $username=$_SESSION["username"];
                            echo t("logged_in_as") . '&nbsp; <a href="'. ABS_URL.'public/account.php">' . $username . '</a>&nbsp;-&nbsp;';
                            echo '<a href="'. ABS_URL . 'public/logout.php">' . t("logout") . '</a>';
                        } else {
                            echo '<a href="#" data-featherlight="'. ABS_URL . 'public/login.php">'.t("login").'</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="'. ABS_URL . 'public/register.php">'.t("register").'</a>';
                        }?>
                    </div>
                </div>
                <div class="header-2ndlvl-wrap">
                    <div class="header-heading-wrap">
                        <h1 class="companyHeader"><a href="<?php rootDir();?>index.php"><span class="highlight">Dankey's</span> TecShop</a></h1>
                    </div>
                    <div id="searchBar">
                        <form action="<?php rootDir();?>public/product_list.php" method=get>
                            <input type="text" name="search_text" id="search_text" placeholder="<?php echo t("search_placeholder")?>" autocomplete="off"/>
                            <div id="search_result"></div>
                            <button type="submit" class="searchBar_button"><?php echo t("search") ?></button>
                        </form>
                    </div>
                </div>
                <div class="header-3rdlvl-wrap">
                    <div id="nav-header">
                        <div class="nav-upper-wrap">
                            <nav class="nav-upper">
                                <ul class="nav-list">
                                    <li class="nav-item"><a href="<?php rootDir();?>public/contact.php"><?php echo t("contact") ?></a></li>
                                    <li class="nav-item"><a href="<?php rootDir();?>public/contact.php"><?php echo t("help") ?></a></li>
                                    <li class="nav-item"><a href="<?php rootDir();?>public/contact.php"><?php echo t("about us") ?></a></li>
                                    <li class="nav-item"><a href="<?php rootDir();?>public/contact.php"><?php echo t("social media") ?></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="shopping-wrap">
                            <?php require_once ( ABS_FILE . '/php/includes/shoppingCart.php' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
