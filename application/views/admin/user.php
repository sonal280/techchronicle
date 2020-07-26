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
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?=base_url('admin/index')?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">User</span>
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
                                    <h1>User List</h1>
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
                                                <th data-field="status" >Name</th>
                                                <th data-field="name" >User Name</th>
                                                <th data-field="image" >Password</th>
                                                <th data-field="created" >Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach ($user_detail->result() as $users_detail) { ?>
                                               <tr>
                                                <td></td>
                                                <td><?=$i?></td>
                                                <td>Sonal Choudhary</td>
                                                <td><?=$users_detail->username?></td>
                                                <td><?=$users_detail->password?></td>
                                                <td><?=date('d-m-Y H:i A', strtotime($users_detail->created_at))?></td>
                                            
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

  
</body>

</html>