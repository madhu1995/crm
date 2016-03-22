<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">model</th>
                        <th size="10" width="10%">fuel</th>
                        <th size="10" width="10%">color</th>
						<th size="10" width="10%">quant</th>
                        <th size="10" width="10%">status</th>
                        <th size="10" width="10%">Enq_id</th>
                        <th size="10" width="10%">Cust_id</th>
                        <th size="10" width="10%">Cust_name</th>
                        <th size="10" width="10%">app_date</th>
						<th size="10" width="10%">pri_model</th></tr>
                    </thead> 
					<tbody>
					<?php
     					require('../../sales_db.php');
	    				$query=mysql_query("SELECT * FROM `vehicle`");
						#echo "select Enq_id,Cus_id,Cus_name,DOE,Salesperson,Testdrive,DOB,MOP,en_no FROM opp_details";
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['fuel']; ?></td>
						<td><?php echo $row['color']; ?></td>
						<td><?php echo $row['quant']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><?php echo $row['Enq_id']; ?></td>
						<td><?php echo $row['Cust_id']; ?></td>
						<td><?php echo $row['Cust_name']; ?></td>
						<td><?php echo $row['app_date']; ?></td>
						<td><?php echo $row['pri_model']; ?></td>
						</tr>
						<?php } ?>
						  </tbody>
						</table>
	</body>
</table>
</html>