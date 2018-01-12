<?php
require_once ( __DIR__ . '/../scripts/functions.php');
?>

<!-- End main -->
</main>
</section>
</section>

<footer>
    <h1>Dankey's TecShop &copy; 2017</h1>
    <div id="utilities-wrapper">
        <div class="col" id="col1">
            <h3><?php echo t("contact_information")?></h3>
            <p>
                Dankey's TecShop<br/>
                Dank Trail 15<br/>
                133 37 Danktown<br/>
                Switzerdank<br/>
                1337 - 956 49 00
            </p>
        </div>
        <div class="col" id="col2">
            <h3><?php echo t("language")?></h3>
            <p>
                <a href="javascript:;" onclick="setLanguage('en')">English</a><br/>
                <a href="javascript:;" onclick="setLanguage('de')">Deutsch</a><br/>
                <a href="javascript:;" onclick="setLanguage('fr')">Français</a><br/>
                <a href="javascript:;" onclick="setLanguage('zh')">中文</a>
            </p>
        </div>
        <div class="col" id="col3">
            <h3><?php echo t("live_chat")?></h3>
            <p class="chat-label">
                <a href="javascript:;"><?php echo t("open_live_chat")?></a>
            </p>
        </div>
    </div>

</footer>

<link rel="stylesheet" href="<?php echo ABS_URL . 'css/mediaQueries.css'; ?>">

</body>
</html>
