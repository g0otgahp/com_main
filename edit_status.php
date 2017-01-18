<?php include 'header.php'; ?>
<!---------------------------------------------------------------------------------------------------->
<form name="form1" method="post" action="save_edit_status.php">
<table class="table table">

<font size="5">แก้ไขสถานะ

<input type="hidden" name="com_id" value="<?php echo $_GET["ID"]; ?>">

<tr>
<td>สถานะ > <select name="com_status" onchange="this.form.submit()">
<option value=""> </option>
<option value="1">รอคิว</option>
<option value="2">กำลังซ่อม</option>
<option value="3">รอรับคืน</option>
<option value="4">เสร็จสิ้น</option>
</select> 
</tr>

<noscript><input type="submit" class="btn btn-warning"></noscript>
</tr>
</table>
</form>
<!---------------------------------------------------------------------------------------------------->