<?php wp_reset_query(); ?>

<?php if (cpotheme_show_title()) : ?>

    <?php $header_image = cpotheme_header_image(); ?>
    <?php
    if ($header_image != '') {
        $featuredImage = get_the_post_thumbnail_url(get_the_ID());
        if($featuredImage){
            $header_image = $featuredImage;
        }
        $header_image = 'style="background-image:url(' . esc_url($header_image) . ');"';
    }
    ?>
    <?php do_action('cpotheme_before_title'); ?>
    <section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
        <div class="container">
    <?php do_action('cpotheme_title'); ?>
        </div>
    </section>
    <?php
    do_action('cpotheme_after_title');

else:
    if (is_home()) {
        ?>
        <?php
        $pageForPosts = get_option('page_for_posts');
        $header_image = get_the_post_thumbnail_url($pageForPosts);
        $header_image = 'style="background-image:url(' . esc_url($header_image) . ');"';
        ?>
        <?php do_action('cpotheme_before_title'); ?>
        <section id="pagetitle" class="pagetitle dark" <?php echo $header_image; ?>>
            <div class="container">
                <h1 class="pagetitle-title heading">Blog</h1>
                <div id="breadcrumb" class="breadcrumb"><a class="breadcrumb-link" href="<?php echo site_url(); ?>">Home</a><span class="breadcrumb-separator"></span><span class="breadcrumb-title">Blog</span>
                </div>
            </div>
        </section>
        <?php
        do_action('cpotheme_after_title');
    }
    ?>

<?php endif; ?>
