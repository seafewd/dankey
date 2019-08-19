<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('_', ' ', $_GET['product']);

$pdo = DB::getInstance();

$product = $pdo->getProduct('memory',$name);

?>

<link rel="stylesheet" href="<?php rootDir(); ?>public_html/css/product_view.css">

<article class="product-page memory">
    <div id="product-name-top">
        <h1><?php echo $product['name']; ?></h1>
        <p class="articleNumber"><?php echo t("article_number") ?>: <?php echo $product['art_no'] ?></p>
    </div>

    <div class="line_separator"></div>

    <div id="product-top">
        <div id="product-gallery">
                <img src="<?php echo ABS_URL . 'public_html/img/product_images/' . $product['picture']; ?>"/>
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
                <td>LED:</td>
                <td><?php echo $product['LED']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("number_modules") ?>:</td>
                <td><?php echo $product['number_modules']; ?></td>
            </tr>
            <tr>
                <th>RAM</th>
            </tr>
            <tr>
                <td><?php echo t("memory_type") ?>:</td>
                <td><?php echo $product['type']; ?></td>
            </tr>
            <tr>
                <td><?php echo t("memory_chip") ?>:</td>
                <td><?php echo strtoupper($product['subcategory']); ?></td>
            </tr>
            <tr>
                <td><?php echo t("storage_capacity") ?>:</td>
                <td><?php echo $product['storage']; ?> GB</td>
            </tr>
            <tr>
                <td><?php echo t("memory_speed") ?>:</td>
                <td><?php echo $product['mem_speed']; ?> MHz</td>
            </tr>
            <tr>
                <td><?php echo t("memory_form_factor") ?>:</td>
                <td><?php echo $product['memory_factor']; ?></td>
            </tr>
            <tr>
                <th><?php echo t("measures") ?></th>
            </tr>
            <tr>
                <td><?php echo t("height") ?>:</td>
                <td><?php echo $product['height']; ?> mm</td>
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
