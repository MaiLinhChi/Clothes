<?php
    $action = "home";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "home":
            include "./View/body/home.php";
        break;

        case "sale":
        case "product":
            include "./View/body/product.php";
        break;

        case "detail":
            include "./View/body/detail.php";
        break;
        
        case "search":
            include "./View/body/product.php";
        break;

        case "comment":
            if(isset($_POST["addComment"])) {
                $makh = $_SESSION["makh"];
                $mahh = $_POST["mahh"];
                $noidung = $_POST["comment"];


                $user = new User();
                $user->insertComment($mahh, $makh, $noidung);
            }
            include "./View/body/detail.php";
            break;
    }
?>