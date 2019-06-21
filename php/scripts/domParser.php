<?php

    //DOM scraper

    include ( ABS_FILE . '/php/scripts/simple_html_dom.php' );

    $url = 'https://wccftech.com/';

    //get html contents
    $html = file_get_html($url);

    //page title
    $page_title = $html->find('title', 0)->plaintext;

    //section with hardware topics
    $hardware_topics_section = $html->find('section.text');
    foreach( $hardware_topics_section as $topic) {

        echo $topic->plaintext;
    }

    //get all hardware topics as ul
    //$hardware_topics_list = $hardware_topics_section->find('ul', 0);


    /*foreach( $hardware_topics_list->find('a') as $topic) {
        echo $topic->plaintext;
    }*/



    /*
    foreach( $hardware_topics_list->find('a') as $element) {
        echo $element->plaintext;
        echo '<br>';
    }*/
?>