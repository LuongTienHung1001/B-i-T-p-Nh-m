<?php
        session_start();

        if(!isset($_SESSION['isLoginOK'])) {
            header("location:login.php");
        }
        $ID = $_SESSION['ID_USER'];
         
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        link
    <link rel="stylesheet" href="./css/style.css"/>
    
    <style>
        section img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
    
</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 60px;">
            <div class="container-fluid">
            <img width="auto" height="35" src="img/logo.PNG" alt="" style="margin-left: 200px;">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 300px;">
                <input type="text" placeholder="Search">
              </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 250px;">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item my_nav_item">
                    
                    <a id="btn_hienthi_home" class="nav-link " href="#" style="text-align: center;">
                        <img src="img/home.PNG" alt="" width="auto" height="22">
                    </a>
                  </li>
                  <li class="nav-item my_nav_item" class="show_btn_mess " style="position: relative;" >
                    
                    <a id="btn_hienthi_messenger" class="nav-link " href="#" >
                        <img src="img/messenger.PNG" alt="" width="auto" height="22">
                    </a>
                         <div id="show_message" class="show_mess">   
                         </div>
                  </li>

                  <li class="nav-item my_nav_item">                    
                    <a id="btn_hienthi_bangtin" class="nav-link " href="#" style="text-align: center;">
                        <img src="img/add.PNG" alt="" width="auto" height="22">
                    </a>
                  </li>

                  <li class="nav-item my_nav_item">
                    <a id="btn_hienthi_laban" class="nav-link " href="#" style="text-align: center;">
                        <img src="img/explore.PNG" alt="" width="auto" height="22">
                    </a> 
                  </li>

                  <li class="nav-item my_nav_item show_btn_thatim">
                    <a id="btn_hienthi_thongbao" class="nav-link " href="#" style="text-align: center;">
                        <img src="img/like.PNG" alt="" width="auto" height="22">
                    </a>                            
                    <!-- Phần hiển thị giỏ hàng -->
                    <div id="show_thongbao" class="show_thatim">   
            
                    </div>
                    </li>
                  <li class="nav-item my_nav_item" class ="show_profile">
                       
                         <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="story-icon-main"
                                    src="img\photo-1639697724570-e688c7cb5c4e.jpg"
                                    style="border-radius:50% ; width: 25px; height: 25px;">
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php $urledit = 'http://localhost/profile/profile.php?ID='.$ID ?>
                                <li> <a class="dropdown-item" href =' <?php echo $urledit ?>' >Profile</a></li>
                                <li><a class="dropdown-item" href="#">Saved</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Switch Accounts</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                    </a>  
                  </li>                
                </ul>
              </div>
            </div>
        </nav>
