<?php
wp_enqueue_style('style', get_stylesheet_uri() );
get_header();
?>
<section>
    <div class="container">
      <div class="autocomplete">      
        
        <!-- <input id="project"> -->
        <input type="hidden" id="project-id">
        <form class="navbar-form" role="search">
          <div class="form-group has-feedback has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search for apps to connect" id="project">
          </div>
          </form>
      </div>
    <div class="single-div"> 
                
            <div class="inc-div">
             <div class="sidebar-div">
             <section class="side-bar-section">       
              <span>  
                <span class="single-img-div">
                    <img class="" width="105" height="105" src="<?php echo get_template_directory_uri().'/img/1.png' ?>">
                 </span>
              </span>
               <span  class="single-details">
                  <h2  class="single-details-title">Trello</h2>
                  <span  class="single-details-subtitle">Project Management</span>
                  <div  class="single-details-buttondiv "><a  class="single-details-button">details</a></div>
               </span>
              </section>
            </div>
            </div>                
             <div class="single-div-body">
                <h3 class="single-title">Google Analytics</h3>
                <h6 class="catgory-tags-title">Category1, Category 2, Tags </h6>
             <div class="single-body">
                
                <p class="text-center">In a matter of minutes and without a single line of code, Zapier allows you to automatically send info between Trello and Google Sheets. n a matter of minutes and without a single line of code, Zapier allows you to automatically send info between Trello and Google Sheets. Get started with workflows like: Create Trello cards from new rows on Google Sheets. Or check out the rest of our guided workflows. Save time with Zapier; it's free to try. Get started with workflows like: Create Trello cards from new rows on Google Sheets. Or check out the rest of our guided workflows. Save time with Zapier; it's free to try.</p>
                <a href="#" class="btn btn-primary btn-sm text-center">Connect to 2000+ Apps</a>
            </div>
             </div>
        </div>
                
         </div>   
   </div>
</div>
</section>
<?php get_footer() ?>