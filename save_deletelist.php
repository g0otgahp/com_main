<?php
include 'db/connect.php';

$strSQL = "DELETE FROM com_list WHERE com_id = '".$_GET["ID"]."' ";
$objQuery = mysql_query($strSQL);

//echo "".$strSQL;
//exit();

echo "<script>alert('ลบเรียบร้อยแล้ว');</script><hr>";
echo "<script>window.location = 'list.php';</script>";

?>