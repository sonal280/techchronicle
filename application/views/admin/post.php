
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php include 'includes/head.php'; ?>
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
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="breadcome-heading">
                                                    <a href="<?=base_url('admin/new_post')?>">
                                                        <h3 style="background-color: blue; padding: 3px; color: white;text-align: center">+ New Post</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=base_url('admin/index')?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Post</span>
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
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Post List</h1>
                                </div>
                            </div>
                            <div class="<s></s>parkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">S. No.</th>
                                                <th data-field="name" >Category Name</th>
                                                <th style="width: 150px" data-field="title" >Post Title</th>
                                                <th data-field="image" >Image</th>
                                                <th data-field="action" width="150%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i =1;
                                             foreach ($post_detail->result() as $value) {?>
                                            <tr>
                                                <td></td>
                                                <td><?=$i?></td>
                                                <td><?=$value->cat_name?></td>
                                                <td style="width: 100px"><?=$value->title?></td>
                                                <td><img src="<?=base_url('images/post/'.$value->image)?>" alt="" height="150px" width="150px"></td>
                                                <td width="150%"><a href="<?=base_url('admin/edit_post/'.$value->post_id)?>" class="glyphicon glyphicon-edit">Edit</a> | <a href="" onclick="remove(this, <?=$value->post_id?>)" class="glyphicon glyphicon-trash">Delete</a></td>
                                            </tr>
                                           <?php
                                           $i++;
                                            } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
       
    </div>

   <?php include 'includes/foot.php'; ?>
   <script>
       function remove(e, post_id) {
           if (confirm("Are You Sure! You want to delete it")) {
            $.post("<?=base_url('admin/delete_post')?>", {post_id:post_id}, function(data){
                alert(data);
            })
           }
       }
   </script>
</body>

</html>