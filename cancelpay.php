<?php

include('mails/class.smtp.php');
include('mails/class.phpmailer.php');

require('sales_db.php');
$sql=mysql_query("select * from downpayment where Enq_id='".$_GET['cancel']."'");
$row=mysql_fetch_assoc($sql);

error_reporting(0);
if(isset($_POST['submit']))
{
$query=mysql_query("insert into cancelpay(Enq_id,Cus_id,Book_id,Cus_name,Res_addr,Pincode,Res_phone,Email,category,subcategory,quant,unit_price,app_date,deliv_date,price,advance,balance,status) values ('".$_POST['Enq_id']."','".$_POST['Cus_id']."','".$_POST['Book_id']."','".$_POST['Cus_name']."','".$_POST['Res_addr']."','".$_POST['Pincode']."','".$_POST['Res_phone']."','".$_POST['Email']."','".$_POST['category']."','".$_POST['subcategory']."','".$_POST['quant']."','".$_POST['unit_price']."','".$_POST['app_date']."','".$_POST['deliv_date']."','".$_POST['price']."','".$_POST['advance']."','".$_POST['balance']."','".$_POST['status']."')");
$query1=mysql_query("DELETE FROM `downpayment` WHERE `Enq_id`='".$_GET['cancel']."'");
$sql1=mysql_query("select * from downpayment where Enq_id='".$_GET['cancel']."'");
$row1=mysql_fetch_assoc($sql1);

{
		$contents="";
		$foot="";
		$title ='<h3 align="center"><font color="#063998"> Cancellation against payment at AADHI MARUTHI</font></h3>';
		
		$contents .='Dear <strong style="font-size:16px">'.$row1['Cus_name'].',</strong><br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You have enquired about the '.$row1['subcategory'].' model at 
					<strong style="font-size:18px;color:#00008B">Aadhi</strong>
					<strong style="font-size:18px;color:#FF0000"> Maruthi</strong> , Sivanandhapuram.
					 The price of the car is <strong style="font-size:14px">Rs.'.$row1['price'].'</strong> and you have paid an advance of 
					 <strong style="font-size:14px">Rs.'.$row1['advance'].'</strong>.<br>
					 Now, you have cancelled your payment against your booking for the '.$row1['subcategory'].' model.<br>
					 We regret for your cancellation and kindly inform you that you may contact our showroom for any further purchase. 
					 <br>
					 For any enquiry please contact our showroom at <strong style="font-size:18px;color:#00008B">0422-1234567</strong><br><br>
					 Thanks for visiting our showroom.<br><br><br>
					
					';
					
					$foot .='<strong style="font-size:22px;color:#00008B">Aadhi</strong>
					<strong style="font-size:22px;color:#FF0000"> Maruthi</strong>';

		
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->Host = "10.100.1.209";  
		$mail->From = "mahalakshmi.s2012@kgkite.ac.in";
		$mail->FromName = 'Aadhi Maruthi';		
		//$mail->AddAddress($to_email);
		$mail->AddAddress($row['Email']);				
		$mail->IsHTML(true);    
		$mail->Subject = "Cancellation at Aadhi Maruthi";
		$mail->Body = $title.$contents.$foot;;
		//$mail->WordWrap = 50;
	
			if(!$mail->Send())
			{
			   echo 'Message was not sent.';
			
			}
			else
			{
			  echo 'Message has been sent.';
			  header("location:pages/examples/invoiceindex.php");
			
			} 
			
			$contents .="";
	}

//if($query1)
{
//header("location:pages/examples/invoiceindex.php");
}
}
?>


<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
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
    <title>Adhi Maruti CRM</title>
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
    <!-- HTML--5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
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
					  <a href="pages/examples/login.php">Sign out</a>
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
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Pre-Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="pages/forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li><a href="pages/forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li class="active"><a href="pages/examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
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

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		
			 
		<div class="col-xs-3">
	
           <!-- <a href="pages/examples/invoiceindex.php"><h3><i class="fa fa-reply"></i></h3></a>--> </div>
			<h3>Invoice details</h3>
            
          
		  
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Invoice Details</li>
          </ol>
        </section>
		
         
        <!-- form -->
		<div class="box box-primary">
		         
                 <div class="box-header with-border">
                  
               <!-- /.box-header -->
		<form role="form" method="post"  id="formname" name="formname">
			
              
				   <div class="box-body">
				  <div class="col-xs-3">
				 
				 
				  <div class="form-group">
				  <label>Enquiry_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Enq_id" value="<?php echo $row['Enq_id'] ?>" required>
				  
                   <!--<a class="btn btn-primary" name="submit" value="submit" href="preinvoice.php?search=<?php echo $row['enquire'] ?>">Search</a>-->
				  </div>
				  
				  <div class="form-group">
				  <label>Customer_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Cus_id" value="<?php echo $row['Cus_id'] ?>" required>
				  </div>
				  
				  <div class="form-group">
				  <label>Booking_No</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Book_id" value="<?php echo $row['Book_id'] ?>" required>
				  </div>
				  </div>
				    <div class="col-xs-3">
				  
				   <div class="form-group">
                      <label for="mail">Customer_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Cus_name" value="<?php echo $row['Cus_name']?>" required>
                    </div>
				   
					
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="Res_addr" required><?php echo $row['Res_addr'] ?></textarea>
                    </div>
				  
				  <div class="form-group">
                      <label for="mail">Pincode</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Pincode" value="<?php echo $row['Pincode']?>" required>
                    </div>
				  
				  <div class="form-group">
				  <label>Phone</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Res_phone" value="<?php echo $row['Res_phone'] ?>" required>
				  </div>
				  <div class="form-group">
				  <label>Email</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="Email" value="<?php echo $row['Email'] ?>" required>
				  </div>
				  </div>
				  
				  <div class="col-xs-3">		   
				   
<div class="form-group">		   
 <label>Model</label>
 <input type="text" style="width:70%" class="form-control input-sm"  name="category" value="<?php echo $row['category']?>" required>
</div>
<div class="form-group">
<label>Variant</label>
<input type="text" style="width:70%" class="form-control input-sm"  name="subcategory" value="<?php echo $row['subcategory']?>" required>
</div>
				
				   <div class="form-group">
				   <label>Date of booking</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="app_date" value="<?php echo $row['app_date']?>" required>
				   </div>
			
					<div class="form-group">
				   <label>Date of Delivery</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="deliv_date" value=" <?php echo $row['deliv_date'] ?>" required>
				   </div>
				   
				   <div class="form-group">
				   <label>Status</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="status" value="cancelled"  required>
				   </div>
				</div>
				
				  <div class="col-xs-3">
				
				 <div class="form-group">
				   <label>Quantity</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="quant" value="<?php echo $row['quant'] ?>"  required>
				   </div>

				   <div class="form-group">
				   <label>Unit Price</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="unit_price" value="<?php echo $row['unit_price'] ?>" required>
				   </div>
				   
				    
				   
				   <div class="form-group">
				   <label>Price</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="price" value="<?php echo $row['price'] ?>" required>
				   </div>
				   
				   <div class="form-group">
				   <label>Advance payment</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="advance" value="<?php echo $row['advance'] ?>" required>
				   </div>
				   
				   <div class="form-group">
				   <label>Balance Amount</label>
				   <input type="text" style="width:70%" class="form-control input-sm"  name="balance" value="nil" required>
				   </div>
				   
				    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
				        
                  </div>
						 </div>	
						 </div>
						 </div>
											
				  <!-- /.box-body -->
                  
                 
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
  <script>
	function eraseText() {
    document.getElementById("q").value = "";
}
	</script>	
  </body>
</html>
