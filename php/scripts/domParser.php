<?php

    //DOM scraper

    require_once ( ABS_FILE . '/php/scripts/simple_html_dom.php' );
    require_once ( ABS_FILE . '/php/scripts/ArticlePost.php');

    $url = 'https://www.pcgamer.com/hardware/';

    //get html contents
    $html = file_get_html($url);

    $hwnews_section = $html->find('section[class="listingResultsWrapper news news"]', 0);

    echo '<article class="article-post art-wrapper">';

    foreach( $hwnews_section->find('div.listingResult') as $post) {
        $articlePost = new ArticlePost();

        if ($post->find('h3', 0))
            $articlePost->setHeading($post->find('h3', 0)->plaintext);

        if ($post->find('p.synopsis', 0))
            $articlePost->setText($post->find('p.synopsis', 0)->plaintext);

        if ($img = $post->find('img', 0)) {
            $img = $img->getAttribute("data-src");
            $articlePost->setImage($img);
        }

        if ($post->find('a.article-link', 0))
            $articlePost->setPosturl($post->find('a.article-link', 0)->href);

        $articlePost->createPost();
    }

echo '</article>';


?>