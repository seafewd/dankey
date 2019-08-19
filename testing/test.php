<?php

require_once ( __DIR__ . '/../config/head.php' );


echo '
    <link rel="stylesheet" href="/dankey/public_html/js/slider/css/style.css">

    <script src="/dankey/public_html/js/jquery-3.2.1.min.js"></script>
    <script src="/dankey/public_html/js/test.js"></script>
    
    <script src="/dankey/public_html/js/slider/js/slider.min.js"></script>
    <script src="/dankey/public_html/js/slider/js/hammer.js"></script>
    
    <style>
        body {
        padding:0;
        margin:0;
        }
        
        main#main-content {
            padding:0;
            margin:0;
        }
        
        .o-sliderContainer {
            padding:0;
            margin:0;
        }
        
        section.articles {
            padding:0;
            margin:0;
        }
    </style>
    
    <div style="background: #ff00ff; overflow: hidden; width: 500px; height: 500px; position: relative;">
        <div style="background: #ff0000;position: fixed; top: 10px; left: 10px;">asd
            <div style="background: #00ffff; width: 200px; overflow: visible; position: absolute; visibility: visible; clear:both; height: 1000px; top: 100px; left: 10px;"> a</div>
        </div>
    </div>
<script>
    $(\'#pbSlider\').pbTouchSlider({
            slider_Wrap: \'#pbSliderWrap\',
            slider_Threshold: 10,
            slider_Speed: 350,
            slider_Ease:\'ease-out\',
            slider_Dots : {
                class: \'.o-slider-pagination\',
                enabled: true
            },
            slider_Arrows : {
                enabled: true
            },
            slider_Breakpoints: {
                default: {
                    height: 500
                },
                tablet: {
                    height: 300,
                    media: 1024
                },
                smartphone: {
                    height: 200,
                    media: 768
                }
            }
        });
    </script>






';