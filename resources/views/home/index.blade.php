@extends('global.main')

@section('add_css')
@endsection

@section('content')
<!-- Hero Area -->
    <div class="hero-area">
        <!-- Start Hero Slider -->
        <div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-pause="yes">
            <ul class="slides">
                <li class="parallax" style="background-image:url({{asset('images/index-slider/01.jpg')}})">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="flex-caption-table">
                                <div class="flex-caption-cell">
                                    <div class="flex-caption-text">
                                        <h2>Scouting<br>is a world movement</h2>
                                        <p>Lorem ipsum dolor sit amet, consectet<br>adipiscinge lit. Nam malesuada dapi<br>bus diam, ut fringilla purus..</p>
                                        <a href="" class="btn btn-primary">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="parallax" style="background-image:url({{asset('images/index-slider/02.jpg')}})">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="flex-caption-table">
                                <div class="flex-caption-cell">
                                    <div class="flex-caption-text text-align-center">
                                        <h2>Make a difference for people<br>who needs it the most</h2>
                                        <a href="causes.html" class="btn btn-primary">Some function</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="parallax" style="background-image:url({{asset('images/index-slider/03.jpg')}})">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="flex-caption-table">
                                <div class="flex-caption-cell text-align-center">
                                    <div class="flex-caption-cause">
                                        <h3><a href="#">TKSG</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectet adipiscing elit. Nam malesuada dapi bus diam, ut fringilla purus efficitur  eget.</p>
                                            <a href="#" class="btn btn-primary btn-lg"data-toggle="modal" data-target="#DonateModal">Join Us Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End Hero Slider -->
    </div>
    <div class="notice-bar upcoming-event">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <a href="#"><img src="{{asset('images/index-01.jpg')}}" alt="" class="img-thumbnail"></a>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-6">
                    <span class="label label-default">下一次即將來到的活動</span>
                    <h3 class="short"><a href="single-event.html">第33屆棕熊營</a></h3>
                    <span class="meta-data">
                        105年04月02日(六)至04月03日(日)<br>
                        香格里拉樂園
                    </span>
                </div>
                <div id="counter" class="col-lg-4 col-md-5 col-sm-4 counter" data-date="July 13, 2017">
                    <div class="timer-col count-days"> <span id="days"></span> <span class="timer-type">天</span> </div>
                    <div class="timer-col"> <span id="hours"></span> <span class="timer-type">時</span> </div>
                    <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">分</span> </div>
                    <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">秒</span> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div id="main-container">
        <div class="content">
            <div class="spacer-50"></div>
            <div class="padding-tb75 position-relative">
                <div class="half-bg-right accent-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="block-title">最新消息</h2>
                            <div class="spacer-20"></div>
                                <ul class="events-compact-list">
                                    <li class="event-list-item">    
                                        <span class="event-date">
                                            <span class="date">14</span>
                                            <span class="month">一月</span>
                                            <span class="year">2016</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">星期二, 11:20 AM</span>
                                            <h4 class="post-title"><a href="#">第33屆棕熊營</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                    <li class="event-list-item">
                                        <span class="event-date">
                                            <span class="date">18</span>
                                            <span class="month">一月</span>
                                            <span class="year">2016</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">星期一, 07:00 PM</span>
                                            <h4 class="post-title"><a href="#">2015年招生說明會</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                    <li class="event-list-item">
                                        <span class="event-date">
                                            <span class="date">26</span>
                                            <span class="month">十二月</span>
                                            <span class="year">2015</span>
                                        </span>
                                        <div class="event-list-cont">
                                            <span class="meta-data">星期五, 01:00 PM</span>
                                            <h4 class="post-title"><a href="#">第十四屆剛毅盃童軍技能競賽t</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet adipiscing elit Cras sed nunc massa. Quisque tempor dolor sit amet tellus malesuada...</p>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="gallery-updates cols2 clearfix">
                                <ul>
                                    <li class="format-image grid-item">
                                        <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                                    </li>
                                    <li class="format-gallery grid-item">
                                        <div class="media-box">
                                            <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                                                <ul class="slides">
                                                    <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="popup-image"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                    <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="popup-image"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="format-link grid-item">
                                        <a href="http://www.google.com" target="_blank" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                                    </li>
                                    <li class="format-video grid-item">
                                        <a href="https://vimeo.com/47532705" class="media-box magnific-video"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                                    </li>
                                    <li class="grid-item format-image">
                                        <a href="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                                    </li>
                                    <li class="grid-item format-image">
                                        <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                                    </li>
                                </ul>
                                <div class="gallery-updates-overlay">
                                    <i class="icon-multiple-image"></i> PHOTO FROM SCOUTING
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="parallax parallax5 parallax-light text-align-center padding-tb100" style="background-image:url(http://placehold.it/1400x800&amp;text=IMAGE+PLACEHOLDER)">
                <h2>Making someone smile is the most<br>beautiful thing in this world</h2>
                <a href="#" class="parallax-icon-link"><i class="fa fa-5x fa-play-circle-o"></i></a>
            </div>
            
            <div class="padding-tb75 padding-b0">
                <div class="container">
                    <div class="text-align-center">
                        <h2 class="block-title block-title-center">活動專區</h2>
                    </div>
                    <div class="spacer-20"></div>
                    <div class="carousel-wrapper">
                        <div class="row">
                            <ul class="owl-carousel carousel-fw" id="news-slider" data-columns="3" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="3" data-items-desktop-small="2" data-items-tablet="1" data-items-mobile="1">
                                <li class="item">
                                    <div class="grid-item blog-grid-item format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-event.html" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <h3 class="post-title"><a href="single-post.html">團慶專區</a></h3>
                                                <span class="meta-data"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item blog-grid-item format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-event.html" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <h3 class="post-title"><a href="single-post.html">棕熊營專區</a></h3>
                                                <span class="meta-data"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="grid-item blog-grid-item format-standard">
                                        <div class="grid-item-inner">
                                            <a href="single-event.html" class="media-box">
                                                <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                            </a>
                                            <div class="grid-item-content">
                                                <h3 class="post-title"><a href="single-post.html">剛毅盃專區</a></h3>
                                                <span class="meta-data"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('add_js')
<script src="{{url('js/circle-progress.js')}}"></script> <!-- Circle Progress Bars -->
<script src="{{url('vendor/countdown/js/jquery.countdown.min.js')}}"></script> <!-- Jquery Timer -->
<script type="text/javascript">
// FrontPage Time Counter
var expiryDate = $('#counter').data('date');
var target = new Date(expiryDate),
finished = false,
availiableExamples = {
    set15daysFromNow: 15 * 24 * 60 * 60 * 1000,
    set5minFromNow  : 5 * 60 * 1000,
    set1minFromNow  : 1 * 60 * 1000
};
function callback(event) {
    $this = $(this);
    switch(event.type) {
        case "seconds":
        case "minutes":
        case "hours":
        case "days":
        case "weeks":
        case "daysLeft":
            $this.find('div span#'+event.type).html(event.value);
            if(finished) {
                $this.fadeTo(0, 1);
                finished = false;
            }

            break;
        case "finished":
            $this.fadeTo('slow', .5);
            finished = true;
            break;
    }
}
$('#counter').countdown(target.valueOf(), callback);
</script>
@endsection