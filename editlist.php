<?php include 'header.php'; ?>
<!---------------------------------------------------------------------------------------------------->
<?php
 mysql_connect("localhost", "root", ""); 
 mysql_select_db("com_main"); 
 mysql_query("SET NAMES 'utf8'");
 $data = mysql_query("SELECT * FROM com_list WHERE com_id = '".$_GET["ID"]."'");
 $info = mysql_fetch_array( $data );
 //echo $info["com_name"];
 //exit();
?>

<form name="form1" method="post" action="save_edit.php">
<table class="table table">

<font size="5">แก้ไขข้อมูลแจ้งซ่อม

<input type="hidden" name="com_id" value="<?php echo $_GET["ID"]; ?>">

<tr>
<td>ชื่อ-นามสกุล</td><td><select name="prefix">
<option value="นาย">นาย</option>
<option value="นางสาว">นางสาว</option>
<option value="นาง">นาง</option>
</select> <input type="text" name="com_name" value="<?php echo $info["com_name"];?>"></td>
</tr>

<tr>
<td>เบอร์โทรศัพท์ </td><td><input type="text" name="com_phone" value="<?php echo $info["com_phone"]?>"></td>
</tr>

<tr>
<td>ประเภทของคอม</td><td>
<input type="radio" name="com_type" value="PC">PC
<input type="radio" name="com_type" value="Notebook">Notebook
<input type="radio" name="com_type" value="Mac">Mac
</td>
</tr>

<tr>
<td>รายละเอียด</td><td><textarea rows="4" cols="30" name="com_detail" ><?php echo $info["com_detail"]?></textarea></td>
</tr>

<tr>
<td></td><td><input type="submit" value="แก้ไข" class="btn btn-warning"></td>
</tr>
</table>
</form>
<!---------------------------------------------------------------------------------------------------->