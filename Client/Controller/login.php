<?php
    $action = "login";
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "login":
            include "./View/body/login.php";
        break;
        
        case "login_action":
            if(isset($_POST["login"])) {
                $username = $_POST["username"];
                $pass = $_POST["password"];
                $password = md5($pass);
                $user = new User();
                $result = $user->login($username, $password);
            }

            if(isset($result["makh"])) {
                $_SESSION['makh'] = $result['makh'];
                $_SESSION['tenkh'] = $result['tenkh'];
                $_SESSION['taikhoan'] = $result['taikhoan'];
                $_SESSION['matkhau'] = $result['matkhau'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['diachi'] = $result['diachi'];
                $_SESSION['sodienthoai'] = $result['sodienthoai'];
                echo "<script>alert('Đăng nhập thành công')</script>";
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
            } 
            else {
                echo "<script>alert('Đăng nhập thất bại')</script>";
                include "./View/body/login.php";
            }
        break;

        case "logout":
            // cách 1
            // session_destroy(); hủy hết là đi luôn cái giỏ hàng

            // cách 2
            if(isset($_SESSION["makh"])) {
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['taikhoan']);
                unset($_SESSION['matkhau']);
                unset($_SESSION['email']);
                unset($_SESSION['diahchi']);
                unset($_SESSION['sodienthoai']);
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
        break;
    }
?>