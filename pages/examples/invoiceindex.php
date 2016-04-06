<?php
require('../../sales_db.php');
?>
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
	<style>.disabled {
   pointer-events: none;
   cursor: default;
   color:black;
}</style>
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
              <!-- Messages: style can be found in dropdown.less-->
              
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
                <li><a href="../../leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="../forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="../forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li class="active"><a href="invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="../../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="../forms/amc_delete.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="../forms/appdelete.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="../forms/ser_delete.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
				<li><a href="../forms/ser_invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="../forms/report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            
            <li class="treeview">
              <a href="../forms/post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
			  <a href="../calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
                <a href="../forms/mailbox.php">
                <i class="fa fa-envelope-o"></i> <span>Mailbox</span>
               </a>
            </li>  			
        </section>
        <!-- /.sidebar -->
      </aside>
	  
     
      <!-- Left side column. contains the logo and sidebar -->
     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
	  
	   <section class="content-header">
          <h1>
            Invoice details
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Invoice Details</li>
          </ol>
        </section>
		
		
<br>
<section class="content">
<div class="row">
<div class="col-sm-12">
 <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Pre invoice for Advance paid customers</h3>
                </div><!-- /.box-header -->
                <!-- form start enquiry-->
                  <div class="box-body">
<form method="post">
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Enquiry No</th>
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;" aria-label="Browser: activate to sort column ascending">Customer Name</th>

</tr>
</thead>
<tbody>
						<?php
						$query=mysql_query("select * from opp_details where MOP='Pay advance'");
						while($row=mysql_fetch_assoc($query))
						{
						$query11=mysql_query("SELECT * FROM downpayment WHERE Enq_id LIKE '%".$row['Enq_id']."%'");
						$row11=mysql_fetch_assoc($query11);
					    if ($row11 == NULL) {
						?>
						<tr>
						<td><a href="../../viewpmt.php?pmt=<?php echo $row['Enq_id'] ?>" class="disabled"><?php echo $row['Enq_id']; ?></a></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td>
							<a href="../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>" id="dwn_pmt" >Down Payment</a>
							<!--<button onclick="location.href='../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>'" type="submit" id="dwn_pmt">Down payment</button>-->
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../cancelpay.php?cancel=<?php echo $row['Enq_id'] ?>" class="disabled">Cancel Payment</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../invoicedetails.php?detail=<?php echo $row['Enq_id'] ?>" class="disabled">Add invoice</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['Enq_id'] ?>" class="disabled">View invoice</a>
						</td>
						
						<?php 
						$query11=mysql_query("SELECT * FROM cancelpay WHERE Enq_id LIKE '%".$row['Enq_id']."%'");
						$row11=mysql_fetch_assoc($query11);
					    if ($row11 != NULL) { ?>
						<td>
					     <button type="submit" name="delete" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                        </td>	
						<?php 
if(isset($_POST['delete']))
{
$res1=mysql_query("SELECT `name` FROM `upload` WHERE Enq_id='".$row['Enq_id']."'");
$rows=mysql_fetch_array($res1);
unlink("../forms/file/".$rows['name']);
$del=mysql_query("DELETE FROM opp_details 
WHERE Enq_id='".$row['Enq_id']."'");
$del1=mysql_query("DELETE FROM testdrive 
WHERE Enq_id='".$row['Enq_id']."'");
$del2=mysql_query("DELETE FROM vehicle 
WHERE Enq_id='".$row['Enq_id']."'");
$del3=mysql_query("DELETE FROM upload 
WHERE Enq_id='".$row['Enq_id']."'");
if($del)
	{
		header("location:invoiceindex.php");
	}
}}
						}
						else{
						$query111=mysql_query("SELECT * FROM `invoice_details` WHERE `Enq_id` LIKE '%".$row['Enq_id']."%'");
						$row111=mysql_fetch_assoc($query111);
					    if ($row111 != NULL) { 
							
						?>
						</tr>
						<tr>
						<td><a href="../../viewpmt.php?pmt=<?php echo $row['Enq_id'] ?>" ><?php echo $row['Enq_id']; ?></a></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td>
							<a href="../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>" id="dwn_pmt" class="disabled">Down Payment</a>
							<!--<button onclick="location.href='../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>'" type="submit" id="dwn_pmt">Down payment</button>-->
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../cancelpay.php?cancel=<?php echo $row['Enq_id'] ?>" >Cancel Payment</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../invoicedetails.php?detail=<?php echo $row['Enq_id'] ?>" class="disabled">Add invoice</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['Enq_id'] ?>">View invoice</a>
						</td>
						</tr>
						<?php 
						}else{?>
						<tr>
						<td><a href="../../viewpmt.php?pmt=<?php echo $row['Enq_id'] ?>" ><?php echo $row['Enq_id']; ?></a></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td>
							<a href="../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>" id="dwn_pmt" class="disabled">Down Payment</a>
							<!--<button onclick="location.href='../../preinvoice.php?pre=<?php echo $row['Enq_id'] ?>'" type="submit" id="dwn_pmt">Down payment</button>-->
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../cancelpay.php?cancel=<?php echo $row['Enq_id'] ?>" >Cancel Payment</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="../../invoicedetails.php?detail=<?php echo $row['Enq_id'] ?>">Add invoice</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['Enq_id'] ?>" class="disabled">View invoice</a>
						</td>
						</tr>
                        <?php 
						}}}?>
						
</tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</section>

<br>
<section class="content">
<div class="row">
<div class="col-sm-12">
 <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Invoice for non advancers</h3>
                </div><!-- /.box-header -->
                <!-- form start enquiry-->
                  <div class="box-body">
	
<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 181px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Enquiry No</th>
<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;" aria-label="Browser: activate to sort column ascending">Customer Name</th>

</tr>
</thead>
<tbody>
						<?php
						$query=mysql_query("SELECT *
FROM `opp_details`
WHERE `MOP` != 'Pay advance'");
						while($row=mysql_fetch_assoc($query))
						{
						$query11=mysql_query("SELECT * FROM invoice_details WHERE Enq_id LIKE '%".$row['Enq_id']."%'");
						$row11=mysql_fetch_assoc($query11);
					    if ($row11!= NULL) {
						?>
						<tr>
						<td><?php echo $row['Enq_id']; ?></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td>
							<a href="../../invoicedetails1.php?detail=<?php echo $row['Enq_id'] ?>" class="disabled">Add invoice</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['Enq_id'] ?>" >View invoice</a>
						</td>
						</tr>
						<?php } 
						else{ ?>
						<tr>
						<td><?php echo $row['Enq_id']; ?></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td>
							<a href="../../invoicedetails1.php?detail=<?php echo $row['Enq_id'] ?>">Add invoice</a>
							&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
							<a href="viewinvoice.php?view=<?php echo $row['Enq_id'] ?>" class="disabled">View invoice</a>
						</td>
						</tr>
						<?php }
						
						} ?>
						
						
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
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
	      <script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>
  </body>
</html>
