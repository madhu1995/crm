<?php
require('sales_db.php');
if(empty($_SESSION['username']))
{
 header('Location:pages/examples/login.php');
}
if(isset($_GET['did']))
{
    $sql=mysql_query("DELETE FROM `salesperson` WHERE `id`='".$_GET['did']."'");
	if($sql)
     {
       header("location:index.php"); 
     }
}
if(isset($_GET['eid']))
{
    $sql=mysql_query("DELETE FROM `carmodel` WHERE `modelno`='".$_GET['eid']."'");
	if($sql)
     {
       header("location:index.php"); 
     }
}
?>
<!DOCTYPE html>
<html>
  <head>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adhi Maruti CRM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
			<?php
				 $countm=mysql_query("SELECT count(*) FROM `emails`");
				 $fetchm = mysql_fetch_array($countm);
				 ?>
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="pages/forms/mailbox.php">
                  <span title="Inbox"><i class="fa fa-envelope-o"></i></span>
				   <span class="label label-primary" ><?php echo $fetchm[0]; ?></span>
                 </a>
				 </li>
				 <?php
				 $count=mysql_query("SELECT count(title) FROM `events` WHERE START = CURDATE()");
				 $fetch = mysql_fetch_array($count)
				 ?>
                 <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="pages/calendar.php">
                  <span title="sales followup"><i class="fa fa-bell-o"></i></span>
				  <span class="label label-warning" ><?php echo $fetch[0]; ?></span>
                </a>
				</li>
				<?php
				 $count=mysql_query("SELECT count(title) FROM `ser_events` WHERE START = CURDATE()");
				 $fetch = mysql_fetch_array($count)
				 ?>
               <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="pages/calendar.php">
                  <span title="service followup"><i class="fa fa-flag-o"></i></span>
				  <span class="label label-success"><?php echo $fetch[0]; ?></span>
                </a>
				</li>
				<!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="text-center">
					  <a href="pages/examples/login.php">
                      Sign out</a>
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
		  <form class="sidebar-form" autocomplete="off">
            <div class="input-group">
              <input type="text" id="q" class="form-control" placeholder="Search..." onkeyup="showResult(this.value)">
			  <span class="input-group-btn">
                <button type="button" id="search" class="btn btn-flat" onclick="javascript:eraseText();"><i class="fa fa-times"></i></button>
              </span>              
			   </div>
			   <div id="livesearch"></div>
			</form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pages/forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="pages/examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <!-- <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li><a href="deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="pages/forms/amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="pages/forms/appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="pages/forms/ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
				<li><a href="pages/forms/ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="pages/forms/report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="pages/forms/finance.php">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="pages/forms/post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
			  <a href="pages/calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
                <a href="pages/forms/mailbox.php">
                <i class="fa fa-envelope-o"></i> <span>Mailbox</span>
               </a>
            </li>  			
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
		      <section class="content">
			  <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua" title="Today's car booking">
			  <?php
				 $countp=mysql_query("SELECT count('Enq_id') FROM `downpayment` WHERE app_date = CURDATE()");
				 $fetchp= mysql_fetch_array($countp)
				 ?>
                <div class="inner">
                  <h3><?php echo $fetchp[0]; ?></h3>
                  <p>New booking</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green" title="Today's Opportunity">
			  <?php
				 $counto=mysql_query("SELECT count(`Enq_id`)  FROM `opp_details` WHERE DOE=CURDATE()");
				 $fetcho= mysql_fetch_array($counto)
				 ?>
			     <div class="inner">
                  <h3><?php echo $fetcho[0];?></h3>
                  <p>Opportunity Customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people-outline"></i>
                </div>
                 </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow" title="Today's LEADS">
			  <?php
				 $countl=mysql_query("SELECT count(`enquire`)  FROM `lead_details` WHERE doe=CURDATE()");
				 $fetchl= mysql_fetch_array($countl)
				 ?>
                <div class="inner">
                  <h3><?php echo $fetchl[0]; ?></h3>
                  <p>Lead customers</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
			<?php
				 $countsp=mysql_query("SELECT `Salesperson`, COUNT( * ) AS count
FROM opp_details
GROUP BY `Salesperson`
ORDER BY count DESC
LIMIT 1 , 1");
				 $fetchsp= mysql_fetch_array($countsp)
				 ?>
			 <!-- small box -->
              <div class="small-box bg-red" title="Salesperson who tops first in sales">
                <div class="inner">
                  <h3><?php echo $fetchsp[0]; ?></h3>
                  <p><?php echo $fetchsp[1]; ?></p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
               <div class="row">
			   <br>
                <div class="col-md-6">
                  <!-- USERS LIST -->
                  <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Latest Members</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body no-padding">
<?php 
$query = mysql_query("SELECT `name`,`Enq_id` FROM `upload` ORDER BY Enq_id DESC limit 8" );
while( $row = mysql_fetch_assoc($query) )
{
   ?>
  <div> 
   <ul style="list-style-type:none;" class="users-list">
    <li style="width:25%;float:left;padding:10px;text-align:center;align:left;">
    	<img src="pages/forms/file/<?php echo $row['name']; ?>" height="70" width="70" style="border-radius:50%;max-width:100%;height:auto;" >
		 <a class="users-list-name" href="http://localhost/new1/pages/forms/op_edit.php?edi=<?php echo $row['Enq_id']; ?>"><?php echo $row['Enq_id']; ?></a>
     </li>
	</ul>
</div>
<?php	
}
?>
                    </div><!-- /.box-body -->
                  </div><!--/.box -->
				  <!-- salesperson -->
				  
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add salesperson</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
<div class="box-body">
<?php 
if(isset($_POST['submits']))
{
$query = mysql_query("INSERT INTO `salesperson`(`id`,`name`) VALUES ('".$_POST['id']."','".$_POST['name']."')");
}
?>
<form role="form" method="post">
<div class="form-group">
   <label>Executive id</label>
     <input type="text" style="width:70%" class="form-control input-sm" id="id" name="id">
</div>
<div class="form-group">
   <label>Executive name</label>
     <input type="text" style="width:70%" class="form-control input-sm" id="name" name="name">
</div>
</div><!-- /.box-body -->
	<div class="box-footer">
         <button type="submit" class="btn btn-warning pull-right" name="submits" id="suub" >Submit</button>
    </div><!-- /.box-footer -->
</form>
                  </div><!--/.box -->
				  <!-- delete the salesperson -->

                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Remove salesperson</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
<div class="box-body">

				   <table class="table table-bordered table-hover">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">Id</th>
						<th size="10" width="10%">Name</th>
						<th size="10" width="10%">Delete</th>
						</tr>
                    </thead> 
					<tbody>
					<?php
						$query=mysql_query("SELECT `id`, `name` FROM `salesperson`");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td>
							<button type="button" class="btn btn-primary" onClick="location.href='index.php?did=<?php echo $row['id']; ?>'" ><i class="fa fa-trash-o"></i></a></button>
                        </td>						
						</tr>
						<?php } ?>
						  </tbody>
						</table>
                  </div><!--/.box -->
				  
				  <div class="box box-inverse">
                    <div class="box-header with-border">
                      <h3 class="box-title">Update service price</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                     <div class="box-body">
                    <?php 
                      $con=mysql_connect("localhost","root","");
                      mysql_select_db("service1",$con);
                     ?>

				   <table class="table table-bordered table-hover">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">Part no</th>
						<th size="10" width="10%">service type</th>
						<th size="10" width="10%">Edit</th>
						</tr>
                    </thead> 
					<tbody>
					<?php
						$query=mysql_query("SELECT * FROM `parts`");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['part_no']; ?></td>
						<td><?php echo $row['service_type']; ?></td>
						<td>
							<button type="button" class="btn btn-primary" onClick="location.href='pages/forms/price.php?prt=<?php echo $row['part_no']; ?>'" ><i class="fa fa-pencil"></i></a></button>
                        </td>						
						</tr>
						<?php } ?>
						  </tbody>

						</table>
                  </div><!--/.box -->
				  </div>				  
				  
				  
				  </div><!-- /.col -->
				  </div>
			<div class="col-md-6">
              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Sales chart</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
				<form>
				   <?php include 'chart.php';?>
				</form>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
			  
                  <div class="box box-warning">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add car model</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
