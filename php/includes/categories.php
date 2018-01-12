<?php
require_once ( __DIR__ . '/../scripts/functions.php');
/*****
Menu with nested arrays
******/

  $menu = array(
            array(
              'text' => t("graphic_cards"),
              'class' => 'gfx_cards',
              'url' => '',
              'id' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=nvidia_geforce',
                              'text' => t("nvidia_geforce"),
                              'class' => 'nvidia_geforce',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=amd_radeon',
                              'text' => t("amd_radeon"),
                              'class' => 'amd_radeon',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("cooling"),
              'class' => 'cooling',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=casefans',
                              'text' => t("case_fans"),
                              'class' => 'casefans',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=processorcooling.php',
                              'text' => t("processor_cooling"),
                              'class' => 'processorcooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=harddrivecooling.php',
                              'text' => t("hard_drive_cooling"),
                              'class' => 'harddrivecooling',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL . 'public/product_list.php?name=thermalpaste.php',
                              'text' => t("thermalpaste"),
                              'class' => 'thermalpaste',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("processors"),
              'class' => 'processors',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_1151',
                              'text' => t("socket_1151"),
                              'class' => 'socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_2011-3',
                              'text' => t("socket_2011_3"),
                              'class' => 'socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_2066',
                              'text' => t("socket_2066"),
                              'class' => 'socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_1150',
                              'text' => t("socket_1150"),
                              'class' => 'socket_1150',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_am4',
                              'text' => t("socket_am4"),
                              'class' => 'socket_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_tr4',
                              'text' => t("socket_tr4"),
                              'class' => 'socket_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_am3',
                              'text' => t("socket_am3"),
                              'class' => 'socket_am3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=socket_fm2',
                              'text' => t("socket_fm2"),
                              'class' => 'socket_fm2',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("hard drives"),
              'class' => 'harddrives',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sata_2_5',
                              'text' => t("sata_2_5"),
                              'class' => 'sata_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sata_3_5',
                              'text' => t("sata_3_5"),
                              'class' => 'sata_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ssd_sata',
                              'text' => t("ssd_sata"),
                              'class' => 'ssd_sata',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_ssd',
                              'text' => t("external_ssd"),
                              'class' => 'external_ssd',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_usb_2_5',
                              'text' => t("external_usb_2_5"),
                              'class' => 'external_usb_2_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_usb_3_5',
                              'text' => t("external_usb_3_5"),
                              'class' => 'external_usb_3_5',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=accessories',
                              'text' => t("accessories"),
                              'class' => 'accessories',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("cases"),
              'class' => 'cases',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=mini_itx',
                              'text' => t("mini_itx"),
                              'class' => 'mini_itx',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=minitower',
                              'text' => t("minitower"),
                              'class' => 'minitower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=miditower',
                              'text' => t("miditower"),
                              'class' => 'miditower',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=fulltower',
                              'text' => t("fulltower"),
                              'class' => 'fulltower',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("memory"),
              'class' => 'memory',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr4',
                              'text' => t("ddr4"),
                              'class' => 'ddr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr3',
                              'text' => t("ddr3"),
                              'class' => 'ddr3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr2',
                              'text' => t("ddr2"),
                              'class' => 'ddr2',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=ddr',
                              'text' => t("ddr"),
                              'class' => 'ddr',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("motherboards"),
              'class' => 'motherboards',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_1151',
                              'text' => t("socket_1151"),
                              'class' => 'm_socket_1151',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_2011-3',
                              'text' => t("socket_2011_3"),
                              'class' => 'm_socket_2011-3',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_2066',
                              'text' => t("socket_2066"),
                              'class' => 'm_socket_2066',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_am4',
                              'text' => t("socket_am4"),
                              'class' => 'm_am4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=fm2+',
                              'text' => t("socket_fm2"),
                              'class' => 'fm2+',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_tr4',
                              'text' => t("socket_tr4"),
                              'class' => 'm_tr4',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=m_socket_am3',
                              'text' => t("socket_am3"),
                              'class' => 'm_socket_am3',
                              'subMenu' => ''
                            ),
                          )
            ),
            array(
              'url' => '',
              'text' => t("power supplies"),
              'class' => 'powersupplies',
              'subMenu' => ''
            ),
            array(
              'text' => t("sound cards"),
              'class' => 'soundcards',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sound_internal',
                              'text' => t("internal"),
                              'class' => 'sound_internal',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=sound_external',
                              'text' => t("external"),
                              'class' => 'sound_external',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("dvd"),
              'class' => 'dvd-bd-units',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=bluray',
                              'text' => t("bluray"),
                              'class' => 'bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=dvdr',
                              'text' => t("dvdr"),
                              'class' => 'dvdr',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_bluray',
                              'text' => t("external_bluray"),
                              'class' => 'external_bluray',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=external_dvdr',
                              'text' => t("external_dvdr"),
                              'class' => 'external_dvdr',
                              'subMenu' => ''
                            ),
                          )
            ),
            array(
              'text' => t("accessories"),
              'class' => 'accessories',
              'url' => '',
              'subMenu' => array(
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=adapters',
                              'text' => t("adapters"),
                              'class' => 'adapters',
                              'subMenu' => ''
                            ),
                            array(
                              'url' => ABS_URL.'public/product_list.php?name=cables',
                              'text' => t("cables"),
                              'class' => 'cables',
                              'subMenu' => ''
                            )
                          )
            ),
            array(
              'text' => t("new products"),
              'class' => 'newproducts',
              'url' => '',
              'subMenu' => ''
            ),
            array(
              'text' => t("promotions"),
              'class' => 'promotions',
              'url' => '',
              'subMenu' => ''
            )
          );
?>
