<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>TheGazette - News Magazine HTML5 Template | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">

    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <style type="text/css">
        .shadowz{
        box-shadow: 
       inset 0 -3em 3em rgba(0,0,0,0), 
             0 0  0 1px rgb(255,255,255),
             0.3em 0.3em 1em rgba(0,0,0,0.03);
         }
    </style>

</head>

<body>
    <!-- Header Area Start -->
    <header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-md-6">
                        <div class="breaking-news-area">
                            <h5 class="breaking-news-title">Breaking news</h5>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>

                                    @foreach( $news as $info )

                                        @if($info->breaking_news=="1")

                                            <li><a href="#"> {{ $info->headline }} </a></li>

                                        @endif

                                    @endforeach
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Stock News Area -->
                    <div class="col-12 col-md-6">
                        <div class="stock-news-area">
                            <div id="stockNewsTicker" class="ticker">
                                <ul>
                                    <li>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>eur/usd</span>
                                                <span>1.1862</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>0.18</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>BTC/usd</span>
                                                <span>15.674.99</span>
                                            </div>
                                            <div class="stock-index plus-index">
                                                <h4>8.60</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>ETH/usd</span>
                                                <span>674.99</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>13.60</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>eur/usd</span>
                                                <span>1.1862</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>0.18</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>BTC/usd</span>
                                                <span>15.674.99</span>
                                            </div>
                                            <div class="stock-index plus-index">
                                                <h4>8.60</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>ETH/usd</span>
                                                <span>674.99</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>13.60</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>eur/usd</span>
                                                <span>1.1862</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>3.95</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>BTC/usd</span>
                                                <span>15.674.99</span>
                                            </div>
                                            <div class="stock-index plus-index">
                                                <h4>4.78</h4>
                                            </div>
                                        </div>
                                        <div class="single-stock-report">
                                            <div class="stock-values">
                                                <span>ETH/usd</span>
                                                <span>674.99</span>
                                            </div>
                                            <div class="stock-index minus-index">
                                                <h4>11.37</h4>
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
        <!-- Middle Header Area -->
        <div class="middle-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Logo Area -->
                    <div class="col-12 col-md-4">
                        <div class="logo-area">
                            <a href="index.html"><img src="{{ asset('img/core-img/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
                    <div class="col-12 col-md-8">
                        <div class="header-advert-area">
                            <a href="#"><img src="{{ asset('img/bg-img/top-advert.png') }}" alt="header-add"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Header Area -->
        <div class="bottom-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gazetteMenu" aria-controls="gazetteMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>
                                <div class="collapse navbar-collapse" id="gazetteMenu">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Today <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.html">Home</a>
                                                <a class="dropdown-item" href="catagory.html">Catagory</a>
                                                <a class="dropdown-item" href="single-post.html">Single Post</a>
                                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Politics</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Lifestyle</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Travel</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Health</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Entertainment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">sport</a>
                                        </li>
                                    </ul>
                                    <!-- Search Form -->
                                    <div class="header-search-form mr-auto">
                                        <form action="#">
                                            <input type="search" placeholder="Input your keyword then press enter..." id="search" name="search">
                                            <input class="d-none" type="submit" value="submit">
                                        </form>
                                    </div>
                                    <!-- Search btn -->
                                    <div id="searchbtn">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Blog Slide Area Start -->
    <section class="welcome-blog-post-slide owl-carousel">
        <!-- Single Blog Post -->
        @foreach( $headlines as $info )
                <div class="single-blog-post-slide bg-img background-overlay-5" style="background-image: url(<?php
                echo 'http://localhost:8000/'.substr($info->image_urls, 0, strpos($info->image_urls, " ")); ?>)">
                    <!-- Single Blog Post Content -->
                    <div class="single-blog-post-content">
                        <div class="tags">
                            <a href="#">{{ $info->category }}</a>
                        </div>
                        <h3><a href="#" class="font-pt">{{ $info->headline }}</a></h3>
                        <div class="date">
                            <a href="#">
                                <?php 
                                $timestamp = strtotime($info->created_at); 
                                $new_date = date('F j, Y', $timestamp);
                                echo $new_date; ?>
                            </a>
                        </div>
                    </div>
                </div>
        @endforeach

    </section>
    <!-- Welcome Blog Slide Area End -->

    <!-- Latest News Marquee Area Start -->
    <div class="latest-news-marquee-area">
        <div class="simple-marquee-container">
            <div class="marquee">
                <ul class="marquee-content-items">

                    @foreach( $news as $info )
                        @if( $info->priority=="0" && $info->breaking_news=="0" )
                            <li>
                                <a href="#"><span class="latest-news-time">10:40</span>{{ $info->headline }}</a>
                            </li>
                        @endif  
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <!-- Latest News Marquee Area End -->

    <!-- Main Content Area Start -->
    <section class="main-content-wrapper section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <!-- Gazette Welcome Post -->
                    <div style="background-color: #FCFBFB; padding: 15px; " class="gazette-welcome-post shadowz">
                        <!-- Post Tag -->
                        <div class="gazette-post-tag">
                            <a href="#">{{ $most_viewed->category }}</a>
                        </div>
                        <h2 class="font-pt">{{ $most_viewed->headline }}</h2>
                        <p class="gazette-post-date">

                        <?php 
                        $timestamp = strtotime($most_viewed->created_at); 
                        $new_date = date('F j, Y', $timestamp);
                        echo $new_date; ?>
                            
                        </p>
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail my-5">
                            <img src="<?php echo substr($most_viewed->image_urls, 0, strpos($most_viewed->image_urls, " ")); ?>" alt="post-thumb">
                        </div>
                        <!-- Post Excerpt -->
                        <p> {!! str_limit(nl2br($most_viewed->content), $limit = 750, $end = '...') !!}</p>
                        <!-- Reading More -->
                        <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">
                            <div class="post-continue-btn">
                                <!--<a href="#" class="font-pt">Continue Reading <i class="fa fa-chevron-right" aria-hidden="true"></i></a>-->
                                <button class="btn text-dark" style="background-color: transparent; border-color: #dbdbdb;"><small>Read more</small></button>
                            </div>
                            <div class="post-share-btn-group">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="gazette-todays-post section_padding_100_50">
                        <div class="gazette-heading">
                            <h4>top stories</h4>
                        </div>
                        <!-- Single Today Post -->
                        <?php $p = 0; ?>
                        @foreach( $news as $priority_news )
                            @if( $priority_news->priority=="1" && $p <= '2' )
                                <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                                    <div class="todays-post-thumb" style="height: 280px; background-size: cover; background-repeat: no-repeat; background-image: url(<?php
                echo 'http://localhost:8000/'.substr($priority_news->image_urls, 0, strpos($info->image_urls, " ")); ?>)">
                                    
                                    </div>
                                    <div class="todays-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">{{ $priority_news->category }}</a>
                                        </div>
                                        <h3><a href="#" class="font-pt mb-2">{{ $priority_news->headline }}</a></h3>
                                        <span class="gazette-post-date mb-2">
                                            <?php 
                                                $timestamp = strtotime($priority_news->created_at); 
                                                $new_date = date('F j, Y', $timestamp);
                                                echo $new_date; ?>
                                        </span>
                                        <a href="#" class="post-total-comments">3 Comments</a>
                                        <p> {{ str_limit($priority_news->content, $limit = 250, $end = '...') }}</p>
                                    </div>
                                </div>
                            @endif
                            <?php if($priority_news->priority=="1"){ $p++;} ?>
                        @endforeach
                        <!-- Single Today Post --
                        <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                            <div class="todays-post-thumb">
                                <img src="img/blog-img/3.jpg" alt="">
                            </div>
                            <div class="todays-post-content">
                                <!-- Post Tag --
                                <div class="gazette-post-tag">
                                    <a href="#">Life</a>
                                </div>
                                <h3><a href="#" class="font-pt mb-2">Homeless man steals $350,000 </a></h3>
                                <p class="gazette-post-date mb-2">March 29, 2016</p>
                                <a href="#" class="post-total-comments">3 Comments</a>
                                <p>Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc.</p>
                            </div>
                        </div>-->
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <div class="sidebar-area">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-widget">
                            <div class="widget-title">
                                <h5>trending stories</h5>
                            </div>
                            <!-- Single Breaking News Widget -->
                            @foreach( $trending as $trends )
                                <div class="single-breaking-news-widget shadowz">
                                    <img src="<?php
                                        echo 'http://localhost:8000/'.substr($trends->image_urls, 0, strpos($trends->image_urls, " ")); ?>" alt="">
                                    <div class="breakingnews-title">
                                        <p>trending</p>
                                    </div>
                                    <div class="breaking-news-heading gradient-background-overlay">
                                        <h5 class="font-pt">{{ $trends->headline }}</h5>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Don't Miss Widget -->
                        <div class="donnot-miss-widget">
                            <div class="widget-title">
                                <h5>Editor's Pick</h5>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <?php $e = 0; ?>
                            @foreach( $news as $editorz )
                                @if( $editorz->editors_choice=='1' && $e<="3" )
                                    <div class="single-dont-miss-post d-flex mb-30">
                                        <div class="dont-miss-post-thumb">
                                            <img style="height: 65px" src="<?php
                                            echo 'http://localhost:8000/'.substr($editorz->image_urls, 0, strpos($editorz->image_urls, " ")); ?>" alt="">
                                        </div>
                                        <div class="dont-miss-post-content">
                                            <a href="#" class="font-pt">{{ str_limit($editorz->headline, 40) }}</a>
                                            <span>
                                                <?php 
                                                    $timestamp = strtotime($editorz->created_at); 
                                                    $new_date = date('F j, Y', $timestamp);
                                                    echo $new_date; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php $e++; ?>
                                @endif
                            @endforeach
                        </div>
                        <!-- Advert Widget -->
                        <div class="advert-widget">
                            <div class="widget-title">
                                <h5>Advert</h5>
                            </div>
                            <div class="advert-thumb mb-30">
                                <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                            </div>
                        </div>
                        <!-- Subscribe Widget -->
                        <div class="subscribe-widget">
                            <div class="widget-title">
                                <h5>subscribe</h5>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                    <button type="submit">subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area End -->

        <!-- Catagory Posts Area Start -->
        <div class="gazette-catagory-posts-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <div class="single-catagory-post-thumb mb-15">
                                <img src="img/blog-img/12.jpg" alt="">
                            </div>
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">Video</a>
                            </div>
                            <h5><a href="#" class="font-pt">Save the eniroment with this step</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">Protest to be anounced in January</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">10 Bills that the Congress in voting</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">The narcissism of Donald Trump</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Single Catagory Post -->
                                <div class="gazette-single-catagory-post">
                                    <div class="single-catagory-post-thumb mb-15">
                                        <img src="img/blog-img/14.jpg" alt="">
                                    </div>
                                    <!-- Post Tag -->
                                    <div class="gazette-post-tag">
                                        <a href="#">Others</a>
                                    </div>
                                    <h5><a href="#" class="font-pt">11 hottest toys for this holiday season</a></h5>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Single Catagory Post -->
                                <div class="gazette-single-catagory-post">
                                    <div class="single-catagory-post-thumb mb-15">
                                        <img src="img/blog-img/15.jpg" alt="">
                                    </div>
                                    <!-- Post Tag -->
                                    <div class="gazette-post-tag">
                                        <a href="#">Video</a>
                                    </div>
                                    <h5><a href="#" class="font-pt">Get this good feeling about life</a></h5>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Single Catagory Post -->
                                <div class="gazette-single-catagory-post">
                                    <div class="single-catagory-post-thumb mb-15">
                                        <img src="img/blog-img/16.jpg" alt="">
                                    </div>
                                    <!-- Post Tag -->
                                    <div class="gazette-post-tag">
                                        <a href="#">Interview</a>
                                    </div>
                                    <h5><a href="#" class="font-pt">Get this good feeling about life</a></h5>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Single Catagory Post -->
                                <div class="gazette-single-catagory-post">
                                    <div class="single-catagory-post-thumb mb-15">
                                        <img src="img/blog-img/17.jpg" alt="">
                                    </div>
                                    <!-- Post Tag -->
                                    <div class="gazette-post-tag">
                                        <a href="#">Video</a>
                                    </div>
                                    <h5><a href="#" class="font-pt">11 hottest toys for this holiday season</a></h5>
                                    <span>Nov 29, 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <div class="single-catagory-post-thumb mb-15">
                                <img src="img/blog-img/13.jpg" alt="">
                            </div>
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">Video</a>
                            </div>
                            <h5><a href="#" class="font-pt">10 Bills that the Congress in voting</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">Blair can't save Britain from Brexit</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">Save the eniroment with this step</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                        <!-- Single Catagory Post -->
                        <div class="gazette-single-catagory-post">
                            <h5><a href="#" class="font-pt">Protest to be anounced in January</a></h5>
                            <span>Nov 29, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Catagory Posts Area End -->

    <!-- Video Posts Area Start -->
    <section class="gazatte-video-post-area section_padding_100_70 bg-gray">
        <div class="container">
            <div class="row">
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/4.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Show suspended by PBS amid misconduct allegations</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/5.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Parents to Congress</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/6.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Third Buy Alert for This “Millionaire Maker” Stock</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/7.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">The Chicago Mercantile Exchange is set to begin</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/8.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Trading bitcoin futures</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/9.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Are ‘Micro-Mansions’ the Next Big Thing?</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/10.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">McKinney’s target market</a></h5>
                    </div>
                </div>
                <!-- Single Video Post Start -->
                <div class="col-12 col-md-3">
                    <div class="single-video-post">
                        <div class="video-post-thumb">
                            <img src="img/blog-img/11.jpg" alt="">
                            <a href="https://youtu.be/dIyXl9ZHEgg" class="videobtn"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                        <h5><a href="#">Australian Property Prices Remain Flat</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Posts Area End -->

    <!-- Editorial Area Start -->
    <section class="gazatte-editorial-area section_padding_100 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="editorial-post-slides owl-carousel">

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/blog-img/bitcoin.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Editorial</a>
                                        </div>
                                        <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/blog-img/bitcoin.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Editorial</a>
                                        </div>
                                        <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/blog-img/bitcoin.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Editorial</a>
                                        </div>
                                        <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Editorial Post Single Slide -->
                        <div class="editorial-post-single-slide">
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="editorial-post-thumb">
                                        <img src="img/blog-img/bitcoin.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="editorial-post-content">
                                        <!-- Post Tag -->
                                        <div class="gazette-post-tag">
                                            <a href="#">Editorial</a>
                                        </div>
                                        <h2><a href="#" class="font-pt mb-15">Move over, bitcoin. <br>Here comes litecoin</a></h2>
                                        <p class="editorial-post-date mb-15">March 29, 2016</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Editorial Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img background-overlay" style="background-image: url(img/bg-img/4.jpg);">
        <!-- Top Footer Area -->
        <div class="top-footer-area section_padding_100_70">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Regions</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">U.S.</a></li>
                                <li><a href="#">Africa</a></li>
                                <li><a href="#">Americas</a></li>
                                <li><a href="#">Asia</a></li>
                                <li><a href="#">China</a></li>
                                <li><a href="#">Europe</a></li>
                                <li><a href="#">Middle</a></li>
                                <li><a href="#">East</a></li>
                                <li><a href="#">Opinion</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Fashion</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Election 2016</a></li>
                                <li><a href="#">Nation</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Our Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Politics</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Featured</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Motorsport</a></li>
                                <li><a href="#">Horseracing</a></li>
                                <li><a href="#">Equestrian</a></li>
                                <li><a href="#">Sailing</a></li>
                                <li><a href="#">Skiing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">FAQ</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Aviation</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Traveller</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">+More</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Autos</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>

</body>

</html>