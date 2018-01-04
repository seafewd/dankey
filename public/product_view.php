<?php
require_once(__DIR__ . '/../php/scripts/functions.php');
$title;//TODO

try {
    $pdo = new PDO("mysql:host=localhost;dbname=dankeyswebshop", "dankey", "J2DGi7Ql#XG&u^");
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
            <div id="product-gallery-inner">
                <img src="<?php rootDir(); ?>img/ASUS_GEFORCE_GTX_1070_STRIX_O8G.png"/>
            </div>
        </div>

        <div id="product-info">
          <div id="product-info-inner">
            <h2 class="product-price">518.-</h2>
            <form class="addToBasket_form">
                <input type="button" name="addToBasket" action="POST" value="Add to cart"/>
            </form>
          </div>
        </div>
    </div>

    <div id="product-specifications">
      <h2>Product specifications</h2>
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

<div class="line_separator"></div>

<section id="disqus">
    <div id="disqus_thread"></div>
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://dankeytec.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</section>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>
