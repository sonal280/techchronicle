<?php 
    foreach ($value->result() as $data) {
        $post_id = $data->post_id;
        $title = $data->title;
        $description = $data->description;
        $image = $data->image;
        $cat_id = $data->cat_id;
    }
 ?>
 
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php include 'includes/head.php'; ?>
    <script src="<?=base_url('assets/admin/ckeditor/ckeditor.js')?>"></script>
    <script src="<?=base_url('assets/admin/ckeditor/sample/js/sample.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/admin/ckeditor/sample/css/samples.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')?>">
</head>

<body>
    <!-- Start Left menu area -->
    <?php include 'includes/left_side_bar.php'; ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <?php include 'includes/header.php'; ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <div class="breadcome-heading">
                                                <a href="<?=base_url('admin/post')?>">
                                                    <span style="background-color: blue; color: white; padding: 6px"><span class="glyphicon glyphicon-arrow-left"></span> Back</span>
                                                </a>
                                                <span style="padding-left: 15px">Edit Post</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=base_url('admin/index')?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="<?=base_url('admin/category')?>">Post</a> <span class="bread-slash">/</span>
                                            </li>
                                             <li><span class="bread-blod">Edit Post</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                 <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="sparkline12-list">
                                    <div class="sparkline12-hd">
                                        <div class="main-sparkline12-hd">
                                            <h1></h1>
                                        </div>
                                    </div>
                                    <div class="sparkline12-graph">
                                        <div class="basic-login-form-ad">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="all-form-element-inner">
                                                        <form action="<?=base_url('admin/edit_new_post/'.$post_id)?>" method="POST" enctype="multipart/form-data" id="post_form">
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Title</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                        <input type="text" class="form-control" name="post_title" id="post_title" value="<?=$title?>" />
                                                                        <input type="hidden" value="<?=$post_id?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Category Name</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                         <div class="chosen-select-single mg-b-20">
                                                                            <select data-placeholder="Choose a Country..." class="chosen-select form-control" tabindex="-1" name="cat_name" id="cat_name">
                                                                            <?php 
                                                                                foreach ($cat_result as $cat_detail) { ?>
                                                                                  <option <?php if ($cat_detail->cat_id == $cat_id) {echo "selected";} ?> value="<?=$cat_detail->cat_id?>"><?=$cat_detail->cat_name?></option>


                                                                               <?php 
                                                                                }
                                                                             ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Status</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                         <div class="chosen-select-single mg-b-20">
                                                
                                                                            <select data-placeholder="Choose a Country..." class="chosen-select form-control" tabindex="-1" name="post_status" id="post_status">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Deactive</option>
                                                                                   
                                                                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                           <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Cover Image</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                        <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                            <div class="input append-big-btn">
                                                                                <label class="icon-left" for="append-big-btn">
                                                                                        <i class="fa fa-download"></i>
                                                                                </label>
                                                                                <input type="file" class="form-control" name="post_image" >
                                                                                <img src="<?=base_url('images/post/'.$image)?>" alt="" height="150px" width="150px">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Description</label>
                                                                    </div>
                                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                                      <!--  <input type="file" name="post_image" class="form-control"> --> 
                                                                        <textarea id="editor" cols="20" rows="10" class="form-control ckeditor" name="post_description" ><?=$description?></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group-inner">
                                                                <div class="login-btn-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-2"></div>
                                                                        <div class="col-lg-10">
                                                                            <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                               
                                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="save">Save Change</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 </div>
             </div>
         </div>

        
       
    </div>

   <?php include 'includes/foot.php'; ?>
    <script>
      initSample();
    </script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
      <script>
        $(function() {
            $("#post_formm").validate({
                rules:{
                    post_title:{
                        required:true
                    },
                    post_image:{
                        required:true
                    },
                    post_description:{
                        required:true
                    }
                }
            });
        });
        $('#post_formm').on('submit', function(e) {
            e.preventDefault();
            if ( $('#post_form').valid()) {
                var formData = new FormData($('#post_form')[0]);
                // var data = $("#category_form").serialize();
                $.ajax({
                    url:"<?=base_url('admin/add_new_post')?>",
                    method:'POST',
                    data: formData,
                    contentType:false,
                    processData:false,
                    success:function(result) {
                        var obj = $.parseJSON(result);
                        if (obj.success) {
                            window.location = obj.location;
                            alert(obj.msg);
                        }
                        else
                        {
                            alert(obj.msg);
                        }
                    }
                })
            }
        })
      </script>   
    
</body>

</html>