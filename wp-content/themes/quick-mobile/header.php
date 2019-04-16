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
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i>56 St. & Bell</h3>
                                <p>602-538-3832</p>
                            </div>
                            <div class="addressBox info">
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i>56 St. & Bell</h3>
                                <p>602-538-3832</p>
                            </div>
                            <div class="addressBox info">
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i>56 St. & Bell</h3>
                                <p>602-538-3832</p>
                            </div>
                            <div class="addressBox info">
                                <h3><i class="fa fa-mobile-phone fa-3x" aria-hidden="true"></i>56 St. & Bell</h3>
                                <p>602-538-3832</p>
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
