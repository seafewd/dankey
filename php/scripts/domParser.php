

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

        if ($h3 = $post->find('h3', 0))
            $articlePost->setHeading($h3->plaintext);

        if ($p = $post->find('p.synopsis', 0))
            $articlePost->setText($p->plaintext);

        //parse time string
        if ($post->find('p.byline', 0)) {
            $author = $post->find('p.byline span span', 0)->plaintext;

            //can't seem to get the text of the time tag but getting attributes is fine...
            $metaPublish = $post->find('time.relative-date', 0);
            $metaPublish = $metaPublish->getAttribute('data-published-date');

            //remove unwanted chars from strings
            $metaPublish = str_replace("T", " ", $metaPublish);
            $metaPublish = str_replace("Z", " ", $metaPublish);

            //split date and time into array
            $metaPublish = explode(" ", $metaPublish);
            $publishDate = $metaPublish[0];
            $publishTime = $metaPublish[1];
            //only keep the date
            $publishDate = strtok($metaPublish[0], " ");

            $articlePost->setMeta($author, $publishDate, $publishTime);

        }

        if ($img = $post->find('img', 0)) {
            $img = $img->getAttribute("data-src");
            $articlePost->setImage($img);
        }

        if ($link = $post->find('a.article-link', 0))
            $articlePost->setPosturl($link->href);

        //render object
        $articlePost->createPost();
    }

    echo '</article>';
?>



<script>
    $(document).ready(function() {
        //remove pc gamer ad post...
        $('.article-post > .art-outer:first-child').remove();
        //zoom+opacity effect
        $('.zooming').hover(function() {
            $(this).find('.zoom-child').each(function() {
                $(this).toggleClass('zoom-hover');
            });
        });
    });
</script>