   <footer>
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <!-- Footer About Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-one">
                            <h3>About</h3>
                            <div class="footer-logo" ><h1 style="color: white">TECH CHRONICLE</h1></div>
                            <p>Tech Chronicle will basically cover latest technology, newsest gadgets. It is a blend of all flavors for leisure or information purpose.</p>
                            <p>We're social, connect with us:</p>
                            <div class="footer-social-media-area">
                                <nav>
                                    <ul>
                                        <!-- Facebook Icon Here -->
                                        <li><a href="#"><i class="fa fa-facebook" style="margin-top: 8px"></i></a></li>
                                        <!-- Google Icon Here -->
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                        <!-- Twitter Icon Here -->
                                        <li><a href="#"><i class="fa fa-twitter" style="margin-top: 8px"></i></a></li>
                                        <!-- Vimeo Icon Here -->
                                        <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                        <!-- Pinterest Icon Here -->
                                        <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true" style="margin-top: 8px"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Footer About Section End Here -->

                    <!-- Footer Popular Post Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-two">
                            <h3>Popular Posts</h3>
                            <nav>
                                <ul>
                                    <?php 
                                        foreach ($popular1->result() as $value) {?>
                                          <li>
                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-4">
                                                <a href="<?=base_url('newsPortal/single_post/'.$value->post_id)?>"><img src="<?=base_url('images/post/'.$value->image)?>" alt="post photo"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-8">
                                                <p><a href="blog-single.php"><?=mb_strimwidth($value->title, 0,150, ".....")?></a></p>
                                                 <?=date('d-M-Y', strtotime($value->created_at))?>
                                                <span><i class="fa fa-calendar-check-o" aria-hidden="true"> </i> <?=date('d-M-Y', strtotime($value->created_at))?></span>
                                            </div>
                                        </li>
                                      <?php  
                                        }
                                     ?>
                                  
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Footer Popular Post Section End Here -->

                    <!-- Footer From Flickr Section Start Here -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-three">
                            <h3>Featured Images</h3>
                            <ul>
                                <?php 
                                foreach ($featured_images->result() as $value) { ?>
                                 <li>
                                    <a href=""><img src="<?=base_url('images/post/'.$value->image)?>" alt="flicker photo"></a>
                                </li>
                                 <?php 
                                }
                                 ?>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- Footer From Flickr Section End Here -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Area Start Here -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-bottom">
                            <p>Developed By Sonal Choudhary.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright Area End Here -->
    </footer>