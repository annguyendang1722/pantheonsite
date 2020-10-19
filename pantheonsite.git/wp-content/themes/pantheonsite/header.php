<!doctype html>
<html lang="vi">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<title><?php the_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body>
        <header>
            <div class="menu-main">
                <div class="top-header">
                    <div class="container">
                        <div class="brand" >
                            <a href="" class="brand-image">
                                <img src="<?php echo get_theme_mod( 'logo_header_top' ); ?>" alt="">
                            </a>
                        </div>
                        <div class="logo" >
                            <a href="" class="logo-image">
                                <img src="<?php echo get_theme_mod( 'img-upload' ); ?>" alt="">
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="left">
	                 				<?php
		                                wp_nav_menu( array(
		                                    'menu'              => 'menu-header-account',
		                                    'theme_location'    => 'menu-header-account',
		                                     'menu_class'=> 'info', 
		                                )); 
	                                ?>



                                    <img src="http://test-kennedy-site.pantheonsite.io/wp-content/themes/kennedy/images/component-account-icon.svg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="menu_header">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-dark special-color-dark">
                            <!-- Navbar brand -->
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo get_theme_mod( 'img-upload' ); ?>" alt="">
                            </a>
                            <!-- Collapse button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                            aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            </button>
                            <!-- Collapsible content -->
                           
                                <!-- Links -->
 									<?php
										wp_nav_menu( array(
											'menu'              => 'menu-header-main',
											'theme_location'    => 'menu-header-main',
											'depth'	          => 2, 										
											'container'       => 'div',
											'container_class' => 'collapse navbar-collapse',
											'container_id'    => 'navbarSupportedContent2',
											'menu_class'      => 'navbar-nav menu-level-1 mr-auto',
											 'add_li_class'  => 'nav-item dropdown',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										));
									?>
                              
                        
                            <div class="block_right_menu">
                                <a href="#" class="block-right-menu__search block-right-menu__btn js-search">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/component-search-icon.svg" alt="">
                                </a>
                                <a href="/your-favourites/" class="block-right-menu__favorite block-right-menu__btn">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/component-favourite-icon.svg" alt=""><span>0</span>
                                </a>
                                <a href="http://test-kennedy-site.pantheonsite.io/cart/" class="block-right-menu__bag block-right-menu__btn js-cart-count">
                                    <img src="<?php echo get_template_directory_uri() ?>/images/component-bag-icon.svg" alt="">
                                    <span class="cart-count">1</span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                

            </div>
        </header>