<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */

 get_header(); ?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>WELCOME TO OUR Website</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>A GENZ WAY OF VISUAL CREATION</h2>
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>WELCOME TO MY Portfolio</h2>
                                <a href="<?php echo esc_url(home_url('/about')); ?>" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services__title">
                    <div class="section-title">
                        <span>Our services</span>
                        <h2>What We Do?</h2>
                    </div>
                    <p>If you hire a videographer from our team, you will get a video professional to make a custom video for your business, till the project is over.</p>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="primary-btn">View all services</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/si-1.png" alt="">
                            </div>
                            <h4>Motion graphics</h4>
                            <p>Elevate your visual storytelling with captivating motion graphics that bring your narrative to life. From dynamic logo animations to engaging visual effects, we craft immersive experiences that leave a lasting impact.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/si-2.png" alt="">
                            </div>
                            <h4>Scriptwriting and editing</h4>
                            <p>Transform your ideas into compelling narratives with our expert scriptwriting and editing services. Whether refining existing scripts or creating from scratch, we ensure your story is conveyed with clarity, creativity, and cinematic finesse.</p>
                        </div>
                    </div>
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
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->


    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div class="work__item wide__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/milly.jpg">
                <a href="https://www.youtube.com/watch?v=8DtX6x9slqo" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>The Life Hack Podcast</h4>
                    <ul>
                       <li>By Milly</li>
                        <li>Iracha</li>
                    </ul>
                </div>
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/water.jpg">
                <a href="https://www.youtube.com/watch?v=K_cLVa5fWzk" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>Reels
            <div class="work__item small__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/wed.jpg">
                <a href="https://www.youtube.com/watch?v=Y7cALvi3rWA" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item large__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/keru.jpg">
                <a href="https://www.youtube.com/watch?v=UmwRshGpXqs&t=38s" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>@sue_kimani</h4>
                    <ul>
                       <li>Instagram</li>
                        <li>Reels</li>
                    </ul>
                </div>
            </div>

            <div class="work__item small__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/jofu.jpg">
                <a href="https://www.youtube.com/watch?v=u9eVowyoOZA" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>
            <div class="work__item small__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/jojo.jpg">
                <a href="https://www.youtube.com/watch?v=-vNW9IKvuqA" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
            </div>

            <div class="work__item wide__item set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/work/funday.jpg">
                <a href="https://www.youtube.com/watch?v=CLt7Bx0gBCg" class="play-btn video-popup"><i
                        class="fa fa-play"></i></a>
                <div class="work__item__hover">
                    <h4>Dedan Kimathi Students Team Building</h4>
                    <ul>
                        <li>at Kimathi</li>
                        <li>Conservancies</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

<!-- Counter Section Begin -->
<section class="counter">
    <div class="container">
        <div class="counter__content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__text">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-1.png" alt="">
                            <h2 class="counter_num">230</h2>
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item second__item">
                        <div class="counter__item__text">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-2.png" alt="">
                            <h2 class="counter_num">1068</h2>
                            <p>Happy clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item third__item">
                        <div class="counter__item__text">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-3.png" alt="">
                            <h2 class="counter_num">230</h2>
                            <p>Perspective clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <img src="<?php echo esc_url(get_template_directory_uri());?>/img/icons/ci-4.png" alt="">
                            <h2 class="counter_num">230</h2>
                            <p>Completed Projects</p>
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
                        <a href="https://photos.app.goo.gl/VGYqpmcm6VZGRHn5A" class="primary-btn" target="_blank">Explore More from Our Gallery</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="<?php echo esc_url(get_template_directory_uri());?>/img/callto-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href="#">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Footer Section Begin -->

<?php get_footer(); ?>