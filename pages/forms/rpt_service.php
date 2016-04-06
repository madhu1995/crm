<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">Cust_id</th>
                        <th size="10" width="10%">Cust_name</th>
						<th size="10" width="10%">Service_no</th>
						<th size="10" width="10%">Car no</th>
                        <th size="10" width="10%">Model</th>
						<th size="10" width="10%">Payment</th>
                        <th size="10" width="10%">Serviced_by</th>
						<th size="10" width="10%">Delivery_date</th>
                        <th size="10" width="10%">Next_service</th>
                        <th size="10" width="10%">Diesel_engine_oil</th>
                        <th size="10" width="10%">Filter_pack</th>
                     	<th size="10" width="10%">Wheel_alignment</th>
                        <th size="10" width="10%">Water_service</th>
						<th size="10" width="10%">Oil_service</th>
                      </thead> 
					<tbody>
					<?php
					require('../../sales_db.php');
					    $query=mysql_query("SELECT * FROM `ser_detail`");
				     	while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['cust_id']; ?></td>
						<td><?php echo $row['cust_name']; ?></td>
						<td><?php echo $row['service_no']; ?></td>
						<td><?php echo $row['car_regno']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['payment']; ?></td>
						<td><?php echo $row['serviced_by']; ?></td>
						<td><?php echo $row['delivery_date']; ?></td>
						<td><?php echo $row['nextservice']; ?></td>
						<td><?php echo $row['d_qty']; ?></td>
						<td><?php echo $row['f_qty']; ?></td>
						<td><?php echo $row['w_qty']; ?></td>
						<td><?php echo $row['ws_qty']; ?></td>
						<td><?php echo $row['o_qty']; ?></td>
						
						</tr>
						<?php } ?>
						  </tbody>
						</table>
	</body>
</table>
</html>