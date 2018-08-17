@extends('layouts.app')

@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>My Reviews List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Reviews</li>
            </ol>
        </div>
    </section>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="postcontent nobottommargin">
                    {{-- List reviews --}}
                    <div id="posts" class="events small-thumbs">
                        @foreach ($reviews as $review)
                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="#">
                                        <img src="{{ $review->poster }}" alt="Inventore voluptates velit totam ipsa tenetur">
                                    </a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="{{ route('reviews.show', $review->id) }}">{{ $review->title }}</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><span class="badge badge-warning">{{ trans('message.public') }}</span></li>
                                        <li><a href="#"><i class="icon-time"></i>{{ $review->created_at }}</a></li>
                                        <li><a href="#"><i class="fa fa-film"></i>{{ $review->moviesTitle }}</a></li>
                                    </ul>
                                    <div class="entry-content">
                                     <p class="ArticleBody">
                                        {!! str_limit(strip_tags($review->content), 400) !!}
                                        @if (strlen(strip_tags($review->content)) > 400)
                                          ... <a href="{{ action('ReviewsController@show', $review->id) }}" class="btn btn-info btn-sm">Read More</a>
                                        @endif
                                    </p>
                                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-secondary float-left rightmargin" disabled="disabled">Edit</a>
                                        {!! Form::open(['method' => 'delete', 'route' => ['reviews.destroy', $review->id]]) !!}
                                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                        <button class="btn btn-danger">Delete</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- Pagination --}}
                    <div class="row mb-3">
                        <div class="col-12">
                            {{ $reviews->links() }}
                        </div>
                    </div>

                </div>
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">
                            <h4>Upcoming Events</h4>
                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/events/thumbs/1.jpg" alt=""></a>
                                    </div>
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
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/events/thumbs/2.jpg" alt=""></a>
                                    </div>
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
                                    <div class="entry-image">
                                        <a href="#" class="nobg"><img src="images/events/thumbs/3.jpg" alt=""></a>
                                    </div>
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
                        <div class="widget clearfix">
                            <h4>Events</h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">
                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/events/thumbs/3.jpg" alt="Mac Sunglasses">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="portfolio-single-video.html">Inventore voluptates velit totam ipsa tenetur</a></h3>
                                            <span><a href="#">Melbourne, Australia</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="images/events/thumbs/1.jpg" alt="Open Imagination">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="images/portfolio/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="portfolio-single.html">Nisi officia adipisci molestiae aliquam</a></h3>
                                            <span><a href="#">Perth, Australia</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget clearfix">
                            <h4>Recent Event in Video</h4>
                            <iframe src="http://player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="widget quick-contact-widget clearfix">
                            <h4>Quick Contact</h4>
                            <div class="quick-contact-form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="http://themes.semicolonweb.com/html/canvas/include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
                                <div class="form-process"></div>
                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
                            </form>
                        </div>
                    </div>
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
