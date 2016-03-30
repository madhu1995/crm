<?php
require('../../sales_db.php');
if(isset($_GET['did']))
{
	$res1=mysql_query("SELECT * FROM `emails` WHERE `email_number`='".$_GET['did']."'");
    $rows=mysql_fetch_array($res1);
}
if(isset($_POST['delete']))
{
$query=mysql_query("DELETE FROM `emails` WHERE `email_number`='".$_GET['did']."'");
if($query)
{
 header("location:mailbox.php");
}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Read mail</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	 <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/iCheck/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
	 <!-- Date Picker -->
    <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a style="background-color: rgb(204, 238, 255);" href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Aa</b>dhi</span>
          <!-- logo for regular state and mobile devices -->
          <span style="background-color: rgb(102, 204, 255);" class="logo-lg"><b>Aadhi</b>MARUTI</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav style="background-color: rgb(102, 204, 255);" class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="text-center">
					  <a href="../../pages/examples/logout.php">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
               </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside style="font-family: &quot;Comic Sans MS&quot;,cursive,sans-serif;" class="main-sidebar">
           <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
			    <li><a href="../examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li> 
              <!--  <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href=""><i class="fa fa-circle-o"></i> Service Detail</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#index.html">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li class="treeview">
              <a href="../calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li class="active treeview">
              <a href="mailbox.php">
                <i class="fa fa-envelope-o"></i> <span>Mailbox</span>
               </a>
            </li>  	
           </ul>  			
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Read Mail
          </h1>
          <ol class="breadcrumb">
           <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		  <li class="active">Inbox</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="compose.php" class="btn btn-primary btn-block margin-bottom">Compose</a>
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <?php
				 $count=mysql_query("SELECT count(*) FROM `emails`");
				 $fetch = mysql_fetch_array($count);
				 $count1=mysql_query("SELECT count(*) FROM `sent_email`");
				 $fetch1 = mysql_fetch_array($count1);
				 $count2=mysql_query("SELECT count(*) FROM `drafts`");
				 $fetch2 = mysql_fetch_array($count2);
				 ?>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="mailbox.php"><i class="fa fa-inbox"></i>
      					Inbox <span class="label label-primary pull-right"><?php echo $fetch[0]; ?></span></a>
					</li>
                    <li><a href="sent_mail.php"><i class="fa fa-envelope-o"></i> Sent<span class="label label-primary pull-right"><?php echo $fetch1[0]; ?></span></a></li>
                     <li><a href="drafts_mail.php"><i class="fa fa-file-text-o"></i> Drafts<span class="label label-primary pull-right"><?php echo $fetch2[0]; ?></span></a></li>
                   
				   </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
			<form method="post">
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Read Inbox Mails</h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3><b><?php echo $rows['subject']; ?></b></h3>
                    <h5>From: <?php echo $rows['from_email']; ?> <span class="mailbox-read-time pull-right"><?php echo $rows['received_date']; ?></span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <button type="submit" name="delete" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                      <a href="reply.php?to=<?php echo $rows['email_number']; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></a>
                      <a href="forward.php?fwd=<?php echo $rows['email_number']; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i class="fa fa-share"></i></a>
                    </div><!-- /.btn-group -->
                    <a href="inboxprint.php?print=<?php echo $_GET['did']; ?>" target="_blank" data-toggle="tooltip" title="Print" class="btn btn-default"><i class="fa fa-print"></i></a>
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    <p><?php echo $rows['mail_body']; ?></p>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
				 <?php
				if(preg_match('[.(jpeg|jpg|png)]',$rows['attachments']))
                 {?>
                  <ul class="mailbox-attachments clearfix">
                    <li>
			    	 <span class="mailbox-attachment-icon has-img"><img src="attachments/<?php echo $rows['attachments'];?>" alt="Attachment"></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $rows['attachments'];?>" target="_blank" class="mailbox-attachment-name"><i class="fa fa-camera"></i><?php echo $rows['attachments']; ?></a>
   					  </div>
                    </li>
                  </ul>
				  <?php }
                else if(preg_match('[.(doc|docx)]',$rows['attachments']))
				{
				  ?>
				  <ul class="mailbox-attachments clearfix">
				   <li>
                      <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $rows['attachments'];?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"><?php echo $rows['attachments']; ?></i></a>
                      </div>
                    </li>
                   </ul>
				  <?php } else if(preg_match('[.(pdf)]',$rows['attachments']))
				  {
				  ?>
				  <ul class="mailbox-attachments clearfix">
				  <li>
                      <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $rows['attachments'];?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"><?php echo $rows['attachments'];?></i></a>
                      </div>
                    </li>
				  </ul>
				  <?php }?>
                </div><!-- /.box-footer -->
               </div><!-- /. box -->
            </div><!-- /.col -->
			</form>
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
	 <!-- datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="../../js/upgraded.js"></script>
  </body>
  
</html>
