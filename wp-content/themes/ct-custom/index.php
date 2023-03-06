<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
<?php wp_head();?> 
</head>
<body <?php body_class(); ?>>
        <!-- Top menu start-->
       <div class="container-fluid bg-dangers">
            <div class="container d-flex flex-row justify-content-between">
                    <div class="text-white text"><span class="call">CALL US NOW!</span> <?php echo get_theme_mod('top_menu_phone'); ?></div>
                    <div class="text-white text"><span class="call"><a class="call" href="">LOGIN</a> </span> <a class="text-white text"   href="">SIGNUP</a> </div>
                    
                    
            </div>
       </div>
       <!-- end top menu end-->
       <!-- main-menu start -->
       <div class="container-fluid bg_grey">
        
            <div class="container d-flex flex-row justify-content-between">
                <!-- logo Start -->
                <!-- <div class="logo">YOUR<span class="logo_right">LOGO</span> </div> -->
                <div class="logos"><a  href="<?php bloginfo('home');?>"><?php the_custom_logo(); ?></a></div>
                <!-- logo end -->
                <!-- Menu Start -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary navmenu">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php
                                            wp_nav_menu(array(
                                                'theme_location' => 'primary-menu',
                                                'container' => false,
                                                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                                                'fallback_cb' => '__return_false',
                                                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                                                'depth' => 2,
                                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                                            ));
                                            ?>
                                    </div>
                        
                          </div>
                        </div>
                      </nav>  
                <!-- end menu             -->
            </div>
        </div>        
       <!-- main-menu end -->  
       <!--breadcrumb start -->  
       <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb breadcrumbs ">
              <li class="breadcrumb-item ">Home</li>
              <li class="breadcrumb-item" >Who We Are</li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
             
            </ol>
          </nav>
       </div>
       <!-- breadcrumb end -->  
       <!-- contact start -->
       <div class="container">
        <h2 class="contact_h2">Contact</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam posuere ipsum nec velit mattis elementum. Cum sociis natoque 
            penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas eu placerat metus, eget placerat libero. </p>

       </div>  
       <!-- contact end --> 
       <!-- footer part start -->
       <div class="container ">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6 ">
                    <h2 class="contact2_h2 border-bottom border-5 border-secondary">Contact us</h2>
                    <?php echo do_shortcode('[contact-form-7 id="69" title="Untitled"]'); ?>
<!-- <form action="">
<div class="">                    
<input type="text" class="form-control input_form" placeholder="Name*">
</div>
<div class=" d-flex justify-content-between">
<div class="col-md-6">
<input type="text" class="form-control input_form " placeholder="Phone*" >
</div>
<div class="col-md-5 ">
<input type="text" class="form-control input_form" placeholder="email*" >
</div>
</div>
<div class="form-group">                            
<textarea class="form-control input_form " id="exampleFormControlTextarea1" rows="3" placeholder="Message*"></textarea>
</div>
<button class="btn btn-danger button_submit">Submit</button> -->
                    </form>
                </div>
                <div class="col-md-5 ">
                    <h2 class="contact2_h2 border-bottom border-5 border-secondary">reach us</h2>
                    <h6 class="reach_us">Coalition Skills Test</h6>
                    <p class="address"><?php echo get_theme_mod('footer_menu_address'); ?></p>
                        <h6 >Phone: <?php echo get_theme_mod('footer_menu_phone');?></h6>
                        <h6 class="h6_fax" >Fax: <?php echo get_theme_mod('footer_menu_fax');?></h6>
                       
                        <ul class="ul_social">
                          <li class="li_social"><a target="blank" href="<?php echo get_theme_mod('footer_facebook_link');?>"><i class="fab fa-facebook-f"></i></a></li>
                          <li class="twitter li_social"><a target="blank" href="<?php echo get_theme_mod('footer_twitter_link');?>"><i class="fab fa-twitter"></i></a></li>
                          <li class="li_social"><a target="blank" href="<?php echo get_theme_mod('footer_linkedin_link');?>"><i class="fab fa-linkedin-in"></i></a></li>
                          <li class="li_social"><a target="blank" href="<?php echo get_theme_mod('footer_pinterest_link');?>"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                         
                  
                </div>
        </div>

       </div>

       <!-- footer part end -->
     
   
    

    
     
    <!-- bootstrap -->
    
    <?php wp_footer();?>
</body>
</html>