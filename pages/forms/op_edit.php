<?php
require('../../sales_db.php');
if(isset($_GET[edi]))
{
$sql=mysql_query("select * from opp_details where Enq_id='".$_GET['edi']."' ");
#echo "select * from lead_details where Enq_id='".$_GET['edi']."' ";
$row=mysql_fetch_assoc($sql);
$sqli=mysql_query("select name from upload where Enq_id='".$_GET['edi']."' ");
$rowi=mysql_fetch_assoc($sqli);
}
if(isset($_POST['submit']))
{
$cus_id=$_POST['cus_id'];
$cus_name=$_POST['cus_name'];
$doe=$_POST['doe'];
$salesperson=$_POST['salesperson'];
$res_add=$_POST['res_add'];
$res_ph1=$_POST['res_ph1'];
$res_ph2=$_POST['res_ph2'];
$res_em=$_POST['res_em'];
$res_pin=$_POST['res_pin'];
$dob=$_POST['dob'];
$buyer=$_POST['buyer'];
$pay=$_POST['pay'];
$optionsRadios=$_POST['optionsRadios'];
$com=$_POST['com'];
$t_d=$_POST['t_d'];
$off_name=$_POST['off_name'];
$off_add=$_POST['off_add'];
$off_ph1=$_POST['off_ph1'];
$off_ph2=$_POST['off_ph2'];
$off_em=$_POST['off_em'];
$off_city=$_POST['off_city'];
$off_pin=$_POST['off_pin'];
$rad=$_POST['rad'];
$res_city=$_POST['res_city'];
$res=mysql_query("UPDATE `vehicle` SET `model`='$rad' where Enq_id='".$_GET['edi']."'");
$mres=mysql_query("UPDATE `testdrive` SET `model`='$rad' where Enq_id='".$_GET['edi']."'");
$result=mysql_query(" UPDATE `opp_details` SET `Cus_id`='$cus_id',`Cus_name`='$cus_name',`DOE`='$doe',`Salesperson`='$salesperson',`Res_addr`='$res_add',`Res_phone`='$res_ph1',`Res_phone2`='$res_ph2',`Email`='$res_em',`Pincode`='$res_pin',`DOB`='$dob',`Buyertype`='$buyer',`MOP`='$pay',`Gender`='$optionsRadios',`Commu_to`='$com',`Testdrive`='$t_d',`Off_name`='$off_name',`Off_addr`='$off_add',`Off_ph1`='$off_ph1',`Off_ph2`='$off_ph2',`Off_email`='$off_em',`Off_city`='$off_city',`Off_Pin`='$off_pin',`en_no`='$rad',`Res_city`='$res_city' where Enq_id='".$_GET['edi']."'");
#echo "UPDATE `opp_details` SET `Cus_id`='$cus_id',`Cus_name`='$cus_name',`DOE`='$doe',`Salesperson`='$salesperson',`Res_addr`='$res_add',`Res_phone`='$res_ph1',`Res_phone2`='$res_ph2',`Email`='$res_em',`Pincode`='$res_pin',`DOB`='$dob',`Buyertype`='$buyer',`MOP`='$pay',`Gender`='$optionsRadios',`Commu_to`='$com',`Testdrive`='$t_d',`Off_name`='$off_name',`Off_addr`='$off_add',`Off_ph1`='$off_ph1',`Off_ph2`='$off_ph2',`Off_email`='$off_em',`Off_city`='$off_city',`Off_Pin`='$off_pin',`en_no`='$rad',`Res_city`='$res_city' where Enq_id='".$_GET['edi']."'";
#exit;
if($result)
{

 header("location:op_fetch.php");
 
}
}
?>

