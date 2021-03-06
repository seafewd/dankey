<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('_', ' ', $_GET['product']);

$pdo = DB::getInstance();

$product = $pdo->getProduct('graphics_cards',$name);

?>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_view.css">

<article class="product-page graphics_cards">
    <div id="product-name-top">
        <h1><?php echo $product['name']; ?></h1>
        <p class="articleNumber"><?php echo t("article_number") ?>: <?php echo $product['art_no'] ?></p>
    </div>

    <div class="line_separator"></div>

    <div id="product-top">
        <div id="product-gallery">
            <img src="<?php echo ABS_URL . 'img/product_images/' . $product['picture']; ?>"/>
        </div>

        <div id="product-info">
            <div id="product-info-inner">
                <h2 class="product-price"><?php echo $product['price']; ?>.-</h2>
                <form class="addToBasket_form">
                    <?php echo '<input type="button" name="addToBasket" method="POST" value="'.t("add_to_cart").'" onclick="addToCart('. '\'' . $product['name'] . '\'' . ',' . $product['price'] .')"/>'; ?>
                </form>
            </div>
        </div>
        <script>
            //center content of div
            $('#product-info-inner').css({top:'50%',right:'0',margin:'-'+($('#product-info-inner').height() / 2)+'px 0 0 -'+($('#product-info-inner').width() / 2)+'px'});
        </script>
    </div>

    <div id="product-specifications">
        <h2><?php echo t("product specifications") ?></h2>
        <table class="product-spec">
            <tr>
                <th><?php echo t("general") ?></th>
            </tr>
            <tr>
                <td><?php echo t("brand") ?>:</td>
                <td><?php echo isset($product['manufacturer']) ? $product['manufacturer'] : null; ?></td>
            </tr>
            <tr>
                <td><?php echo t("model") ?>:</td>
                <td><?php echo $product['name']; ?></td>
            </tr>
            <tr></tr>
            <tr>
                <th><?php echo t("video_memory") ?></th>
            </tr>
            <tr>
                <td><?php echo t("graphics_memory") ?>:</td>
                <td><?php echo $product['storage']; ?> GB</td>
            </tr>
            <tr>
                <th><?php echo t("video_output") ?></th>
            </tr>
            <tr>
                <td><?php echo t("clock_speed") ?>:</td>
                <td><?php echo $product['clock_frequency']; ?> MHz</td>
            </tr>
            <tr>
                <td><?php echo t("hardware_interface") ?>:</td>
                <td><?php echo $product['hardware_interface']; ?></td>
            </tr>
            <tr>
                <th><?php echo t("measures") ?></th>
            </tr>
            <tr>
                <td><?php echo t("width") ?>:</td>
                <td><?php echo $product['width']; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo t("height") ?>:</td>
                <td><?php echo $product['height']; ?> cm</td>
            </tr>
            <tr>
                <td><?php echo t("depth") ?>:</td>
                <td><?php echo $product['length']; ?> cm</td>
            </tr>
            <tr>
                <th><?php echo t("supported_video_output") ?>:</th>
            </tr>
            <tr>
                <td>HDMI</td>
                <td><?php echo $product['hdmi']; ?></td>
            </tr>
            <tr>
                <td>DisplayPort</td>
                <td><?php echo $product['displayport']; ?></td>
            </tr>
            <tr>
                <td>DVI</td>
                <td><?php echo $product['dvi']; ?></td>
            </tr>
        </table>
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
