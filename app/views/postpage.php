<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


?>




<html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
<head>
    <!-- Document Settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Page Title -->
    <title>Kotha Pro - The Most Powerful Blog Theme</title>
    <!-- Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i%7cOswald:300,400,500,600,700%7cPlayfair+Display:400,400i,700,700i"
            rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="../../public/bootstrap.min.css">
    <link rel="stylesheet" href="../app/views/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../app/views/assets/css/slick-theme.css">
    <link rel="stylesheet" href="../app/views/css/slick.css">
    <link rel="stylesheet" href="../app/views/style.css">
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../app/views/assets/js/html5shiv.js"></script>
    <script src="../app/views/assets/js/respond.js"></script>
    <![endif]-->



<body>
<!--
<img src="../../public/joda.png">

-->
<header class="kotha-menu marketing-menu">
    <nav class="navbar  navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="top-social-icons list-inline pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="top-search">
                            <a href="#" class="sactive">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav text-uppercase pull-left">
                        <li class="">
                            <a href="../posts" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Home</a>
                        </li>
                        <li class="">
                            <a href="../../../" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false"><?=$_SESSION['auth_email']?></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button"
                               aria-haspopup="true" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category):?>
                                    <li><a href="../../../posts/<?=$category['category']?>"><?=$category['category']?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav text-uppercase pull-right">
                        <li class="">
                            <?php if(!$_SESSION['auth_logged_in']):?>
                                <a href="../../../user/login" class="" data-toggle=""
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">Sign in</a>
                            <?php else:?>
                            <a href="../../../user/logout" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false">Logout</a>
                        </li>
                        <li class="">
                            <a href="#" class="" data-toggle=""
                               role="button"
                               aria-haspopup="true" aria-expanded="false"><?=$_SESSION['auth_username']?>
                                <img src="/public/images/avatars/<?=md5($_SESSION['auth_email'])?>/<?=$_SESSION['auth_remembered']?>" alt="" class="img-circle" height="20">
                                <img src="/public/img/<?=$_SESSION['auth_remembered']?>" alt="">
                            </a>
                        </li>
                        <?php endif;?>
                        <?php if($_SESSION['auth_roles']==1):?>
                            <li class="">
                                <a href="../../../admintools" class="" data-toggle=""
                                   role="button"
                                   aria-haspopup="true" aria-expanded="false">Admin tools</a>
                            </li>
                        <?php endif;?>
                        </li>

                <div class="show-search">
                    <form role="search" method="get" id="searchform" action="#">
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="kotha-logo text-center">
        <h1><a href="../../../"><img src="../../../app/views/public/assets/images/kotha-logo.png" alt="kothPro"></a></h1>
    </div>
