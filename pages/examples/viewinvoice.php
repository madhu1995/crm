<?php
require('../../sales_db.php');
$sql=mysql_query("select * from invoice_details where Enq_id='".$_GET['view']."' ");
$row=mysql_fetch_assoc($sql);
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
					  <a href="login.php">Sign out</a>
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
              <a href="mailbox.php">
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
            Invoice 
            <small><?php echo $row['Invoice_id']; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Invoice</li>
          </ol>
        </section>

        <div class="pad margin no-print">
          <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing.
          </div>
        </div>
		
        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Aadhi Maruthi
                <small class="pull-right"><b>Date&nbsp;&nbsp;</b><?php echo $row['inv_date']; ?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Aadhi Maruthi</strong><br>
                6/79,Sivanandhapuram<br>
                Coimnatore-641017<br>
                Phone: 0422-2457652<br>
                Email: info@aadhimaruthi.com
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong><?php echo $row['Cus_name']; ?></strong><br>
				<?php echo $row['title']; ?>&nbsp;&nbsp;<?php echo $row['Father_name']; ?><br>
               <?php echo $row['Res_addr']; ?><br>
			    <b>Pin Code&nbsp;&nbsp;</b><?php echo $row['Pincode']; ?><br>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice No&nbsp;&nbsp;</b><?php echo $row['Invoice_id']; ?><br>
             
              <b>Booking ID&nbsp;&nbsp;</b> <?php echo $row['Book_id']; ?><br>
			  <b>Delivery At&nbsp;&nbsp;</b><?php echo $row['Deliv_at']; ?><br>
              
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Particulars</th>
                    <th>Quantity</th>
                    <th>Unit Price Rs.</th>
                    <th>Amount</th>
                  </tr>
				  <tr>
						<td><?php echo $row['particulars']; ?>
						<td><?php echo $row['quant']; ?>
						<td><?php echo $row['unit_price']; ?>
						<td><?php echo $row['price']; ?>
				  </tr>
				  </body>
				  </table>
				  <table class="table">
				  <tbody>
				  <tr>
				  <td align="right">Unit Conecssion</td>
				  <td><?php echo $row['unit_concess']; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Total Conecssion</td>
				  <td><?php echo $row['tot_concess']; ?></td>
				  </tr>
				  <tr>
				  <td align="right">Price after concession</td>
				  <td><?php echo $row['af_concess']; ?></td>
				  </tr> 
				   <tr>
				  <td align="right">Total Tax</td>
				  <td><?php echo $row['tot_tax']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Gross Total</td>
				  <td><?php echo $row['grs_tot']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Adjustment Amount</td>
				  <td><?php echo $row['adjust']; ?></td>
				  </tr> 
				  <tr>
				  <td align="right">Grand Total</td>
				  <td><?php echo $row['grand_tot']; ?></td>
				  </tr> 
                </tbody>
              </table>
			   <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Color</th>
					<th></th>
                    <th>Engine No.</th>
					<th></th>
                    <th>Chassis No.</th>
                  </tr>
				  
				  <tr>
						<td><?php echo $row['color']; ?></td>
						<td></td>
						<td><?php echo $row['eng_no']; ?></td>
						<td></td>
						<td><?php echo $row['cha_no']; ?></td>
				  </tr>
				  </tbody>
				  </table>
				  <strong>This invoice includes the following taxes</strong>
				   <table class="table table-striped">
                <tbody>
                  <tr class="info">
                    <th>Name of the Tax</th>
                    <th>Tax Rate</th>
                    <th>Tax Amount</th>
                  </tr>
				  <tr>
						<td>VAT</td>
						<td>14.5 %</td>
						<td><?php echo $row['tot_tax']; ?></td>
				  </tr>
				  </tbody>
				  </table>
					<h3 align="center">Terms And Conditions</h3>
				  <table>
				     <tbody>
						<tr>
							<td>1)</td>
							<td>Above prices are current Ex-Showroom prices.Buyers will have to pay prices prevailing at the time of delivery.<br></td>
						</tr>
						<tr>
							<td>2)</td>
							<td>Optionals, accessories, insurance, registration, taxes, octroi, other levies etc. will be charged as applicable.<br></td>
						</tr>
						<tr>
							<td>3)</td>
							<td>Prices are for current specifications and are subject to change without notice.<br></td>
						</tr>
						<tr>
							<td>4)</td>
							<td>Prices and additional charges as above will have to be paid completely, to conclude the sales.<br></td>
						</tr>
						<tr>
							<td>5)</td>
							<td>Payments by Cheques/Demand Drafts may be in favour of AADHI MARUTHI payable at COIMBATORE.<br></td>
						</tr>
						<tr>
							<td>6)</td>
							<td>Acceptance of advance / deposits by the seller is merely an indication of an intention to sell and does not result into a contract of sale.<br></td>
							
						</tr>
						<tr>
							<td>7)</td>
							<td>All disputes arising between the parties hereto shall be referred to arbitration according to the arbitration laws of the country.<br></td>
						</tr>
						<tr>
							<td>8)</td>
							<td>Only the courts of COIMBATORE shall have jurisdiction in any proceedings relating to this contract. <br></td>
						</tr>
						
					
					 </tbody>
				  </table>
				<br><br><br><br>
				<h4 align="right">For Aadhi Maruthi</h4>
				<br>
				
							<!--<p>_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________-->
							<p>_____________________</p>
							<p align="right">______________________</p>
						
            </div><!-- /.col -->
          </div><!-- /.row -->

       

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="invoiceprint.php?print=<?php echo $row['Invoice_id']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
             <!-- <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>-->
			 <a href="dompdf/genpdf.php?pdf=<?php echo $row['Invoice_id'] ?>" target="_blank" class="btn btn-primary pull-right"><i class="fa fa-download"></i>Generate PDF</a>
              <!--<button class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="dompdf/genpdf.php?pdf=<?php echo $row['Invoice_id']; ?>"><i class="fa fa-download"></i> Generate PDF</button>-->
               <a href="../../mails/sendinvoice.php?send=<?php echo $row['Invoice_id']; ?>" class="btn btn-primary pull-right" style="margin-right: 5px;" name="submit"><i class="fa fa-envelope-o"></i> Send email</a>
		   </div>
          </div>
        </section><!-- /.content -->
        <div class="clearfix"></div>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer no-print">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 Aadhi Maruthi</strong> All rights reserved.
      </footer>

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
	  <script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>	
  </body>
</html>
