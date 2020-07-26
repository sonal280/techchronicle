
<html class="no-js" lang="zxx">

<head>
   <?php include 'includes/head.php'; ?>
</head>

<body>
    <!--Preloader area Start here-->
    <!-- <div class="preloader">
         <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
          </div>
    </div> -->
    <!--Preloader area end here-->

    <!--Header area start here-->
    <header>
        <div class="header-top-area" style="background: black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                               <li><span id="today" style="color: white"></span></li>
                                <li><a href="<?=base_url('admin/login')?>" style="color: white">Sign In / Join</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="social-media-area">
                            <nav>
                                <ul>
                                    <li><a href="https://www.facebook.com/sonal.choudhary.9277" class="active"><i class="fa fa-facebook" style="margin-top: 8px"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" style="margin-top: 8px"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        
        <?php include 'includes/navbar.php'; ?>
    </header>
<br>
   <div class="row">
        <div class="container">
            <?php foreach ($single_category->result() as $single_category_name) {?>
               <h2><?=$single_category_name->cat_name?></h2>
            <?php 
            } ?>
       </div>
   </div>
    <div class="blog-page-area gallery-page category-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                     
                <?php foreach ($post_detail->result() as $post_detail_value) {?>
                  <div class="row">
                        <ul>
                            <li>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="carousel-inner">              
                                        <div class="blog-image">
                                            <div class="videos-icon">
                                                <a  href="<?=base_url('newsPortal/single_post/'.$post_detail_value->post_id)?>">
                                                <img src="<?=base_url('images/post/'.$post_detail_value->image)?>" alt="">
                                                </a>
                                            </div>
                                            <a href="blog-single.html">
                                                <img src="<?=base_url('images/post/'.$post_detail_value->image)?>" alt="category photo">
                                            </a>
                                        </div>                           
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h3><a href="blog-single.html"><?=$post_detail_value->title?></a></h3>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-m-Y', strtotime($post_detail_value->created_at))?></span>               <span class="like"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>  12 </a></span>
                                    <p><?=mb_strimwidth($post_detail_value->description, 0, 250, '...')?></p>
                                </div>
                            </li>
                        </ul>    
                    </div>
                <?php } ?> 
                   
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="pagination-area">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">. . .</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                       
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                        <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/1.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html"> US should prepare for<br/> Russian election</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                  <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/2.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html">Pellentesque Odio Nisi <br/>Euismod In Pharet</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                  <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/3.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html"> Erant Aeque Neius No <br/>Numes Electram</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                  <li>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="blog-single.html"><img src="images/popular/4.jpg" alt="" title="News image" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="blog-single.html">Erant Aeque Neius No <br/>Numes Electram</a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>June 28, 2017</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="trending-post-area">
                            <h3 class="title-bg">Trending Post</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul>
                                        <li>
                                            <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                        </li>
                                        <li>
                                            <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                        </li>
                                        <li>
                                            <a href="blog-single.html" class="hvr-bounce-to-right team-btn">The team</a><br/>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.html"> Jake Dribbler Announced The <br />Reting Next Month </a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet dipis cing elit. Vivamus tincidunt quam eget trisp  nunc sed mattis phasellus.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="add">
                            <img src="images/add/2.jpg" alt="Add">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- xfooter -->
    <?php include 'includes/footer.php' ?>

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->
    
    <!-- Footer Area Section End Here -->
    <?php include 'includes/foot.php'; ?>
</body>

</html>
