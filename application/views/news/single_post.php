 <?php 
    foreach ($single_post_detail->result() as $value) {
        $title = $value->title;
        $category_name11 = $value->cat_name;
        $category_id11 = $value->cat_id;
        $description = $value->description;
        $created_at = $value->created_at;
        $image = $value->image;
    }
 ?> 

<!doctype html>
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
      <div class="container">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item" style="text-align:right">
              <a href="<?=base_url('newsPortal/index')?>" class="breadcrumbs__url">  Home </a> / <a href="<?=base_url('newsPortal/category/'.$category_name11.'/'.$category_id11)?>" class="breadcrumbs__url"> <?=$category_name11?></a>
            </li>
            <!-- <li class="breadcrumbs__item breadcrumbs__item--current">
              About
            </li> -->
          </ul>
        </div>
    <div class="single-blog-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="single-image">
                        <h1><?=$title?></h1>
                        <img src="<?=base_url('images/post/'.$image)?>" alt="Blog single photo" style="height: 100%;width: 100%">
                    </div>
                    <?=$description?>
                    <div class="share-section">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 life-style">
                                <span class="author"> 
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
                                </span> 
                                <span class="comment"> 
                                <a href="#"> 
                                    <i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                </span>
                                <span class="date">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-M-Y', strtotime($created_at))?> 
                                </span>
                                <span class="cat">
                                    <a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
                                </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <?php 
                                        foreach ($cat_name->result() as $value) {?>
                                            <li class="hvr-bounce-to-right"><a href="<?=base_url('newsPortal/category/'.$value->cat_name.'/'.$value->cat_id)?>"> <?=$value->cat_name?></a></li>
                                            <?php 
                                        }
                                     ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="share-section share-section2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <span> You Can Share It : </span>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="share-link">
                                    <li class="hvr-bounce-to-right"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                    <li class="hvr-bounce-to-right"><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <ul class="next-pre-section">
                                
                                 <?php 
                                    foreach ($previous_post->result() as $value) {?>
                                        <li class="left-arrow"><a href="<?=base_url('newsPortal/single_post/'.$value->post_id)?>"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous Post</a></li>
                                     <?php
                                    }
                                 ?>
                                <?php 
                                    foreach ($previous_post->result() as $value) {?>
                                <li class="right-arrow"><a href="<?=base_url('newsPortal/single_post/'.$value->post_id)?>">Next Post <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>    
                                                     
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Blog Single Sidebar Start Here -->
                    <div class="sidebar-area">
                        <div class="like-box-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> <span class="like-page">like our facebook page <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> <span class="like-page">Follow us on twitter<br/>2109 followers</span> <span class="like">
                                <i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i> <span class="like-page">Subscribe to our rss <br/>210,956 likes</span> <span class="like"><i class="fa fa-plus" aria-hidden="true"></i></span></a></li>
                            </ul>
                        </div>
                          <div class="recent-post-area hot-news">
                            <h3 class="title-bg">Recent Post</h3>
                            <ul class="news-post">
                                <li>
                                    <?php foreach ($recent_post->result() as $recent) {?>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
                                            <div class="item-post">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 paddimg-right-none">
                                                        <a href="<?=base_url('newsPortal/single_post/'.$recent->post_id)?>"><img src="<?=base_url('images/post/'.$recent->image)?>" alt="" title="News image" style="height:100px" /></a>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <h4><a href="<?=base_url('newsPortal/single_post/'.$recent->post_id)?>"> <?=mb_strimwidth($recent->title, 0,150, ".....")?></a></h4>
                                                        <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?=date('d-M-Y', strtotime($recent->created_at))?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                   <?php 
                                    } ?>
                                   
                                </li>
                                
                            </ul>
                        </div>
                        <div class="trending-post-area">
                            <h3 class="title-bg">Trending Post</h3>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul>
                                        <?php foreach ($trending_post->result() as $trending) {?>
                                        <li>
                                            <a href="<?=base_url('newsPortal/single_post/'.$trending->post_id)?>" class="hvr-bounce-to-right team-btn"><?=$trending->cat_name?></a><br/>
                                            <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i><?=date('d-M-Y', strtotime($trending->created_at))?></span>
                                           <h4><a href="<?=base_url('newsPortal/single_post/'.$trending->post_id)?>"><?=mb_strimwidth($trending->title, 0,250, ".....")?> </a></h4><p><?=mb_strimwidth($trending->description, 0,150, ".....")?></p>
                                        </li>
                                        <?php } ?>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Blog Details Page end here -->
    <!-- Footer Area Section Start Here -->
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
