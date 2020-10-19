<?php
/*
Template Name: Home Page Site
*/
get_header();
?>
    <main>

        
            <section class="banner-slider-homepage">
            	        <?php if( have_rows('list_banner_slider') ): ?>						  
						    <?php while( have_rows('list_banner_slider') ): the_row();?>	
						        <?php  $slider_image = get_sub_field('slider_image'); ?>	
 								<?php  $slider_image_mobile = get_sub_field('slider_image_mobile'); ?>	
						         	
				                    <div class="row-slider-homepage">
				                        <div class="img-slider">
				                            <img alt="" src="<?php echo $slider_image ?>">
				                            <div class="slider__content container text-left">
				                                <h2 class="text-uppercase"><?php echo get_sub_field('slider_content') ?></h2>
				                                <div class="slider__link text-uppercase">
				                                    <a href="<?php echo get_sub_field('slider_link') ?>">
				                                    	<?php echo get_sub_field('slider_bottom_link') ?></a>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="img-slider-mobile">
				                            <img alt="" src="<?php echo $slider_image_mobile ?>">
				                        </div>
				                    </div>
               				<?php endwhile; ?>						   
						<?php endif; ?>    

            
            </section>
            <section class="block_shopproduct">
                <div class="container text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    	<?php  
        					echo $title_shop_luxury_timepieces = the_field('title_shop_luxury_timepieces'); 
        				?> 
                    </h2>
                    <div class="slider_product">
            	        <?php if( have_rows('slider_product') ): ?>						  
						    <?php while( have_rows('slider_product') ): the_row();?>	
						        <?php  $product_image = get_sub_field('product_image'); ?>                    	
	                            <div class="col_shopproduct wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
	                                <a href="<?php  echo get_sub_field('product_link'); ?>">
	                                    <div class="img_product">
	                                        <img class="img-fluid" src="<?php echo $product_image ?>">
	                                    </div>
	                                    <div class="body_product">
	                                        <div class="shopproduct_category">
	                                            <?php  
        											echo get_sub_field('product_category'); 
        										?>
	                                        </div>
	                                        <h3 class="shopproduct__title">
	                                        	<?php  
        											echo get_sub_field('product_name'); 
        										?>
	                                        </h3>
	                                        <h4 class="shopproduct_sku">
	                                             <?php  
        											echo get_sub_field('product_sku_'); 
        										?>
	                                        </h4>
	                                    </div>
	                                </a>
	                            </div>
               				<?php endwhile; ?>						   
						<?php endif; ?>    	                            
                    </div>
                </div>
            </section>
            <section class="block_thisjustit">
                <div class="container text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    THIS JUST IN
                    </h2>
                    <div class="sub_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Shop our newest collections</div>
                    <div class="row">
                        <div class="col-lg-6 col_thisjustit_left wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <a class="" href="#">
                                <div class="img_thisjustit">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/thisjustin1.jpg">
                                </div>
                                <div class="body_thisjustit text-left">
                                    <h3 class="thisjustit__title">Seaside Staples</h3>
                                    <h4 class="thisjustit__subtitle">Discover the iconic nautical inspiration of IWC timepieces</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col_thisjustit_right">
                            <div class="row">
                                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                    <a class="" href="#">
                                        <div class="img_thisjustit">
                                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/thisjustin2.jpg">
                                        </div>
                                        <div class="body_thisjustit text-left">
                                            <h3 class="thisjustit__title">Elegance Redefined</h3>
                                            <h4 class="thisjustit__subtitle">Explore the Italian splendour and style of Panerai</h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                    <a class="" href="#">
                                        <div class="img_thisjustit">
                                            <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/thisjustin3.jpg">
                                        </div>
                                        <div class="body_thisjustit text-left">
                                            <h3 class="thisjustit__title">Infinite Delight</h3>
                                            <h4 class="thisjustit__subtitle">Be captivated by the style of Jaeger-LeCoultre</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_the_report">
                <!-- Nav pills -->
                <!-- Tab panes -->
                <div class="tab-content ">
                    <div id="home" class="tab-pane active">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport1.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    DRESSED UP
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class=" tab-pane fade">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport2.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    AN EVENING WITH </br>GRAFF DIAMONDS
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class=" tab-pane fade">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport3.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    IWC X ALESANDRO </br>LJUBICIC </br> ART EXHIBITION
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills container" role="tablist">
                    <li class="nav-item">
                        <h3 class="text-white">
                        DRESSED UP
                        </h3>
                        <a class="text-white active" data-toggle="pill" href="#home">
                            READ MORE
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <h3 class="text-white">
                        AN EVENING WITH GRAFF DIAMONDS
                        </h3>
                        <a class="text-white" data-toggle="pill" href="#menu1">
                            READ MORE
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <h3 class="text-white">
                        IWC X ALESANDRO LJUBICIC ART EXHIBITION
                        </h3>
                        <a class="text-white" data-toggle="pill" href="#menu2">
                            READ MORE
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </section>

            <section class="block_the_report_mobile">
                <!-- Nav pills -->
                <!-- Tab panes -->
                <div class="tab-content slider-the-report">
                    <div class="tab-pane">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport1.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    DRESSED UP
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tab-pane">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport2.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    AN EVENING WITH GRAFF DIAMONDS
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tab-pane">
                        <img src="<?php echo get_template_directory_uri() ?>/images/thereport3.jpg" />
                        <div class="the_report__content">
                            <div class="container">
                                <h2 class="title text-white">THE REPORT</h2>
                                <div class="sub_title text-white">An insider’s eye into our world</div>
                                <div class="report__wrap">
                                    <h3 class="text-white">
                                    IWC X ALESANDRO LJUBICIC  ART EXHIBITION
                                    </h3>
                                    <a class="text-white active" href="#">
                                        READ MORE
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>


            <section class="block_kennedy_edit">
                <div class="container text-center">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    THE KENNEDY EDIT
                    </h2>
                    <div class="sub_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Luxury timepieces curated for you</div>
                    <div class="slick-slider-1">
                        <div class="col_kennedy_edit wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="avatar_kennedy_edit">
                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/kenedyedit1.jpg">
                                </a>
                                <div class="body_text text-left">
                                    <h3 class="kennedy_edit__title text-left">
                                    Everyday Essentials
                                    </h3>
                                    <a class="discover text-white text-uppercase" href="/kennedy-campaign/">
                                        Shop now<i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col_kennedy_edit wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="avatar_kennedy_edit">
                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/kenedyedit2.jpg">
                                </a>
                                <div class="body_text text-left">
                                    <h3 class="kennedy_edit__title text-left">
                                    Celebration Timepieces
                                    </h3>
                                    <a class="discover text-white text-uppercase" href="/kennedy-campaign/">
                                        Shop now<i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col_kennedy_edit wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="avatar_kennedy_edit">
                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/kenedyedit3.jpg">
                                </a>
                                <div class="body_text text-left">
                                    <h3 class="kennedy_edit__title text-left">
                                    Dazzling Timepieces
                                    </h3>
                                    <a class="discover text-white text-uppercase" href="/kennedy-campaign/">
                                        Shop now<i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col_kennedy_edit wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="avatar_kennedy_edit">
                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/images/kenedyedit4.jpg">
                                </a>
                                <div class="body_text text-left">
                                    <h3 class="kennedy_edit__title text-left">
                                    Crafted for Adventure
                                    </h3>
                                    <a class="discover text-white text-uppercase" href="/kennedy-campaign/">
                                        Shop now<i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_kennedy">
                <div class="container-fuild">
                    <div class="layout_video wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="video__bg"></div>
                        <video autoplay="" muted="" loop="">
                            <source class="" src="<?php echo $video = the_field('video'); 
        				?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="block_video_wrap text-left wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="container">
                            <div class="block_video_box_text">
                                <h2 class="block_video_title text-white">
                                	<?php  
        								echo $title_video = the_field('title_video'); 
        							?>
                                </h2>
	                               <div class="block_video_description text-white">                                	                    	<	  <?php  
	        								echo $title_sub_video = the_field('title_sub_video'); 
	        							?>        							
        						</div>
                                <div class="block_video_body text-white">
                                    <div class="text-white">
                                    	<?php  
        									echo $description_video = the_field('description_video'); 
        								?>     					
        							</div>
                                </div>
                        		<a class="discover" href="<?php echo $link_discover_video = the_field('link_discover_video'); 
        				?>">
                                    <span class="text-white">                                    	
                                    	<?php  echo $discover_video = the_field('discover_video'); ?><i class="fa fa-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
      


            <section class="block_brands text-center">
                <div class="container">                   
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    	<?php  
        					echo $title_brand = the_field('title_brand'); 
        				?>
                    </h2>
                    <div class="sub_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    	<?php  
        					echo $title_sub_brand = the_field('title_sub_brand'); 
        				?>
                    </div>

                    <div class="row">
                    	<?php if( have_rows('List_brand') ): ?>						  
						    <?php while( have_rows('List_brand') ): the_row();?>	
						         <?php  $image_brand = get_sub_field('image_brand'); ?>						         
			                        <div class="col_brands col-lg-3 col-sm-6 col-md-6">
			                            <div class="avatar_brands wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
			                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
			                                    <img class="img-fluid" src="<?php echo $image_brand; ?>">
			                                    <div class="logo_brands">
			                                        <img class="img-fluid" src="<?php echo $logo_image_brand = get_sub_field('logo_image_brand'); ?>" />
			                                    </div>
			                                </a>
			                                <h3 class="brand__title text-left">
			                                <a class="text-white" href="http://test-kennedy-site.pantheonsite.io/brand/rolex-watches/">
			                                	<?php echo $title_brand = get_sub_field('title_brand'); ?>
			                                </a>
			                                </h3>
			                            </div>
			                        </div>
 						    <?php endwhile; ?>						   
						<?php endif; ?>                                                          
                    </div>
                </div>
            </section>
            <section class="block_follow_us text-center">
                <div class="container">                  					                            
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    	<?php  
        					echo $title_follow_us = the_field('title_follow_us'); 
        				?>
                    </h2>
                    <div class="sub_title wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    	<?php  
        					echo $title_sub_follow_us = the_field('title_sub_follow_us'); 
        				?>
                    </div>
                    <div class="row">						
						<?php if( have_rows('list_image_follow_us') ): ?>						  
						    <?php while( have_rows('list_image_follow_us') ): the_row(); 						        
						        ?>						                            	
						            <?php  $image_follow_us = get_sub_field('image_follow_us'); ?>
						    			        

		                        <div class="col_follow_us wow fadeInUp col-lg-2 col-sm-6 col-md-6" data-wow-duration="2s" data-wow-delay="0.3s">
		                            <img class="img-fluid" src="<?php echo $image_follow_us; ?>">
		                        </div>
						    <?php endwhile; ?>						   
						<?php endif; ?>                   
                    </div>
                </div>
            </section>
            <section class="block_welcome">
                <div class="container">
                    <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                       

                                <?php  
        							echo $description_welcome_to_the_world = the_field('description_welcome_to_the_world'); 
        						?>

                    </div>

                </div>
            </section>
    </main>
    <?php
    get_footer();
    ?>