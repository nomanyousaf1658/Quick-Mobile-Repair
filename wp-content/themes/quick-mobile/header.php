<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div class="outer" id="top">
            <?php do_action('cpotheme_before_wrapper'); ?>
            <div class="wrapper">
                <div id="topbar" class="topbar">
                    <div class="container">
                        <div class="addressBoxes">
                            <div class="addressBox info">
                                <?php
                                //Central Pheonix
                                $storeLocation = get_option('HTOP_Loc_Central_Phoenix');
                                $explodedArray = explode('||', $storeLocation);
                                $locationPhone = trim($explodedArray[1]);
                                $locationName = trim($explodedArray[0]);
                                $phoneLink = preg_replace("/[^0-9]/", "", $locationPhone);
                                ?>
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i><?php echo $locationName; ?></h3>
                                <p><a href="tel:<?php echo $phoneLink; ?>"><?php echo $locationPhone; ?></a></p>
                            </div>
                            <div class="addressBox info">
                                <?php
                                //Fountain Hills
                                $storeLocation = get_option('HTOP_Loc_Fountain_Hills');
                                $explodedArray = explode('||', $storeLocation);
                                $locationPhone = trim($explodedArray[1]);
                                $locationName = trim($explodedArray[0]);
                                $phoneLink = preg_replace("/[^0-9]/", "", $locationPhone);
                                ?>
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i><?php echo $locationName; ?></h3>
                                <p><a href="tel:<?php echo $phoneLink; ?>"><?php echo $locationPhone; ?></a></p>
                            </div>
                         
                            <div class="addressBox info">
                                <?php
                                //North Phoenix
                                $storeLocation = get_option('HTOP_Loc_North_Phoenix');
                                $explodedArray = explode('||', $storeLocation);
                                $locationPhone = trim($explodedArray[1]);
                                $locationName = trim($explodedArray[0]);
                                $phoneLink = preg_replace("/[^0-9]/", "", $locationPhone);
                                ?>
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i><?php echo $locationName; ?></h3>
                                <p><a href="tel:<?php echo $phoneLink; ?>"><?php echo $locationPhone; ?></a></p>
                            </div>
                            
                            <div class="addressBox info">
                                <?php
                                //Peoria
                                $storeLocation = get_option('HTOP_Loc_Peoria');
                                $explodedArray = explode('||', $storeLocation);
                                $locationPhone = trim($explodedArray[1]);
                                $locationName = trim($explodedArray[0]);
                                $phoneLink = preg_replace("/[^0-9]/", "", $locationPhone);
                                ?>
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i><?php echo $locationName; ?></h3>
                                <p><a href="tel:<?php echo $phoneLink; ?>"><?php echo $locationPhone; ?></a></p>
                            </div>
                            <div class="addressBox info">
                                <?php
                                //Scottsdale
                                $storeLocation = get_option('HTOP_Loc_Scottsdale');
                                $explodedArray = explode('||', $storeLocation);
                                $locationPhone = trim($explodedArray[1]);
                                $locationName = trim($explodedArray[0]);
                                $phoneLink = preg_replace("/[^0-9]/", "", $locationPhone);
                                ?>
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i><?php echo $locationName; ?></h3>
                                <p><a href="tel:<?php echo $phoneLink; ?>"><?php echo $locationPhone; ?></a></p>
                            </div>
                            
                            <div class="addressBox form">
                                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                                    <div>
                                        <input placeholder="Search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                        <button class="btn" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <header id="header" class="header">
                    <div class="container">
                        <?php do_action('cpotheme_header'); ?>
                        <div class='clear'></div>
                    </div>
                </header>
                <?php do_action('cpotheme_before_main'); ?>
                <div class="clear"></div>
