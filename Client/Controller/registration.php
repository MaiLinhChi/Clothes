<?php
    $action = "registration";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "registration":
            include "./View/body/registration.php";
        break;
        
        case "registration_action":
            if(isset($_POST["registration"])) {
                $name = $_POST["name"];
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $username = $_POST["username"];
                $email = $_POST["email"];
                $pass = $_POST["password"];
                $password = md5($pass); // mã hóa mật khẩu 1 chiều

                $user = new User();
                $result = $user->insertUserC3($name, $address, $phone, $username, $email, $password);

                if($result) {
                    echo "<script>alert('Đăng ký thành công')</script>";
                } else {
                    echo "<script>alert('Đăng ký thất bại')</script>";
                }
            }

            include "./View/body/home.php";
        break;
    }
?>