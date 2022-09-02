<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("header.php")
?>
<main>
    <div class="container-fluid">
    <div class="card">
  <div class="card-header">
    ฟอร์มสมัครสมาชิก
  </div>
  <div class="card-body">
<form name="form1" action="insert.php" method="post">
    <div class="row"><!-- row2 -->
      <div class="col-md-2"><label for="exampleFormControlInput1" class="form-label">คำนำหน้าชื่อ</label>
          <select name="firstname" id="firstname" class="form-control">
          <option value="">คำนำหน้าชื่อ</option>
          <option value="นาย">นาย</option>
          <option value="นาย">นาง</option>
          <option value="นาย">นางสาว</option>
          </select>
      </div>

    <div class="col-md-5">
    <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="กรุณาใส่ชื่อ">
    </div>

    <div class="col-md-5">
    <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
      <input type="text" class="form-control" name="lastname" id="lastname" placeholder="กรุณาใส่นามสกุล">
    </div>
    </div><!-- row1 -->

    <div class="row"><!-- row2 -->
    <div class="col-md-2">
        <label for="exampleFormControlInput1" class="form-label">เพศ</label>
        <div>
        <input type="radio" class="form-check-input" name="sex" id="sex" value="ชาย"> ชาย 
        <input type="radio" class="form-check-input" name="sex" id="sex" value="หญิง"> หญิง 
        </div>
    </div>

    <div class="col-md-3">
    <label for="exampleFormControlInput1" class="form-label">วันเกิด</label>
   <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="00/00/0000" date-provid="datepicker" data-date-language="th-th">
   </div>

    <div class="col-md-7"><label for="exampleFormControlInput1" class="form-label">ที่อยู่</label>
    <textarea class="form-control" name="address" id="address" placeholder="กรุณาใส่ที่อยู่"></textarea>
    </div>
    </div><!-- row2 -->

    <div class="row"><!-- row3 -->
    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label">เบอร์โทรศัพท์</label>
      <input type="number" class="form-control" name="telephone_number" id="telephone_number" placeholder="กรุณาเบอร์โทรศัพท์">
    </div>

    <div class="col-md-6">
    <label for="exampleFormControlInput1" class="form-label">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="กรุณาใส่E-mail">
   </div>
    </div><!-- row3 -->
<br>
    <div class="row"><!-- row4 -->
      <div class="col-md-12">
      <center>
      <button type="Summit" class="btn btn-outline-success">บันทึก</button>
      <button type="reset" class="btn btn-outline-warning">ล้างข้อมูล</button>
      </center>
      </div>
    </div><!-- row4 -->
</form>
   
  </div>
</div>
    </div>
</main>

  <?php
  include("footer.php")
  ?>
</div>
</body>
</html>