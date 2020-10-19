<?php
get_header(); 
?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <main class="product-archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="description">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="category-product">
                                <div class="title">
                                    <h3>
                                        <a href="#" title="Bàn Kệ">CÁC CHUYÊN MỤC TIN TỨC</a>
                                    </h3>
                                </div>
                                <ul>     
                                    <?php if ( is_active_sidebar( 'chuyen-muc-tin-tuc' ) ) : ?>
                                        <?php dynamic_sidebar( 'chuyen-muc-tin-tuc' ); ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="select-price">
                                <div class="title">
                                    <h3>
                                        <a href="#" title="Bàn Kệ">Ghế sofa</a>
                                    </h3>
                                </div>
                                <div class="customradio">
                                    <ul>
                                        <li> 
                                            <input type="radio" id="price-1" name="selector" value="">
                                            <label for="price-1">Dưới 10 triệu</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="price-2" name="selector" value=""> 
                                            <label for="price-2">Từ 10 - 20 triệu</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="price-3" name="selector" value=""> 
                                            <label for="price-3">Từ 20 - 30 triệu</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="price-4" name="selector" value=""> 
                                            <label for="price-4">Từ 30 - 40 triệu</label>
                                            <div class="check"></div>
                                        </li>
                                        <li>
                                            <input type="radio" id="price-5" name="selector" value=""> 
                                            <label for="price-5">Từ 40 - 55 triệu</label>
                                            <div class="check"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php get_template_part( 'inc/layout/sidebars/sidebar', 'general' );?>
                        </div>  
                        <div class="col-lg-9">
                            <div>
                                <nav class="breadcrumb-nav" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" title=""></a></li>
                                        <li class="breadcrumb-item">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                                <h1><?php the_title(); ?></h1>
                                <article class="description-detail description">                          
                                    <?php the_content(); ?>
                                </article>
                            </div>                        

                        </div>  
                    </div>
                </div>
            </section>
            <?php get_template_part( 'inc/layout/layout', 'general' );?>
    </main>
<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer(); 
?>