 <div class="ticker-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-0">
                        <div class="wrapper">
                        <!-- News Slider -->
                            <div class="ticker marg-botm">
                                <div class="ticker-wrap">
                                    <!-- News Slider Title -->
                                    <div class="ticker-head up-case backg-colr col-md-2">Breaking News <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                                    <div class="tickers col-md-10">
                                        <div id="top-news-slider" class="owl-carousel ">
                                           <?php 
                                            foreach ($breaking_news->result() as $news) { ?>
                                            <div class="item">
                                                <a href="<?=base_url('newsPortal/single_post/'.$news->post_id)?>"> <img src="<?=base_url('images/post/'.$news->image)?>" alt="news image" style="height: 30px; width: 30px"> <span><?=mb_strimwidth($news->title, 0, 50, "...");?></span></a>
                                            </div>
                                            <?php     
                                            }
                                             ?>                            
                                       </div>
                                   </div>
                                </div>
                            </div>  
                            <!-- End News Slider -->              
                        </div>
                    </div>  
                </div>
            </div>      
        </div>  