</header>
<div class="kotha-default-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">


                <?php foreach ($postsInView as $post) :?>
                    <article class="single-blog">
                        <div class="post-thumb">
                            <a href="#"><img src="../public/img/<?php echo $post['picture_post'];?>" alt=""></a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-center text-uppercase">
                                <a href="#" class="post-cat"><?php echo $post['categories_post'];?></a>
                                <h2><a href="single-page.html"><?php echo $post['title_post'];?></a></h2>
                            </div>
                            <div class="entry-content">
                                <p><?php echo $post['content_post'];?></p>
                            </div>
                            <div>
                                <?php echo $tree;?>
                            </div>
                            <div class="continue-reading text-center text-uppercase">
                                <a href="../posts">Return</a>
                                <a href="../../../comment/creat/<?=$post['id_post'];?>">newComments</a>


                                <?php if($_SESSION['auth_roles']==1):?>
                                <a href="single-page.html">Редактировать статью</a>
                                <a href="./../../deletepost/<?=$post['id_post'];?>">Удалить статью</a>
                                <?php endif;?>



                            </div>
                            <div class="post-meta">
                                <ul class="pull-left list-inline author-meta">
                                    <li class="author">By <a href="#"><?php echo $post['id_user'];?> </a></li>
                                    <li class="date"> <?php echo $post['data_post'];?></li>
                                </ul>
                                <ul class="pull-right list-inline social-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                <?php endforeach;?>




            </div>
            <div class="col-sm-4">
                <div class="kotha-sidebar">
                    <aside class="widget about-me-widget  text-center">
                        <div class="about-me-content">
                            <div class="about-me-img">
                                <img src="../app/views/assets/images/me.jpg" alt="" class="img-me img-circle">
                                <h2 class="text-uppercase">Kotha Smith</h2>
                                <p>Kotha Smith is an enthusiastic and passionate Story Teller. He loves to do different
                                    home-made things
                                    and share to the world.</p>
                            </div>
                        </div>
                        <div class="social-share">
                            <ul class="list-inline">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget news-letter-widget">
                        <h2 class="widget-title text-uppercase text-center">Get Newsletter</h2>
                        <form action="#">
                            <input type="email" placeholder="Your email address" required>
                            <input type="submit" value="Subscribe Now"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>
                    </aside>
                    <aside class="widget widget-popular-post">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                        <ul>
                            <li>
                                <a href="#" class="popular-img"><img src="../app/views/assets/images/p-1.jpg" alt="">
                                </a>
                                <div class="p-content">
                                    <h4><a href="#" class="text-uppercase">Ice-cream with chalk taste </a></h4>
                                    <span class="p-date">February 15, 2017 </span>
                                </div>
                            </li>
                            <li><a href="#" class="popular-img"><img src="../app/views/assets/images/p-2.jpg" alt="">
                                </a>
                                <div class="p-content">
                                    <h4><a href="#" class="text-uppercase">The moment of mango bar</a></h4>
                                    <span class="p-date">March 15, 2017 </span>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="popular-img"><img src="../app/views/assets/images/p-3.jpg" alt="">
                                </a>
                                <div class="p-content">
                                    <h4><a href="#" class="text-uppercase">Homemade herbal black tea</a></h4>
                                    <span class="p-date">April 15, 2017 </span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget latest-post-widget">
                        <h2 class="widget-title text-uppercase text-center">Latest Posts</h2>
                        <ul>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../app/views/assets/images/recent-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="latest-post-content">
                                    <h2 class="text-uppercase"><a href="#">A Marine Dive From Sky</a></h2>
                                    <p>May 27, 2017</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../app/views/assets/images/recent-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="latest-post-content">
                                    <h2 class="text-uppercase"><a href="#">Small Meeting Room</a></h2>
                                    <p>April 27, 2017</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../app/views/assets/images/recent-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="latest-post-content">
                                    <h2 class="text-uppercase"><a href="#">Selfie from the beach point</a></h2>
                                    <p>April 20, 2017</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="../app/views/assets/images/recent-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="latest-post-content">
                                    <h2 class="text-uppercase"><a href="#">Gather Some Artist Pencils.</a></h2>
                                    <p>May 27, 2017</p>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget insta-widget">
                        <h2 class="widget-title text-uppercase text-center">INSTAGRAM FEED</h2>
                        <div class="instagram-feed">
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-1.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-6.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-4.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-3.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-7.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                            <div class="single-instagram">
                                <a href="#">
                                    <img src="../app/views/assets/images/ft-insta-8.jpg" alt="">
                                </a>
                                <div class="insta-overlay">
                                    <div class="insta-meta">
                                        <ul class="list-inline text-center">
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="insta-link"></a>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget add-widget">
                        <h2 class="widget-title text-uppercase text-center">Advertisement</h2>

                        <div class="add-image">
                            <a href="#"><img src="../app/views/assets/images/add-image.jpg" alt=""></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid insta-feed text-center">
    <h2 class="text-uppercase">Follow@ <a href="#">Instagram</a></h2>
    <div id="footer-instagram" class="footer-insta">
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-1.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-2.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>

        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-3.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>

        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-4.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-5.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-6.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-7.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
        <div class="item">
            <div class="single-instagram">
                <a href="#">
                    <img src="../app/views/assets/images/ft-insta-8.jpg" alt="">
                </a>
                <div class="insta-overlay">
                    <div class="insta-meta">
                        <ul class="list-inline text-center">
                            <li><a href="#"><i class="fa fa-heart-o"></i></a> 325</li>
                            <li><a href="#"><i class="fa fa-comment-o"></i></a> 20</li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="insta-link"></a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-widget-row">
            <div class="footer-widget contact-widget">
                <div class="widget-title">
                    <img src="../app/views/assets/images/kotha-white-logo.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eaccusam et justo duo
                    dolores eteem.</p>
                <div class="address">
                    <h4 class="text-uppercase">contact Info</h4>
                    <p> 239/2 NK Street, DC, USA</p>
                    <p> Phone: +123 456 78900</p>
                    <a href="mailto:theme@kotha.com">theme@kotha.com</a>
                </div>
            </div>
            <div class="footer-widget twitter-widget">
                <h2 class="widget-title text-uppercase">
                    Latest TWeeTs
                </h2>
                <div class="single-tweet">
                    <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                        #WordPress <br>
                        <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                    <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                </div>
                <div class="single-tweet">
                    <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                        #WordPress
                        <br>
                        <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                    <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                </div>
            </div>

            <div class="footer-widget testimonial-widget">
                <h2 class="widget-title text-uppercase">Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--Indicator-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="../app/views/assets/images/author.jpg" alt="">
                                    <div class="author-text">
                                        <h4>John Doe</h4>
                                        <h4>CEO, Apple Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="../app/views/assets/images/autho-1r.jpg" alt="">
                                    <div class="author-text">
                                        <h4>Robert Arri</h4>
                                        <h4>HRM, Microsoft Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="../app/views/assets/images/author.png" alt="">

                                    <div class="author-text">
                                        <h4>Brown Fish</h4>
                                        <h4>CEO, Bangari Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center ft-copyright">
        <p>&copy; 2017 <a href="#">Kotha PRO </a> - Designed with <i class="fa fa-heart"></i> by <a
                    href="http://shapedtheme.com/">ShapedTheme</a></p>
    </div>
</footer>
<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!--//Script//-->
<script src="../app/views/assets/js/jquery-1.12.4.min.js"></script>
<script src="../app/views/assets/js/bootstrap.min.js"></script>
<script src="../app/views/assets/js/slick.min.js"></script>
<script src="../app/views/assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
</html>

























































































