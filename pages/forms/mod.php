<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("sales",$con);
echo "connected";
error_reporting(0);
if(isset($_POST['mysub']))
{
$query=mysql_query("insert into testdrive(td_no,date,model,dur,Enq_id,Cus_id,Cus_name,place_td) VALUES ('".$_POST['drn']."','".$_POST['test_date']."','".$_POST['model1']."','".$_POST['dur']."','".$_POST['Enq']."','".$_POST['cus']."','".$_POST['cusn']."','".$_POST['place']."')");

echo "insert into testdrive(td_no,date,model,dur,Enq_id,Cus_id,Cus_name,place_td) VALUES ('".$_POST['drn']."','".$_POST['test_date']."','".$_POST['model1']."','".$_POST['dur']."','".$_POST['Enq']."','".$_POST['cus']."','".$_POST['cusn']."','".$_POST['place']."')";
}
?>
  <html>
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
               <label for="mail">Test Drive No.</label><input type="text" style="width:70%" class="form-control input-sm" name="drn">
             </div>
            <div class="form-group">
              <label>Date</label>
			    <div class="input-group date" data-provide="datepicker" style="width:70%">
                   <input type="text" class="form-control" name="test_date" >
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                </div>
            </div>
	        <div class="form-group">
              <label>Model</label>
     		    <select class="form-control" style="width:70%" name="model1">
					    <option>Select a car model</option>
                        <option>swift</option>
                        <option>ritz</option>
                        <option>celerio</option>
                        <option>s-cross</option>
                        <option>sx4</option>
     			</select>
             </div>
		    <div class="form-group">
             <label for="mail">Duration(kms)</label><input type="text" style="width:70%" class="form-control input-sm" name="dur">
            </div>
			</div>
			<div class="col-xs-6">
			  	   <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="Enq">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input type="text" style="width:70%" class="form-control input-sm" name="cus">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input type="text" style="width:70%" class="form-control input-sm" name="cusn">
                    </div>
					<div class="form-group">
                      <label>Place of TD</label>
     		           <select class="form-control" style="width:70%" name="place">
					    <option>Dealership</option>
                        <option>Customer place</option>
                      </select>
                   </div>
             </div>
		  </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default" name="mysub">Submit</button>
            </div>
			</form>
  </div>
 </div>
      </div><!-- /.content-wrapper -->
	  </html>