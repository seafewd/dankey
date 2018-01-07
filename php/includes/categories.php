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
                              'url' => ABS_URL.'public/product_list.php?name=nvidia_geforce',
                              'text' => 'Nvidia Geforce',
                              'class' => 'nvidia_geforce',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=amd_radeon',
                              'text' => 'AMD Radeon',
                              'class' => 'amd_radeon',
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
                              'url' => ABS_URL . 'public/product_list.php?name=casefans',
                              'text' => 'Case fans',
                              'class' => 'casefans',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=processorcooling.php',
                              'text' => 'Processor cooling',
                              'class' => 'processorcooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=harddrivecooling.php',
                              'text' => 'Hard drive cooling',
                              'class' => 'harddrivecooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=thermalpaste.php',
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
                              'url' => ABS_URL.'public/product_list.php?name=socket_1151',
                              'text' => 'Socket 1151 (Intel)',
                              'class' => 'socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_2011-3',
                              'text' => 'Socket 2011-3 (Intel)',
                              'class' => 'socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_2066',
                              'text' => 'Socket 2066 (Intel)',
                              'class' => 'socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_1150',
                              'text' => 'Socket 1150 (Intel)',
                              'class' => 'socket_1150',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_am4',
                              'text' => 'Socket AM4 (AMD)',
                              'class' => 'socket_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_tr4',
                              'text' => 'Socket TR4 (AMD)',
                              'class' => 'socket_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_am3',
                              'text' => 'Socket AM3 (AMD)',
                              'class' => 'socket_am3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_fm2',
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
                              'url' => ABS_URL.'public/product_list.php?name=sata_2_5',
                              'text' => 'SATA 2.5',
                              'class' => 'sata_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sata_3_5',
                              'text' => 'SATA 3.5',
                              'class' => 'sata_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ssd_sata',
                              'text' => 'SSD SATA',
                              'class' => 'ssd_sata',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_ssd',
                              'text' => 'External SSD',
                              'class' => 'external_ssd',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_usb_2_5',
                              'text' => 'External USB 2.5',
                              'class' => 'external_usb_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_usb_3_5',
                              'text' => 'External USB 3.5',
                              'class' => 'external_usb_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=accessories',
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
                              'url' => ABS_URL.'public/product_list.php?name=mini_itx',
                              'text' => 'Mini-ITX',
                              'class' => 'mini_itx',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=minitower',
                              'text' => 'Minitower',
                              'class' => 'minitower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=miditower',
                              'text' => 'Miditower',
                              'class' => 'miditower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=fulltower',
                              'text' => 'Fulltower',
                              'class' => 'fulltower',
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
                              'url' => ABS_URL.'public/product_list.php?name=ddr4',
                              'text' => 'DDR4',
                              'class' => 'ddr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr3',
                              'text' => 'DDR3',
                              'class' => 'ddr3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr2',
                              'text' => 'DDR2',
                              'class' => 'ddr2',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr',
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
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_1151',
                              'text' => 'Socket 1151',
                              'class' => 'm_socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_2011-3',
                              'text' => 'Socket 2011-3',
                              'class' => 'm_socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_2066',
                              'text' => 'Socket 2066',
                              'class' => 'm_socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_am4',
                              'text' => 'AM4',
                              'class' => 'm_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=fm2+',
                              'text' => 'FM2+',
                              'class' => 'fm2+',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_tr4',
                              'text' => 'TR4',
                              'class' => 'm_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_am3',
                              'text' => 'Socket AM3',
                              'class' => 'm_socket_am3',
                              'subMenu' => ''
                            ),
                          )
            ),
            array(
              'url' => '',
              'text' => 'Power supplies',
              'class' => 'powersupplies',
              'subMenu' => ''
            ),
            array(
              'text' => 'Sound cards',
              'class' => 'soundcards',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sound_internal',
                              'text' => 'Internal',
                              'class' => 'sound_internal',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sound_external',
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
                              'url' => ABS_URL.'public/product_list.php?name=bluray',
                              'text' => 'Blu-Ray',
                              'class' => 'bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=dvdr',
                              'text' => 'DVDR',
                              'class' => 'dvdr',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_bluray',
                              'text' => 'External Blu-Ray',
                              'class' => 'external_bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_dvdr',
                              'text' => 'External DVDR',
                              'class' => 'external_dvdr',
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
                              'url' => ABS_URL.'public/product_list.php?name=adapters',
                              'text' => 'Adapters',
                              'class' => 'adapters',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=cables',
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
