<?php
$start=$_GET[start];
$end=$_GET[end];
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=leaddetails-export.xls");
 
// Add data table
//include 'filter2.php';
?>
<html>
<body>
 <table id="example2" class="table table-bordered table-hover" border="1">
					<thead style="background-color:#00C0EF;">
                      <tr>
					  <th size="10" width="10%">custname</th>
					  <th size="10" width="10%">doe</th>
					  <th size="10" width="10%">phone</th>
					  <th size="10" width="10%">addr</th>
					  <th size="10" width="10%">t_d</th>
					  <th size="10" width="10%">email</th>
					  <th size="10" width="10%">optionsRadios</th>
					  <th size="10" width="10%">city</th>
					  <th size="10" width="10%">salesperson</th>
					  <th size="10" width="10%">model</th>
					  <th size="10" width="10%">src</th>
					  <th size="10" width="10%">mop</th>
					  <th size="10" width="10%">Status</th>
					  <th size="10" width="10%">Remarks</th>
					  <th size="10" width="10%">Followup Date</th>
					  <th size="10" width="10%">Timeofcall</th>
					  <th size="10" width="10%">NextFollowup</th>
					   <th size="10" width="10%">EnquiryId</th>
                      </tr>
                    </thead> 
					<tbody>
					<?php
                        require('../../sales_db.php');
						$query=mysql_query("SELECT *
                         FROM `lead_details`
                        WHERE `doe` BETWEEN '".$start."' AND '".$end."'");
						while($row=mysql_fetch_assoc($query))
						{
						?>
						<tr>
						<td><?php echo $row['custname']; ?></td>
						<td><?php echo $row['doe']; ?></td>
						<td><?php echo $row['phone']; ?></td>
					    <td><?php echo $row['addr']; ?></td>
                        <td><?php echo $row['t_d']; ?></td>						
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['optionsRadios']; ?></td>
						<td><?php echo $row['city']; ?></td>
						<td><?php echo $row['salesperson']; ?></td>
						<td><?php echo $row['model']; ?></td>
						<td><?php echo $row['src']; ?></td>
						<td><?php echo $row['mop']; ?></td>
						<td><?php echo $row['optionsRadios1']; ?></td>
						<td><?php echo $row['optionsRadios2']; ?></td>
						<td><?php echo $row['follow_date']; ?></td>
						<td><?php echo $row['toc']; ?></td>
						<td><?php echo $row['next_foll']; ?></td>
						<td><?php echo $row['enquire']; ?></td>
						</tr>
						<?php } ?>
						  </tbody>
						</table>
	</body>
</table>
</html>