<section class="main" style="max-width: 500px;margin: 50px  auto">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center">
                <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">
                <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                <img src="./img/photo-1639318977081-f08ba8e8605d.jpg" alt="...">
                <img src="./img/photo-1639697724570-e688c7cb5c4e.jpg" alt="...">
                <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">
                <img src="./img/photo-1639972584775-e23e861f1595.jpg" alt="...">
                <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">
                <img src="./img/photo-1607670055106-e9280ef1c405.jpg" alt="...">

            </div>
            <div class="carousel-item text-center active">
                <img src="./img/photo-1608926712931-c2586dbcc7e5.jpg" alt="...">
                <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                <img src="./img/photo-1639697724570-e688c7cb5c4e.jpg" alt="...">
                <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">
                <img src="./img/photo-1639972584775-e23e861f1595.jpg" alt="...">
                <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                <img src="./img/istockphoto-1267194556-170667a.jpg" alt="...">

            </div>
            <div class="carousel-item text-center">
                <img src="./img/photo-1520262494112-9fe481d36ec3.jpg" alt="...">
                <img src="./img/photo-1592899677977-9c10ca588bbd.jpg" alt="...">
                <img src="./img/photo-1607670055106-e9280ef1c405.jpg" alt="...">
                <img src="./img/photo-1608926712931-c2586dbcc7e5.jpg" alt="...">
                <img src="./img/photo-1637946495075-fa1fdc2cd0d4.jpg" alt="...">
                <img src="./img/photo-1639318977081-f08ba8e8605d.jpg" alt="...">
                <img src="./img/photo-1639670788995-6592bbfdd65c.jpg" alt="...">
                <img src="./img/photo-1639905517784-b036046b14fc.jpg" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev bg-danger" style="top: 10px; width: 20px; height: 20px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">

            </span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-danger" style="top: 10px; width: 20px; height: 20px;" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">

            </span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="container" >
    <div class="row" style="margin-top: 70px;" >
        <div class="col-md-8">
           
            <div class="wrapper">
                <div class="left-col">
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="img/anh1.png" alt=""></div>
                                <p class="username">Porsche</p>
                            </div>
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        <img src="img/anh1.png" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img class="btn_antim" src="img/img_icon_timTrang.PNG" class="icon" alt="" style="margin-right: 3px;">
                                <img class="btn_hientim" src="img/img_icon_timDo.PNG" class="icon" alt="" style="display: none; margin-right: 3px;">
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                            <p class="likes">9,5721 likes</p>
                            <p class="description"><span>Porsche</span>Chia sẻ cho thầy đi <3 <3 <3 </p>
                            <p class="post-time">1 days ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Thêm bình luận...">
                            <button class="comment-btn">Đăng</button>
                        </div>
                    </div>
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="img/anh2.png" alt=""></div>
                                <p class="username">McLaren</p>
                            </div>
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        <img src="img/anh2.png" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img class="btn_antim" src="img/img_icon_timTrang.PNG" class="icon" alt="" style="margin-right: 3px;">
                                <img class="btn_hientim" src="img/img_icon_timDo.PNG" class="icon" alt="" style="display: none; margin-right: 3px;">
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                            <p class="likes">1,5721</p>
                            <p class="description"><span>McLaren </span> Tiền nhiều để làm gì ??? </p>
                            <p class="post-time">2 minutes ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Thêm bình luận...">
                            <button class="comment-btn">Đăng</button>
                        </div>
                    </div>
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="img/anh3.png" alt=""></div>
                                <p class="username">Ferrari</p>
                            </div>
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        
                        <img src="img/anh3.png" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img class="btn_antim" src="img/img_icon_timTrang.PNG" class="icon" alt="" style="margin-right: 3px;">
                                <img class="btn_hientim" src="img/img_icon_timDo.PNG" class="icon" alt="" style="display: none; margin-right: 3px;">
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                            <p class="likes">3,5721</p>
                            <p class="description"><span>Ferrari </span> 26 Sơn La chào anh em nhá :)) </p>
                            <p class="post-time">3 days ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Thêm bình luận...">
                            <button class="comment-btn">Đăng</button>
                        </div>
                    </div>
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="img/anh4.png" alt=""></div>
                                <p class="username">Lamborghini</p>
                            </div>
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        <img src="img/anh4.png" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img class="btn_antim" src="img/img_icon_timTrang.PNG" class="icon" alt="" style="margin-right: 3px;">
                                <img class="btn_hientim" src="img/img_icon_timDo.PNG" class="icon" alt="" style="display: none; margin-right: 3px;">
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                            <p class="likes">5,5721</p>
                            <p class="description"><span>Lamborghini </span> Giàu vì bạn sang vì vợ :v :v :v </p>
                            <p class="post-time">3 hours ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Thêm bình luận...">
                            <button class="comment-btn">Đăng</button>
                        </div>
                    </div>
                    <div class="post">
                        <div class="info">
                            <div class="user">
                                <div class="profile-pic"><img src="img/anh5.png" alt=""></div>
                                <p class="username">Bugatti</p>
                            </div>
                            <img src="img/option.PNG" class="options" alt="">
                        </div>
                        <img src="img/anh5.png" class="post-image" alt="">
                        <div class="post-content">
                            <div class="reaction-wrapper">
                                <img class="btn_antim" src="img/img_icon_timTrang.PNG" class="icon" alt="" style="margin-right: 3px;">
                                <img class="btn_hientim" src="img/img_icon_timDo.PNG" class="icon" alt="" style="display: none; margin-right: 3px;">
                                <img src="img/comment.PNG" class="icon" alt="">
                                <img src="img/send.PNG" class="icon" alt="">
                                <img src="img/save.PNG" class="save icon" alt="">
                            </div>
                            <p class="likes">7,5721</p>
                            <p class="description"><span>Bugatti </span> 29X5 chào anh em nhá :v :v :v </p>
                            <p class="post-time">5 hours ago</p>
                        </div>
                        <div class="comment-wrapper">
                            <img src="img/smile.PNG" class="icon" alt="">
                            <input type="text" class="comment-box" placeholder="Thêm bình luận ">
                            <button class="comment-btn">Đăng</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="col-md-4 " style="margin-top: 19px;"  >
            <div style="width: 293px; height: 300px; background: snow;">
                Profile
            </div>
        </div>
    </div>
</div>
        
    
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // THẢ TIM
        $(".btn_antim").click(function(){
            $(".btn_antim").hide();
            $(".btn_hientim").show();
        })
    </script>
        <script>
            // THẢ TIM
            $(".btn_hientim").click(function(){
                $(".btn_hientim").hide();
                $(".btn_antim").show();
            })
        </script>
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
