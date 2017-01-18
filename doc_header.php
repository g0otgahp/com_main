<!doctype html >
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>ใบแจ้งซ่อม</title>
  <link rel="stylesheet" href="css_doc/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style media="print">
    .no-print{
      display: none;
    }
  </style>
  <style media="all">

  .table>tbody>tr>td {
    padding: 5px;
  }
  .invoice {
    border: 1px solid #000 !important;
    font-size: 11px;
  }
  .invoice th {
    /*border-top: 0px !important;*/
    border-left: 1px solid #000 !important;
    border-right: 1px solid #000 !important;
    border-bottom: 1px solid #000 !important;
  }
  .invoice td {
    border-top: 0px !important;
    border-left: 1px solid #000 !important;
    border-right: 1px solid #000 !important;
    border-bottom: 0px !important;
  }
  span.empty {
    height: 15.5px;
    display: block;
  }

  </style>
<?php
 mysql_connect("localhost", "root", ""); 
 mysql_select_db("com_main"); 
 mysql_query("SET NAMES 'utf8'");
 $data = mysql_query("SELECT * FROM com_list WHERE com_id = '".$_GET["ID"]."'");
 $info = mysql_fetch_array( $data );
 //echo $info["com_name"];
 //exit();
?>
  <body>
