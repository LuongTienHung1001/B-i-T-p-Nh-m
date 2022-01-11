<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="alpha.css">
    <title>Document</title>
</head>
<body>

<!-- START NAV -->
<div class="container-fluid" style="background-color: #FFFFFF;">
  <nav class="navbar navbar-expand-lg navbar-light " >

    <img src="img/logo_2.PNG" alt=""  class="rounded-circle" style="height: 40px;">
      <a class="navbar-brand" href="#"> INSTAGRAM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Đăng bài</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Chỉnh Sửa </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Xóa </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đăng xuất</a>
          </li>
          
        </ul>
      </div>
  </nav>
</div>
<!-- END NAV -->

<!-- <form action="upload.php" method="post" enctype="multipart/form-data" style="margin-left: 150px; margin-bottom: -30px;">
        Chọn file ảnh để upload lên tour
        <div class="container_flex" style="display: flex;">
          <input class="form-control" type="file" name="Myfile" style="width: 624px;">
          <input type="submit" class="btn btn-primary" name="Mysubmit" value="Đăng tải lên Tour" style="margin-left: 30px;">
        </div>
</form>  -->
      
<div class="container" style="width: 50%;">
<div class="container" style="border: 1px solid #ccc;">
<form action="upload.php" method="post" enctype="multipart/form-data" class="mb-5" >
          
          <div class="alert  text-center text-danger fw-bold text-uppercase" role="alert">
            <?php
                // Kiểm tra xem có tồn tại cái error hay không 
                if (isset($_GET['showTB'])) 
                {
                  
                echo  $_GET['showTB'];
                }
            ?>
          </div>
        <!-- <div class="container_flex" style="display: flex;">         
          <input class="form-control" type="file" name="files[]" multiple style="width: 546px; margin-left: 40px;">
          
        </div> -->

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
        <input style=" width: 750px" class="form-control" type="file" name="files[]" multiple style="width: 546px; margin-left: 40px;">

        <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nội dung</label>
        <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
        <input type="text" id="form6Example1" name="txtText" class="form-control" />

      </div>
      
      <div>
      <a  href="./homepage.php" class="btn btn-primary" style="text-decoration: none;" href="">Trang chủ</a>

      <input type="submit" class="btn btn-primary"  name="submit" value="Đăng bài" >
      <!-- <a type="button"   name="submit" value="Trang chủ" > -->
      </div>
 
</form>



</div>





  </div>

</div>
</div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>