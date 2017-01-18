<?php
include 'db/connect.php';

$strSQL = "UPDATE com_list SET ";
$strSQL .="com_status = '".$_POST["com_status"]."' ";
$strSQL .="WHERE com_id = '".$_POST["com_id"]."' ";


$objQuery = mysql_query($strSQL);
		
echo "<script>alert('แก้ไขเรียบร้อยแล้ว');</script><hr>";
echo "<script>window.location = 'list.php';</script>";

?>