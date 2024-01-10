<?php
/**
/* Template Name: About
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>




    <!-- Header End -->

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

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/about/about-1.jpg"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/about/about-2.jpg"></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/about/about-3.jpg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About videograph</span>
                            <h2>WHo we are?</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/si-3.png" alt="">
                                    </div>
                                    <h4>Video distribution</h4>
                                    <p>Extend your reach and maximize audience engagement with our strategic video distribution services. We optimize your content across various platforms, ensuring it resonates with your target audience and gains the visibility it deserves.</p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__item">
                                    <div class="services__item__icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/si-4.png" alt="">
                                    </div>
                                    <h4>Video hosting</h4>
                                    <p>Experience seamless video hosting solutions tailored to your needs. From secure and reliable platforms to customizable player options, we provide a foundation for your videos to be showcased effortlessly while maintaining optimal playback quality.</p>

                                </div>
                            </div>
                        </div>

                        <div class="about__text__desc">
                            <p>Formed in 2020 by Crispin Manda and Jael Maina, Videoprah is an award-winning, full-service
                                production company specializing in commercial, broadcast, tourism & action sport video
                                production services has been featured.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Loved By Clients</span>
                        <h2>What clients say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial/ta-3.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Delivers such a great service that it can benefit all kinds of people from any number
                                    of industries.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <div class="testimonial__text">
                                <p>Videographer delivers such a great service that it can benefit all kinds of people
                                    from any number.</p>
                            </div>
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Krista Attorn</h5>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-1.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-2.png" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-3.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <<?php echo esc_url(get_template_directory_uri());?>/img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-4.png" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/team-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Welcome to</span>
                        <h2>OUR Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/fb6.jpg">
                        <div class="team__item__text">
                            <h4>@nastacia_keilla</h4>
                            <!-- <p>Videographer</p> -->
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/fb2.jpg">
                        <div class="team__item__text">
                            <h4>@sharon987</h4>
                            <!-- <p>Videographer</p> -->
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/fb3.jpg">
                        <div class="team__item__text">
                            <h4>@bella_mwas01</h4>
                            <!-- <p>Videographer</p> -->
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/fb4.jpg">
                        <div class="team__item__text">
                            <h4>@tessy_hilda</h4>
                            <!-- <p>Videographer</p> -->
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">View Our Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Footer Section Begin -->
   <?php get_footer(); ?>