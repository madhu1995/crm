<?php
require('../../sales_db.php');
if(isset($_GET['fwd']))
{
	$res1=mysql_query("SELECT * FROM `sent_email` WHERE `email_number`='".$_GET['fwd']."'");
    $rows=mysql_fetch_array($res1);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Compose</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script type="text/javascript">
function onsubmitform()
{
  if(document.pressed == 'send')
  {
   if (document.getElementById("to").value == "" || document.getElementById("subject").value == "" || document.getElementById("compose-textarea").value == "") {
         if(document.getElementById("to").value == ""){           
		   alert('Recipient address is Mandatory');
            return false;
			}
	     else if(document.getElementById("subject").value == ""){           
		   alert('subject is Mandatory');
            return false;
			}
			else if(document.getElementById("compose-textarea").value == ""){           
		   alert('mail body is Mandatory');
            return false;
			}
        }
    else{
   document.myform.action ="for_mail1.php";
   }
  }
  else if(document.pressed == 'drafts')
  {
   alert(document.pressed);
   document.myform.action ="drafts.php";
  }
   return true;
}
</script>
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
            <li class="active treeview">
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
            <li>
              <a href="../calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="index.html">
                <i class="fa fa-phone"></i> <span>Alerts</span>
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
            Mailbox
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Compose</li>
          </ol>
        </section>
    <!-- main content -->
	<section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="mailbox.php" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>
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
                    <li><a href="mailbox.php"><i class="fa fa-inbox"></i>
      					Inbox <span class="label label-primary pull-right"><?php echo $fetch[0]; ?></span></a>
					</li>
                    <li class="active"><a href="sent_mail.php"><i class="fa fa-envelope-o"></i> Sent<span class="label label-primary pull-right"><?php echo $fetch1[0]; ?></span></a></li>
                     <li><a href="drafts_mail.php"><i class="fa fa-file-text-o"></i> Drafts<span class="label label-primary pull-right"><?php echo $fetch2[0]; ?></span></a></li>
                   
				   </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
            <div class="col-md-9">
			<form method="post" name="myform" onsubmit="return onsubmitform();" class="form" id="form1" enctype="multipart/form-data">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Compose New Message</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
                    <input class="form-control" placeholder="To:" name="to" id="to" >
                  </div>
				  <div class="form-group">
                    <input class="form-control" placeholder="Cc:" name="cc" id="cc">
                  </div>
                  <div class="form-group">
                    <input class="form-control" style="font-weight: bold;" id="subject" placeholder="Subject:" name="subject" value="Aadhi Maruti - " >
                  </div>
                  <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="content" >
					  <?php echo $rows['mail_body']; ?>
					  </textarea>
				 </div>
                  <div class="form-group">
                    <div class="btn btn-default btn-file">
                      <i class="fa fa-paperclip"></i> Attachment
                      <input type="file" name="file" id='uploaded_file' accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
                     <input type="text" hidden name="attach" value="<?php echo $rows['attachments']; ?>">
				   </div>
					<span><img id="blah" src="#" alt="your image" /></span>
					</div>
					<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(70)
                    .height(70);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
 
</script>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary" onclick="document.pressed=this.value" value="send"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                 <a href="mailbox.php" class="btn btn-default"><i class="fa fa-times"></i> Discard</a>
				 <button type="submit" class="btn btn-default" onclick="document.pressed=this.value" value="drafts"><i class="fa fa-pencil"></i> Drafts</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
			  </form>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
     
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
	<!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    
	<script>
      $(function () {
        //Add text editor
        $("#compose-textarea").wysihtml5();
      });
    </script>
  </body>
</html>
