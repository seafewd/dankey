<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$name = str_replace('_', ' ', $_GET['product']);

$pdo = DB::getInstance();

$statement = $pdo->db->prepare("SELECT * FROM memory WHERE name = :name");
$result = $statement->execute(array('name'=>$name));
$product = $statement->fetch();

?>

<script>
function addToCart(name, price){
  //var finalName = name.replace(" ", "_");
  var url = "<?php rootDir();?>php/scripts/shopping.php?";
  var params = "name=" + name + "&price=" + price;
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      window.location.reload();
    }
  };
  xmlhttp.open("GET", url+params , true);
  xmlhttp.send();
}
</script>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_view.css">

<article class="product-page memory">
    <div id="product-name-top">
        <h1><?php echo $product['name']; ?></h1>
        <p class="articleNumber">Article number: <?php echo $product['art_no'] ?></p>
    </div>

    <div class="line_separator"></div>

    <div id="product-top">
        <div id="product-gallery">
            <div id="product-gallery-inner">
                <img src="<?php echo ABS_URL . 'img/product_images/' . $product['picture']; ?>"/>
            </div>
        </div>

        <div id="product-info">
          <div id="product-info-inner">
            <h2 class="product-price"><?php echo $product['price']; ?>.-</h2>
            <form class="addToBasket_form">
              <?php echo '<input type="button" name="addToBasket" method="post" value="Add to cart" onclick="addToCart('. '\'' . $product['name'] . '\'' . ',' . $product['price'] .')"/>'; ?>
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
                <td><?php echo $product['manufacturer']; ?></td>
            </tr>
            <tr>
                <td>Model:</td>
                <td><?php echo $product['name']; ?></td>
            </tr>
            <tr>
                <td>LED:</td>
                <td><?php echo $product['LED']; ?></td>
            </tr>
            <tr>
                <td>Number of modules:</td>
                <td><?php echo $product['number_modules']; ?></td>
            </tr>
            <tr>
                <th>RAM</th>
            </tr>
            <tr>
                <td>Memory type:</td>
                <td><?php echo $product['type']; ?></td>
            </tr>
            <tr>
                <td>Memory chip:</td>
                <td><?php echo strtoupper($product['subcategory']); ?></td>
            </tr>
            <tr>
                <td>Storage capacity:</td>
                <td><?php echo $product['storage']; ?> GB</td>
            </tr>
            <tr>
                <td>Memory speed:</td>
                <td><?php echo $product['mem_speed']; ?> MHz</td>
            </tr>
            <tr>
                <td>Memory form factor:</td>
                <td><?php echo $product['memory_factor']; ?></td>
            </tr>
            <tr>
                <th>Measures</th>
            </tr>
            <tr>
                <td>Height:</td>
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
