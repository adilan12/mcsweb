<!DOCTYPE html>
<html lang="en">
<?php 
    include "head.php";
    
  ?>
<body>
  <?php 
    include "menu.php";
  ?>
<head>
  
</head>
<body>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/15.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">งานวิจัย</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
                      <li class="breadcrumb-item"><a href="news.php">ข่าวประชาสัมพันธ์</a></li>
                      <li class="breadcrumb-item"><a href="contact.php">ติดต่อเรา</a></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <form class="form-inline" action="/action_page.php"> 
      <input type="text" class="form-control mb-2 mr-sm-2 " id="email2" placeholder="ป้อนคำค้นหา" name="email">   
      <button type="submit" class="btn btn-primary mb-2">ค้นหา</button>
    </form>
    <br>        
    <table class="table table-striped">
      <thead>
        <tr>
          <th><center>ที่</center></th>
          <th><center>ชื่องานวิจัย</center></th>
          <th><center>หัวหน้าโครงการ</center></th>
          <th><center>ปีงบประมาณ</center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td><p class="service-box-title"><a href="#">พีชคณิตยูนิแกรีเมนเกอร์ของสูตรตัวบ่งปริมาณ C อิสระของชนิด (tau_n,(n))</a></p></td>
          <td>ผศ.ดร.เซาฟี บูสะมัญ</td>
          <td><center>2561</center></td>
        </tr>
        <tr>
          <td>2</td>
          <td><p class="service-box-title"><a href="#">ระเบียบวิธีไฟไนต์อินทิเกรชันสำหรับการหาพจน์ต้นกำเนิดความร้อนของปัญหาผกผัน</a></p></td>
          <td>ผศ.ดร.อารีนา ฮะซานี</td>
          <td><center>2560</center></td>
        </tr>
        
      </tbody>
    </table>
  </div>
</section>

<?php
  include "footer.php"
  ?>
</body>
</html>
