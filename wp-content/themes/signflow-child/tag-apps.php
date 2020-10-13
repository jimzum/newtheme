<?php

/**
 * Template Name: Posts By Tag
 * 
 */
wp_enqueue_style('style', get_stylesheet_uri());
get_header();
$tagslug = $_GET['tag'];
// $args = array('post_type' => 'apps', 'posts_per_page' => 18, 'tag' => $tagslug, 'orderby' => 'DESC');
// $post = new WP_Query($args);
// echo "<pre>";
// var_dump($posts);
?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h2><?php echo $_GET['tag_name']; ?></h2>
                <br>
            </div>
        </div>

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
        </div>

        <button type="button" class="tagslug" style="display: none;"><?php echo $tagslug ?></button>
        <div class="flex-row">
            <?php
            $args = array(
                'post_type'  => 'apps',
                'post_status' => 'publish',
                'tag' => $tagslug,
                'posts_per_page' => 18,
            );
            $query = new WP_Query($args);
            // echo "<pre>";
            // var_dump($query);
            $posts = $query->get_posts();
            $i = 0;
            foreach ($posts as $post) :
                $i++;
            ?>
                <div class="flex-item">
                    <div class="item-card">
                        <div class="user-top">
                            <span class="img-span"><a href="<?php echo get_permalink($post) ?>"><img class="item-card-img" width="42" height="42" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>"></a></span>

                            <div class="item-card-body">
                                <h3 class="user-title"><a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title; ?></a></h3>
                                <p>
                                    <?php $excerpt =  get_the_excerpt($post->ID);
                                    if ($excerpt) {
                                        echo get_the_excerpt($post->ID);
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>

        </div>
        <div class="flex-row" style="justify-content: center;padding-top: 10px;">
            <?php
            if ($query->post_count >= 18) {
            ?>
                <div class="show-post text-center"><button id="post-loader" class="btn circle-button btn-lg"> Load More </button></div>
            <?php
            }
            ?>
        </div>

        <div class="load_more_posts">

        </div>


    </div>
</section>

<?php get_footer() ?>