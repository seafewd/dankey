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
                              'url' => ABS_URL.'public/product_list.php',
                              'text' => 'Nvidia Geforce',
                              'class' => 'gfx_nvidia',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => '',
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
                              'url' => '',
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
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Socket 1151 (Intel)',
                              'class' => 'socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'Socket 2011-3 (Intel)',
                              'class' => 'socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket 2066 (Intel)',
                              'class' => 'socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => '',
                              'text' => 'Socket 1150 (Intel)',
                              'class' => 'socket_1150',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket AM4 (AMD)',
                              'class' => 'socket_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket TR4 (AMD)',
                              'class' => 'socket_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket AM3 (AMD)',
                              'class' => 'socket_am3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket FM2 (AMD)',
                              'class' => 'socket_fm2',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Hard drives',
              'class' => 'harddrives',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'SATA 2.5',
                              'class' => 'sata_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'SATA 3.5',
                              'class' => 'sata_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'SSD SATA',
                              'class' => 'ssd_sata',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'thermalpaste.php',
                              'text' => 'External SSD',
                              'class' => 'external_ssd',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'External USB 2.5',
                              'class' => 'external_usb_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'External USB 3.5',
                              'class' => 'external_usb_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Accessories',
                              'class' => 'accessories',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Cases',
              'class' => 'cases',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Mini-ITX',
                              'class' => 'mini_itx',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'Minitower',
                              'class' => 'minitower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Miditower',
                              'class' => 'miditower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'thermalpaste.php',
                              'text' => 'Fulltower',
                              'class' => 'Accessories',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Memory',
              'class' => 'memory',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'DDR4',
                              'class' => 'ddr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'DDR3',
                              'class' => 'ddr3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'DDR2',
                              'class' => 'ddr2',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'thermalpaste.php',
                              'text' => 'DDR',
                              'class' => 'ddr',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'Motherboards',
              'class' => 'motherboards',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Socket 1151',
                              'class' => 'm_socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'Socket 2011-3',
                              'class' => 'm_socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket 2066',
                              'class' => 'm_socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'thermalpaste.php',
                              'text' => 'AM4',
                              'class' => 'm_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'FM2+',
                              'class' => 'fm2+',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'TR4',
                              'class' => 'm_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'Harddrivecooling.php',
                              'text' => 'Socket AM3',
                              'class' => 'm_socket_am3',
                              'subMenu' => ''
                            ),
                          )
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
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Internal',
                              'class' => 'sound_internal',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'External',
                              'class' => 'sound_external',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'DVD & BD-units',
              'class' => 'dvd-bd-units',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Blu-Ray',
                              'class' => 'bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'DVDR',
                              'class' => 'dvdr',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'External Blu-Ray',
                              'class' => 'dvdbd_external_bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'External DVDR',
                              'class' => 'dvdbd_external_dvdr',
                              'subMenu' => ''
                            ),
                          )
            ),
            array(
              'text' => 'Accessories',
              'class' => 'accessories',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => '',
                              'text' => 'Adapters',
                              'class' => 'adapters',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => 'processorcooling.php',
                              'text' => 'Cables',
                              'class' => 'cables',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => 'New products',
              'class' => 'newproducts',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => 'Promotions',
              'class' => 'promotions',
              'url' => '',
              'subMenu' => ''
            )
          );
?>
