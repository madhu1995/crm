<?php
require('../../sales_db.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aadhi Maruthi | email print</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php
  $sql=mysql_query("SELECT * FROM `emails` WHERE `email_number`='".$_GET['print']."' ");
 # echo "select * from invoice_details where invoice_no='".$_GET['print']."' ";
  $row=mysql_fetch_assoc($sql);
  ?>
  <body onload="window.print();">
   <div class="wrapper"><br></br>
           <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Read Inbox Mails</h3>
                  <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="mailbox-read-info">
                    <h3><b><?php echo $row['subject']; ?></b></h3>
                    <h5>From: <?php echo $row['from_email']; ?> <span class="mailbox-read-time pull-right"><?php echo $row['received_date']; ?></span></h5>
                  </div><!-- /.mailbox-read-info -->
                  <div class="mailbox-controls with-border text-center">
                    <div class="btn-group">
                      <button type="submit" name="delete" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Reply"><i class="fa fa-reply"></i></button>
                      <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Forward"><i class="fa fa-share"></i></button>
                    </div><!-- /.btn-group -->
                    <button data-toggle="tooltip" title="Print" class="btn btn-default"><i class="fa fa-print"></i></button>
                  </div><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    <p><?php echo $row['mail_body']; ?></p>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                <div class="box-footer">
				 <?php
				if(preg_match('[.(jpeg|jpg|png)]',$row['attachments']))
                 {?>
                  <ul class="mailbox-attachments clearfix">
                    <li>
			    	 <span class="mailbox-attachment-icon has-img"><img src="attachments/<?php echo $row['attachments'];?>" alt="Attachment"></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $row['attachments'];?>" target="_blank" class="mailbox-attachment-name"><i class="fa fa-camera"></i><?php echo $row['attachments']; ?></a>
   					  </div>
                    </li>
                  </ul>
				  <?php }
                else if(preg_match('[.(doc|docx)]',$row['attachments']))
				{
				  ?>
				  <ul class="mailbox-attachments clearfix">
				   <li>
                      <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $row['attachments'];?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"><?php echo $row['attachments']; ?></i></a>
                      </div>
                    </li>
                   </ul>
				  <?php } else if(preg_match('[.(pdf)]',$row['attachments']))
				  {
				  ?>
				  <ul class="mailbox-attachments clearfix">
				  <li>
                      <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>
                      <div class="mailbox-attachment-info">
                        <a href="attachments/<?php echo $row['attachments'];?>" class="mailbox-attachment-name"><i class="fa fa-paperclip"><?php echo $row['attachments'];?></i></a>
                      </div>
                    </li>
				  </ul>
				  <?php }?>
                </div><!-- /.box-footer -->
               </div><!-- /. box -->
            </div><!-- /.col -->
         </div><!-- /.col -->
        
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
  </body>
</html>
