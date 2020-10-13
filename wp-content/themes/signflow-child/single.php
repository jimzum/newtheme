<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(window).scroll(function() {
  var sticky = $('.mobile-menu'),
    scroll = $(window).scrollTop();
   
  if (scroll >= 40) { 
    sticky.addClass('fixed'); }
  else { 
   sticky.removeClass('fixed');

}
});

</script>




        
           

<div class="mobile-menu">
<div class="container new ">
<div class="row">
<div class="col-md-6">
<div class="cat-list">
<?php 
$categories =  get_categories();
echo '<ul>';
foreach  ($categories as $category) {
  echo '<li>'. $category->cat_name .'</li>';
}
echo '</ul>';
?>
</div>
</div>
<div class="col-md-6">

<div class="top-form">
<?php echo do_shortcode('[hf_form slug="header"]'); ?>

</div>

</div>
</div>
</div>
</div>




<?php if ( have_posts() ) {
	while ( have_posts() ){
		the_post();
        $thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
		$call_to_action_text = get_field( "call_to_action_text" );
		$button_text = get_field( "button_text" );
		$button_link = get_field( "button_link" );
		wpb_set_post_views(get_the_ID());
		
		?>
<div class=" no-paddings-y">
	<div class="pillar-page-header" data-background="gradient3" >
    
    <div class="pillar-page-header__content">
    	<div class="pillar-page-header__text">
        <h2><?php  the_title(); ?></h2>
        <div class="call-to-action">
        	<div class="call-to-action-text">Need assistance with Marketing tasks or have questions about the integration? Hire SmartMetrics experts to help you with the next project. Enjoy affordable hourly rates and the same day project launch!

</div>
            <div class="call-to-action-button">
            <a href="https://smartmetrics.com/team/admin/registration.php">Hire Marketing Experts</a>
            </div>
             </div>
       
       
        </div>    
    </div>
    
    <div class="pillar-page-header__image" style="background-image: url(<?php echo $thumbnail; ?>)"></div>
    
    </div>
</div>



<div class=" no-paddings-y mt-50">
<div class="container new content">   
<div class="row ">

<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight"> 
<div class="GridLex-col-3_sm-3_xs-12 mb-20">  
<div class="blog-read-time">
<?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?>
</div>
                    
</div>
<div class="GridLex-col-6_sm-6_xs-12 mb-20">  
<div class="the-content"><?php the_content(); ?></div>
</div>
<div class="GridLex-col-3_sm-3_xs-12 mb-20">  

</div>



</div>
</div>
</div>
</div>
</div>










<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
                  


<div class=" no-paddings-y mt-50" style="background: #f3f3f3; padding-top: 45px !important;">
   <div class="container new content">
     <div class="row ">
     <div class="articles-title">
     Related Articles
     </div>
	</div>
     
<div class="row ">

<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight"> 


 <?php
// Default arguments
$args = array(
	'posts_per_page' => 3, // How many items to display
	'post__not_in'   => array( get_the_ID() ), // Exclude current post
	'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
$cats_ids = array();  
foreach( $cats as $wpex_related_cat ) {
	$cats_ids[] = $wpex_related_cat->term_id; 
}
if ( ! empty( $cats_ids ) ) {
	$args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

// Loop through posts
foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>



<div class="GridLex-col-4_sm-4_xs-12 mb-20">  
       <div class="blog-col">
       		<div class="blog-col-wrapper">
            	
                
                
                <div class="blog-col-content">
                <div class="blog-col-sub"></div>
                 <div class="blog-col-main"><a href="<?php the_permalink(); ?>" class="inverse"><?php the_title();?></a></div>
                 <div class="blog-some-text">
                 <p><?php  $content = get_the_content();
				 
				 echo get_excerpt();
 //echo substr($content, 0, 150); ?>...</p>
                 </div>
                             
                  </div>
            </div>       
       </div>     	                        
</div> 

 


<?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>



</div>
</div>
</div>
</div>
</div>
</div>



<?php get_footer(); ?>