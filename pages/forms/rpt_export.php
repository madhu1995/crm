<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file 
header("Content-Disposition: attachment; filename=amc_details-export.xls");
 
// Add data table
include 'rpt_amc.php';
?>