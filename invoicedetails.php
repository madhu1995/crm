
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("invoice",$con);
error_reporting(0);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into invoice_details(enq_no,custname,title,fathername,invoice_no,booking_no ,doe,doi,addr,pin_code,delivery,particulars,qty,up,amt,unit_concess,tot_concess,af_concess,tot_tax,grs_tot,adjust,grand_tot,color,eng_no,cha_no) VALUES ('".$_POST['enq_no']."','".$_POST['custname']."','".$_POST['title']."','".$_POST['fathername']."','".$_POST['invoice_no']."','".$_POST['booking_no']."','".$_POST['doe']."','".$_POST['doi']."','".$_POST['addr']."','".$_POST['pin_code']."','".$_POST['delivery']."','".$_POST['particulars']."','".$_POST['qty']."','".$_POST['up']."','".$_POST['amt']."','".$_POST['unit_concess']."','".$_POST['tot_concess']."','".$_POST['af_concess']."','".$_POST['tot_tax']."','".$_POST['grs_tot']."','".$_POST['adjust']."','".$_POST['grand_tot']."','".$_POST['color']."','".$_POST['eng_no']."','".$_POST['cha_no']."')");
#echo "insert into lead_details(custname,doe,phone,addr,t_d ,email,optionsRadios,city,salesperson,model,src,mop,optionsRadios1,optionsRadios2,follow_date,toc,next_foll,enquire) VALUES ('".$_POST['custname']."','".$_POST['doe']."','".$_POST['phone']."','".$_POST['addr']."','".$_POST['t_d']."','".$_POST['email']."','".$_POST['optionsRadios']."','".$_POST['city']."','".$_POST['salesperson']."','".$_POST['model']."','".$_POST['src']."','".$_POST['mop']."','".$_POST['optionsRadios1']."','".$_POST['optionsRadios2']."','".$_POST['follow_date']."','".$_POST['toc']."','".$_POST['next_foll']."','".$_POST['enquire']."')";
#echo "value inserted";
if($query)
{
 echo "updated!!!!!";
 header("location:invoiceindex.php");
 
}
}
?>


