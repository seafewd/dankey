<?php
session_start();

require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/includes/header.php' );
require_once ( ABS_FILE . '/php/includes/article_main_outer.php' );

$name = str_replace('_', ' ', $_GET['product']);

$pdo = new PDO('mysql:host=localhost;dbname=dankeyswebshop', 'dankey', 'J2DGi7Ql#XG&u^');
$statement = $pdo->prepare("SELECT * FROM graphics_cards WHERE name = :name");
$result = $statement->execute(array('name'=>$name));
$product = $statement->fetch();

if(isSet($_SESSION['cart'])){
  echo "haaallleeeefuckingjullliiaaa";
}


?>

<script>
function addToCart(name, price){
  alert("called");
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("successfully added to cart fucker?");
    }
  };
  alert("called2");
  xmlhttp.open("GET", "<?php rootDir();?>php/scripts/shopping.php?name=" + name "&price=" + price, true);
  xmlhttp.send();
}
</script>

<link rel="stylesheet" href="<?php rootDir(); ?>css/product_view.css">

<article class="product-page graphics_cards">
    <div id="product-name-top">
        <h1><?php echo $product['name']; ?></h1>
        <p class="articleNumber">Article number: 19238193</p>
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
                <input type="button" name="addToBasket" method="post" value="Add to cart" onclick="addToCart('ASUS_GeForce_GTX_1070_STRIX_O8G-GAMING', '515')"/>
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
            <tr></tr>
            <tr>
                <th>Video memory</th>
            </tr>
            <tr>
                <td>Graphics memory:</td>
                <td><?php echo $product['storage']; ?> GB</td>
            </tr>
            <tr>
                <th>Video output</th>
            </tr>
            <tr>
                <td>Clock speed:</td>
                <td><?php echo $product['clock_frequency']; ?> MHz</td>
            </tr>
            <tr>
                <td>Hardware interface:</td>
                <td><?php echo $product['hardware_interface']; ?></td>
            </tr>
            <tr>
                <th>Measures and weight</th>
            </tr>
            <tr>
                <td>Width:</td>
                <td><?php echo $product['width']; ?> cm</td>
            </tr>
            <tr>
                <td>Height:</td>
                <td><?php echo $product['height']; ?> cm</td>
            </tr>
            <tr>
                <td>Depth:</td>
                <td><?php echo $product['length']; ?> cm</td>
            </tr>
            <tr>
                <th>Supported video output:</th>
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
    s.src = 'http://dankeytec.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</section>

<?php require_once(ABS_FILE . '/php/includes/footer.php'); ?>


 ?>
