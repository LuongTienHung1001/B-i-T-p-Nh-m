<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
       <link rel="stylesheet" href="/css/bootstrap.min.css">
       <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./Omega.css">
    <title>Instagram</title>
</head>

<body>
    <?php require_once "header_profile.php"?>
    <div class="container-fluid">
        <div class="container" style="max-width: 952px;">
            <div class="row mt-3">
                <div class="px-0 col-4 col-md-5">
                    <div class="profile_img">
                        <img id="photo-ad" src="img\photo-1639697724570-e688c7cb5c4e.jpg" alt="" style="border-radius:50% ;">
                    </div>
                </div>
                <?php
               $ID = $_GET["ID"];
               $conn = mysqli_connect('localhost','root','','baitapnhom');
               if(!$conn){
                   die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
               }
                 // Bước 02: Thực hiện truy vấn
                 $sql = "SELECT * from db_nguoidung where ma_nguoidung = '$ID'";
                 $result = mysqli_query($conn,$sql);
                 // Bước 03: Xử lý kết quả truy vấn
                 if(mysqli_num_rows($result) > 0){
                     $row = mysqli_fetch_assoc($result);
             ?>
                <div class="px-0 col-8 col-md-7">
                    <div class="profile_content">
                         <!-- <form class="profile-heade d-sx-none" action="process_edit.php" method="POST"> -->
                        
                           
                             <div class="d-flex align-items-center">
                                <span class="profile-name"><?php echo $row['TenDangNhap'] ?></span>
                                <?php $urledit = 'http://localhost/profile/editprofile.php?ID='.$ID ?>
                                  <a class="ms-5 btn btn-primary"style='text-decoration: none'  href =' <?php echo $urledit ?>' >Edit profile</a>
                                
                             </div>
                           
                            <span class="profile-icon fs-sx-20">
                                <i class="bi bi-gear-wide"></i>
                            </span>
                           <!-- </form> -->
                    <div class="profile-body my-md-3 my-lg-3 text-center">
                         <span class="profile-posts"> 
                                <span class="fw-bold"> 9 </span> posts
                        </span>
                        <span  class="profile-followers text-center"> 
                                <span class="fw-bold"> 100 </span> followers
                        </span>
                        
                        <span class="profile-following text-center">
                                <span class="fw-bold"> 1000 </span> following
                        </span>
                    </div>
                        <div class="mt-md-3">
                            <div class="profile-realname fw-bold"><?php echo $row['TenDangNhap'] ?></div>
                        </div>
                        <div>
                            <div class="Profile-link d-sx-none"><a
                                    href="https://www.facebook.com/profile.php?id=100011922165857">https://www.facebook.com/profile.php?id=100011922165857</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                     
                 }
                 // Bước 04: Đóng kết nối Database Server
                 mysqli_close($conn);
             ?>
            <div class="row mt-md-5 px-md-5 mt-4">
                <div class="col-md-3 col-3">
                    <div class="img-icon">
                        <img class="story-icon1 1"src="https://images.unsplash.com/photo-1639855232992-6fbc79358f68?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60
                        " style="border-radius:50% ;">
                    </div>
                        
                    <div class="information fw-bold">Tin nổi bật</div>
                </div>
                <div class="col-md-3 col-3"> 
                    <div class="img-icon">
                        <img class="story-icon1" src="./img/photo-1520262494112-9fe481d36ec3.jpg"
                        style="border-radius:50% ;">
                    </div>
                    <div class="information fw-bold d-sx-none">Tin nổi bật</div>
                </div>
                <div class="col-md-3 col-3"> 
                    <div class="img-icon">
                        <img class="story-icon1" src="./img/photo-1608926712931-c2586dbcc7e5.jpg"
                        style="border-radius:50% ;">
                    </div>
                    <div class="information fw-bold d-sx-none">Tin nổi bật</div>
                </div>
                <div class="col-md-3 col-3"> 
                    <div class="img-icon">
                        <img class="story-icon1" src="./img/photo-1639318977081-f08ba8e8605d.jpg"
                        style="border-radius:50% ;">
                    </div>
                    <div class="information fw-bold d-sx-none">Tin nổi bật</div>
                </div>
            </div>

            <div class="row border-top mt-3  py-3 px-md-5" style="max-width: 600px; margin: 0 auto; align-items: center;" >
                <div class="col-4 col-md-3 text-center">
                    <i class="bi bi-camera-fill pe-md-2 fs-sx-20"></i>  
                    <span class="posts d-sx-none">POSTS</span>
                </div>
                <div class="col-4 col-md-3 text-center"> 
                    <i class="bi bi-camera-fill pe-md-2 fs-sx-20"></i>
                    <span class="d-sx-none">VIDEOS</span>
                </div>
                <div class="col-4 col-md-3 text-center"> 
                    <i class="bi bi-camera-fill pe-md-2 fs-sx-20"></i> 
                    <span class="d-sx-none">SAVED</span> 
                </div>
                <div class="d-sx-none col-4 col-md-3 text-center"> 
                    <i class="bi bi-camera-fill pe-md-2 fs-sx-20"></i> 
                    <span>TARGET</span> 
                </div>
            </div>

            <div class="row mt-md-3 py-md-3 px-md-5">
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1639670788995-6592bbfdd65c.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1639697724570-e688c7cb5c4e.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1639905517784-b036046b14fc.jpg"alt="">
                </div>

                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1639972584775-e23e861f1595.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/istockphoto-1267194556-170667a.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1520262494112-9fe481d36ec3.jpg"alt="">
                </div>

                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1607670055106-e9280ef1c405.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1608926712931-c2586dbcc7e5.jpg"alt="">
                </div>
                <div class="col-4 p-1">
                    <img class="picture-number-1" src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg"alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/Javascrip/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <script>
                $(document).ready(function(){
                $("#btn_hienthi_thongbao").click(function(){
                    $("#show_thongbao").toggle();
                });
                });btn_hienthi_messenger
        </script>
        <script>
            $(document).ready(function(){
            $("#btn_hienthi_messenger").click(function(){
                $("#show_message").toggle();
            });
            });
        </script>
</body>

</html>