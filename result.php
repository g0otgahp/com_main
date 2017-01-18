<?php include 'doc_header.php'; ?>
<div class="row" style="    position: fixed;
right: 5%;
top: 0%;">
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center ' style="margin-top:20px">
  <form class='form-group'>

    <button type='button' class='btn btn-lg btn-primary no-print' onclick="window.print();"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์เอกสาร</button>

  </form>

</div>
</div>

<div class='row '> </div>
<div class='row '>
  <page size="A4" style="color: #000;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-3">
                  <img src="logo.png" width="100" height="100" alt=""/>
                </div>
                <div class="col-sm-9" style="padding-top: 20px;">
                  <h4 class="text-center">ศูนย์บริการศึกษาเทคโนโลยีสารสนเทศ<br><br>มหาวิทยาลัยราชภัฏชัยภูมิ</h4>
                </p>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-md-2 col-sm-2"><strong>ที่อยู่</strong><br>
                  </div>
                  <div class="col-md-10 col-sm-10">ชั้น 2
                  </div>
                  <div class="col-md-8 col-sm-8"><strong>เบอร์ติดต่อ</strong> 0800808080
                  </div>
                  <div class="col-sm-12 col-md-12"><strong>&nbsp;</strong><br>
                  </div>
                  <div class="col-md-3 col-sm-3"><strong>ชื่อผู้ส่งซ่อม</strong><br>
                  </div>
                  <div class="col-md-6 col-sm-6"><?php echo $info["com_name"] ?><br>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4" style="margin-bottom:20px">
            <p class="text-center" id="border"><strong style="font-size:32px"><br>
              ใบแจ้งซ่อม</strong></br>
              <strong><br>
                เลขที่ <?php echo "IT0".$info["com_id"] ?></strong><br>
                <strong>วันที่</strong> <?php echo date("d/m/y") ?> </p>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 table-responsive col-sm-12">
            <table width="100%" class="table invoice">
              <thead>
                <tr class="danger">
                  <th class="text-center" width="2%">ลำดับ</th>
                  <th width="4%">ส่งซ่อมเมื่อวันที่</th>
                  <th class="text-center" width="15%">รายละเอียด</th>
                </tr>
              </thead>
              <tbody>
                <?php $item=1; ?>
                  <tr >
                    <td class="text-center" scope="row"><?php echo $item; ?></td>
                    <td><?php echo $info['com_date']; ?></td>
                    <td><?php echo $info['com_detail']; ?></td>
                  </tr>
                  <?php $item++; ?>

                        <?php if (count($data)<15): ?>
                          <?php
                          $row = 15 - count($data);
                          for ($i=0; $i < $row; $i++) { ?>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <?php } ?>
                          <?php endif; ?>
                </tbody>
              </table>
            </div>
           </div>
          </div>

          <div class="row" style="margin-top:50px">
            <div class="col-sm-6">
              <div class="row text-center">
                <div class="col-sm-12">ลงชื่อ................................................................เจ้าหน้าที่</div>
                <div class="col-sm-12">(.....................................................................)</div>
                <div class="col-sm-12">วันที่…...…เดือน……………..พ.ศ…………</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row text-center">
                <div class="col-sm-12">ลงชื่อ..................................................................ผู้รับคืน</div>
                <div class="col-sm-12">(.....................................................................)</div>
                <div class="col-sm-12">วันที่…...…เดือน……………..พ.ศ…………</div>
              </div>
            </div>
          </div>
        </div>
      </page>
    </div>
