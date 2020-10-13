<?php

/**
 * Template Name: App Single Search
 * 
 */
wp_enqueue_style('style', get_stylesheet_uri());
get_header();
?>
<section class="single-page">
    <div class="container">


        <?php while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-4 single-page-left-col">
                    <br>
                    <div class="autocomplete">
                        <!-- <input id="project"> -->
                        <input type="hidden" id="project-id">
                        <form class="navbar-form" role="search">
                            <div class="form-group has-feedback has-search">
                                <span class="fa fa-search form-control-feedback show-while-type"></span>
                                <span class="form-control-feedback show-while-ajax" style="margin-top: -6px; display: none;"><i class="fa fa-refresh fa-spin  fa-fw"></i></span>
                                <input type="text" class="form-control single-page-search-input" placeholder="Search for apps to connect" id="project">
                                <div class="we-search-result">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <br>
                    <h3 class="single-title"><?php echo get_the_title() ?></h3>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 single-page-left-col">
                    <div class="sidebar-div">
                        <section class="side-bar-section">
                            <span>
                                <span class="single-img-div">
                                    <img class="" width="105" height="105" src="<?php echo get_the_post_thumbnail_url() ?>">
                                </span>
                            </span>
                            <span class="single-details">
                                <h2 class="single-details-title"><?php echo get_the_title() ?></h2>
                                <span class="single-details-subtitle">
                                    <?php the_field('Integration'); ?>
                                </span>
                                <br>
                                <span class="single-details-subtitle text-justify">
                                    <?php $excerpt =  get_the_excerpt($post->ID);
                                    if ($excerpt) {
                                        echo get_the_excerpt($post->ID);
                                    } ?>
                                </span>
                                <br>
                                <?php
                                $btn_one = get_field('button_one');
                                if ($btn_one) :
                                ?>
                                    <div class="text-center">
                                        <div class="single-details-buttondiv">
                                            <a href="<?php echo $btn_one['button_one_link'] ?>" class="single-details-button">
                                                <?php echo $btn_one['button_one_text']; ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php
                                endif;
                                ?>
                            </span>
                        </section>
                    </div>
                </div>
                <div class="col-md-8">

                    <?php
                    /* $categories = get_the_category();

                        if (!empty($categories)) {
                            foreach($categories as $category):
                            echo '<a href="#">' . esc_html($category->name) .','. '</a>';
                            endforeach;
                        } */
                    $tags = get_the_tags();
                    // echo "<pre>";
                    // var_dump($tags);
                    $tag_html = '';
                    if (!empty($tags)) :
                        foreach ($tags as $tag) :
                            $tag_html .= '<a href="' . site_url('app-tag'). '?tag='.$tag->slug.'&tag_name='.$tag->name.'" class="tag-names">' . esc_html($tag->name) . '</a>';
                        endforeach;
                    endif;
                    ?>
                    <div class="single-body">
                        <div class="text-justify">
                            <?php the_content() ?>
                            <br>
                        </div>
                        <p>
                            <?php echo $tag_html; ?>
                        </p>
                        <?php
                        $btn_two = get_field('button_two');
                        if ($btn_two) :
                        ?>

                            <div class="text-center">
                                <a href="<?php if ($btn_two_link = $btn_two['button_two_link']) {
                                                echo $btn_two_link;
                                            } ?>" class="btn btn-primary btn-lg text-center">
                                    <?php if ($btn_two_text = $btn_two['button_two_text']) {
                                        echo $btn_two_text;
                                    } ?></a>
                                <br>
                                <br>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
    </div>
    </div>
</section>
<?php get_footer() ?>