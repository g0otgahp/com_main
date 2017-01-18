<?php include 'header.php'; ?>
<!---------------------------------------------------------------------------------------------------->
<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", ""); 
 mysql_select_db("com_main"); 
 mysql_query("SET NAMES 'utf8'");
 $data = mysql_query("SELECT * FROM com_list");
 echo "<table class='table table-hover'>";
 echo "<tr class='info'>
									<th>วันที่</th>
									<th>ชื่อ-สกุล</th>
									<th>เบอร์โทรศัพท์</th>
									<th>ประเภท</th>
									<th>รายละเอียด</th>
									<th class='text-center'>สถานะ</th>
									<th class='text-center'>แก้ไข/ลบ</th>
  </tr>"; 
 while($info = mysql_fetch_array( $data )) 
  { 
    print "<tr><td>".$info['com_date'] . "</td>"; 
    print "<td>".$info['com_name'] . "</td>"; 
    print "<td>".$info['com_phone'] ."</td>"; 
    print "<td>".$info['com_type'] ."</td>"; 
    print "<td>".$info['com_detail'] ."</td>";
	if($info['com_status'] == 1){
		print "<td><a href='edit_status.php?ID=$info[com_id]' class='btn btn-info'>
		  <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>รอคิว</a></td>";
	} elseif($info['com_status'] == 2){
		print "<td><a href='edit_status.php?ID=$info[com_id]' class='btn btn-warning'>
		  <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>กำลังซ่อม</a></td>";
	} elseif($info['com_status'] == 3){
		print "<td><a href='edit_status.php?ID=$info[com_id]' class='btn btn-warning'>
		  <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>รอรับคืน</a></td>";
	} elseif($info['com_status'] == 4){
		print "<td class='text-center'><a href='result.php?ID=$info[com_id]' target='_blank' class='btn btn-success'>
		  <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>เสร็จสิ้น [ออกใบเสร็จ]</a></td>";
	}
	
	print "<td class='text-center'><a href='editlist.php?ID=$info[com_id]' class='btn btn-warning'>
		  <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>&nbsp;Edit</a>
		  <a href='save_deletelist.php?ID=$info[com_id]' class='btn btn-danger'>
		  <span class='glyphicon glyphicon-remove' aria-hidden='true'></span>&nbsp;Delete</a></td>";
 } 
 print "</tr></table>";  
?>
<!---------------------------------------------------------------------------------------------------->