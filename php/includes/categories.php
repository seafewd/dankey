<?php
require_once ( __DIR__ . '/../scripts/functions.php');
/*****
Menu with nested arrays
******/

  $menu = array(
            array(
              'text' => 'Graphics cards',
              'class' => 'gfx_cards',
              'url' => '',
              'id' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL . 'public/product_list.php' ,
                              'text' => 'Nvidia Geforce',
                              'class' => 'gfx_nvidia',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php',
                              'text' => 'AMD Radeon',
                              'class' => 'gfx_amdradeon',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Cooling',
              'class' => 'cooling',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL . 'public/product_list.php',
                              'text' => 'Case fans',
                              'class' => 'casefans',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'Processor cooling',
                              'class' => 'processorcooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Hard drive cooling',
                              'class' => 'Harddrivecooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'thermalpaste.php',
                              'text' => 'Thermal paste',
                              'class' => 'thermalpaste',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Processors',
              'class' => 'processors',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Hard drives',
              'class' => 'harddrives',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Cases',
              'class' => 'cases',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Memory',
              'class' => 'memory',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Motherboards',
              'class' => 'motherboards',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Power supplies',
              'class' => 'powersupplies',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Sound cards',
              'class' => 'soundcards',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'DVD & BD-units',
              'class' => 'dvd-bd-units',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Accessories',
              'class' => 'accessories',
              'url' => '',
              'subMenu' => ''
            )
          );
?>