<!DOCTYPE html>
<html>
  <head>
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
            <li class=" active treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" class="treeview-active">
                <li  class="active"><a href="oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
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
           </ul>			
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Opportunity details
            <small>(sales)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a href="oppur.php">Opportunity Details</a></li>
			<li class="active">Opportunity Edit</li>
          </ol>
        </section>
		
        <!-- Main content -->
        <section class="content">
		<form role="form" method="post" enctype="multipart/form-data" onsubmit="return selection();">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Enquiry Details</h3>
                </div><!-- /.box-header -->
                <!-- form start enquiry-->
                  <div class="box-body">
				    <div class="form-group">
					    <label>User image</label>
						   <img id="blah" src="file/<?php echo $rowi['name']; ?>" required width="70" height="70" alt="your image"></img>
					 </div>
                    <div class="form-group">
					  <input type="hidden" name="edi" value="<?php echo $_GET['edi']; ?>">
                      <label for="enq">Enquiry_Id</label><input type="text" required id="enq" disabled="" style="width:70%" class="form-control input-sm" name="Enq_id" value="<?php echo $row['Enq_id'];?>">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" required id="cu" style="width:70%" class="form-control input-sm" name="cus_id" value="<?php echo $row['Cus_id'];?>">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label>
					  <input type="text" id="cun" required pattern="[a-zA-Z.\s ]+" title="Name must in alphabets" style="width:70%" class="form-control input-sm" name="cus_name" value="<?php echo $row['Cus_name'];?>">
                    </div>
					<div class="form-group">
                      <label>Date of Enquiry</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%">
                          <input type="text" class="form-control" name="doe" value="<?php echo $row['DOE'];?>" required>
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					 <div class="form-group">
                      <label>SalesPerson</label>
					  <select class="form-control" style="width:70%" name="salesperson" required>
                        <option value="" disabled selected>Select a sales person</option>
                        <?php 
					$query = "SELECT * FROM salesperson"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['name'];?>" <?php if($line['name']==$row['Salesperson']){ ?>selected="selected"<?php } ?>> 
					<?php echo $line['name'];?> </option>   <?php } ?>
					</select>
                    </div>
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
                   <!-- general form elements disabled -->
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
 
function selection()
{    
 var cat = document.getElementById('select').value;    
    if (cat == "office") {
        if (document.getElementById("off_add1").value == "" || document.getElementById("off_name1").value == "" || document.getElementById("off_des11").value == "" || document.getElementById("off_em1").value == "" || document.getElementById("off_phone1").value == "" || document.getElementById("off_phone2").value == "" || document.getElementById("off_city1").value == "" || document.getElementById("offpin1").value == "" || document.getElementById("off_em1").value == "") {
            alert('Occupational details are Mandatory');
            return false;
        }  
    }
    return true;
}
</script>
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Occupation details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <!-- text input -->
					<div class="form-group">
                      <label>Company name</label>
                      <input type="text" pattern="[a-zA-Z.\s ]+" title="Name must in alphabets" style="width:70%" value="<?php echo $row['Off_name'];?>" class="form-control input-sm" id="off-name1" name="off_name"  placeholder="Enter office name">
                    </div>
					<div class="form-group">
                      <label>Designation</label>
                      <input type="text" pattern="[a-zA-Z.\s ]+" title="Designation must have only alphabets" style="width:70%" class="form-control input-sm" id="off_des11" name="off_des" value="<?php echo $row['Off_des11'];?>" >
                    </div>
					<div class="form-group">
                      <label>Office Address</label>
                      <textarea pattern="[A-Za-z0-9./-,]+" title="Provide a valid address" class="form-control input-sm" style="width:70%" rows="3" placeholder="Enter ..." name="off_add"><?php echo $row['Off_addr'];?></textarea>
                    </div>
				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" value="<?php echo $row['Off_ph1'];?>" class="form-control input-sm" id="off-phone1" name="off_ph1"  placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate Phone</label>
                      <input type="text" pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" value="<?php echo $row['Off_ph2'];?>" class="form-control input-sm" id="off-phone2" name="off_ph2" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid email id" style="width:70%" value="<?php echo $row['Off_email'];?>" class="form-control input-sm" id="exampleInputEmail1" name="off_em" placeholder="Enter mail">
                    </div>
					<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%"  name="Off_city">
					    <option value="" disabled selected>Select a city</option>
                        <option value='Chennai'<?php if('Chennai'==$row['Off_city']){ ?>selected="selected"<?php } ?>>Chennai</option>
                        <option value='Coimbatore'<?php if('Coimbatore'==$row['Off_city']){ ?>selected="selected"<?php } ?>>Coimbatore</option>
                        <option value='Trichy'<?php if('Trichy'==$row['Off_city']){ ?>selected="selected"<?php } ?>>Trichy</option>
                        <option value='Tirupur'<?php if('Tirupur'==$row['Off_city']){ ?>selected="selected"<?php } ?>>Tirupur</option>
                        <option value='Others'<?php if('Others'==$row['Off_city']){ ?>selected="selected"<?php } ?>>Others</option>
                      </select>
					  </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" pattern="^[60||61||62||63||64]{2}[0-9]{4}$" title="provide a 6 digit postal code" style="width:70%" value="<?php echo $row['Off_Pin'];?>" class="form-control input-sm" id="offpin1" name="off_pin"  placeholder="Enter pincode">
                    </div>
                </div><!-- /.box-body -->
							   
				</div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">General details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
					<div class="form-group">
					 <div class="col-sm-2 control-label ">
					 <label>Gender</label>
					 </div>
                      <div class="radio" class="col-sm-14">
                        <label class="col-sm-3">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" value=""<?php if($row['Gender']=='Male') { ?> checked="checked"<?php } ?>>
                          Male
						</label>
						<label class="col-sm-6">
						  <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female" value=""<?php if($row['Gender']=='Female') { ?> checked="checked"<?php } ?>>
                          Female
                        </label>
                      </div>
                      </div>
					  <br></br>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Communicate-to</label>
                      <div class="col-sm-11">
                        <select class="form-control" style="width:50%" id="select" name="com" onchange="selection()" required>
					    <option value='Residence'<?php if('Residence'==$row['Commu_to']){ ?>selected="selected"<?php } ?>>Residence</option>
                        <option value='Office'<?php if('Office'==$row['Commu_to']){ ?>selected="selected"<?php } ?>>Office</option>
                      </select>
                      </div>
                    </div>
					<br></br>
					<div class="form-group">
					 <div class="col-sm-2 control-label ">
					 <label>Test-Drive</label>
					 </div>
                      <div class="radio" class="col-sm-14">
                        <label class="col-sm-3">
                          <input type="radio" name="t_d" value="Yes" required onclick="Function();" data-toggle="modal" data-target="#myModal" value=""<?php if($row['Testdrive']=='Yes') { ?> checked="checked"<?php } ?> >
                          Yes
						</label>
						<label class="col-sm-6">
						  <input type="radio" name="t_d" id="radt" value="No" onclick="return test(<?php echo $_GET['edi']; ?>);" required value=""<?php if($row['Testdrive']=='No') { ?> checked="checked"<?php } ?>>
                          No
                        </label>
                      </div>
                      </div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
