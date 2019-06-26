

<?php

//DOM scraper

require_once ( ABS_FILE . '/php/scripts/simple_html_dom.php' );
require_once ( ABS_FILE . '/php/scripts/ArticlePost.php');


//get html contents
$url = 'https://www.pcgamer.com/hardware/';
$html = file_get_html($url);


$hwnews_section = $html->find('section[class="listingResultsWrapper news news"]', 0);

//request new ArticlePost objects and write html
echo '
    <article class="article-post art-wrapper">
        <div class="o-sliderContainer" id="pbSliderWrap">
                <div class="o-slider" id="pbSlider">
               ';
                    $hwnews_section = $hwnews_section->find('div.listingResult');

                    foreach( $hwnews_section as $post) {

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



echo '
            </div>
        </div>
    </article>';
    unset($GLOBALS['skip']);
?>



<script>
    $(document).ready(function() {
        //remove pc gamer ad post... will prob break in the future
        //$('.o-slider > .art-outer:first').remove();

        //zoom+opacity effect
        $('.zooming').hover(function() {
            $(this).find('.zoom-child').each(function() {
                $(this).toggleClass('zoom-hover');
            });
        });


        //take first word out of p and make into span - like 'DEALS' or 'NEWS'
        let articles = $('.art-outer');
        articles.each(function() {
            let textWrap = $('p.text-wrap-text');
            let firstWord = $(this).find(textWrap).text().split(' ')[0];
            let newText= $(this).find(textWrap).text().replace(firstWord, '');
            $(this).find(textWrap).text(newText);

            $(this).find('.meta-line-child-wrapper').prepend('<p class="art-promo meta-child">' + firstWord + '</p></div>');
        });



        //alert(newText);

        //textWrap = textWrap.replace($(textWrap).substr(0,textWrap.indexOf(' ')), "");

        //textWrap = $(textWrap).substr(0,textWrap.indexOf(' '));


        /*
        var text = $(textWrap).text().split(' ');
        text.shift(); // parts is modified to remove first word
        var result;
        if (text instanceof Array) {
            result = text.join(' ');
        }
        else {
            result = text;
        }
        alert(result);*/


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
            slider_Breakpoints : { // Kind of media queries ( can add more if you know how to do it :D and if you need )
                default : {
                    height : 500 //  height on desktop
                },
                tablet : {
                    height : 400, // height on tablet
                    media : 1024 // tablet breakpoint
                },
                smartphone : {
                    height : 300, // height on smartphone
                    media : 768 // smartphone breakpoint
                }
            }
        });
    });
</script>