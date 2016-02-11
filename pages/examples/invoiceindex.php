<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("invoice",$con);

if(isset($_GET['did']))
{
	$sql=mysql_query("delete from invoice_details where invoice_no='".$_GET['did']."' ");
}

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aadhi Maruthi | Invoice</title>
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
        <a style="background-color: rgb(204, 238, 255);" href="index.php" class="logo">
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
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                 </a>
				 </li>
                 <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                </a>
				</li>
               <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                </a>
				</li>
               </ul>
          </div>
        </nav>
      </header>
	  
	  <!-- Left side column. contains the logo and sidebar -->
	  <aside style="font-family: &quot;Comic Sans MS&quot;,cursive,sans-serif;" class="main-sidebar">
           <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height:auto; padding-bottom:369px">
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
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li class="active"><a href="../../leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="../forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
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
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.php">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="index.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
                <li><a href="index.php"><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="index.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#index.php">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="../forms/post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
              <a href="index.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="index.php">
                <i class="fa fa-phone"></i> <span>Alerts</span>
               </a>
            </li> 
<li class="treeview">
              <a href="logout.php">
                <i class="fa fa-circle-o-notch"></i>
                <span>Logout</span>
              </a>
              </li> 			
        </section>
        <!-- /.sidebar -->
      </aside>
	  
	  
      </div>
      <!-- Left side column. contains the logo and sidebar -->
     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  
	   <section class="content-header">
          <h1>
            Invoice details
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Invoice Details</li>
          </ol>
        </section>
		
		
		<div class="box">
<div class="box-header">
<h3 class="box-title"></h3>
</div>


<div class="box-body">
<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
<div class="row">
<div class="col-sm-6">
<div id="example1_length" class="dataTables_length">
     <label>Show 
	 
	 <select class="form-control input-sm" name="example1_length" aria-controls="example1">
	   <option value="10">10</option>
	   <option value="25">25</option>
	   <option value="50">50</option>
	   <option value="100">100</option>
	   </select>
	    entries</label>
 
</div>
</div>
<!--<div class="box-header">-->
      <button type="button" class="btn btn-primary" name="insert" onClick="location.href='../../invoicedetails.php'"  value="Add Entry">Add Entry</button>
                <!-- </div>-->
				  </div>
<div class="col-sm-6">

</div>
</div>
<div class="row">
<div class="col-sm-12">
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Invoice No</th>
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;" aria-label="Browser: activate to sort column ascending">Customer Name</th>

</tr>
</thead>

 <?php
						$query=mysql_query("select * from invoice_details");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['invoice_no']; ?></td>
						<td><?php echo $row['custname']; ?></td>
							
						<td class=back>
							<a href="../../editinvoice.php?edit=<?php echo $row['invoice_no']; ?>">Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['invoice_no']; ?>">View</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="genpdf.php?pdf=<?php echo $row['invoice_no']; ?>">Generate PDF</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="invoiceindex.php?did=<?php echo $row['invoice_no']; ?>">Delete</a>&nbsp;&nbsp;&nbsp;&nbsp;
						</td> 	
						
						
						
						<?php } ?>
<tbody>


</tbody>
<tfoot>
<tr>
<th rowspan="1" colspan="1">Invoice No</th>
<th rowspan="1" colspan="1">Customer Name</th>

</tr>
</tfoot>
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
</div>

</div>
</section>
</div>
</div>
<footer class="main-footer">
<div class="pull-right hidden-xs">
<b>Version</b>
2.3.0
</div>
<strong>
Copyright © 2015-2016-2015
Aadhi Maruthi
.
</strong>
All rights reserved.
</footer>
<aside class="control-sidebar control-sidebar-dark">
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
<li class="active">
<a data-toggle="tab" href="#control-sidebar-theme-demo-options-tab">
<i class="fa fa-wrench"></i>
</a>
</li>
<li>
<a data-toggle="tab" href="#control-sidebar-home-tab">
<i class="fa fa-home"></i>
</a>
</li>
<li>
<a data-toggle="tab" href="#control-sidebar-settings-tab">
<i class="fa fa-gears"></i>
</a>
</li>
</ul>
<div class="tab-content">
<div id="control-sidebar-home-tab" class="tab-pane">
<h3 class="control-sidebar-heading">Recent Activity</h3>
<ul class="control-sidebar-menu">
<h3 class="control-sidebar-heading">Tasks Progress</h3>
<ul class="control-sidebar-menu">
</div>
<div id="control-sidebar-theme-demo-options-tab" class="tab-pane active">
<div id="control-sidebar-stats-tab" class="tab-pane">Stats Tab Content</div>
<div id="control-sidebar-settings-tab" class="tab-pane">
</div>
</aside>
<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
</div>
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js">
<script src="../../bootstrap/js/bootstrap.min.js">
<script src="../../plugins/datatables/jquery.dataTables.min.js">
<script src="../../plugins/datatables/dataTables.bootstrap.min.js">
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js">
<script src="../../plugins/fastclick/fastclick.min.js">
<script src="../../dist/js/app.min.js">
<script src="../../dist/js/demo.js">
<script>
		
         <br></br>
        <!-- Content Header (Page header) -->
        <!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 Aadhi Maruthi</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
       
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

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
  </body>
</html>
