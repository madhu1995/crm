<?php
 session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AadhiMaruti | Calendar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
				<!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    <p>
					  <?php echo $_SESSION['username'] ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="text-center">
					  <a href="pages/examples/logout.php">
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
                <li><a href="../leaddetailsindex.php"><i class="fa fa-circle-o"></i> Lead Details</a></li>
                <li><a href="forms/pre.php"><i class="fa fa-circle-o"></i> Pre-sales Feedback</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i><span>Sales</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="forms/oppur.php"><i class="fa fa-circle-o"></i> Opportunity Details</a></li>
				<li><a href="examples/invoiceindex.php"><i class="fa fa-circle-o"></i> Invoice</a></li>
         <!--       <li><a href="index.html"><i class="fa fa-circle-o"></i> Purchase Details</a></li> -->
                <li><a href="../deliverydetailindex.php"><i class="fa fa-circle-o"></i> Delivery</a></li>
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
                <li><a href=""><i class="fa fa-circle-o"></i> Follow up</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="forms/report.php">
                <i class="fa fa-pie-chart"></i>
                <span>Report</span>
                </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-inr"></i>
                <span>Finance</span>
              </a>
              </li>
            <li class="treeview">
              <a href="forms/post.php">
                <i class="fa fa-edit"></i> <span>Feedback</span>
              </a>
              </li>
            <li class="active treeview">
			  <a href="calendar.php">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
               </a>
            </li>                
            <li>
                <a href="">
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
            Calendar
            <small>Control panel</small>
          </h1>
         <ol class="breadcrumb">
            <li><a href="../index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Calendar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-6">
              <div class="box box-primary">
			   <div class=box-header>
			    <h3 class="box-title">Approximate date of booking</h3>
			   </div>
                <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar"></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
			<div class="col-md-6">
              <div class="box box-primary">
			   <div class=box-header>
			    <h3 class="box-title">Service followup</h3>
			   </div>
                <div class="box-body no-padding">
                  <!-- THE CALENDAR -->
                  <div id="calendar1"></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- Page specific script -->
    <script>
      $(document).ready(function() {

	 var zone = "05:30";  //Change this to your timezone


        /* initialize the external events
         -----------------------------------------------------------------*/
      

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        $('#calendar').fullCalendar({
		events: "json.php",
		editable: true,
       eventClick: function(calEvent, jsEvent, view) {
		window.location = "http://localhost/new1/pages/forms/mail_send.php?edi=" + calEvent.title;
    },
			utc: true,
          header: {
            left: 'prev,next ,today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          }
        });
        $('#calendar1').fullCalendar({
		events: "json1.php",
		editable: true,
       eventClick: function(calEvent, jsEvent, view) {
		window.location = "http://localhost/new1/pages/forms/mail_send1.php?edi=" + calEvent.title;
    },
			utc: true,
          header: {
            left: 'prev,next ,today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
		  eventColor: '#3399ff'
        });

     
      });
    </script>
  </body>
</html>
