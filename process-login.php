<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','baitapnhom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_nguoidung WHERE email = '$email' AND matkhau='$pass'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
            // CẤP THẺ LÀM VIỆC
            $_SESSION['ID_USER'] = $data['ma_nguoidung'];
            $_SESSION['isLoginOK'] = $email;
           header("location: homepage.php"); //Chuyển hướng về Trang quản trị
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location: login.php");
    }
  
    // session_start();
    // if(isset($_POST['btnSignIn'])) {
        
    //      $email = $_POST['txtEmail'];
    //      $pass  = $_POST['txtPass'];
        
    //      $conn = mysqli_connect("localhost", "root", "", "baitapnhom");
    //      if(!$conn) {
    //          die("Connect failure");
    //      }
         
    //     $sql = "SELECT * FROM db_nguoidung WHERE email = '$email' or TenDangNhap = '$email'";
    //     $result = mysqli_query($conn, $sql);
        
    //     if(mysqli_num_rows($result) > 0) {
    //         $data = mysqli_fetch_assoc($result);
    //         if(password_verify($pass, $data['matkhau'])) {    
    //             $_SESSION['isLoginOk'] = $email;
    //             header("location: homepage.php");
    //         }else{
              
    //         }
    //     } else  {
    //         $error = "failure";
    //         header("location: login.php?error=$error");
    //     }
    // } else {
    //     header("location: login.php");
       
    // }
   
    // // Kỹ thuật session
    // // TẠO SECSSION : Mặc định mỗi phiên làm việc có thời hạn là 24 phút 
    // // Nếu trong 24 phút mà người dùng không thao tác gì với trang web sẽ thu hồi quyền (Mặc định của apache)
    // // Nếu người dùng chủ động chọn logOut thì sẽ hủy phiên chủ động và bắt đăng nhập lại
    // session_start();

    // // loin.php gửi DỮ LIỆU SANG 
    // // Nhân dữ liệu từ PHP truyền sang
    
    // // Để tránh trường hợp người dùng cố truy cập bằng đường dẫn cần phải 
    // // có đoạn code kiểm tra xem người dùng có ấn vào nút submit hay không 
    // if(isset($_POST['btnSignIn']))
    // {   
    //     // NẾU CÓ THÌ MỚI THỰC THI TIẾP
    //     $email = $_POST['txtEmail'];
    //     $pass = $_POST['txtPass'];


    //     // Ở đây còn phải kiểm tra người dùng đã nhập hay chưa
    //     // Bước 1 : kết nối database server
    //     $conn = mysqli_connect('localhost','root','','baitapnhom'); // biến kết nối tới csdl

    //     // Nếu kết nối thất bại thì dừng lại và hiển thị lỗi 
    //     if(!$conn){
    //         die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    //     }
    //     // Nếu bỏ qua khối if tức là đã kết nối csdl thành công 
        

    //     $sql_test = " SELECT * FROM db_nguoidung WHERE email = '$email' OR TenDangNhap= '$email' AND status = 0 ";
    
    
    //     // Nếu thực hiện thành công trả về tập kết quả các bản ghi
    //     $sql_test = mysqli_query($conn,$sql_test); // trả về số bản ghi 

    //     if(mysqli_num_rows($sql_test) > 0)
    //     {
    //         // NẾU CÓ TỒN TẠI BIẾN KẾT QUẢ TỨC LÀ EMAIL HOẶC TÊN ĐĂNG NHẬP ĐÃ TỒN TẠI
    //         $thongBaoLoi = "Tên đăng nhập chưa được kích hoạt";
    //         header("location: login.php?error=$thongBaoLoi"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi
    //     }
    //     else 
    //     {

    //     // Bước 2: Thực hiện truy vấn
    //     // SỬ DỤNG KĨ THUẬT PREPARED STATEMENT
    //     $sql = " SELECT * FROM db_nguoidung WHERE (email = ? OR TenDangNhap = ?) AND status = 1"; 
    //     // Kiểm tra email này có tồn tại không, nếu có : Lấy mật khẩu tương ứng của nó 

    //     $stmt = mysqli_prepare($conn,$sql); // thay vì query trực tiếp thì sử dụng kỹ thuật mysqli_prepare

    //     $user = $email ;

    //     mysqli_stmt_bind_param($stmt, "ss",$email,$user);

    //     $ketqua = mysqli_query($conn,$sql); // trả về số bản ghi 

    //     echo $status;
    //     if(mysqli_stmt_execute($stmt))
    //     {
    //         // Lấy ra bản ghi chứa thông tin tương ứng Email
    //         mysqli_stmt_bind_result($stmt,$mand,$tennd,$emailnd,$matkhaund,$status,$link,$timeat);
            
    //         if((mysqli_stmt_fetch($stmt)) && $status =1 )
    //         {
    //              if(password_verify($pass,$matkhaund))
    //             {
    //                 $_SESSION['isLoginOK'] = $email;
    //                 $show_name = $email;
    //                 header("location: homepage.php?showname= $show_name");  
    //             }
    //             else
    //             {
    //                 $thongBaoLoi = "Bạn nhập thông tin email hoặc mật khẩu chưa chính xác";
    //                 header("location:login.php?error=$thongBaoLoi"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi
    //             }                
    //         }
    //         // else if( mysqli_stmt_fetch($stmt)  )
    //         // {
    //         //     $thongBaoLoi = "Tài khoản chưa được kích hoạt";
    //         //     header("location: login.php?error=$thongBaoLoi"); // Có lỗi => chuyển hướng sang 1 trang thông báo lỗi

    //         // }
    //         else{
    //             $thongBaoLoi = "Tài khoản không tồn tại";
    //             header("location:login.php?error=$thongBaoLoi"); 
    //         }
    //     }
    //     }
    //     mysqli_close($conn);
    // }
    // else
    // {
    //     //Đây là trường hợp người dùng chưa ấn vào nút submit thì bắt họ đăng nhập lại
    //     header("location:login.php");
    // }



?>

