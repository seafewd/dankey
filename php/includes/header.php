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
                        echo 'Hello <a href="'. ABS_URL.'account.php">' . $username . '</a>, nice to see you!&nbsp;&nbsp;';
                        echo '<a href="'. ABS_URL . 'php/scripts/logout.php">Log out</a>';
                    } else {
                        echo '<a href="#" data-featherlight="'. ABS_URL . 'php/includes/login.php">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="'. ABS_URL . 'public/register.php">Register</a>';
                    }?>
                </div>
                <h1 class="companyHeader"><a href="<?php rootDir();?>index.php"><span class="highlight">Dankey's</span> TecShop</a></h1>
                <div id="searchBar">
                    <form action="<?php rootDir();?>php/scripts/redirect.php" method=get>
                        <input type="text" name="search_text" id="search_text" placeholder="Search for a product..." autocomplete="off"/>
                        <div id="search_result"></div>
                        <button type="submit" class="searchBar_button">Search</button>
                    </form>
                </div>
                <div id="header-lower">
                    <nav>
                        <ul>
                            <li><a href="<?php rootDir();?>public/contact.php">Contact</a></li>
                            <li><a href="<?php rootDir();?>public/contact.php">Help</a></li>
                            <li><a href="<?php rootDir();?>public/contact.php">About us</a></li>
                            <li><a href="<?php rootDir();?>public/contact.php">Social Media</a></li>
                        </ul>
                    </nav>
                    <div id="shopping-cart-icon">
                        <div id="shopping-cart-window">
                            <h2>Your shopping cart</h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
