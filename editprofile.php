<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProfile</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./alpha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php require_once "header_profile.php"?>
        <div class="d-flex">
        <div class="edit_profile p-3 p-4" style="">
            <div class="edit_profile_sidebar " style="">
                <div class="fw-bold"><a> Edit Profile</a></div>
                <div><a> Professional Account</a></div>
                <div><a> Change Password</a></div>
                <div><a> App and Websites</a></div>
                <div><a> Email and SMS</a></div>
                <div><a> Push Notifications</a></div>
                <div><a> Manage Contacts </a></div>
                <div><a> Login Activity </a></div>
                <div><a> Help </a></div>
            </div>
        </div>

        <div class="edit p-3 p-4 " style="">
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
            <form action="process_edit.php" method ='POST'>
        <div class="input-group input-group-sm mb-3">
           <?php echo '<input type="text" name= "ID" class="d-none" value = '.$ID.'>' ?>
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
            name="txtEmail" aria-describedby="inputGroup-sizing-sm" value = '<?php echo $row['email'] ?>'>
            </div>
        <div class="comment">Help people discover your account by using the name you're known by: either your full name, nickname, or business name.
            You can only change your name twice within 14 days.</div>
       
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Use Name</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
            name="txtUsename"aria-describedby="inputGroup-sizing-sm" value = '<?php echo $row['TenDangNhap'] ?>'>
        </div>
        <div class="comment">In most cases, you'll be able to change your username back to ? for another 14 days.</div>
        
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Phone Number</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
            name="txtPhone"aria-describedby="inputGroup-sizing-sm" value = '<?php echo $row['Phone'] ?>'>
        </div>

        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <button type="submit" class= "btn btn-primary"  name="btnSubmitS" >Submit</button>
            
        </div>
        </div>
        </form>
        <?php  
                    }
                    // Bước 04: Đóng kết nối Database Server
                    mysqli_close($conn);
                ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="/Javascrip/bootstrap.bundle.min.js"></script>
</body>

</html>