<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=AMC_Warranty_expired_one_month-export.xls");
 
// Add data table
include 'ser_war_filter.php';
?>