<html>
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adhi Maruti CRM</title>
	
	
	<script language="javascript">
                function addNumbers()
                {
                        var val1 = (document.getElementById("af_concess").value);
                        var val2 = (document.getElementById("tot_tax").value);
                        var ansD = document.getElementById("grs_tot");
                        ansD.value = val1 + val2;

                }
        </script>
	
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=100, user-scalable=no" name="viewport">
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
	<!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
     <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.css">
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
	  </div>
      <!-- Left side column. contains the logo and sidebar -->
	  <aside style="font-family: &quot;Comic Sans MS&quot;,cursive,sans-serif;" class="main-sidebar">
           <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height:auto; padding-bottom:300px">
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
                <li class="active"><a href="leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
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
				<li><a href="pages/examples/invoice.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
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
              <a href="pages/forms/post.php">
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
              <a href="pages/forms/logout.php">
                <i class="fa fa-circle-o-notch"></i>
                <span>Logout</span>
              </a>
              </li> 			
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		
			 
		<div class="col-xs-3">
	
            <a href="pages/examples/invoiceindex.php"><h3><i class="fa fa-reply"></i></h3></a> </div>
			<h3>Invoice details</h3>
            
          
		  
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Invoice Details</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		         
                 <div class="box-header with-border">
                  
               <!-- /.box-header -->
		<form role="form" method="post" onSubmit="false" oninput=" amt.value=qty.value*up.value; tot_concess.value=qty.value*unit_concess.value; af_concess.value=amt.value-tot_concess.value; tot_tax.value=(14.50*amt.value)/100; grs_tot.value=parseInt(af_concess.value)+parseInt(tot_tax.value); grand_tot.value=grs_tot.value-adjust.value;">
	
              
				   <div class="box-body">
				  <div class="col-xs-3">
				 
				  <div class="form-group">
				  <label>Enquiry_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="enq_no" placeholder="Enter Enquiry no.." required>
				  </div>
				  
				   <div class="form-group">
                      <label for="mail">Customer_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="custname" placeholder="Enter name" required>
                    </div>
				   
				   <div class="form-group">
                      <label for="mail">Title</label>
					   <select class="form-control" style="width:70%" name="title" required>
					   <option value='S/O'<?php if('S/O'==$row['title']){ ?>selected="selected"<?php } ?>>S/O</option>
					   <option value='D/O'<?php if('D/O'==$row['title']){ ?>selected="selected"<?php } ?>>D/O</option>
					   </select>
                    </div>
					
					 <div class="form-group">
                      <label for="mail">Father_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="fathername" placeholder="Enter name" required>
                    </div>
				  
				  <div class="form-group">
				  <label>Invoice_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="invoice_no" placeholder="Enter Invoice no.." required>
				  </div>
				  <div class="form-group">
				  <label>Booking_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="booking_no" placeholder="Enter Booking no.." required>
				  </div>
				  
				   
				        
                  </div>
				  
				  <div class="col-xs-3">
				 
				   <div class="form-group">
                    <label>Date of Enquiry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doe" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
				   <div class="form-group">
                    <label>Date of Invoice Entry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doi" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
				   <div class="form-group">
				  <label>Time Picker</label>
				   <input type="text" class="form-control" name="tp">
				   </div>
					
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="addr" placeholder="Enter ..."></textarea>
                    </div>
					
					<!--<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="city" required>
					    <option>Select a city</option>
                        <option>Chennai</option>
                        <option>Coimbatore</option>
                        <option>Trichy</option>
                        <option>Tirupur</option>
                        <option>Others</option>
                      </select>
					  </div>-->
					  <div class="form-group">
                      <label>Pincode</label>
                      <input type="text" style="width:70%" class="form-control input-sm"  name="pin_code" placeholder="Enter pincode" required>
                    </div>
				  
				  
				   
				  <div class="form-group">
				  <label>Delivery At</label>
					  <select class="form-control" style="width:70%" name="delivery" required>
					    <option>Select Place</option>
                        <option>Showroom</option>
                        <option>At customer place</option>
						</select>
				  </div>
				  </div>
				  
				
				   <div class="col-xs-3">
				   <div class="form-group">
				   <label>Particulars</label>
				   <textarea class="form-control input-sm" style="width:70%" rows="3" name="particulars" placeholder="Enter ..." required></textarea>
                     </div>
					 
					 <div class="form-group">
				   <label>Quantity</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="qty" placeholder="Enter quantity" required>
				   </div>
				   
				   
				   
				   <div class="form-group">
				   <label>Unit Price Rs.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="up" placeholder="Enter price..." required>
				   </div>
				   
				    <div class="form-group">
				   <label>Amount Rs.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="amt" >
				   </div>
				   
				   <div class="form-group">
				   <label>Unit Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="unit_concess" placeholder="Enter concession...">
				   </div>
				   
				   <div class="form-group">
				   <label>Total Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="tot_concess">
				   </div>
					 
					 </div>
					
				
                    <div class="col-xs-3">	

					
				   
				   <div class="form-group">
				   <label>Price after Concession</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="af_concess">
				   </div>
				   
				   <div class="form-group">
				   <label>Total Tax(14.50%)</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="tot_tax">
				   </div>
				   
				   <div class="form-group">
				   <label>Gross Total</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="grs_tot" >
				   </div>
				   
				   <div class="form-group">
				   <label>Adjustment</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="adjust">
				   </div>
				   
				   <div class="form-group">
				   <label>Grand Total</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="grand_tot">
				   </div>
						
                    </div>
						 </div>	
						 </div>
						 </div>
						 <div class="box box-primary">
						 
						 <div class="box-header with-border">
					
					<div class="col-xs-3">
					 <div class="form-group">
				  <label>Color</label>
					  <select class="form-control" style="width:70%" name="color">
					    <option>Select Color</option>
                        <option>Porcelain White</option>
                        <option>Copper Red</option>
						<option>Maroon</option>
						<option>Metallic Silver</option>
						<option>Coal Black</option>
						</select>
				  </div>
					</div>
					
					
					<div class="col-xs-3">
					<div class="form-group">
				   <label>Engine No.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="eng_no">
				   </div>
					</div>
					
					<div class="col-xs-3">
					<div class="form-group">
				   <label>Chassis No.</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="cha_no">
				   </div>
					</div>
					</div>
					</div>					
				  <!-- /.box-body -->
                  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
                </form>
              </div>
        
      </div><!-- /.content-wrapper -->
      

      

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
	<!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
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
	<script>
      $(function () {
        //Timepicker
        $(".timepicker").timepicker({
          showInputs: true
        });
      });
    </script>
	
	
  </body>
</html>