<?php
/**
 * Template Name: Front Page
 *
 * A custom page template without sidebar.
 */
get_header();
$slider_title = get_field( "slider_title" );
$slider_subtitle = get_field( "slider_subtitle" );

$testimonial_title = get_field( "testimonial_title" );
$testimonial_subtitle = get_field( "testimonial_subtitle" );
?>

<div class="flexslider-hero-slider">
<div id="mainFlexSlider">
<div class="flexslider">
<ul class="slides">                                           
<?php 
$args = array( 'post_type' => 'sliders', 'posts_per_page' => 4 );
$the_query = new WP_Query( $args ); 
 if ( $the_query->have_posts() ) {
 while ( $the_query->have_posts() ) { $the_query->the_post(); 

$thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
?>
                        
                        
                        
                        
							<li class="slide">
								<div class="flexslider-image-bg" style="background: url(<?php echo $thumbnail; ?>) center center no-repeat; background-size:cover"></div>
							</li><!-- slide1 end -->

						
<?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
						
						
							
							
						</ul><!-- slides end -->

						<div class="flexslider-overlay"></div>
						
					</div><!-- flexslider end -->
				</div>
        
        
        
        
       
       
       <div class="main-search-holder">
						
					<div class="container">
	
						<div class="row">
					
							<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
							
								<h1 class="hero-title">GLAMOROUS LANKA HOLIDAYS </h1>
								<p class="lead">Explore Paradise in Comfort</p>

							</div>
							
						</div>
						
 
						
				
					</div>
				
				</div>
				
                
            
                
			</div>







<div class="clear"></div>
        
  
	<section class="welcome-section">
     <div class="container welcome-shadow">				
					<div class="row">						
						<div class="col-sm-6">
    	<div class="welcome-content">
        	<div class="welcome-title"><h3><span>Welcome To Glamorous Lanka
</span></h3></div>
<div class="welcome-text">

<p>Glamorous Lanka Holidays is a holiday company which has stood the test of time. This company warmly welcomes you to taste and experience the splendid and specific locations situated in this Pearl of the Indian Ocean – Sri Lanka. Our Company Policy is to take Personal Care of you, when you book with us, as we always strive to give you your money’s worth, in addition to safety and reliability. Many of our customers have endorsed the services offer as excellent, and beyond one’s imagination. So, when you book with us, you are truly assured of a superb Sri Lanka Holiday Package Par Excellence. These packages include Romantic Getaways, Family Holidays, Group Packages or even Individual Holidays.</p>
</div>
        </div>
    	</div>
        <div class="col-sm-6 welcome-image-cover ph-0">
        	<div class="welcome-image">
        	</div>
        </div>
        
        </div>
        </div>
    </section>
        
        
        
	<section class="package-section section-padding-top-0">
			
            <div class="container">
				
					<div class="row">
						
						<div class="col-sm-12">
							
							<div class="section-title">
							
								<h3><span>Tour Packages</span></h3>
							
							</div>
							
						</div>
					
					</div>
					
					
					
				</div>
           <div class="package-row"> 
           
           <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 6 ,  'order' => 'ASC' );
$the_query = new WP_Query( $args ); 
 if ( $the_query->have_posts() ) {
 while ( $the_query->have_posts() ) { $the_query->the_post(); 
$days = get_field( "days" );
$nights = get_field( "nights" );
$price = get_field( "price" );
$reviews = get_field( "reviews" );
$rating = get_field( "rating" );

$thumbnail = get_field( "front_image_1" );
if(!empty($thumbnail)){
	$thumbnail = get_field( "front_image_1" );
}else{
	$thumbnail = get_template_directory_uri().'/images/blank.jpg';
	}

?>
           
           	<div class="col-sm-4 ph-0">
           
           
           <div class="package-wrapper" style="background:url(<?php echo $thumbnail; ?>); background-size: cover;
    background-repeat: no-repeat;     background-position: center center;">
            <a href="<?php the_permalink(); ?>" class="package-link">
            </a>
                   
           			<div class="package-info">                    
                    <div class="content package-title clearfix">
											<h5><span><?php the_title(); ?></span></h5>																					
					   </div>
                       <div class="package-time">
                       <span><?php echo $days; ?> D <?php if(!empty($nights)) { echo '/'.$nights; ?> N<?php } ?></span>
                       </div>
                       
                    </div>
           
           
                                 
												
           </div>
           
           
            </div>
           
        <?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
   
           
           
         
            </div>
            
            
<div class="container">         
<div class="row">
<div class="view-all-links">
<a href="https://glamorous.edengardentourslk.com/packages/">View All</a>
</div>
</div>
</div>            
				 
			</section>
			       
    
    
    
    
    
    
    
    
     
    	<section class="day-tour-section day-tour-bg section-padding-top-0">
			
				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-12">
							
							<div class="section-title">
							
								<h3><span>Day Tours</span></h3>
								
							</div>
							
						</div>
					
					</div>


<div class="container">
<div class="row">
                    
     <div class="col-sm-6">
     
     
     <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Colombo-Day-Tour-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;"><a href="<?php echo home_url('/'); ?>colombo-day-tour"  class="daytourlink"></a>
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Colombo Day Tour</span></h5>																					
	 </div>
   </div>          
  
     </div>
     
     
     </div>
     <div class="col-sm-3">
    
    
     <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Galle-Day-Tour-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;">     
    <a href="<?php echo home_url('/'); ?>galle-day-tour"  class="daytourlink" ></a>
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Galle Day Tour</span></h5>																					
	 </div>
   </div>          
   
     </div>
     
     </div>
     <div class="col-sm-3">
     
     
      <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Kandy-Day-Tour-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;">
    <a href="<?php echo home_url('/'); ?>kandy-day-tour"   class="daytourlink"></a>     
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Kandy Day Tour</span></h5>																					
	 </div>
   </div>          

     </div>
     
     </div>
     
     </div>
     
     
     <div class="row">
     
     
     
        <div class="col-sm-3">
      <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Kithulgala-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;"> 
    <a href="<?php echo home_url('/'); ?>kithulgala-day-tour"  class="daytourlink" ></a>    
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Kithulgala Day Tour</span></h5>																					
	 </div>
   </div>          
     </div>
     
     </div>
     <div class="col-sm-3">
     <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Negombo-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;"> 
    <a href="<?php echo home_url('/'); ?>negombo-day-tour"  class="daytourlink" ></a>    
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Negombo Day Tour</span></h5>																					
	 </div>
   </div>          

     </div>
     
     </div>
     <div class="col-sm-6">
     <div class="day-tour-wrapper" style="background: url(<?php echo home_url(); ?>/wp-content/uploads/2020/09/Sinharaja-sm-min.jpg);
    min-height: 250px;background-size: cover;background-position: center center;">  
     <a href="<?php echo home_url('/'); ?>sinharaja-day-tour"  class="daytourlink" ></a>   
     <div class="day-tour-info">                    
     <div class="day-tour-title">
	<h5><span>Sinharaja Day Tour</span></h5>																					
	 </div>
   </div>          
  
     </div>
     
     </div>
                    
                    
</div>

<div class="row">
<div class="view-all-links">

<a href="<?php echo home_url('/');?>day-tour/">View All</a>
</div>
</div>
</div>



					
						
				</div>
				
			</section>


    
    
    

 
    
    
    
    
    
    
    
    
    

<section class="section-padding-top-0">
			
				<div class="container">
				
				
                    <div class="row">
						
						<div class="col-sm-12">
							
							<div class="section-title">
							
								<h3><span>Destinations</span></h3>
									
							</div>
							
						</div>
					
					</div>
               
               
               
               
               


						
 <div class="row">
                        
                        
                        
                        
                        
                    
<?php 
$args = array( 'post_type' => 'destination', 'posts_per_page' => 8);
$the_query = new WP_Query( $args ); 
 if ( $the_query->have_posts() ) { ?>
 
<div   class="gallery-slideshow3">
    <?php 
 while ( $the_query->have_posts() ) { $the_query->the_post(); 

$thumbnail = get_field( "front_image_2" );
if(!empty($thumbnail)){
	$thumbnail = $thumbnail;
}else{
	$thumbnail = get_template_directory_uri().'/images/blank.jpg';
}

?>

<div class="scroll-new">
								<div class="package-grid-item"> 

									

									<a href="<?php the_permalink(); ?>">
										<div class="image destination-image" >
                                        <div class="day-tour-title2">
											<h5><span><?php the_title(); ?></span></h5>																		
										</div>                                                                                                                             
											<div class="absolute-in-image">
												
											</div>
                                            <img src="<?php echo $thumbnail; ?>" >
										</div>
										
									</a>

                                        

								</div>

							
</div>

<?php } ?> </div>  <?php  wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>

</div>
					
	



					
               
                    
                    
                    
                    
					
				</div>
				<br/><br/>
			</section>
        




    
        
	<section class="package-section section-padding-top-0">
			
            <div class="container">
				
					<div class="row">
						
						<div class="col-sm-12">
							
							<div class="section-title">
							
								<h3><span>Activities</span></h3>
							
							</div>
							
						</div>
					
					</div>
					
					
					
				</div>
           <div class="package-row"> 
           
           <?php 
$args = array( 'post_type' => 'activitie', 'posts_per_page' => 6 ,  'order' => 'ASC' );
$the_query = new WP_Query( $args ); 
 if ( $the_query->have_posts() ) {
 while ( $the_query->have_posts() ) { $the_query->the_post(); 



$thumbnail = get_field( "activities_front_image" );
if(!empty($thumbnail)){
	$thumbnail = get_field( "activities_front_image" );
}else{
	$thumbnail = get_template_directory_uri().'/images/blank.jpg';
	}


?>
           
           	<div class="col-sm-4 ph-0">
           
           
             
           
      <div class="package-wrapper" style="background:url(<?php echo $thumbnail; ?>); background-size: cover;
    background-repeat: no-repeat;     background-position: center center;">
     <a href="<?php the_permalink(); ?>" class="package-link">
            </a>
           			<div class="package-info">                    
                    <div class="content package-title clearfix">
											<h5><span><?php the_title(); ?></span></h5>																					
					   </div>
                      
                       
                    </div>                                
           </div>
           
           
            </div>
           
        <?php } wp_reset_postdata(); ?>
<?php }else{  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php } ?>
   
           
           
         
            </div>
            
            
                    <div class="container">
				
				<div class="row">
<div class="view-all-links">

<a href="<?php echo home_url('/');?>activities/">View All</a>
</div>
</div> </div>
				
				 
			</section>
			       
    
    
    
    
 <section >  
 <?php echo do_shortcode('[instagram-feed]'); ?>  
</section>
        
    
    


<?php get_footer(); ?>