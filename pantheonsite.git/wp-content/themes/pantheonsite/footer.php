    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer__left">
                        <div class="menu_ft row">
                            <div class="col_menu_ft wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h3>Brands</h3>
                 				<?php
	                                wp_nav_menu( array(
	                                    'menu'              => 'menu-footer-brands',
	                                    'theme_location'    => 'menu-footer-brands',
	                                     'menu_class'=> 'nav flex-column', 
	                                )); 
                                ?>
                            </div>
                            <div class="col_menu_ft wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h3>Customer Service</h3>
                               
                 				<?php
	                                wp_nav_menu( array(
	                                    'menu'              => 'menu-footer-customer-service',
	                                    'theme_location'    => 'menu-footer-customer-service',
	                                    'menu_class'=> 'nav flex-column', 
	                                )); 
                                ?>                              
                            </div>
                            <div class="col_menu_ft wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h3>About</h3>
                 				<?php
	                                wp_nav_menu( array(
	                                    'menu'              => 'menu-footer-about',
	                                    'theme_location'    => 'menu-footer-about',
	                                    'menu_class'=> 'nav flex-column', 
	                                )); 
                                ?>
                            </div>
                            <div class="col_menu_ft wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h3>Boutiques</h3>
                 				<?php
	                                wp_nav_menu( array(
	                                    'menu'              => 'menu-footer-boutiques',
	                                    'theme_location'    => 'menu-footer-boutiques',
	                                    'menu_class'=> 'nav flex-column', 
	                                )); 
                                ?>
                            </div>
                            <div class="col_menu_ft wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                                <h3>Careers</h3>
                  				<?php
	                                wp_nav_menu( array(
	                                    'menu'              => 'menu-footer-careers',
	                                    'theme_location'    => 'menu-footer-careers',
	                                    'menu_class'=> 'nav flex-column', 
	                                )); 
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer__right">
                        <div class="footer__newsletter wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <h3 class="footer-heading">Email Sign Up: The Kennedy Report</h3>
                            <p>Receive all exclusive Kennedy updates</p>
                            <a class="sign_up" href="http://test-kennedy-site.pantheonsite.io/signup/">SIGN UP</a>
                            <div class="footer__social">
                                <p>Follow Us</p>
                                <ul class="socials list-group-horizontal list-group">
                                    <li class="list-group-item">
                                        <a target="_blank" href="https://www.instagram.com/kennedyauofficial/">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a target="_blank" href="https://www.facebook.com/kennedyauofficial/">
                                            <i class="fa fa-facebook-square " aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a target="_blank" href="https://www.youtube.com/channel/UCK1nefNOVrmlrdk5Gib6KGA?view_as=subscriber"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="copyright-left">
                        <img src="http://test-kennedy-site.pantheonsite.io/wp-content/themes/kennedy/images/Kennedy_helmet_footer-icon.svg">
                        <span>KENNEDY 2020 ©</span>
                    </div>
                    <div class="copyright-right">
                        <img src="<?php echo get_template_directory_uri() ?>/images/mastercard-grey-icon.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/visa-grey-icon.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/amex-grey-icon.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/paypal-grey-icon.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/alipay-grey-icon.png" />
                        <img src="<?php echo get_template_directory_uri() ?>/images/wechatpay-grey-icon.png" />
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>