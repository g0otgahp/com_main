<?php
include 'db/connect.php';

//$strSQL = "UPDATE com_list SET 
//com_name = '".$_POST["com_name"]."',
//com_phone = '".$_POST["com_phone"]."',
//com_type = '".$_POST["com_type"]."',
//com_detail = '".$_POST["com_detail"]."',
//WHERE com_id = '".$_POST["com_id"]."' ";

$strSQL = "UPDATE com_list SET ";
$strSQL .="com_name = '".$_POST["com_name"]."' ";
$strSQL .=",com_phone = '".$_POST["com_phone"]."' ";
$strSQL .=",com_type = '".$_POST["com_type"]."' ";
$strSQL .=",com_detail = '".$_POST["com_detail"]."' ";
$strSQL .="WHERE com_id = '".$_POST["com_id"]."' ";


$objQuery = mysql_query($strSQL);
		
echo "<script>alert('แก้ไขเรียบร้อยแล้ว');</script><hr>";
echo "<script>window.location = 'list.php';</script>";

?>