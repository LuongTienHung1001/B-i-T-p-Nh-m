
<?php
   
    session_start();

    
    if(isset($_POST['btnSubmitS'])){
        $ID = $_POST['ID'];
        $email = $_POST['txtEmail'];
        $name  = $_POST['txtUsename'];
        $phone = $_POST['txtPhone'];
      
        $conn = mysqli_connect('localhost','root','','baitapnhom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
       
        $sql = "UPDATE db_nguoidung SET TenDangNhap='$name',email ='$email',Phone = '$phone' where ma_nguoidung = '$ID' ";
        $result = mysqli_query($conn,$sql);
        if($result){
           header("location:http://localhost/profile/editprofile.php?ID=$ID");
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); 
        }
        mysqli_close($conn);
    }else{
        header("location: login.php");
    }