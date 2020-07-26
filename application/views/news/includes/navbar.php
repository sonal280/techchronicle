<div class="header-middle-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-area text-center">
                    <a href="index.php" style="text-decoration:none"><h1>Tech Chronicle</h1></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bottom-area" id="sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                            <div class="col-sm-8 col-xs-8 padding-null">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="col-sm-4 col-xs-4 hidden-desktop text-right search">
                                <a href="#search-mobile" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <div id="search-mobile" class="collapse search-box">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                            </div>    
                        </div>
                        <div class="main-menu navbar-collapse collapse">
                            <nav>
                                <ul> 
                                    <li <?php if ($this->uri->uri_string()=='index') {echo 'class="active"';}?>><a href="<?=base_url('index')?>">Home </a></li>
                                    <?php foreach ($cat_name->result() as $category_name) { ?>
                                      <li <?php if ($this->uri->uri_string()=='<?=$category_name->cat_name?>') {echo 'class="active"';} ?>><a href="<?=base_url('newsPortal/category/'.$category_name->cat_name.'/'.$category_name->cat_id)?>"><?=$category_name->cat_name?></a></li>
                                     <?php  
                                    } ?>
                                    <li <?php if ($this->uri->uri_string()=='about') {echo 'class="active"';}?>><a href="<?=base_url('about')?>">About</a></li>

                                    <li <?php if ($this->uri->uri_string()=='contact') {echo 'class="active"';}?>><a href="<?=base_url('contact')?>">Contact</a></li>
                                    <!-- <li <?php if ($this->uri->uri_string()=='index') {echo 'class="active"';}?>><a href="<?=base_url('index')?>">Home </a></li>

                                    <li <?php if ($this->uri->uri_string()=='about') {echo 'class="active"';}?>><a href="<?=base_url('about')?>">About</a></li>

                                    <li <?php if ($this->uri->uri_string()=='fashion') {echo 'class="active"'; }?>><a href="<?=base_url('fashion')?>">Fashion</a></li>

                                    <li <?php if ($this->uri->uri_string()=='politics') {echo 'class="active"'; }?>><a href="<?=base_url('politics')?>">Politics</a></li>

                                    <li <?php if ($this->uri->uri_string()=='sports') {echo 'class="active"'; }?>><a href="<?=base_url('sports')?>">Sports</a></li>

                                    <li <?php if ($this->uri->uri_string()=='health') {echo 'class="active"'; }?>><a href="<?=base_url('health')?>">Health</a></li>

                                    <li <?php if ($this->uri->uri_string()=='science') {echo 'class="active"'; }?>><a href="<?=base_url('science')?>">Science</a></li>

                                    <li <?php if ($this->uri->uri_string()=='contact') {echo 'class="active"';}?>><a href="<?=base_url('contact')?>.php">Contact</a></li> -->

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-hidden col-xs-hidden text-right search hidden-mobile">
                        <a href="#search" data-toggle="collapse" class="search-icon"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div id="search" class="collapse search-box">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>                    
                </div>
            </div>
        </div>