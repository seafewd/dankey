<?php
require_once ( __DIR__ . '/../../config/head.php' );
require_once ( ABS_FILE . '/php/classes/db.php');

$pdo = DB::getInstance();

//is set if user comes from sidemenu choice
if(isSet($_GET['name'])){

    $subcategory = $_GET['name'];
    $category = $pdo->getCategoryBySubcategory($subcategory);
    $product_list = $pdo->getAllProducts($category,$subcategory);

    if (sizeOf($product_list) === 0) {
        echo '<h2>' . t("no_products_found") . '</h2>';
    }

    ?>

    <ul id="productList">
        <?php foreach($product_list as $product) { ?>
            <?php $name = str_replace(' ', '_', $product["name"]) ?>
            <li>
                <div class="product_wrapper">
                    <div class="product_tnail">
                        <img src="<?php rootDir(); ?>img/product_images/<?php echo $product['picture'] ?>">
                    </div>
                    <div class="product_main">
                        <?php echo '<a href="' . ABS_URL . 'public/products/' . $category . '.php?product=' . $name . '">' . '<h2>' . $product['name'] . '</h2>' . '</a>'; ?>
                        <?php echo '<p class="description">' . $product['description'] . '</p>'; ?>
                    </div>
                    <div class="product_price">
                        <h3><?php echo $product['price']; ?>.-</h3>
                    </div>
                </div>
            </li>
        <?php }}else{
            $para = $_GET['search_text'];
            $statement = $pdo->db->prepare("SELECT name, picture, price, subcategory FROM processors WHERE name LIKE :name UNION SELECT name, picture, price, subcategory FROM memory  WHERE name LIKE :name UNION SELECT name, picture, price, subcategory FROM graphics_cards WHERE name LIKE :name");
            $term = '%' . $para . '%';
            $statement->bindParam(':name', $term);
            $statement->execute();
            $count = 0;
            echo '<ul id="productList">';

            if ( !empty( $para) ) {
                echo '<h2>' . t("showing_results_for") . ' ' .  '<b>' . $para . '</b></h2>';
            } else {
                echo '<h2>' . t("showing_all_products") . '</h2>';
            }

            while ($row = $statement->fetch()) {
                $count++;
                $newstatement = $pdo->db->prepare("SELECT DISTINCT category FROM products WHERE subcategory = :subcategory");
                $result = $newstatement->execute(array('subcategory'=>$row['subcategory']));
                $category = $newstatement->fetchAll(PDO::FETCH_COLUMN);

                foreach ($category as $cat) {
                    ?>
                    <li>
                        <?php $name = str_replace(' ', '_', $row['name']); ?>
                        <div class="product_wrapper">
                            <div class="product_tnail">
                                <img src="<?php rootDir(); ?>img/product_images/<?php echo $row['picture'] ?>">
                            </div>
                            <div class="product_main">
                                <?php echo '<a href="' . ABS_URL . 'public/products/' . $cat . '.php?product=' . $name . '">' . '<h2>' . $row['name'] . '</h2>' . '</a>'; ?>
                                <?php echo '<p class="description">' . $product['description'] . '</p>'; ?>
                            </div>
                            <div class="product_price">
                                <h3><?php echo $row['price']; ?>.-</h3>
                            </div>
                        </div>
                    </a>
                </li>

            <?php }};
            if($count === 1){
                foreach ($category as $cat) {
                    $url = '"' . ABS_URL . "public/products/$cat.php?product=$para" . '"';
                    ?>
                    <script type="text/javascript">window.location.href = <?php echo $url ?>;</script>
                <?php }}}; ?>
            </ul>
