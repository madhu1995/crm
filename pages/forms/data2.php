<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
                        <th size="10" width="10%">td_no</th>
                        <th size="10" width="10%">date</th>
                        <th size="10" width="10%">model</th>
						<th size="10" width="10%">dur</th>
                        <th size="10" width="10%">Enq_id</th>
                        <th size="10" width="10%">Cus_id</th>
                        <th size="10" width="10%">Cus_name</th>
                        <th size="10" width="10%">Place</th>
						</tr>
                    </thead> 
					<tbody>
					<?php
					    require('../../sales_db.php');
						$query=mysql_query("SELECT * FROM `testdrive`");
						#echo "select Enq_id,Cus_id,Cus_name,DOE,Salesperson,Testdrive,DOB,MOP,en_no FROM opp_details";
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['td_no']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['dur']; ?></td>
						<td><?php echo $row['Enq_id']; ?></td>
						<td><?php echo $row['Cus_id']; ?></td>
						<td><?php echo $row['Cus_name']; ?></td>
						<td><?php echo $row['place_td']; ?></td>
						
						</tr>
						<?php } ?>
						  </tbody>
						</table>
	</body>
</table>
</html>