<?php
 require('../../sales_db.php');
   if(isset($_POST['submit']))
	{
	 $sql=mysql_query("select * from validate where username = '".$_POST['username']."' and password = '".$_POST['password']."'");
	 if(mysql_num_rows($sql) > 0)
	 {
	$_SESSION['username'] = $_POST['username'];
		 
		 header('Location:../../index.php');
		 
	 }
	 else{ 
	 echo '<div id="error_notification">The submitted login info is incorrect.</div>';
	 }
	 }
	 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AadhiMaruti | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">
    <style>
	#error_notification
{
border: 1px #A25965 solid;
height: auto;
padding: 4px;
background: #F8F0F1;
text-align: center;
-moz-border-radius: 5px;
}
	</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page" style="background-color: white;">    
     <div class="docs-header">
	  <div class="login-logo" style="margin:10%">
       <!-- <a href="../../index.php">--><b>Aadhi</b>MARUTI</a>
      </div><!-- /.login-logo -->
	   </div> <p id="err"></p>
	  <div class="login-box" >	  
	   <div class="login-box-body" style="background-color: beige;">
        <p class="login-box-msg">Sign in to start your session</p>
       <form  method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
       
         </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	
    

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
