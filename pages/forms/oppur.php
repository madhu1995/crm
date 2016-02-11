<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
error_reporting(0);
if(isset($_POST['submits']))
{
$query=mysql_query("insert into opp_details(Enq_id,Cus_id,Cus_name,DOE,Salesperson,Res_addr,Res_phone,Res_phone2,Email,Pincode,DOB,Buyertype,MOP,Gender,Commu_to,Testdrive,Off_name,Off_addr,Off_ph1,Off_ph2,Off_email,Off_city,Off_Pin,en_no,Res_city) VALUES ('".$_POST['Enq_id']."','".$_POST['cus_id']."','".$_POST['cus_name']."','".$_POST['doe']."','".$_POST['salesperson']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_ph2']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['dob']."','".$_POST['buyer']."','".$_POST['pay']."','".$_POST['optionsRadios']."','".$_POST['com']."','".$_POST['t_d']."','".$_POST['off_name']."','".$_POST['off_add']."','".$_POST['off_ph1']."','".$_POST['off_ph2']."','".$_POST['off_em']."','".$_POST['off_city']."','".$_POST['off_pin']."','".$_POST['rad']."','".$_POST['res_city']."')");
#echo "insert into opp_details(Enq_id,Cus_id,Cus_name,DOE,Salesperson,Res_addr,Res_phone,Res_phone2,Email,Pincode,DOB,Buyertype,MOP,Gender,Commu_to,Testdrive,Off_name,Off-addr,Off_ph1,Off_ph2,Off_email,Off_city,Off_Pin,en_no,Res_city) VALUES ('".$_POST['Enq_id']."','".$_POST['cus_id']."','".$_POST['cus_name']."','".$_POST['doe']."','".$_POST['salesperson']."','".$_POST['res_add']."','".$_POST['res_ph1']."','".$_POST['res_ph2']."','".$_POST['res_em']."','".$_POST['res_pin']."','".$_POST['dob']."','".$_POST['buyer']."','".$_POST['pay']."','".$_POST['optionsRadios']."','".$_POST['com']."','".$_POST['t_d']."','".$_POST['off_name']."','".$_POST['off_add']."','".$_POST['off_ph1']."','".$_POST['off_ph2']."','".$_POST['off_em']."','".$_POST['off_city']."','".$_POST['off_pin']."','".$_POST['rad']."','".$_POST['res_city']."')";
$errors= array();
		$file_name = $_FILES['file']['name'];
		$file_size =$_FILES['file']['size'];
		$file_tmp =$_FILES['file']['tmp_name'];
		$file_type=$_FILES['file']['type'];   
		$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
		
		$expensions= array("jpeg","jpg","png"); 		
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a php or txt or jpeg or png file.";
		}
		//if($file_size > 200000){
		                
		//$errors[]='File size must be excately 2 MB';
		//}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"file/".$file_name);
			$sql=mysql_query("insert  into upload(Enq_id,Cus_id,name) VALUES ('".$_POST['Enq_id']."','".$_POST['cus_id']."','".$_FILES["file"]["name"]."')");
		}else{
			print_r($errors);
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
	
	<style> .red-tooltip + .tooltip > .tooltip-inner {
      background-color: rgb(102, 204, 255); 
      color: #FFFFFF; 
  }</style>
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
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
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
                <li><a href="leaddetails.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
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
				<li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li>
                <li><a href="index.html"><i class="fa fa-circle-o"></i> Delivery</a></li>
              </ul>
            </li>
            <li>
              <a href="index.html">
                <i class="fa fa-steam-square"></i> 
				<span>Service</span><i class="fa fa-angle-left pull-right"></i> 
				</a>
			  <ul class="treeview-menu">
                <li><a href="../../amc.php"><i class="fa fa-circle-o"></i> AMC</a></li>
                <li><a href="../../appointments.php"><i class="fa fa-circle-o"></i> Service Appointments </a></li>
				<li><a href="../../servicedetails.php"><i class="fa fa-circle-o"></i> Service Detail</a></li>
                <li><a href="../../followup.php"><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="index.html">
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
              <a href="index.html">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li>
              <a href="index.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
              <a href="index.html">
                <i class="fa fa-phone"></i> <span>Alerts</span>
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
            Opportunity details
            <small>(sales)</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Opportunity Details</li>
          </ol>
        </section>
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
					    <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                           <span>Add an image...</span>
                        <!-- The file input field used as target for the file upload widget -->
							  <input type='file' required id="fileupload" name="file" accept="image/gif, image/jpeg, image/png"  onchange="readURL(this);" />
                           </span>
						   <img id="blah" src="#" alt="your image" />
					 </div>
                    <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" required id="enq" style="width:70%" class="form-control input-sm" name="Enq_id">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" required id="cu" style="width:70%" class="form-control input-sm" name="cus_id" >
                    </div>
                    <div class="form-group">
                      <label >Customer_Name</label>
					  <input type="text"  required pattern="[a-zA-Z]+" title="Name must in alphabets"  id="cun" style="width:70%" class="form-control input-sm" name="cus_name" >
                    </div>
					<div class="form-group">
                      <label>Date of Enquiry</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" required>
                          <input type="text" class="form-control" name="doe"  >
                            <div class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                            </div>
                         </div>
                    </div>
					 <div class="form-group">
                      <label>SalesPerson</label>
					  <select class="form-control" style="width:70%" name="salesperson" required>
					    <option value="" disabled selected>Select a sales person</option>
                        <option>aaa</option>
                        <option>bbb</option>
                        <option>ccc</option>
                        <option>ddd</option>
                        <option>eee</option>
                      </select>
                    </div>
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
                   <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Occupation details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <!-- text input -->
					<div class="form-group">
                      <label>Company name</label>
                      <input type="text" pattern="[a-zA-Z]+" title="Name must in alphabets" style="width:70%" class="form-control input-sm" id="off_name1" name="off_name" >
                    </div>
					<div class="form-group">
                      <label>Designation</label>
                      <input type="text" pattern="[a-zA-Z]+" title="Designation must have only alphabets" style="width:70%" class="form-control input-sm" id="off_des11" name="off_des">
                    </div>
                    <div class="form-group">
                      <label>Office Address</label>
                      <textarea pattern="[A-Za-z0-9./-,]+" title="Provide a valid address" class="form-control input-sm" style="width:70%" rows="3" name="off_add" id="off_add1"></textarea>
                    </div>
				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" class="form-control input-sm" id="off_phone1" name="off_ph1"  placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate Phone</label>
                      <input type="text" pattern="[0-9]{10}" title="phone number must have 10 digits" style="width:70%" class="form-control input-sm" id="off_phone2" name="off_ph2" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid email id" style="width:70%" class="form-control input-sm" id="off_em1" name="off_em" placeholder="Enter mail">
                    </div>
					<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="off_city" id="off_city1">
					    <option value="" disabled selected>Select a city</option>
                        <option>Chennai</option>
                        <option>Coimbatore</option>
                        <option>Trichy</option>
                        <option>Tirupur</option>
                        <option>Others</option>
                      </select>
					  </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text"  pattern="^[60||61||62||63||64]{2}[0-9]{4}$" title="provide a 6 digit postal code" style="width:70%" class="form-control input-sm" id="offpin1" name="off_pin"  placeholder="Enter pincode">
                    </div>
                </div><!-- /.box-body -->
				<div class="modal-footer">
                  <label>	
                    <a data-toggle="modal" data-target="#myModal3">Delete</a>
					<a data-toggle="modal" data-target="#edit">Edit</a>
				  </label>				
				</div>

<!-- delete -->
 <div class="container">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="align:center;width:120%;">
	  <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Click Delete to delete a selected user details</h4>
        </div>
        <div class="modal-body">
          <table border="1" align="center">
<br>
<br>
<br>
<tr>
<th size="10" width="10%">Enquire_id</th>
<th size="10" width="10%">Customer_id</th>
<th size="10" width="10%">Cus_name</th>
<th size="10" width="10%">SalesPerson</th>
<th size="10" width="10%">Model</th>
<th size="10" width="10%">Fuel</th>
<th size="10" width="10%">Color</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("SELECT o.Enq_id,o.Cus_id,o.Cus_name,o.Salesperson,v.model,v.fuel,v.color 
FROM 
  opp_details o
INNER JOIN
 vehicle v
ON
  v.Enq_id=o.Enq_id");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><?php echo $row['Enq_id']; ?></td>
<td><?php echo $row['Cus_id']; ?></td>
<td><?php echo $row['Cus_name']; ?></td>
<td><?php echo $row['Salesperson']; ?></td>
<td><?php echo $row['model']; ?></td>
<td><?php echo $row['fuel']; ?></td>
<td><?php echo $row['color']; ?></td>
<td><a href="oppur.php?did=<?php echo $row['Enq_id']; ?>">Delete</a>
</td>
</tr>
<?php } ?>
<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
if(isset($_GET['did']))
{
$did=$_GET['did'];
$res1=mysql_query("SELECT `name` FROM `upload` WHERE Enq_id='".$did."'");
$rows=mysql_fetch_array($res1);
unlink("file/".$rows['name']);
$query=mysql_query("DELETE t1,t2,t3,t4 FROM opp_details as t1 
JOIN testdrive as t2 ON t2.Enq_id = t1.Enq_id 
JOIN vehicle as t3 ON t3.Enq_id = t1.Enq_id
JOIN upload as t4 ON t4.Enq_id = t1.Enq_id
WHERE t1.Enq_id='".$did."'");
}
?>
</table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
		</form>
      </div>
    </div>
  </div>
</div>
     <!-- Delete -->			   
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
                          <input type="radio"  name="optionsRadios" id="optionsRadios1" value="Male" required>
                          Male
						</label>
						<label class="col-sm-6">
						  <input type="radio"  name="optionsRadios" id="optionsRadios2" value="Female" required>
                          Female
                        </label>
                      </div>
                      </div>
					  <br></br>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Communicate-to</label>
                      <div class="col-sm-11">
                        <select class="form-control" style="width:50%" id="select" name="com" onchange="selection()" required>
						<option value="" disabled selected>select a place for contact</option>
					    <option value="residence">Residence</option>
                        <option id="off_c" value="office">Office</option>
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
                          <input type="radio" required onclick="Function()" name="t_d" value="Yes" data-toggle="modal" data-target="#myModal">
                          Yes
						</label>
						<label class="col-sm-6">
						  <input type="radio" name="t_d" required value="No">
                          No
                        </label>
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
                        </script>

                  </div><!-- /.box-body -->
              </div><!-- /.box -->
                  
              <!-- Form Element sizes -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Residence</h3>
                </div>
                <div class="box-body">
				    <div class="form-group">
                      <label>Address</label>
					  <form action="geo.php" method="post" target="_blank">
                      <textarea required class="form-control input-sm" style="width:70%" rows="3" placeholder="Enter ..." name="res_add"></textarea>
                       <input type='submit' class="btn btn-info pull-right" value='Geocode!' name="add"/>
                     </form>
				   </div>
					<div class="form-group">
                      <label>City</label>
                      <select class="form-control" style="width:70%" name="res_city" required>
					    <option value="" disabled selected>Select a city</option>
                        <option>Chennai</option>
                        <option>Coimbatore</option>
                        <option>Trichy</option>
                        <option>Tirupur</option>
                        <option>Others</option>
                      </select>
					  </div>
				    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" required pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" class="form-control input-sm" id="res-phone1" name="res_ph1"  placeholder="Enter mobile number">
                    </div>
					<div class="form-group">
                      <label for="phone">Alternate Phone</label>
                      <input type="text" required pattern="^[9||8||7||]{1}[0-9]{9}$" title="phone number must have 10 digits" style="width:70%" class="form-control input-sm" id="res-phone2" name="res_ph2" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="provide a valid mail id" style="width:70%" class="form-control input-sm" id="exampleInputEmail1" name="res_em" placeholder="Enter mail">
                    </div>
					<div class="form-group">
                      <label for="phone">Pincode</label>
                      <input type="text" required pattern="^[60||61||62||63||64]{2}[0-9]{4}$" title="provide a 6 digit postal code"  style="width:70%" class="form-control input-sm" id="pin1" name="res_pin"  placeholder="Enter pincode">
                    </div>
					<div class="form-group">
                      <label>Date of Birth</label>
					    <div class="input-group date" data-provide="datepicker" style="width:70%" required>
                          <input type="text" class="form-control" name="dob">
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
					    <option value="" disabled selected>select two if u already own a car</option>
                        <option>First time</option>
                        <option>Second time</option>
                        <option>more than two</option>
                       </select>
                    </div>
					<div class="form-group">
                      <label>Mode of payment</label>
					  <select class="form-control" style="width:70%" name="pay"required>
					    <option value="" disabled selected>select mode of payment</option>
					    <option>Cash</option>
                        <option>Self finance</option>
                        <option>Maruti finance</option>
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
     		            <select class="form-control select2"  style="width:70%" name="rad" id="mySelect" required onclick="myFunction()">
                        <option value="" disabled selected>select a car model</option>
						<option data-toggle="modal" data-target="#my1">swift</option>
                        <option data-toggle="modal" data-target="#my1">ritz</option>
                        <option data-toggle="modal" data-target="#my1">celerio</option>
                        <option data-toggle="modal" data-target="#my1">s-cross</option>
                        <option data-toggle="modal" data-target="#my1">sx4</option>
     			      </select>
                    </div>
					
                </div><!-- /.box-body -->
				<div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right" name="submits" id="suub" >Submit</button>
                  </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
		  </form>
        </section><!-- /.content -->
		<!--Edit -->
 <div class="modal fade" id="edit" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Select to edit opportunity details</h4>
           </div>
           <div class="modal-body">
               <button type="button" class="btn btn-info" onclick="location.href='op_fetch.php'">User Details</button>
               <br></br>
			   <button type="button" class="btn btn-info" onclick="location.href='test_fetch.php'">Test-Drive Details</button>
               <br></br>
			   <button type="button" class="btn btn-info" onclick="location.href='mod_fetch.php'">Model Details</button>
  		    </div>
		</div>
	</div>
 </div>
 <div class="modal fade" id="my1" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
		<form role="form" method="post" action="">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Model details</h4>
           </div>
           <div class="modal-body">
		    <div class="col-xs-6">
		    <div class="form-group">
              <label>Model</label>
     		    <input type="text" id="model3" style="width:70%" class="form-control required" title="required" data-toggle="tooltip">
             </div>
			 <script>
                      function myFunction(){
                      var x = document.getElementById("mySelect");
                      document.getElementById("model3").value =x.options[x.selectedIndex].text;
                           var x = document.getElementById("enq").value;
                           document.getElementById("venq").value =x;
						   var y = document.getElementById("cu").value;
						   document.getElementById("vcu").value= y;
						   var z= document.getElementById("cun").value;
						   document.getElementById("vcun").value= z;
                       }
                   </script>
			 <div class="form-group">
              <label>Fuel type</label>
     		    <select class="form-control required" style="width:70%" id="fuel1" title="required" data-toggle="tooltip">
					    <option value="" disabled selected>Select fuel type</option>
                        <option>Petrol</option>
                        <option>Diesel</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Color</label>
     		    <select class="form-control required" style="width:70%" id="col" title="required" data-toggle="tooltip">
				        <option value="" disabled selected>select a model color</option>
					    <option>Silver</option>
                        <option>Red</option>
                        <option>Black</option>
                        <option>Blue</option>
                        <option>Yellow</option>
     			</select>
             </div>
			 
			<div class="form-group">
              <label>Quantity</label>
     		    <select class="form-control required" style="width:70%" id="quants" title="required" data-toggle="tooltip">
				        <option value="" disabled selected>select quantity</option>
					    <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Status</label>
     		    <select class="form-control required" style="width:70%" id="sta" title="required" data-toggle="tooltip">
				        <option value="" disabled selected> select buying status</option>
					    <option>Cold</option>
                        <option>Hot</option>
     			</select>
             </div>
			</div>
			<div class="col-xs-6">
			        <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input id="venq" type="text" style="width:70%" class="form-control required" name="en_id" title="required" data-toggle="tooltip">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input id="vcu" type="text" style="width:70%" class="form-control required" name="cu_id" title="required" data-toggle="tooltip">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input id="vcun" type="text" style="width:70%" class="form-control required" name="cu_name" title="required" data-toggle="tooltip">
                    </div>
					
					<div class="form-group">
                      <label>Approx.date for booking</label>
			            <div class="input-group date" data-provide="datepicker" style="width:70%">
                          <input type="text" class="form-control required" id="app" title="required" data-toggle="tooltip">
                        <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </div>
                     </div>
                   </div>
					<div class="form-group">
                      <div class="col-sm-2 control-label">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" id="pri" value="yes">Primary-Model
                          </label>
                        </div>
                      </div>
                   </div>
			</div>
         </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" id="my1s">Submit</button>
            </div>
			</form>
       </div>
  </div>
 </div>
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
		     <div class="form-group" class="form-group has-error">
               <label for="mail">Test Drive No.</label>
			   <input type="text" style="width:70%" class="form-control required" title="required" id="drn" data-toggle="tooltip">
             </div>
            <div class="form-group">
              <label>Date</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control required" id="test_date" title="required" data-toggle="tooltip">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
	        <div class="form-group">
              <label>Model</label>
     		    <select class="form-control required" style="width:70%" id="model1" title="required" data-toggle="tooltip">
				        <option value="" disabled selected>select a car model</option>
                        <option>swift</option>
                        <option>ritz</option>
                        <option>celerio</option>
                        <option>s-cross</option>
                        <option>sx4</option>
     			</select>
             </div>
		    <div class="form-group">
             <label for="mail">Duration(kms)</label>
			 <input type="text" style="width:70%" class="form-control required" id="dur" title="required" data-toggle="tooltip">
            </div>
			</div>
			<div class="col-xs-6">
			  	   <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" id="tenq" style="width:70%" class="form-control required" name="Enq" title="required" data-toggle="tooltip">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" id="tcu" style="width:70%" class="form-control required" name="cus" title="required" data-toggle="tooltip">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" id="tcun" style="width:70%" class="form-control required" name="cusn" title="required" data-toggle="tooltip">
                    </div>
					<div class="form-group">
                      <label>Place of TD</label>
     		           <select class="form-control required" style="width:70%" id="place" title="required" data-toggle="tooltip">
					    <option value="" disabled selected>select the place of test drive</option>
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
      </div><!-- /.content-wrapper -->
 </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
  </body>
</html>
