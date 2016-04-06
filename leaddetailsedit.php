<?php
require('sales_db.php');
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from lead_details where enquire='".$_GET['edi']."' ");
$row=mysql_fetch_assoc($sql);
}
if(isset($_POST['submit']))
{
$custname=$_POST['custname'];
$doe=$_POST['doe'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$t_d=$_POST['t_d'];
$email=$_POST['email'];
$optionsRadios=$_POST['optionsRadios'];
$city=$_POST['city'];
$salesperson=$_POST['salesperson'];
$model=$_POST['model'];
$src=$_POST['src'];
$mop=$_POST['mop'];
$optionsRadios1=$_POST['optionsRadios1'];
$optionsRadios2=$_POST['optionsRadios2'];
$follow_date=$_POST['follow_date'];
$toc=$_POST['toc'];
$next_foll=$_POST['next_foll'];
#$enquire=$_POST['enquire'];
$result=mysql_query("update lead_details SET custname='$custname',doe='$doe',phone='$phone',addr='$addr',t_d='$t_d',email='$email',optionsRadios='$optionsRadios' ,city='$city',salesperson='$salesperson',model='$model',src='$src',mop='$mop',optionsRadios1='$optionsRadios1',optionsRadios2='$optionsRadios2',follow_date='$follow_date',toc='$toc',next_foll='$next_foll' where enquire='".$_GET['edi']."'");
echo "update lead_details SET custname='$custname',doe=$doe,phone='$phone',addr='$addr',t_d='$t_d',email='$email',optionsRadios='$optionsRadios ,city='$city',salesperson='$salesperson',model='$model'src='$src',mop='$mop',optionsRadios1='$optionsRadios1',optionsRadios2='$optionsRadios2',follow_date='$follow_date',toc='$toc',next_foll='$next_foll' where enquire='".$_GET['edi']."'";
if($result)
{
 echo "updated!!!!!";
 header("location:leaddetailsindex.php");
 
}
}
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
				<li><a href="pages/examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
              <!--  <li><a href="index.php"><i class="fa fa-circle-o"></i> Purchase Details</a></li>-->
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
            Enquiry details
            <small>Lead Customers</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Lead Details</li>
          </ol>
        </section>
		
         <br></br>
        <!-- form -->
		<div class="box box-primary">
		         
                 <div class="box-header with-border">
                  <h3 class="box-title">Enquiry Followup</h3>
                </div><!-- /.box-header -->
		     <form role="form" method="post">
	              <input type="hidden" name="edi" value="<?php echo $_GET['edi']; ?>">
                  <div class="box-body">
				  <div class="col-xs-3">
                    <div class="form-group">
						
                      <label for="mail">Customer_Name</label>
					  <input type="text" style="width:70%" class="form-control input-sm"  name="custname" placeholder="Enter name" value="<?php echo $row['custname']; ?>" required>
                    </div>
					 <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" style="width:70%" disabled="" class="form-control input-sm" id="enq_id" name="enquire" value="<?php echo $row['enquire']; ?>" required>
                    </div>
					<div class="form-group">
                    <label>Date of Enquiry</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="doe"  value="<?php echo $row['doe']; ?>" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  
					 <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" style="width:70%" class="form-control input-sm"  placeholder="Enter mobile number" name="phone" value="<?php echo $row['phone']; ?>" required>
                    </div>
					<div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control input-sm" style="width:70%" rows="3" name="addr" placeholder="Enter ..." required><?php echo $row['addr']; ?></textarea>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="t_d" value=""<?php if($row['t_d']=='on') { ?> checked="checked"<?php } ?>  > Test Drive
                      </label>
                    </div>
                  </div>
				   <div class="col-xs-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="email" placeholder="Enter mail" value="<?php echo $row['email']; ?>"required>
                    </div>
					<div class="form-group">
				   <label>Gender</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male"  value=""<?php if($row['optionsRadios']=='Male') { ?> checked="checked"<?php } ?> required>
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female"  value=""<?php if($row['optionsRadios']=='Female') { ?> checked="checked"<?php } ?>  required>
                          Female
                        </label>
                      </div>
                     </div>
					 <div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="city" required>
					    <option>Select a city</option>
                        <option value='Chennai'<?php if('Chennai'==$row['city']){ ?>selected="selected"<?php } ?>>Chennai</option>
                        <option value='Coimbatore'<?php if('Coimbatore'==$row['city']){ ?>selected="selected"<?php } ?>>Coimbatore</option>
                        <option value='Trichy'<?php if('Trichy'==$row['city']){ ?>selected="selected"<?php } ?>>Trichy</option>
                        <option  value='Tirupur'<?php if('Tiruppur'==$row['city']){ ?>selected="selected"<?php } ?>>Tirupur</option>
                        <option value='Others'<?php if('Others'==$row['city']){ ?>selected="selected"<?php } ?> >Others</option>
                      </select>
					  
					  <div class="form-group">
                      <label>SalesPerson</label>
					  <select class="form-control" style="width:70%" name="salesperson" required>
                        <?php 
					$query = "SELECT * FROM salesperson"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['name'];?>" <?php if($line['name']==$row['Salesperson']){ ?>selected="selected"<?php } ?>> 
					<?php echo $line['name'];?> </option>   <?php } ?>
					</select>
                    </div>
					<div class="form-group">
                      <label>Model</label>
					  <select class="form-control" style="width:70%" name="model" required>
					    <option>Select a car model</option>
                        <?php 
					$query = "SELECT * FROM carmodel"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['modelname'];?>" <?php if($line['modelname']==$row['model']){ ?>selected="selected"<?php } ?>> 
					<?php echo $line['modelname'];?> </option>   <?php } ?>
					 </select>
                    </div>
                    </div>
					</div>	
                    <div class="col-xs-3">
                     <div class="form-group">
                      <label>Source</label>
					  <select class="form-control" style="width:70%" name="src" required>
					    <option>Select source</option>
					    <option value='Walk in'<?php if('Walk in'==$row['src']){ ?>selected="selected"<?php } ?>>Walk in</option>
                        <option value='Reference'<?php if('Reference'==$row['src']){ ?>selected="selected"<?php } ?>>Reference</option>
                        <option value='Incoming telephone'<?php if('Incoming telephone'==$row['src']){ ?>selected="selected"<?php } ?>>Incoming telephone</option>
                        <option value='Field visit/cold call'<?php if('Field visit/cold call'==$row['src']){ ?>selected="selected"<?php } ?>>Field visit/cold call</option>
                        <option value='Call center'<?php if('Call center'==$row['src']){ ?>selected="selected"<?php } ?>>Call center</option>
                        <option value='Event/Advertisement'<?php if('Event/Advertisement'==$row['src']){ ?>selected="selected"<?php } ?>>Event/Advertisement</option>
                      </select>
                    </div>
					<div class="form-group">
                      <label>Mode of payment</label>
					  <select class="form-control" style="width:70%" name="mop" required>
					  <option>Select payment mode</option>
					    <option value='Cash'<?php if('Cash'==$row['mop']){ ?>selected="selected"<?php } ?>>Cash</option>
                        <option value='own finance'<?php if('own finance'==$row['mop']){ ?>selected="selected"<?php } ?>>own finance</option>
                        <option value='Maruti finance'<?php if('Maruti finance'==$row['mop']){ ?>selected="selected"<?php } ?>>Maruti finance</option>
                      </select>
                    </div>
					<div class="form-group">
				   <label>Status</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="hot" value="hot"  value=""<?php if($row['optionsRadios1']=='hot') { ?> checked="checked"<?php } ?> required>
                          hot
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios1" id="cold" value="cold"  value=""<?php if($row['optionsRadios1']=='cold') { ?> checked="checked"<?php } ?> required>
                          cold
                        </label>
                      </div>
                     </div>
					 <div class="form-group">
				   <label>Remarks</label><div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios2" id="b_r" value="Booked"  value=""<?php if($row['optionsRadios2']=='Booked') { ?> checked="checked"<?php } ?> required>
                          Booked
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios2" id="c_r" value="Closed"  value=""<?php if($row['optionsRadios2']=='Closed') { ?> checked="checked"<?php } ?> required>
                          Closed
                        </label>
                      </div>
                     </div>
                    </div>	
					
					
					
                     <div class="col-xs-3">
					 <div class="form-group">
                    <label>Followup Date</label>
					<div class="input-group date" data-provide="datepicker" style="width:70%">
                     <input type="text" class="form-control" name="follow_date" value="<?php echo $row['follow_date']; ?>" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                      </div>
                    <!-- /.input group -->
                  </div>
				  <div class="form-group">
                      <label>Time of call</label>
					  <select class="form-control" style="width:70%" name="toc" >
					    <option value='Morning'<?php if('Morning'==$row['toc']){ ?>selected="selected"<?php } ?>>Morning</option>
                        <option value='Afternoon'<?php if('Afternoon'==$row['toc']){ ?>selected="selected"<?php } ?>>Afternoon</option>
                        <option value='Evening'<?php if('Evening'==$row['toc']){ ?>selected="selected"<?php } ?>>Evening</option>
                      </select>
                    </div>                
                    <div class="form-group">
                      <label>Next Followup</label>
					  <select class="form-control" style="width:70%" name="next_foll">
					    <option value='After 3 days'<?php if('After 3 days'==$row['next_foll']){ ?>selected="selected"<?php } ?>>After 3 days</option>
                        <option value='After 7 days'<?php if('After 7 days'==$row['next_foll']){ ?>selected="selected"<?php } ?>>After 7 days</option>
                        <option value='After 15 days'<?php if('After 15 days'==$row['next_foll']){ ?>selected="selected"<?php } ?>>After 15 days</option>
						<option value='After 21 days'<?php if('After 21 days'==$row['next_foll']){ ?>selected="selected"<?php } ?>>After 21 days</option>
                      </select>
                    </div>
				    
					</div>					 
				  <!-- /.box-body -->
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="submit" onClick="location.href='leaddetailsindex.php">Update</button>
                  </div>
                </form>
              </div>
        
      </div><!-- /.content-wrapper -->
      </div>

      

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
