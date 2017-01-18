<?php include 'header.php'; ?>
<!---------------------------------------------------------------------------------------------------->
<form name="form1" method="post" action="save_register.php">
<table class="table table">

<font size="5">กรอกข้อมูลใบแจ้งซ่อม

<tr>
<td>ชื่อ-นามสกุล</td><td><select name="prefix">
<option value="นาย">นาย</option>
<option value="นางสาว">นางสาว</option>
<option value="นาง">นาง</option>
</select> <input type="text" name="com_name"></td>
</tr>

<tr>
<td>เบอร์โทรศัพท์ </td><td><input type="text" name="com_phone"></td>
</tr>

<tr>
<td>ประเภทของคอม</td><td>
<input type="radio" name="com_type" value="PC">PC
<input type="radio" name="com_type" value="Notebook">Notebook
<input type="radio" name="com_type" value="Mac">Mac
</td>
</tr>

<tr>
<td>รายละเอียด</td><td><textarea rows="4" cols="30" name="com_detail"></textarea></td>
</tr>

<tr>
<td></td><td><input type="submit" value="ลงทะเบียน" class="btn btn-success"></td>
</tr>
</table>
</form>
<!---------------------------------------------------------------------------------------------------->