<div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
		<form role="form" method="post" action="">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Test Drive Details</h4>
           </div>
           <div class="modal-body">
		    <div class="col-xs-6">
		     <div class="form-group">
               <label for="mail">Test Drive No.</label><input type="text" style="width:70%" class="form-control input-sm" id="drn">
             </div>
            <div class="form-group">
              <label>Date</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" id="test_date" >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
	        <div class="form-group">
              <label>Model</label>
     		    <select class="form-control" style="width:70%" id="model1">
					    <option>Select a car model</option>
                        <?php 
					$query = "SELECT * FROM carmodel"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['modelname'];?>"> 
					<?php echo $line['modelname'];?> </option>   <?php } ?>
					  </select>
             </div>
		    <div class="form-group">
             <label for="mail">Duration(kms)</label><input type="text" style="width:70%" class="form-control input-sm" id="dur">
            </div>
			</div>
			<div class="col-xs-6">
			  	   <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" id="tenq" style="width:70%" class="form-control input-sm" name="Enq">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" id="tcu" style="width:70%" class="form-control input-sm" name="cus">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" id="tcun" style="width:70%" class="form-control input-sm" name="cusn">
                    </div>
					<div class="form-group">
                      <label>Place of TD</label>
     		           <select class="form-control" style="width:70%" id="place">
					    <option>Dealership</option>
                        <option>Customer place</option>
                      </select>
                   </div>
             </div>
		  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="mysub">Submit</button>
            </div>
			</form>
  </div>
 </div>
      </div>			  
                  <script>
				  function Function(){
                           var x = document.getElementById("enq").value;
                           document.getElementById("tenq").value =x;
						   var y = document.getElementById("cu").value;
						   document.getElementById("tcu").value= y;
						   var z= document.getElementById("cun").value;
						   document.getElementById("tcun").value= z;
                          }
				function test(edit_id) {						
							var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
								if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
									document.getElementById("test").innerHTML = xmlhttp.responseText;
								}
							};
							xmlhttp.open("GET", "deletetest.php?id=" + edit_id, true);
							xmlhttp.send();
						
					}
				  </script>
              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Residence</h3>
                </div>
                <div class="box-body">
				    <div class="form-group">
                      <label>Address</label>
					  <form action="geo.php" method="post" target="_blank">
                      <textarea value="<?php echo $row['Res_addr'];?>"  required class="form-control input-sm" style="width:70%" rows="3" placeholder="Enter ..." name="res_add"></textarea>
                       <input type='submit' class="btn btn-info pull-right" value='Geocode!' name="add"/>
                     </form>
					 </div>
					<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="res_city" required>
					    <option value="" disabled selected>Select a city</option>
                        <option value='Chennai'<?php if('Chennai'==$row['Res_city']){ ?>selected="selected"<?php } ?>>Chennai</option>
                        <option value='Coimbatore'<?php if('Coimbatore'==$row['Res_city']){ ?>selected="selected"<?php } ?>>Coimbatore</option>
                        <option value='Trichy'<?php if('Trichy'==$row['Res_city']){ ?>selected="selected"<?php } ?>>Trichy</option>
                        <option value='Tirupur'<?php if('Tirupur'==$row['Res_city']){ ?>selected="selected"<?php } ?>>Tirupur</option>
                        <option value='Others'<?php if('Others'==$row['Res_city']){ ?>selected="selected"<?php } ?>>Others</option>
                      </select>
					  </div>
				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" required pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" value="<?php echo $row['Res_phone'];?>" class="form-control input-sm" id="res-phone1" name="res_ph1"  placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate Phone</label>
                      <input type="text" pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" value="<?php echo $row['Res_phone2'];?>" class="form-control input-sm" id="res-phone2" name="res_ph2" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid mail id" style="width:70%" value="<?php echo $row['Email'];?>" class="form-control input-sm" id="exampleInputEmail1" name="res_em" placeholder="Enter mail">
                    </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" required pattern="^[60||61||62||63||64]{2}[0-9]{4}$" title="provide a 6 digit postal code" style="width:70%" value="<?php echo $row['Pincode'];?>" class="form-control input-sm" id="pin1" name="res_pin"  placeholder="Enter pincode">
                    </div>
					<div class="form-group">
                      <label>Date of Birth</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%">
                          <input type="text" required class="form-control" name="dob" value="<?php echo $row['DOB'];?>">
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Other details</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                      <label>Buyer type</label>
					   <select class="form-control" style="width:70%" name="buyer">
                        <option value='First time'<?php if('First time'==$row['Buyertype']){ ?>selected="selected"<?php } ?>>First time</option>
                        <option value='Second time'<?php if('Second time'==$row['Buyertype,']){ ?>selected="selected"<?php } ?>>Second time</option>
                        <option value='more than two'<?php if('more than two'==$row['Buyertype']){ ?>selected="selected"<?php } ?>>more than two</option>
                       </select>
                    </div>
					<div class="form-group">
                      <label>Mode of payment</label>
					  <select class="form-control" style="width:70%" name="pay" required>
					    <option value='Cash'<?php if('Cash'==$row['MOP']){ ?>selected="selected"<?php } ?>>Cash</option>
                        <option value='Self finance'<?php if('Self finance'==$row['MOP']){ ?>selected="selected"<?php } ?>>Self finance</option>
                        <option value='Maruti finance'<?php if('Maruti finance'==$row['MOP']){ ?>selected="selected"<?php } ?>>Maruti finance</option>
                      </select>
                    </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Enquired models</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <!-- text input -->
					 <div class="form-group">
                       <label>Model</label>
     		            <select class="form-control select2"  style="width:70%" name="rad" id="mySelect" required >
						<?php 
					$query = "SELECT * FROM carmodel"; 
					$result = mysql_query($query); 
					while ($line = mysql_fetch_array($result)) { ?>
					<option value="<?php echo $line['modelname'];?>" <?php if($line['modelname']==$row['en_no']){ ?>selected="selected"<?php } ?>> 
					<?php echo $line['modelname'];?> </option>   <?php } ?>
					  </select>
                    </div>
					
                </div><!-- /.box-body -->
				<div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="submit" >Update</button>
                  </div>
                </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
		  </form>
        </section><!-- /.content -->

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
	 <!-- datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="../../js/upgraded.js"></script>
	
  </body>
  
</html>
