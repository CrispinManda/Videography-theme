
<?php
/**
/* Template Name: Portfolio
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".digital-marketing">Digital marketing</li>
                        <li data-filter=".web">Web</li>
                        <li data-filter=".photography">Photography</li>
                        <li data-filter=" .ecommerce">eCommerce</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/milly.jpg">
                            <a href="https://www.youtube.com/watch?v=8DtX6x9slqo" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>The Life Hack Podcast</h4>
                            <ul>
                             <li>By Milly</li>
                              <li>YouTuber</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/water.jpg">
                            <a href="https://www.youtube.com/watch?v=K_cLVa5fWzk" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>corporate video</h4>
                            <span>For <a href="https://www.opblue.org/">Op-blue</a> </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/portfolio/buzz.jpg">
                            <a href="https://www.youtube.com/watch?v=4GI7lArDnuQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Professionals Buzz Podcast</h4>
                            <ul>
                                <li>Kenya Institute of IT</li>
                                <li>Prof. Job Magondu</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/funday.jpg">
                            <a href="https://www.youtube.com/watch?v=CLt7Bx0gBCg" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>The Dedan Kimathi Team Building</h4>
                            <ul>
                                <li>DeKut Students</li>
                                <li>Kimathi Conservancies</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/jofu.jpg">
                            <a href="https://www.youtube.com/watch?v=u9eVowyoOZA" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Professionals Buzz Podcast</h4>
                            <ul>
                                <li>Kenya Institute of IT</li>
                                <li>Prof. Job Magondu</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/wedo.jpg">
                            <a href="https://www.youtube.com/watch?v=Y7cALvi3rWA" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Steve's Wedding </h4>
                            <ul>
                                <li>Maria Weds Steve</li>
                                <li>Nyeri Kiganjo</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/jojo.jpg">
                            <a href="https://www.youtube.com/watch?v=-vNW9IKvuqA" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>Nyeri Elevation Chapel</h4>
                            <ul>
                                <li>Live Broadcasts</li>
                                <li>Church Videos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">

                    <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/portfolio/rising.jpg">
                        <a href="https://photos.app.goo.gl/VGYqpmcm6VZGRHn5A" target="_blank">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>

                        <div class="portfolio__item__text">
                            <h4>The Jitu Limited</h4>
                            <span>The Rising Stars Graduation</span>
                            <span>Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/portfolio/genious.jpg">
                            <a href="https://photos.app.goo.gl/QsRRcfcFGhkYWY1XA"  target="_blank"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>The NEC Youth Confrence</h4>
                            <ul>
                                <li>Ibis Hotel</li>
                                <li>Nyeri</li>
                                <li>Photography</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Footer Section Begin -->

<?php get_footer(); ?>