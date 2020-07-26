
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php include 'includes/head.php'; ?>
      <!-- <script src="<?=base_url('assets/admin/js/vendor/jquery-1.12.4.min.js')?>"></script> -->
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
                                            <a href="<?=base_url('admin/category')?>">
                                                <span style="background-color: blue; color: white; padding: 6px"><span class="glyphicon glyphicon-arrow-left"></span> Back</span>
                                            </a>
                                            <span style="padding-left: 15px">Add Category</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=base_url('admin/index')?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="<?=base_url('admin/category')?>">Category</a> <span class="bread-slash">/</span>
                                            </li>
                                             <li><span class="bread-blod">New category</span>
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
                                                        <form action="" method="POST" enctype="multipart/form-data" id="category_form">
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Category Name</label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                        <input type="text" class="form-control" name="cat_name" id="cat_name"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Status</label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                         <div class="chosen-select-single mg-b-20">
                                                
                                                                            <select data-placeholder="Choose a Country..." class="chosen-select form-control" tabindex="-1" name="cat_status" id="cat_status">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="0">Deactive</option>
                                                                                   
                                                                                </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           <div class="form-group-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                        <label class="login2 pull-right pull-right-pro">Image</label>
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                            <div class="input append-big-btn">
                                                                                <label class="icon-left" for="append-big-btn">
                                                                                        <i class="fa fa-download"></i>
                                                                                    </label>
                                                                                <div class="file-button">
                                                                                    Browse
                                                                                    <input type="file" onchange="document.getElementById('append-big-btn').value = this.value;"  name="cat_image">
                                                                                </div>
                                                                                <input type="text" id="append-big-btn" placeholder=""  style="color: black">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="form-group-inner">
                                                                <div class="login-btn-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3"></div>
                                                                        <div class="col-lg-9">
                                                                            <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                                <button class="btn btn-sm btn-primary login-submit-cs save" type="submit" id="save" name="save">Save Change</button>
    

                                                                               
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
      <script>
        $(function() {
            $("#category_form").validate({
                rules:{
                    cat_name:{
                        required:true
                    },
                    cat_image:{
                        required:true
                    }
                }
            });
        });
        $('#category_form').on('submit', function(e) {
            e.preventDefault();
            if ( $('#category_form').valid()) {
                var formData = new FormData($('#category_form')[0]);
                // var data = $("#category_form").serialize();
                $.ajax({
                    url:"<?=base_url('admin/add_new_category')?>",
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