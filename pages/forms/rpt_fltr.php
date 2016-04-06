<html>
<body>
<?php
 require('../../sales_db.php');
 ?>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
                         <th size="10" width="10%">Cust_id</th>
                        <th size="10" width="10%">Cust_name</th>
						<th size="10" width="10%">Phone no</th>
						<th size="10" width="10%">Email</th>
                        <th size="10" width="10%">Amc_no</th>
						<th size="10" width="10%">Amc_type</th>
                        <th size="10" width="10%">Startdate</th>
                        <th size="10" width="10%">Enddate</th>
                        <th size="10" width="10%">Contract Year</th>
                        <th size="10" width="10%">Car no</th>
                        <th size="10" width="10%">Model</th>
						<th size="10" width="10%">Fuel type</th>
                        <th size="10" width="10%">Engine no</th>
						<th size="10" width="10%">Chassis no</th>
                        <th size="10" width="10%">Model year</th>
					</tr>
                    </thead> 
					<tbody>
					
					<?php
				      		$query=mysql_query("SELECT * FROM `amc` WHERE `startdate` >= DATE_SUB( now( ) , INTERVAL 1 MONTH )");
						
						while($row=mysql_fetch_assoc($query))
						{
						 ?>
						<tr>
						<td><?php echo $row['cust_id']; ?></td>
						<td><?php echo $row['cust_name']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['amc_no']; ?></td>
						<td><?php echo $row['amc_type']; ?></td>
						<td><?php echo $row['startdate']; ?></td>
						<td><?php echo $row['enddate']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><?php echo $row['car_regno']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['fuel_type']; ?></td>
						<td><?php echo $row['engine_no']; ?></td>
						<td><?php echo $row['chassis_no']; ?></td>
						<td><?php echo $row['modelyear']; ?></td>
					 </tr>
					 <?php } ?>
						</tbody>
						</table>
	</body>
</table>
</html>