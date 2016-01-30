<html>
<body class="hold-transition skin-blue sidebar-mini">
<!-- delete -->
 <div class="container">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  <form role="form" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Static Backdrop</h4>
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
<th size="10" width="10%">Date-Of-Enquiry</th>
<th size="10" width="10%">City</th>
<th size="10" width="10%">Model</th>
<th size="10" width="10%">Delete</th>
</tr>
</br>
</br>
</br>
<?php
$sql=mysql_query("select * from opp_details");
while($row=mysql_fetch_assoc($sql))
{
?>
<tr>
<td><?php echo $row['Enq_id']; ?></td>
<td><?php echo $row['cus_id']; ?></td>
<td><?php echo $row['cus_name']; ?></td>
<td><?php echo $row['doe']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php echo $row['model']; ?></td>
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
$query=mysql_query("DELETE t1,t2,t3 FROM opp_details as t1 
JOIN testdrive as t2 ON t2.Enq_id = t1.Enq_id 
JOIN vehicle as t3 ON t3.Enq_id = t1.Enq_id
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
<script>
$(document).ready(function(){
    $("#myBtn3").click(function(){
        $("#myModal3").modal({backdrop: "static"});
    });
});
</script>

<!-- Enquiry models (modal) -->

		<div class="modal fade" id="my1" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
		<form role="form" method="post">
          <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Model details</h4>
           </div>
           <div class="modal-body">
		    <div class="col-xs-6">
		    <div class="form-group">
              <label>Model</label>
     		    <input type="text" name="model2" id="mytext" style="width:70%" class="form-control input-sm">
             </div>
			 <script>
                      function myFunction(){
                      var x = document.getElementById("mySelect");
                      document.getElementById("mytext").value =x.options[x.selectedIndex].text;
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
     		    <select class="form-control" style="width:70%" name="fuel">
					    <option>Select fuel type</option>
                        <option>Petrol</option>
                        <option>Diesel</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Color</label>
     		    <select class="form-control" style="width:70%" name="color">
					    <option>Silver</option>
                        <option>Red</option>
                        <option>Black</option>
                        <option>Blue</option>
                        <option>Yellow</option>
     			</select>
             </div>
			 
			<div class="form-group">
              <label>Quantity</label>
     		    <select class="form-control" style="width:70%" name="quan">
					    <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
     			</select>
             </div>
			 <div class="form-group">
              <label>Status</label>
     		    <select class="form-control" style="width:70%" name="stat">
					    <option>Cold</option>
                        <option>Hot</option>
     			</select>
             </div>
			</div>
			<div class="col-xs-6">
			        <div class="form-group">
                      <label for="enq">Enquiry_Id</label><input id="venq" type="text" style="width:70%" class="form-control input-sm" name="en_id">
                    </div>
					<div class="form-group">
                      <label for="enq">Customer_Id</label><input id="vcu" type="text" style="width:70%" class="form-control input-sm" name="cu_id">
                    </div>
                    <div class="form-group">
                      <label for="mail">Customer_Name</label><input id="vcun" type="text" style="width:70%" class="form-control input-sm" name="cu_name">
                    </div>
					
					<div class="form-group">
                      <label>Approx.date for booking</label>
			            <div class="input-group date" data-provide="datepicker" style="width:70%">
                          <input type="text" class="form-control" name="ap_d" >
                        <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                        </div>
                     </div>
                   </div>
					<div class="form-group">
                      <div class="col-sm-2 control-label">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="imp" value="yes">Primary-Model
                          </label>
                        </div>
                      </div>
                   </div>
			</div>
         </div>
             <div class="modal-footer">
              <button type="submit" class="btn btn-default" name="my1s">Submit</button>
            </div>
			</form>
       </div>
  </div>
 </div>
<div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
        <div class="modal-content">
		<form role="form" method="post">
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
	  </body>
	  </html>