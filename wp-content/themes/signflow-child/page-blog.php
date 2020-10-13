<?php
/*
 * Template Name: Blog Home
 */
get_header();
?>
<?php
	   
	   $pagednumber = (get_query_var('paged')) ? get_query_var('paged') : 1;
	   // are we on page one?
if(1 == $pagednumber) {
?>
<div class=" no-paddings-y mt-30" >
  <div class="container new content">
<div class="row ">

<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight">  
<div class="GridLex-col-8_sm-6_xs-12 featured-article mb-20">          
            
<?php	
$value = get_field( "featured_article" );				
$post = get_post($value ); //assuming $id has been initialized
setup_postdata($post);
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($value ), 'thumbnail' ); 
?>
<div class="home-blog">
            	<div class="home-blog-image">
               <a href="<?php the_permalink(); ?>"> <img src="<?php echo $thumbnail; ?>" ></a>
                </div>   
                
                <div class="home-blog-content">
                <div class="home-blog-title">
                <h2><a href="<?php the_permalink(); ?>" class="inverse"><?php the_title();?></a></h2>
                </div>  
                
                <div class="home-blog-footer">
             <div class="category-list">  <?php 
                $category_detail=get_the_category($value);//$post->ID
foreach($category_detail as $cd){
echo $cd->cat_name;
} ?></div>
          <div class="time-list">      
                	<?php echo do_shortcode('[rt_reading_time post_id="'.$value.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?>
                    </div>                    
                </div>   
                </div>
                    
            </div>            
            
<?php
wp_reset_postdata();
?>
	
</div>




<div class="GridLex-col-4_sm-6_xs-12 home-right-sidebar mb-20" >
<div class="most-populer">
       		
            
            <div class="populer-header">
       		<h2 class="populer-heading">Most Popular</h2>
       		</div>
            
            
            
  <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count');
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) { $the_query->the_post(); 

?>
            <div class="populer-row">
            	<div class="populer-inner">
                		<div class="populer-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="populer-footer">
                        	<div class="populer-category">
                            
                            <?php

$categories = get_the_terms( $post->ID, 'taxonomy' );
foreach( $categories as $category ) {
    echo $category->name;
}
      ?>                      
                            
                            </div>
                            <div class="populer-time"><?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?></div>
                        </div>
                
                </div>
            </div>
<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
</div>                             
<div class="most-populer">
       		
            
            <div class="populer-header">
       		<h2 class="populer-heading">Editor's Picks</h2>
       		</div>
            
            
            
  <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) { $the_query->the_post(); 

?>
            <div class="populer-row">
            	<div class="populer-inner">
                		<div class="populer-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="populer-footer">
                        	<div class="populer-category">
                            
                            <?php

$categories = get_the_terms( $post->ID, 'taxonomy' );
foreach( $categories as $category ) {
    echo $category->name;
}
      ?>                      
                            
                            </div>
                            <div class="populer-time"><?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?></div>
                        </div>
                
                </div>
            </div>
<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
</div>                         
</div>
 
       
      
      
      
  </div>
  </div>    
      
</div>                
</div>
</div>
<div class=" no-paddings-y">
<div class="container new content">     
<div class="row ">
 
<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight">       
        
<?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 2 ,'orderby'       =>  'post_date',
  );
$the_query = new WP_Query( $args ); 
if ( $the_query->have_posts() ) {
while ( $the_query->have_posts() ) { $the_query->the_post(); 
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID ), 'thumbnail' ); 
?>
<div class="GridLex-col-4_sm-4_xs-12 mb-20">  



       <div class="blog-col">
       		<div class="blog-col-wrapper">
            	<div class="blog-col-image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail; ?>" ></a></div>
                
                
                <div class="blog-col-content">
                <div class="blog-col-sub"></div>
                 <div class="blog-col-main"><a href="<?php the_permalink(); ?>" class="inverse"><?php the_title();?></a></div>
                  <div class="blog-col-footer">
                  <div class="blog-col-category">
			<?php

$categories = get_the_terms( $post->ID, 'taxonomy' );
foreach( $categories as $category ) {
    echo $category->name;
}
      ?>                      
                            
                            </div>
                            <div class="blog-col-time"><?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?></div>
                    
                  </div>                  
                  </div>
            </div>       
       </div>     	                        
</div>            
<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>         
            
            
            
            
            
<div class="GridLex-col-4_sm-4_xs-12 mb-20">  
            	<div class="news-letter" > 
                		<div class="news-letter-wrapper">
                      			<h3 class="news-letter-heading">Subscribe via Email</h3>  
                        </div>
                        <div class="news-content">
                        	<?php  echo do_shortcode('[hf_form slug="sidebar"]');?>
                        </div>
                </div>
            
            
            </div>
        </div>
     </div>  
     </div>
     </div>     
</div>                        
<div class=" no-paddings-y">


<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		
		?>
           <?php the_content();  ?>
            
<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?> 
            

</div>

<?php } ?>
<style>
.hide-list{
	display:none !important;
	}
</style>
<div class=" no-paddings-y   <?php if(1 != $pagednumber){  echo "mt-40";  }else{ echo 'mt-20';} ?>" >
<div class="container new content">     
<div class="row ">

<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight" id="main1">       
        
<?php 
$temp = $wp_query;
$wp_query= null;

