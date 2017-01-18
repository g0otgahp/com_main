<?php
include 'db/connect.php';

$date = date("d/m/y");

$strSQL = "INSERT INTO com_list 
(com_name,
com_phone,
com_type,
com_detail,
com_date,
com_status) VALUES 
('".$_POST["prefix"].$_POST["com_name"]."', 
'".$_POST["com_phone"]."',
'".$_POST["com_type"]."',
'".$_POST["com_detail"]."',
'".$date."',
'".'1'."')";

//echo "".$strSQL;
//exit();


$objQuery = mysql_query($strSQL);
		
echo "<script>alert('ลงทะเบียนเรียบร้อยแล้ว');</script><hr>";
echo "<script>window.location = 'list.php';</script>";

?>