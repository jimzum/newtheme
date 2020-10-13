<?php
// =============================================================================
// TEMPLATE NAME: App Search
// -----------------------------------------------------------------------------
// Search App Option
//
// by Web Encoder
wp_enqueue_style('style', get_stylesheet_uri());

?>

<style>

</style>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
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
    <div class="flex-row">
      <?php
      $args = array(
        'post_type'  => 'apps',
        'post_status' => 'publish',
        'category_name' => 'Featured',
        'posts_per_page' => '-1'
      );
      $query = new WP_Query($args);
      $posts = $query->get_posts();
      foreach ($posts as $post) :
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
      <?php endforeach; ?>

    </div>
  </div>
</section>