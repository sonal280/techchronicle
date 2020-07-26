<style>
nav .metismenu .active{
        background: beige;
}
</style>
   <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header" >
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
                
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                         <li class="">
                            <a class="">
                               <img src="<?=base_url('assets/admin/img/product/pro4.jpg')?>" alt="" style="height:50px; width: 50px" class="img-circle"/>
                               <span class="mini-click-non">Sonal Choudhary</span>
                            </a>
                        </li>
                        <li <?php if ($this->uri->uri_string()=='index') {echo 'class="active"';}?>>
                            <a class="" href="<?=base_url('admin/dashboard')?>">
							   <span class="educate-icon educate-home icon-wrap"></span>
							   <span class="mini-click-non">Dashboard</span>
							</a>
                        </li>
                        
                        <li <?php if ($this->uri->uri_string()=='admin/user') {echo 'class="active"';}?>>
                            <a title="Landing Page" href="<?=base_url('admin/user')?>" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">User</span></a>
                        </li>
                        <li <?php if ($this->uri->uri_string()=='admin/category') {echo 'class="active"';}?>>
                            <a class="" href="<?=base_url('admin/category')?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Category</span></a>
                            
                        </li>
                        <li <?php if ($this->uri->uri_string()=='admin/post') {echo 'class="active"';}?>>
                            <a class="" href="<?=base_url('admin/post')?>" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Post</span></a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </nav>
    </div>