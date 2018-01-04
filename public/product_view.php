<?php
require_once(__DIR__ . '/../php/scripts/functions.php');
$title;//TODO

try {
    $pdo = new PDO("mysql:host=localhost;dbname=dankeyswebshop", "dankey", "xyz");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

require_once(ABS_FILE . '/config/head.php');
require_once(ABS_FILE . '/php/includes/header.php');
require_once(ABS_FILE . '/php/includes/article_main_outer.php');
?>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_view.css">

<article class="product-page graphics_cards">
    <div id="product-name-top">
        <h1>ASUS GeForce GTX 1070 STRIX O8G-GAMING</h1>
        <p class="articleNumber">Article number: 19238193</p>
    </div>

    <div class="line_separator"></div>

    <div id="product-top">
        <div id="product-gallery">
            <img src="<?php rootDir(); ?>img/ASUS_GEFORCE_GTX_1070_STRIX_O8G.png"/>
        </div>

        <div id="product-info">
            <h2 class="product-price">518.-</h2>
            <form class="addToBasket_form">
                <input type="button" name="addToBasket" action="POST" value="Add to cart"/>
            </form>
        </div>
    </div>


    <div id="product-specifications">
        <table class="product-spec">
            <tr>
                <th>General</th>
            </tr>
            <tr>
                <td>Brand:</td>
                <td>ASUS</td>
            </tr>
            <tr>
                <td>Model:</td>
                <td>GeForce GTX 1070 STRIX O8G-GAMING</td>
            </tr>
            <tr></tr>
            <tr>
                <th>Video memory</th>
            </tr>
            <tr>
                <td>Graphics memory:</td>
                <td>8 GB</td>
            </tr>
            <tr>
                <th>Measures and weight</th>
            </tr>
            <tr>
                <td>Width:</td>
                <td>5.25 cm</td>
            </tr>
            <tr>
                <td>Height:</td>
                <td>13.4 cm</td>
            </tr>
            <tr>
                <td>Depth:</td>
                <td>29.8 cm</td>
            </tr>
            <tr>
                <th>Video output</th>
            </tr>
            <tr>
                <td>Clock speed:</td>
                <td>1594 MHz</td>
            </tr>
            <tr>
                <td>Chip manufacturer</td>
                <td>Nvidia</td>
            </tr>
            <tr>
                <td>Hardware interface:</td>
                <td>PCI Express 3.0 x 16</td>
            </tr>
            <tr>
                <td>Supported video signals:</td>
                <td>DVI, HDMI, DisplayPort</td>
            </tr>
            <tr>
                <td>Maximum resolution:</td>
                <td>7680 x 4320</td>
            </tr>
        </table>
    </div>

    </div>

</article>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>
