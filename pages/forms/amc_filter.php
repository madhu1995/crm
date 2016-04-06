<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
					  <th size="10" width="10%">cust_id</th>
					  <th size="10" width="10%">cust_name</th>
					  <th size="10" width="10%">service_no</th>
					  <th size="10" width="10%">phone</th>
					  <th size="10" width="10%">email</th>
					  <th size="10" width="10%">car_regno</th>
					  <th size="10" width="10%">model</th>
					  <th size="10" width="10%">fuel_type</th>
					  <th size="10" width="10%">engine_no</th>
					  <th size="10" width="10%">chassis_no</th>
					  <th size="10" width="10%">modelyear</th>
					  <th size="10" width="10%">amc_no</th>
					  <th size="10" width="10%">amc_type</th>
					  <th size="10" width="10%">startdate</th>
					  <th size="10" width="10%">enddate</th>
					  <th size="10" width="10%">year</th>
					  </tr>
                    </thead> 
					<tbody>
					<?php
					require('../../sales_db.php');
					$query=mysql_query("SELECT *
                         FROM `amc`
                        WHERE `enddate`< now()");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['cust_id']; ?></td>
						<td><?php echo $row['cust_name']; ?></td>
						<td><?php echo $row['service_no']; ?></td>
					    <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>						
						<td><?php echo $row['car_regno']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['fuel_type']; ?></td>
						<td><?php echo $row['engine_no']; ?></td>
						<td><?php echo $row['chassis_no']; ?></td>
						<td><?php echo $row['modelyear']; ?></td>
						<td><?php echo $row['amc_no']; ?></td>
						<td><?php echo $row['amc_type']; ?></td>
						<td><?php echo $row['startdate']; ?></td>
						<td><?php echo $row['enddate']; ?></td>
						<td><?php echo $row['year']; ?></td>
						</tr>
						<?php } ?>
						  </tbody>
						</table>
	</body>
</table>
</html>