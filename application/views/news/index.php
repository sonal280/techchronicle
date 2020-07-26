<html>
<head>
  <?php include 'includes/head.php' ?>
</head>

<body class="home home2">
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
       <?php include 'includes/header_top.php'; ?>  
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                               <li><span id="today"></span></li>
                                <li><a href="<?=base_url('admin/login')?>">Sign In / Join</a></li>
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
    <!--Header area end here-->
    <!-- Slider Section Start Here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="slider-right">
                    <ul>
                        <?php foreach ($fetch_news1->result() as $fetch_news) {?>
                           <li class="col-md-4 col-sm-4 col-sm-12">
                                <div class="right-content">
                                    <span class="category"><a href=""><?=$fetch_news->cat_name?></a></span>
                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> <?=date('d-M-Y', strtotime($fetch_news->post_date))?></span>
                                    <h3><a href="<?=base_url('newsPortal/single_post/'.$fetch_news->post_id)?>"><?=$fetch_news->title?></a></h3>
                                </div>
                                <div class="right-image"><a href="blog-single.php"><img src="<?=base_url('images/post/'.$fetch_news->image)?>" alt="sidebar image" style="height: 250px"></a></div>
                            </li>
                        <?php 
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section end Here -->
    <!-- All News Section Start Here -->
    <div class="all-news-area">
        <div class="container">
            <!-- latest news Start Here -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tab-home">
                    <ul class="nav nav-tabs">
                        <li class="title-bg">Latest News</li>
                         <?php foreach ($cat_name->result() as $category_name) { ?>
                            <li><a data-toggle="tab" href="#tab2"><?=$category_name->cat_name?></a></li>
                        <?php 
                        }?>
                    </ul>
                     <?php 
                        foreach ($latest_news1->result() as $latest_news) {
                            $latest_title1 = $latest_news->title;
                            $latest_image1 = $latest_news->image;
                            $latest_post_id1 = $latest_news->post_id;
                            $latest_description1 = $latest_news->description;
                        }
                     ?>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="<?=base_url('newsPortal/single_post/'.$latest_post_id1)?>"><img src="<?=base_url('images/post/'.$latest_image1)?>" alt="sidebar image" style="height:400px"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i>Admin</a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="<?=base_url('newsPortal/single_post/'.$latest_post_id1)?>"><?=$latest_title1?></a></h3>
                                        <p><?=mb_strimwidth($latest_description1, 0, 200, '....')?></p>
                                        <a href="<?=base_url('newsPortal/single_post/'.$latest_post_id1)?>" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <?php 
                                        foreach ($latest_news2->result() as $latest_news) {?>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                                <div class="col-sm-12 col-xs-3 img-tab">
                                                    <a href="<?=base_url('newsPortal/single_post/'.$latest_news->post_id)?>"><img src="<?=base_url('images/post/'.$latest_news->image)?>" alt="News image"></a>
                                                </div>
                                                <div class="col-sm-12 col-xs-9 img-content">
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"> </i><?=date('d-m-Y', strtotime($latest_news->created_at))?></span>
                                                    <h4><a href="<?=base_url('newsPortal/single_post/'.$latest_news->post_id)?>"><?=mb_strimwidth($latest_news->title, 0, 20, '...')?></a></h4>
                                                </div>
                                            </div>
                                        <?php 
                                        }
                                     ?>
                                   
                                   
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="blog-single.php"><img src="images/tab/7.jpg" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                      <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">Migrants Told: Stay in France or go back to your country</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl risus, tristique diam id, blandit condimentum</p>
                                        <a href="blog-single.php" class="read-more hvr-bounce-to-right">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.php">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/3.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.php">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="blog-single.php">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/5.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="blog-single.php">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="blog-single.php"><img src="images/tab/8.jpg" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                       <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">Migrants Told: Stay in France or go back to your country</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl risus, tristique diam id, blandit condimentum</p>
                                        <a href="#" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                           

                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/3.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/3.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="blog-single.php"><img src="images/tab/1.jpg" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                       <span class="date"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> james Bond </a></span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">Migrants Told: Stay in France or go back to your country</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl risus, tristique diam id, blandit condimentum</p>
                                        <a href="#" class="read-more hvr-bounce-to-right">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content fadeInUp">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/3.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                           
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/4.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                          
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-pane fade">
                            <div class="tab-top-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 paddimg-right-none">
                                        <a href="blog-single.php"><img src="images/tab/7.jpg" alt="sidebar image"></a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 last-col">
                                        <span class="date">james Bond </span><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 50</a> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="#">Migrants Told: Stay in France or go back to your country</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisl risus, tristique diam id, blandit condimentum</p>
                                        <a href="#" class="read-more hvr-bounce-to-right">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-bottom-content fadeInUp">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>
                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/3.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                                    
                                          <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/2.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>

                                            <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-area">
                                        <div class="col-sm-12 col-xs-3 img-tab">
                                            <a href="blog-single.php"><img src="images/tab/4.jpg" alt="News image"></a>
                                        </div>
                                        <div class="col-sm-12 col-xs-9 img-content">
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> June 28, 2017</span>                       <h4><a href="#">SIS puts fierce fight & bombing</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Trending news  here-->
                   <div class="trending-news separator-large">
                        <div class="row">
                            <div class="view-area">
                                <div class="col-sm-8"> 
                                    <h3 class="title-bg">Trending News</h3>
                                </div>
                                
                            </div>    
                             <?php 
                                foreach ($trending_news1->result() as $trending_news) {
                                    $trending_title = $trending_news->title;
                                    $trending_image = $trending_news->image;
                                    $trending_date = $trending_news->created_at;
                                    $trending_post_id = $trending_news->post_id;
                                    $trending_description = $trending_news->description;
                                }
                             ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="list-col">
                                    <a href="blog-single.php"> <img src="<?=base_url('images/post/'.$trending_image)?>" alt="" title="Trending image" /></a>
                                    <div class="dsc">
                                        <span class="date"> <i class="fa fa-calendar-check-o" aria-hidden="true"></i><?php echo date('d-m-Y', strtotime($trending_date)); ?> </span> <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                        <h3><a href="<?=base_url('newsPortal/single_post/'.$trending_post_id)?>"><?=$trending_title?> </a></h3>
                                        <p><?=mb_strimwidth($trending_description, 0, 250, '....')?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="news-post">       
                                <?php foreach ($trending_news2->result() as $trending_news) {?>
                                  <li>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                                <div class="item-post">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3 paddimg-right-none">
                                                            <a href="<?=base_url('newsPortal/single_post'.$trending_news->post_id)?>"> <img src="<?=base_url('images/post/'.$trending_news->image)?>" alt="" title="Trending image"></a>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                                                            <h4><a href="blog-single.php"><?=mb_strimwidth($trending_news->title, 0, 20, "...");?></a></h4>
                                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-m-Y', strtotime($trending_news->created_at))?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Start what’s hot now -->
                    <div class="hot-news">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="view-area">
                                    <div class="row">
                                        <div class="col-sm-8"> 
                                            <h3 class="title-bg">What’s hot now</h3>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="featured">
                                    <div class="blog-img">
                                        <a href="blog-single.php"><img src="images/hot-news/1.jpg" alt="" title="News image" /></a>
                                    </div>
                                    <div class="blog-content">
                                        <a href="#" class="btn-small">Sports</a><span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> November 28, 2017</span>
                                        <h4><a href="#">Car racer gives herself a mid-Event haicut</a></h4>
                                    </div>
                                </div>
                                  <ul class="news-post news-feature-mb">
                                    <?php foreach ($hot_news1->result() as $hot_news) {?>
                                       <li>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4">

                                                <a href="<?=base_url('newsPortal/single_post/'.$hot_news->post_id)?>"><img src="<?=base_url('images/post/'.$hot_news->image)?>" alt="News image" style="height: 210px"/></a>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 content">
                                                <h4><a href="<?=base_url('newsPortal/single_post/'.$hot_news->post_id)?>"><?=mb_strimwidth($hot_news->title, 0, 20, ".....")?></a></h4>
                                                <span class="author"><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> admin</a></span> <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-m-Y', strtotime($hot_news->created_at))?></span>
                                                <span class="comment"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 50</a></span>
                                                <p><?=mb_strimwidth($hot_news->description, 0, 250, '...')?><a href="<?=base_url('newsPortal/single_post/'.$hot_news->post_id)?>" class="btn btn-danger" style="color: white; margin-left: 10px">  Read More</a></p>
                                            </div>
                                        </div>
                                    </li> 
                                    <?php 
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End what’s hot now -->
                </div>
                <!--Sidebar Start Here -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-left-none sidebar-latest">
                    <!--Like Box Start Here -->
                    <div class="like-box">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true" style="margin-top: 12px"></i> </a><span>210,956 <br />likes</span>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true" style="margin-top: 12px"></i> </a><span>350,580 <br />followers</span>
                            </li>
                            <li class="last">
                                <a href="#"><i class="fa fa-rss" aria-hidden="true" style="margin-top: 12px"></i> </a><span>210,956 <br />subscribers</span>
                            </li>
                        </ul>
                    </div>
                    <!--Like Box End Here -->

                    <!--Add Start Here -->
                    <div class="add-section">
                        <img src="<?=base_url('assets/images/add/2.jpg')?>" alt="add image">
                    </div>
                    <!--Add Box End Here -->
                    
                    <!--Newsletter Start Here -->
                    <div class="newsletter-info">
                        <form>
                            <fieldset>
                                <div class="form-group">
                                    <h4>Subscribe to Newsletter</h4>                                
                                    <div class="newsletter">
                                    <input class="form-control" placeholder="Email address..." type="text">
                                    <button class="btn-send" type="submit">Subscribe</button>
                                    <p>Get the latest news stories in your inbox</p>
                                    </div> 
                                </div>                                       
                            </fieldset>
                        </form>
                    </div>

                    <!--Newsletter End Here -->

                    <!--popular Post Start Here -->
                    <div class="sidebar popular">
                        <h3 class="title-bg">Popular Now</h3>
                        <?php 
                            foreach ($popular->result() as $value1) {?>
                                <ul>
                                    <li>
                                        <a href="<?=base_url('newsPortal/single_post/'.$value1->post_id)?>" class="category-btn hvr-bounce-to-right"><?=$value1->cat_name?></a>
                                        <div class="post-image"><img src="<?=base_url('images/post/'.$value1->image)?>" alt="News image"></div>
                                        <div class="content">
                                            <h4>
                                                <a href="<?=base_url('newsPortal/single_post/'.$value1->post_id)?>"><?=$value1->cat_name?></a>
                                            </h4>
                                            <span class="date"> 
                                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-m-Y', strtotime($value1->created_at))?>
                                            </span> 
                                            <span class="comment">
                                                <a href="#">
                                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 50
                                                </a>
                                            </span>
                                        </div>
                                    </li>
                                </ul> 
                            <?php 
                            }
                         ?>
                        
                    </div>
                     

                  <!--   <div class="hot-news popular-related">
                        <ul class="news-post">
                       <?php 
                            foreach ($popular->result() as $val) {?>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                        <div class="item-post">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-3 paddimg-right-none">
                                                    <img src="<?=base_url('images/post/'.$val->image)?>" alt="" title="News image">
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-9">
                                                    <h4><a href="<?=base_url('newsPortal/single_post/'.$val->post_id)?>"> <?=mb_strimwidth($val->title, 0, 30, '....')?></a></h4>
                                                    <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?=date('d-m-Y', strtotime($val->created_at))?></span>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php 
                                }
                             ?>
                           
                        </ul>
                    </div>  -->
                    <!--popular Post End Here --> 
       
                </div>
            </div>
        </div>
    </div>
  
  <br>

    <!-- Hot News Start Here -->
    
    <!-- All News Section end Here -->
    <!-- Footer Area Section Start Here -->
    <div class="add-section separator-large2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- <img src="images/footer-top.png" alt="footer"> -->
                </div>
            </div>
        </div>
    </div>
     <?php include 'includes/footer.php'; ?>

    <!-- Start scrollUp  -->
    <div id="return-to-top">
        <span>Top</span>
    </div>
    <!-- End scrollUp  -->
    
    <!-- Footer Area Section End Here -->
    
    <?php include 'includes/foot.php'; ?>
</body>
</html>
