

<?php

//DOM scraper

require_once ( ABS_FILE . '/php/scripts/simple_html_dom.php' );
require_once(ABS_FILE . '/php/classes/ArticlePost.php');


    //get html contents
    $url = 'https://www.pcgamer.com/hardware/news/';
    $html = file_get_html($url);


    $hwnews_section = $html->find('section[class="listingResultsWrapper news news"]', 0);

    //request new ArticlePost objects and write html
    echo '
        <article class="article-post art-wrapper">
            <div class="o-sliderContainer" id="pbSliderWrap">
                <div class="o-slider" id="pbSlider">
                   ';
    $hwnews_section = $hwnews_section->find('div.listingResult');
    $totalPosts = count($hwnews_section);
    $postsPerSlide = 2;
    $counter = - 1; //skip first ad post...
    $condition = true;

        foreach( $hwnews_section as $post) {
            if($counter == -1){
                $counter++;
                continue;
            }


            //see if closing and opening a new slider item is needed
            if ($condition) {
                echo '<div class="o-slider--item">';
            }
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

            //close slider-item
            if ((!$condition) && ($counter != 0)) {
                echo '</div>';
            }

            if ($totalPosts == 1)
                echo '</div>';

            //update posts, counter, condition
            $counter++;
            $totalPosts--;
            $condition = ($counter % $postsPerSlide == 0); // even numbers

        }

    echo ' 
                </div>
            </div>
        </article>';
        unset($GLOBALS['skip']);
?>



<script>
    $(document).ready(function() {

        //take first word out of p and make into meta-child - like 'DEALS' or 'NEWS'
        let articles = $('.art-outer');
        articles.each(function() {
            let textWrap = $('p.text-wrap-text');
            let firstWord = $(this).find(textWrap).text().split(' ')[0];
            let newText= $(this).find(textWrap).text().replace(firstWord, '');
            $(this).find(textWrap).text(newText);

            $(this).find('.meta-line-child-wrapper').prepend('<p class="art-promo meta-child">' + firstWord + '</p></div>');
        });


        //initialize slider plugin
        $('#pbSlider').pbTouchSlider({
            slider_Wrap: '#pbSliderWrap',
            slider_Threshold: 10,
            slider_Speed: 350,
            slider_Ease:'ease-out',
            slider_Dots : {
                class: '.o-slider-pagination',
                enabled: true
            },
            slider_Arrows : {
                enabled: false
            },
            slider_Breakpoints : {
                default : {
                },
                tablet : {
                },
                smartphone : {
                }
            }
        });
    });
</script>