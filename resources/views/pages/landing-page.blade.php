@extends('layouts.app')

@section('content')

    <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
        <div class="slider-parallax-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark" style="background-image: url('images/1.jpg');">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
                                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">
                                    Create just what you need for your Perfect Website. Choose from a wide range of
                                    Elements &amp; simply put them on your own Canvas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-center">
                                <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">
                                    Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with
                                    Responsive functionality that can be adapted to any screen size.</p>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video id="slide-video" poster="images/videos/deskwork.jpg" preload="auto" loop autoplay
                                   muted>
                                <source src='images/videos/deskwork.webm' type='video/webm'/>
                                <source src='images/videos/deskwork.mp4' type='video/mp4'/>
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide"
                         style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">
                                    You'll be surprised to see the Final Results of your Creation &amp; would crave for
                                    more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>
            <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i
                        class="icon-angle-down infinite animated fadeInDown"></i></a>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row clearfix">
                    <div class="col-xl-5">
                        <div class="heading-block topmargin">
                            <h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>
                        </div>
                        <p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio,
                            Agency, Photography, eCommerce &amp; much more.</p>
                    </div>
                    <div class="col-xl-7">
                        <div style="position: relative; margin-bottom: -60px;" class="ohidden" data-height-xl="426"
                             data-height-lg="567" data-height-md="470" data-height-md="287" data-height-xs="183">
                            <img src="{{asset('images/main-fbrowser.png')}}" style="position: absolute; top: 0; left: 0;"
                                 data-animate="fadeInUp" data-delay="100" alt="Chrome">
                            <img src="{{asset('images/main-fmobile.png')}}" style="position: absolute; top: 0; left: 0;"
                                 data-animate="fadeInUp" data-delay="400" alt="iPad">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section nobottommargin">
                <div class="container clear-bottommargin clearfix">
                    <div class="row topmargin-sm clearfix">
                        <div class="col-lg-4 bottommargin">
                            <i class="i-plain color i-large icon-line2-screen-desktop inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <span class="before-heading">Scalable on Devices.</span>
                                <h4>Responsive &amp; Retina</h4>
                            </div>
                            <p>Employment respond committed meaningful fight against oppression social challenges rural
                                legal aid governance. Meaningful work, implementation, process cooperation, campaign
                                inspire.</p>
                        </div>
                        <div class="col-lg-4 bottommargin">
                            <i class="i-plain color i-large icon-line2-energy inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <span class="before-heading">Smartly Coded &amp; Maintained.</span>
                                <h4>Powerful Performance</h4>
                            </div>
                            <p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation.
                                Diversification shifting landscape advocate pathway to a better life rights
                                international. Assessment.</p>
                        </div>
                        <div class="col-lg-4 bottommargin">
                            <i class="i-plain color i-large icon-line2-equalizer inline-block"
                               style="margin-bottom: 15px;"></i>
                            <div class="heading-block nobottomborder" style="margin-bottom: 15px;">
                                <span class="before-heading">Flexible &amp; Customizable.</span>
                                <h4>Truly Multi-Purpose</h4>
                            </div>
                            <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural
                                resources. Governance impact; transformative donation philanthropy, respect
                                reproductive.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="heading-block topmargin-lg center">
                    <h2>Even more Feature Rich</h2>
                    <span class="divcenter">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span>
                </div>
                <div class="row bottommargin-sm">
                    <div class="col-lg-4 col-md-6 bottommargin">
                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-heart"></i></a>
                            </div>
                            <h3>Boxed &amp; Wide Layouts</h3>
                            <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                        </div>
                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-paper"></i></a>
                            </div>
                            <h3>Extensive Documentation</h3>
                            <p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>
                        </div>
                        <div class="feature-box fbox-right topmargin" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-layers"></i></a>
                            </div>
                            <h3>Parallax Support</h3>
                            <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-block bottommargin center">
                        <img src="images/services/iphone7.png" alt="iphone 2">
                    </div>
                    <div class="col-lg-4 col-md-6 bottommargin">
                        <div class="feature-box topmargin" data-animate="fadeIn">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-power"></i></a>
                            </div>
                            <h3>HTML5 Video</h3>
                            <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
                        </div>
                        <div class="feature-box topmargin" data-animate="fadeIn" data-delay="200">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-line-check"></i></a>
                            </div>
                            <h3>Endless Possibilities</h3>
                            <p>Complete control on each &amp; every element that provides endless customization.</p>
                        </div>
                        <div class="feature-box topmargin" data-animate="fadeIn" data-delay="400">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-bulb"></i></a>
                            </div>
                            <h3>Light &amp; Dark Color Schemes</h3>
                            <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix common-height">
                <div class="col-lg-6 center col-padding"
                     style="background: url('images/main-bg.jpg') center center no-repeat; background-size: cover;">
                    <div>&nbsp;</div>
                </div>
                <div class="col-lg-6 center col-padding" style="background-color: #F5F5F5;">
                    <div>
                        <div class="heading-block nobottomborder">
                            <span class="before-heading color">Easily Understandable &amp; Customizable.</span>
                            <h3>Walkthrough Videos &amp; Demos</h3>
                        </div>
                        <div class="center bottommargin">
                            <a href="http://vimeo.com/101373765" data-lightbox="iframe" style="position: relative;">
                                <img src="images/services/video.jpg" alt="Video">
                                <span class="i-overlay nobg"><img src="images/icons/video-play.png" alt="Play"></span>
                            </a>
                        </div>
                        <p class="lead nobottommargin">Democracy inspire breakthroughs, Rosa Parks; inspiration raise
                            awareness natural resources. Governance impact; transformative donation philanthropy,
                            respect reproductive.</p>
                    </div>
                </div>
            </div>
            <div class="row clearfix bottommargin-lg common-height">
                <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #515875;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846"
                                                                 data-refresh-interval="50" data-speed="2000"></span>K
                        </div>
                        <h5>Lines of Codes</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #576F9E;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="21500"
                                                                 data-refresh-interval="100" data-speed="2500"></span>
                        </div>
                        <h5>KBs of HTML Files</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #6697B9;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                        <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25"
                                                                 data-speed="3500"></span></div>
                        <h5>No. of Templates</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 dark center col-padding" style="background-color: #88C3D8;">
                    <div>
                        <i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
                        <div class="counter counter-lined"><span data-from="60" data-to="1400"
                                                                 data-refresh-interval="30" data-speed="2700"></span>
                        </div>
                        <h5>Hours of Coding</h5>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-monitor"></i></a>
                        </div>
                        <h3>Responsive Layout</h3>
                        <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                    </div>
                </div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-eye"></i></a>
                        </div>
                        <h3>Retina Ready Graphics</h3>
                        <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp;
                            Images.</p>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-star"></i></a>
                        </div>
                        <h3>Powerful Performance</h3>
                        <p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-play"></i></a>
                        </div>
                        <h3>HTML5 Video</h3>
                        <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
                            Background.</p>
                    </div>
                </div>
                <div class="col_one_third">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-params"></i></a>
                        </div>
                        <h3>Parallax Support</h3>
                        <p>Display your Content attractively using Parallax Sections that have unlimited customizable
                            areas.</p>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-circle-check"></i></a>
                        </div>
                        <h3>Endless Possibilities</h3>
                        <p>Complete control on each &amp; every element that provides endless customization
                            possibilities.</p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col_one_third bottommargin-sm">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-bulb"></i></a>
                        </div>
                        <h3>Light &amp; Dark Color Schemes</h3>
                        <p>Change your Website's Primary Scheme instantly by simply adding the dark class to the
                            body.</p>
                    </div>
                </div>
                <div class="col_one_third bottommargin-sm">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-heart2"></i></a>
                        </div>
                        <h3>Boxed &amp; Wide Layouts</h3>
                        <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                    </div>
                </div>
                <div class="col_one_third bottommargin-sm col_last">
                    <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-note"></i></a>
                        </div>
                        <h3>Extensive Documentation</h3>
                        <p>We have covered each &amp; everything in our Documentation including Videos &amp;
                            Screenshots.</p>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="section topmargin nobottommargin nobottomborder">
                <div class="container clearfix">
                    <div class="heading-block center nomargin">
                        <h3>Our Latest Works</h3>
                    </div>
                </div>
            </div>
            <div id="portfolio"
                 class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                        <span><a href="#">Illustrations</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-graphics pf-uielements">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i
                                        class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-icons pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i
                                        class="icon-line-stack-2"></i></a>
                            <a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i
                                        class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                        <span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-uielements pf-media">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/5.jpg" alt="Console Activity">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Console Activity</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-graphics pf-illustrations">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/6.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="images/portfolio/full/6.jpg" class="left-icon" data-lightbox="gallery-item"><i
                                        class="icon-line-stack-2"></i></a>
                            <a href="images/portfolio/full/6-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="images/portfolio/full/6-2.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="images/portfolio/full/6-3.jpg" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i
                                        class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-uielements pf-icons">
                    <div class="portfolio-image">
                        <a href="portfolio-single-video.html">
                            <img src="images/portfolio/4/7.jpg" alt="Backpack Contents">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon"
                               data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                    </div>
                </article>
                <article class="portfolio-item pf-graphics">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/8.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                        <span><a href="#">Graphics</a></span>
                    </div>
                </article>
            </div>
            <div class="clear"></div>
            <a href="portfolio.html" class="button button-full button-dark center tright bottommargin-lg">
                <div class="container clearfix">
                    More than 100+ predefined Portfolio Grid Layouts. <strong>See More</strong> <i
                            class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>
            <div class="container clearfix">
                <div class="col_one_third bottommargin-sm center">
                    <img data-animate="fadeInLeft" src="images/services/iphone6.png" alt="Iphone">
                </div>
                <div class="col_two_third bottommargin-sm col_last">
                    <div class="heading-block topmargin-sm">
                        <h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim
                        expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero
                        accusantium esse hic, obcaecati, ullam, laboriosam!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere
                        officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum
                        magnam.</p>
                    <a href="#"
                       class="button button-border button-dark button-rounded button-large noleftmargin topmargin-sm">Learn
                        more</a>
                </div>
            </div>
            <div class="section parallax dark nobottommargin"
                 style="background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;"
                 data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
                <div class="heading-block center">
                    <h3>What Clients Say?</h3>
                </div>
                <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia
                                        eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos
                                        obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam
                                        cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section notopmargin notopborder">
                <div class="container clearfix">
                    <div class="heading-block center nomargin">
                        <h3>Latest from the Blog</h3>
                    </div>
                </div>
            </div>
            <div class="container clear-bottommargin clearfix">
                <div class="row">
                    <div class="col-lg-3 col-md-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic
                                        security</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Prevention effect, advocate dialogue rural development lifting people up community
                                    civil society. Catalyst, grantees leverage.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="images/magazine/thumb/2.jpg" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Medicine new approaches communities, outcomes
                                        partnership</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Cross-agency coordination clean water rural, promising development turmoil inclusive
                                    education transformative community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="images/magazine/thumb/3.jpg" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Significant altruism planned giving insurmountable
                                        challenges liberal</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 30th Dec 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures
                                    design thinking accelerate progress medical initiative.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 bottommargin">
                        <div class="ipost clearfix">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="images/magazine/thumb/4.jpg" alt="Image"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a>
                                </h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 15th Jan 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Community health workers best practices, effectiveness meaningful work The Elders
                                    fairness. Our ambitions local solutions globalization.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="container clearfix">
                    <div class="heading-block topmargin-sm center">
                        <h3>Meet Our Team</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 bottommargin">
                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/3.jpg" alt="John Doe">
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin">
                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/2.jpg" alt="Josh Clark">
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title"><h4>Josh Clark</h4><span>Co-Founder</span></div>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin">
                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/8.jpg" alt="Mary Jane">
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title"><h4>Mary Jane</h4><span>Sales</span></div>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 bottommargin">
                            <div class="team">
                                <div class="team-image">
                                    <img src="images/team/4.jpg" alt="Nix Maxwell">
                                </div>
                                <div class="team-desc team-desc-bg">
                                    <div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#"
                                       class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container clearfix">
                <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60"
                     data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2"
                     data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                    <div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="dark">
        <div class="container">

            <div class="footer-widgets-wrap clearfix">
                <div class="col_two_third">
                    <div class="col_one_third">
                        <div class="widget clearfix">
                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">
                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                                <strong>Flexible</strong> Design Standards.</p>
                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> <span class="__cf_email__"
                                                                                                 data-cfemail="a6cfc8c0c9e6c5c7c8d0c7d588c5c9cb">[email&#160;protected]</span>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third">
                        <div class="widget widget_links clearfix">
                            <h4>Blogroll</h4>
                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>
                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_one_third col_last">
                    <div class="widget clearfix" style="margin-bottom: -20px;">
                        <div class="row">
                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421"
                                                                         data-refresh-interval="80" data-speed="3000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>
                            <div class="col-lg-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465"
                                                                         data-refresh-interval="50" data-speed="2000"
                                                                         data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp;
                            Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form"
                              action="http://themes.semicolonweb.com/html/canvas/include/subscribe.php" role="form"
                              method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email"
                                       class="form-control required email" placeholder="Enter your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget clearfix" style="margin-bottom: -20px;">
                        <div class="row">
                            <div class="col-lg-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on
                                        Facebook
                                    </small>
                                </a>
                            </div>
                            <div class="col-lg-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin"
                                   style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#">
                                    <small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS
                                        Feeds
                                    </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyrights">
            <div class="container clearfix">
                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>
                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                    <div class="clear"></div>
                    <i class="icon-envelope2"></i> <span class="__cf_email__"
                                                         data-cfemail="3c55525a537c5f5d524a5d4f125f5351">[email&#160;protected]</span>
                    <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span
                            class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                </div>
            </div>
        </div>
    </footer>

    <div id="gotoTop" class="icon-angle-up"></div>
@endsection