<div class="box-body">
<?php 
if(isset($_POST['submit1']))
{
$query = mysql_query("INSERT INTO `carmodel`(`modelno`,`modelname`) VALUES ('".$_POST['mno']."','".$_POST['mname']."')");
}
?>
<form role="form" method="post">
<div class="form-group">
   <label>Model number</label>
     <input type="text" style="width:70%" class="form-control input-sm" id="mno" name="mno">
</div>
<div class="form-group">
   <label>Model name</label>
     <input type="text" style="width:70%" class="form-control input-sm" id="mname" name="mname">
</div>
</div><!-- /.box-body -->
	<div class="box-footer">
         <button type="submit" class="btn btn-warning pull-right" name="submit1" id="suub" >Submit</button>
    </div><!-- /.box-footer -->
</form>
                  </div><!--/.box -->
				  <!-- delete the salesperson -->

                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Remove carmodel</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div><!-- /.box-header -->
<div class="box-body">

				   <table class="table table-bordered table-hover">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">Model no</th>
						<th size="10" width="10%">Model Name</th>
						<th size="10" width="10%">Delete</th>
						</tr>
                    </thead> 
					<tbody>
					<?php
						$query=mysql_query("SELECT `modelno`, `modelname` FROM `carmodel`");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['modelno']; ?></td>
						<td><?php echo $row['modelname']; ?></td>
						<td>
							<button type="button" class="btn btn-primary" onClick="location.href='index.php?eid=<?php echo $row['modelno']; ?>'" ><i class="fa fa-trash-o"></i></a></button>
                        </td>						
						</tr>
						<?php } ?>
						  </tbody>
						</table>
                  </div><!--/.box -->
				  </div>
			  </div><!-- /.col -->
                </div>
				</section>
      </div><!-- /.content-wrapper -->
      

      
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
	<!-- FLOT CHARTS -->
    <script src="../../plugins/flot/jquery.flot.min.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="../../plugins/flot/jquery.flot.resize.min.js"></script>
	 <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="../../plugins/flot/jquery.flot.pie.min.js"></script>
    <script>
      $(function () {
        
        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
          {label: "Series2", data: 30, color: "#3c8dbc"},
          {label: "Series3", data: 20, color: "#0073b7"},
          {label: "Series4", data: 50, color: "#00c0ef"}
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */

      });

      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br>"
                + Math.round(series.percent) + "%</div>";
      }
	 </script>
	<script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>
  </body>
</html>
