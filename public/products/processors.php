<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('_', ' ', $_GET['product']);

$pdo = DB::getInstance();

$product = $pdo->getProduct('processors',$name);

?>


<link rel="stylesheet" href="<?php rootDir(); ?>css/product_view.css">

<article class="product-page processors">
    <div id="product-name-top">
        <h1><?php echo $product['name']; ?></h1>
        <p class="articleNumber"><?php echo t("article_number") ?>: <?php echo $product['art_no'] ?></p>
    </div>

    <div class="line_separator"></div>

    <div id="product-top">
        <div id="product-gallery">
            <div class="portrait-fix">
                <img src="<?php echo ABS_URL . 'img/product_images/' . $product['picture']; ?>"/>
            </div>
        </div>

        <div id="product-info">
          <div id="product-info-inner">
            <h2 class="product-price"><?php echo $product['price']; ?>.-</h2>
            <form class="addToBasket_form">
              <?php echo '<input type="button" name="addToBasket" method="post" value="'.t("add_to_cart").'" onclick="addToCart('. '\'' . $product['name'] . '\'' . ',' . $product['price'] .')"/>'; ?>
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
                <td><?php echo $product['manufacturer']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("model") ?>:</td>
                <td><?php echo $product['name']; ?></td>
            </tr>
            <tr>
                <th><?php echo t("processor_information") ?></th>
            </tr>
            <tr>
                <td><?php echo t("number_of_cores") ?>:</td>
                <td><?php echo $product['number_cores']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("clock_freq") ?>:</td>
                <td><?php echo $product['clock_frequency']; ?> GHz</td>
            </tr>
            <tr>
                <td><?php echo t("socket") ?>:</td>
                <td><?php
                        $subcategory = $product['subcategory'];
                        $subcategory = str_replace("_", " ", $subcategory);
                        $subcategory = str_replace("s", "S", $subcategory);
                        echo $subcategory;
                    ?>
                </td>
            </tr>
            <tr>
                <td><?php echo t("family") ?>:</td>
                <td><?php echo $product['family']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("number_threads") ?>:</td>
                <td><?php echo isset($product['number_threads']) ? $product['number_threads'] : null; ?></td>
            </tr>
            <tr>
                <td><?php echo t("lithography") ?>:</td>
                <td><?php echo $product['lithography']; ?> nm</td>
            </tr>
            <tr>
                <td>L3 Cache:</td>
                <td><?php echo $product['l3_cache']; ?></td>
            </tr>
            <tr>
                <th><?php echo t("graphics_processing_unit") ?>:</th>
            </tr>
            <tr>
                <td><?php echo t("onboard_graphics") ?>:</td>
                <td><?php echo $product['onboard_graphics']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("graphics_card_model") ?>:</td>
                <td><?php //todo: echo $product['gfx_model']; ?></td>
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
