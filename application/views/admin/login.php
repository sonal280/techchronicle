<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php include 'includes/head.php'; ?>
   <style>
        body{
            background: url('../images/bg2.jpg') center center no-repeat;
            background-size: cover;
        }
       .login
       {
            display: flex;
            justify-content: center;
            margin: 0 ;  
            margin-top: 105px;
      }

      .login_back{
            padding: 55px;
            width: 500px
      }

   </style>
</head>

<body>
 
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login">
        <div class="sparkline9-list responsive-mg-b-30 login_back">
            <div class="sparkline9-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-login-inner">
                                <?php if($this->session->flashdata('login_status')){echo "<span style='color:red' id='aaa'>Invalid Login Details</span>";} ?>
                                <form action="<?=base_url('admin/login_detail')?>" method="POST">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Username</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Enter Username" name="uname"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <label class="login2">Password</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="password" class="form-control" placeholder="password" name="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login-btn-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="i-checks">
                                                    <label>
                                                    <input type="checkbox"><i></i> Remember me </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="login-horizental">
                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Login</button>
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

   <?php include 'includes/foot.php'; ?>
</body>

</html>