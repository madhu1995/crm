<?php
$start=$_GET[start];
$end=$_GET[end];
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Opportunity_details-export.xls");
 
// Add data table
//include 'filter1.php';
?>
<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">Enquire_id</th>
                        <th size="10" width="10%">Customer_id</th>
                        <th size="10" width="10%">Cus_name</th>
						<th size="10" width="10%">DOE</th>
                        <th size="10" width="10%">SalesPerson</th>
                        <th size="10" width="10%">Test-Drive</th>
                        <th size="10" width="10%">Mode Of Payment</th>
                        <th size="10" width="10%">Model</th>
						<th size="10" width="10%">Res_addr</th>
						<th size="10" width="10%">Res_phone</th>
						<th size="10" width="10%">Res_phone2</th>
						<th size="10" width="10%">Email</th>
						<th size="10" width="10%">Pincode</th>
						<th size="10" width="10%">DOB</th>
						<th size="10" width="10%">Buyertype</th>
						<th size="10" width="10%">Gender</th>
						<th size="10" width="10%">Communicate to</th>
						<th size="10" width="10%">Require Testdrive</th>
						<th size="10" width="10%">Off_name</th>
						<th size="10" width="10%">Off_addr</th>
						<th size="10" width="10%">Off_ph1</th>
						<th size="10" width="10%">Off_ph2</th>
						<th size="10" width="10%">Off_email</th>
						<th size="10" width="10%">Off_city</th>
						<th size="10" width="10%">Off_Pin</th>
						<th size="10" width="10%">Res_city</th>
					    <th size="10" width="10%">fuel</th>
                        <th size="10" width="10%">color</th>
						<th size="10" width="10%">quantity</th>
                        <th size="10" width="10%">status of customer</th>
                        <th size="10" width="10%">app_date of booking</th>
						<th size="10" width="10%">pri_model</th>
                        <th size="10" width="10%">td_no</th>
                        <th size="10" width="10%">date of td</th>
                       <th size="10" width="10%">td duration</th>
                        <th size="10" width="10%">Place of testdrive</th>
						
						</tr>
                    </thead> 
					<tbody>
					<?php
					    require('../../sales_db.php');
						$query=mysql_query("SELECT * FROM `opp_details` WHERE DOE BETWEEN '".$start."' AND '".$end."'");
						#echo "select Enq_id,Cus_id,Cus_name,DOE,Salesperson,Testdrive,DOB,MOP,en_no FROM opp_details";
						
						while($row=mysql_fetch_assoc($query))
						{
						 ?>
						<tr>
						<td><?php echo $row['Enq_id']; ?></td>
						<td><?php echo $row['Cus_id']; ?></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td><?php echo $row['DOE']; ?></td>
						<td><?php echo $row['Salesperson']; ?></td>
						<td><?php echo $row['Testdrive']; ?></td>
						<td><?php echo $row['MOP']; ?></td>
						<td><?php echo $row['en_no']; ?></td>
						<td><?php echo $row['Res_addr']; ?></td>
						<td><?php echo $row['Res_phone']; ?></td>
						<td><?php echo $row['Res_phone2']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Pincode']; ?></td>
						<td><?php echo $row['DOB']; ?></td>
						<td><?php echo $row['Buyertype']; ?></td>
						<td><?php echo $row['Gender']; ?></td>
						<td><?php echo $row['Commu_to']; ?></td>
						<td><?php echo $row['Testdrive']; ?></td>
						<td><?php echo $row['Off_name']; ?></td>
						<td><?php echo $row['Off_addr']; ?></td>
						<td><?php echo $row['Off_ph1']; ?></td>
						<td><?php echo $row['Off_ph2']; ?></td>
						<td><?php echo $row['Off_email']; ?></td>
						<td><?php echo $row['Off_city']; ?></td>
						<td><?php echo $row['Off_Pin']; ?></td>
						<td><?php echo $row['Res_city']; ?></td>
						
						<?php 
						
                        $query1=mysql_query("SELECT *
FROM vehicle
LEFT JOIN testdrive ON vehicle.Enq_id = testdrive.Enq_id
WHERE vehicle.Enq_id ='".$row['Enq_id']."'");
						 while($row1=mysql_fetch_assoc($query1))
						    {
							
						?>
						<td><?php echo $row1['fuel']; ?></td>
						<td><?php echo $row1['color']; ?></td>
						<td><?php echo $row1['quant']; ?></td>
						<td><?php echo $row1['status']; ?></td>
						<td><?php echo $row1['app_date']; ?></td>
						<td><?php echo $row1['pri_model']; ?></td>
						<td><?php echo $row1['td_no']; ?></td>
						<td><?php echo $row1['date']; ?></td>
						<td><?php echo $row1['dur']; ?></td>
						<td><?php echo $row1['place_td']; ?></td>
						<?php }} ?>
						</tr>
						  </tbody>
						</table>
	</body>
</table>
</html>