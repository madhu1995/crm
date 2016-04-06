<?php
require('../../sales_db.php');
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AadhiMaruti | Service Details</title>
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
     <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <script src="jquery.validate.js"></script>
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
					  <a href="../examples/login.php">
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
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu" class="treeview-active">
                <li><a href="amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
                <li class="active"><a href="ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
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
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Service Invoice
            <small>(service)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Service Invoice</li>
          </ol>
        </section>

        <!-- Main content -->
        
		<section class="content">
		  <div class="box">
<div class="box-header">
<h3 class="box-title"></h3>
</div>


<div class="box-body">
<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

<div class="col-sm-6">

</div>
</div>
<div class="row">
<div class="col-sm-12">
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Customer Id</th>
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;" aria-label="Browser: activate to sort column ascending">Customer Name</th>

</tr>
</thead>

    <?php
		$query=mysql_query("select * from ser_detail");
		while($row=mysql_fetch_assoc($query))
		{
	?>
	    	<tr>
			<td><?php echo $row['cust_id']; ?></td>
			<td><?php echo $row['cust_name']; ?></td>
			<td class=back>
		     <a href="ser_invoiceprint.php?iid=<?php echo $row['cust_id']; ?>" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> </a>&nbsp;&nbsp;&nbsp;&nbsp;
			 <a class="btn btn-primary" href="ser_invoice2.php?iid=<?php echo $row['cust_id']; ?>" ><i class="fa fa-files-o"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
			 <a class="btn btn-primary" href="dompdf/ser_pdf1.php?iid=<?php echo $row['cust_id']; ?>"><i class="fa fa-file-pdf-o"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <a class="btn btn-primary" href="?iid=<?php echo $row['cust_id']; ?>"><i class="fa fa-envelope-o"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;-->
			</td> 	
			</tr>			
						
	<?php } ?>


</table>
</div>
</div>
<div class="row">
<!--<div class="col-sm-5">-->
<!--<div id="example1_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>-->
<!--</div>-->
<div class="col-sm-7">
<div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
<ul class="pagination">
<li id="example1_previous" class="paginate_button previous disabled">
<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
</li>
<li class="paginate_button active">
<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
</li>
<li class="paginate_button ">
<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
</li>
<li class="paginate_button ">
<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
</li>
<li class="paginate_button ">
<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
</li>
<li class="paginate_button ">
<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
</li>
<li class="paginate_button ">
<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
</li>
<li id="example1_next" class="paginate_button next">
<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
        </section><!-- /.content -->
		
		<!--Edit -->
     
 </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
	
	
	
  </body>
</html>
