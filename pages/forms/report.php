<?php
require('../../sales_db.php');
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
  xmlhttp.open("GET","../../livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Opportunity Details</title>
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
					  <a href="../../pages/examples/login.php">Sign out</a>
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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
				<li><a href="ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-edit"></i> <span>Finance</span>
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
            Report
            <small>(sales)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Report</li>
          </ol>
        </section>
    <!-- main content -->
		<section class="content">
		<div class="row">
		<div class="col-xs-6">
		  <div class="box box-primary">
                <div class="box-header with-border">
                  <h5> Report generation - Opportunity details </h5>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
				   <div class="form-group">
                      <label>Start Date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" onblur="func()" name="doe" id="doe1" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<div class="form-group">
                      <label>End date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doe" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<script>
					function openpage(){
					var start= document.getElementById('doe1').value;
					var end=document.getElementById('doe').value;
					location.href="f1_export.php?start="+start+"&end="+end;
					}
					function leadfun(){
					var start= document.getElementById('doel1').value;
					var end=document.getElementById('doel').value;
					location.href="f2_export.php?start="+start+"&end="+end;
					}
					function war(){
					var start= document.getElementById('doew1').value;
					var end=document.getElementById('doew').value;
					location.href="war_export.php?start="+start+"&end="+end;
					}
					</script>
				   	<div class="btn-group">
                      <button type="button" class="btn btn-primary btn-flat">Opportunity details</button>
                      <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="export.php"> user details</a></li>
						<li class="divider"></li>
                        <li><a href="export1.php"> vehicle details</a></li>
						<li class="divider"></li>
                        <li><a href="export2.php"> Td details</a></li>
                      </ul>
                    </div> &nbsp
					<div class="btn-group">
					<a href="javascript:openpage()">
					<button type="button" style="background:transparent; border:none; color:transparent;">
					<i class="fa fa-file-text fa-2x text-primary"></i>
					</button>
					</a>
                    </div>
				</div><!-- /.box-body -->
				  </div>
				  </div>
				  
		 <div class="col-xs-6">
		  <div class="box box-danger">
                <div class="box-header with-border">
                  <h5>Report generation - Lead details</h5>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
				    <div class="form-group">
                      <label>Start Date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doel1" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<div class="form-group">
                      <label>End date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doel" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
				   	<div class="btn-group">
                      <button type="button" class="btn btn-danger btn-flat">Lead details</button>
                      <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="leadexport.php"> user details</a></li>
						<li class="divider"></li>
                      </ul>
                    </div> &nbsp
					<div class="btn-group">
					<a href="javascript:leadfun()">
					<button type="button" style="background:transparent; border:none; color:transparent;">
					<i class="fa fa-file-text fa-2x text-danger"></i>
					</button>
					</a>
                    </div>
				</div><!-- /.box-body -->
				  </div>
				  </div>
		          </div>
				  <br></br>
		<div class="row">
		<div class="col-xs-6">
		  <div class="box box-success">
                <div class="box-header with-border">
                  <h5>Report generation - Service</h5>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
				  <div class="form-group">
                      <label>Start Date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="does1" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<div class="form-group">
                      <label>End date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="does" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
				   	<div class="btn-group">
                      <button type="button" class="btn btn-success btn-flat">Service details</button>
                      <button type="button" class="btn btn-success btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="rpt_export.php"> AMC details</a></li>
						<li class="divider"></li>
						<li><a href="rpt_exp1.php"> service details</a></li>
						<li class="divider"></li>
					</ul>
                    </div> &nbsp
					<div class="btn-group">
					<a href="javascript:service()"> 
					<button type="button" style="background:transparent; border:none; color:transparent;">
					<i class="fa fa-file-text fa-2x text-success"></i>
					</button>
					</a>
                    </div>
				</div><!-- /.box-body -->
				  </div>
				  </div>
				  
		 <div class="col-xs-6">
		  <div class="box box-warning">
                <div class="box-header with-border">
                  <h5>Report generation - Delivery details</h5>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
				  <div class="form-group">
                      <label>Start Date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doed1" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<div class="form-group">
                      <label>End date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doed" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
				   	<div class="btn-group">
                      <button type="button" class="btn btn-warning btn-flat">Delivery details</button>
                      <button type="button" class="btn btn-warning btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href=""> Delivery details</a></li>
						<li class="divider"></li>
                      </ul>
                    </div> 
					&nbsp
					<div class="btn-group">
					<button type="button" style="background:transparent; border:none; color:transparent;">
					<i class="fa fa-file-text fa-2x text-warning"></i>
					</button>
                    </div>
				</div><!-- /.box-body -->
				  </div>
				  </div>
		          </div>
		         <div class="row">
		          <div class="col-xs-6">
					<div class="box box-info">
						<div class="box-header with-border">
							<h5>Report generation -AMC Warranty exipry</h5>
						</div><!-- /.box-header -->
					<!-- form start -->
                  <div class="box-body">
				  <div class="form-group">
                      <label>Start Date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doew1" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					<div class="form-group">
                      <label>End date</label>
					   <div class="input-group date" style="width:70%">
                          <input type="text" class="form-control required" name="doe" id="doew" title="required" data-toggle="tooltip">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
				   	<div class="btn-group">
                      <button type="button" class="btn btn-info btn-flat">AMC warranty expiry</button>
                      <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="amc1_export.php"> AMC details</a></li>
						<li class="divider"></li>
					</ul>
                    </div> &nbsp
					<div class="btn-group">
					<a href="javascript:war()">
					<button type="button" style="background:transparent; border:none; color:transparent;">
					<i class="fa fa-file-text fa-2x text-info"></i>
					</button>
					</a>
                    </div>
				</div><!-- /.box-body -->
				  </div>
				  </div>
				  </div>
				 </section>
    
  </body>
  <script>
	 $(document).ready(function () {
                
                $('#doe1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doe').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doel1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doel').datepicker({
                    format: "yyyy-mm-dd"
                });  
                $('#doew1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doew').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doed1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#doed').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#does1').datepicker({
                    format: "yyyy-mm-dd"
                });  
				$('#does').datepicker({
                    format: "yyyy-mm-dd"
                });  
            });
	</script>
	<script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>
</html>
