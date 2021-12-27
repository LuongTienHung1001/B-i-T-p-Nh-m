<?php 

    if(isset($_POST['btnSignUp'])) {
        header("location: signup.php");
    }


    $user = $_POST['txtUser'];
    $email = $_POST['txtEmail'];
    $pass01 = $_POST['txtPass'];
    $pass02 = $_POST['txtPass2'];

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','baitapnhom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email' OR TenDangNhap='$user'";

        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result01 = mysqli_query($conn,$sql01);
    
        if(mysqli_num_rows($result01) > 0){
            $error = "User name or email is existed";
            header("location:signup.php?error=$error"); 
        }else{
            $sql02 = "INSERT INTO db_nguoidung(TenDangNhap, email, matkhau) VALUES ('$user', '$email', '$pass01')";
            $result02 = mysqli_query($conn, $sql02);

            if($result02 == true) {
                header("location: index.php");
            } else {
                $error = "Can not record!";
                header("location: signup.php?error=$error");
            }
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
?>