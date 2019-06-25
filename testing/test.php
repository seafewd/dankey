<?php

//require_once ( __DIR__ . '/config/head.php' );


echo '
    <link rel="stylesheet" href="/dankey/js/slider/css/style.css">

    <script src="/dankey/js/jquery-3.2.1.min.js"></script>
    <script src="/dankey/js/test.js"></script>
    
    <script src="/dankey/js/slider/js/slider.min.js"></script>
    <script src="/dankey/js/slider/js/hammer.js"></script>
    
    <style>
        
    </style>

    
    <div class="o-sliderContainer" id="pbSliderWrap" style="background-color: gray;">
        <div class="o-slider" id="pbSlider">
            <div class="o-slider--item" style="background-color: red;">
                <div class="o-slider-textWrap">
                    <h1 class="o-slider-title">This is a title</h1>
                    <span class="a-divider"></span>
                    <h2 class="o-slider-subTitle">This is a sub title</h2>
                    <span class="a-divider"></span>
                    <p class="o-slider-paragraph">This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph </p>
                </div>
            </div>
            <div class="o-slider--item" style="background-color: blue;">
                <div class="o-slider-textWrap">
                    <h1 class="o-slider-title">This is a title</h1>
                    <span class="a-divider"></span>
                    <h2 class="o-slider-subTitle">This is a sub title</h2>
                    <span class="a-divider"></span>
                    <p class="o-slider-paragraph">This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph </p>
                </div>
            </div>
            <div class="o-slider--item" style="background-color: green;">
                <div class="o-slider-textWrap">
                    <h1 class="o-slider-title">This is a title</h1>
                    <span class="a-divider"></span>
                    <h2 class="o-slider-subTitle">This is a sub title</h2>
                    <span class="a-divider"></span>
                    <p class="o-slider-paragraph">This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph This is a sub paragraph </p>
                </div>
            </div>
        </div>
    </div>

<script>
    $(\'#pbSlider\').pbTouchSlider({
      slider_Wrap: \'#pbSliderWrap\',
      slider_Threshold: 50 ,
      slider_Speed:400 ,
      slider_Ease:\'linear\',
      slider_Breakpoints: {
          default: {
              height: 400
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