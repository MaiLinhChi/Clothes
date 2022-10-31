<?php
    $action="login";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    switch($action){
        case "login":
            include './View/main/login.php';
        break;
        case "login_action":
            $user = $_POST['adminname'];
            $password = $_POST['adminpass'];
            $hasdPass = md5($password);

            $Login = new Login();
            $user = $Login->logAdmin($user, $hasdPass);
            
            if($user)
            {
                $_SESSION['admin'] = $user[0];
                echo'<script> alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=./index.php?action=product"/>';
            }
            else{
                echo'<script> alert("Đăng nhập không thành công");</script>';
                include "./View/main/login.php";
            }
        break;
        case "logout":
            if(isset($_SESSION["admin"])) {
                unset($_SESSION['admin']);
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=login"/>';
        break;
    }
?>