if(1 == $pagednumber) {
$args = array(
  'post_type'     =>  'post',
  'post_status'   =>  'publish',
  'posts_per_page'  =>  7,
  'orderby'       =>  'post_date', 
  'paged' => $paged,
  'offset' => '2'
  
);  

}else{
	$args = array(
  'post_type'     =>  'post',
  'post_status'   =>  'publish',
  'posts_per_page'  =>  7,
  'orderby'       =>  'post_date',
  'paged' => $paged,
 
  
  
);  
	
}

$i=1;


$wp_query = new WP_Query($args);
while ( $wp_query->have_posts() ) : $wp_query->the_post();
$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID ), 'thumbnail' );



 switch ($i) {
    case "1":
	
	if(1 == $pagednumber){
    $new_class =  "GridLex-col-4_sm-4_xs-12";
	}else if(2 == $pagednumber){
	$new_class =  "GridLex-col-4_sm-4_xs-12 hide-list";		
	}else{
	  $new_class =  "GridLex-col-4_sm-4_xs-12";
	} 
    break;
  
   case "2":
   if(1 == $pagednumber){
    $new_class =  "GridLex-col-8_sm-8_xs-12";
	}else{ if(2 == $pagednumber){
	$new_class =  "GridLex-col-8_sm-8_xs-12 hide-list";		
	}else{
		 $new_class =  "GridLex-col-8_sm-8_xs-12";
	}}
    break;
    
    case "3":
    $new_class = "GridLex-col-8_sm-8_xs-12";
    break;
    
    
    case "4":
   $new_class =  "GridLex-col-4_sm-4_xs-12";
    break;
    
    
    case "5":
    $new_class = "GridLex-col-4_sm-4_xs-12";
    break;
    
    case "6":
    $new_class =  "GridLex-col-4_sm-4_xs-12";
    break; 
     
     
 }

 
?>

<?php if(2 == $pagednumber){

if($i == 4){	
?>


            
<div class="<?php echo $new_class; ?> mb-20 post-list">  
            	<div class="news-letter" > 
                		<div class="news-letter-wrapper">
                      			<h3 class="news-letter-heading">Subscribe via Email</h3>  
                        </div>
                        <div class="news-content">
                        	<?php  echo do_shortcode('[hf_form slug="sidebar"]');?>
                        </div>
                </div>
            
            
</div>



<?php }else{ ?>
<div class="<?php echo $new_class; ?> mb-20 post-list">  
 <div class="blog-col">
       		<div class="blog-col-wrapper">
            	<div class="blog-col-image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail; ?>" ></a></div>
                
                
                <div class="blog-col-content">
                <div class="blog-col-sub"></div>
                 <div class="blog-col-main"><a href="<?php the_permalink(); ?>" class="inverse"><?php the_title();?></a></div>
                  <div class="blog-col-footer">
                  <div class="blog-col-category">
			<?php

$categories = get_the_terms( $post->ID, 'taxonomy' );
foreach( $categories as $category ) {
    echo $category->name;
}
      ?>                      
                            
                            </div>
                            <div class="blog-col-time"><?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?></div>
                    
                  </div>                  
                  </div>
            </div>       
       </div>     	                        
</div>  

<?php }}else{ ?>

<div class="<?php echo $new_class; ?> mb-20 post-list">  
 <div class="blog-col">
       		<div class="blog-col-wrapper">
            	<div class="blog-col-image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail; ?>" ></a></div>
                
                
                <div class="blog-col-content">
                <div class="blog-col-sub"></div>
                 <div class="blog-col-main"><a href="<?php the_permalink(); ?>" class="inverse"><?php the_title();?></a></div>
                  <div class="blog-col-footer">
                  <div class="blog-col-category">
			<?php

$categories = get_the_terms( $post->ID, 'taxonomy' );
foreach( $categories as $category ) {
    echo $category->name;
}
      ?>                      
                            
                            </div>
                            <div class="blog-col-time"><?php echo do_shortcode('[rt_reading_time post_id="'.$post->ID.'" label="Reading Time:" postfix="minutes" postfix_singular="minute"].'); ?></div>
                    
                  </div>                  
                  </div>
            </div>       
       </div>     	                        
</div>  

<?php } ?>

         
<?php $i++; endwhile;

if(function_exists('wp_pagenavi')) { 
  echo '<div class="pagination">';
  wp_pagenavi();
  echo '</div>';
}



$wp_query = null; $wp_query = $temp;
wp_reset_query(); ?>



            

        </div>
     </div>  
     </div>
     </div>    
     
     
     
  
      
    </div> 
  




<div class=" no-paddings-y">  
 <div class="container new content">   
<div class="row ">

<div class="GridLex-gap-20-wrappper">						
<div class="GridLex-grid-noGutter-equalHeight">  


<div class="GridLex-col-12_sm-12_xs-12 mb-20">  
<div class="bottom-newsletter">
	<div class="bottom-newsletter-wrapper">
			
            <div class="title-wrapper">
            	<div class="main-text">
                Subscribe to Our Blog
                </div>
                <div class="sub-text">
                Stay up to date with the latest marketing, sales, and service tips and news.


                </div>
            </div>
<div class="form-wrapper">
        	<?php echo do_shortcode('[hf_form slug="footer"]'); ?>    
</div>
            
            

	</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>



<?php
get_footer();
?>