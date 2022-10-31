<?php
    $action = "cart";

    if(!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "cart":
            include "./View/body/cart.php";
        break;
        
        case "add_product":
            if(isset($_POST["add_product"])) {
                $id = $_POST["mahh"];
                $color = $_POST["mausac"];
                $size = $_POST["kichthuoc"];
                $quatity = $_POST["soluong"];
                $cart = new Cart();
                $cart->addProduct($id, $color, $size, $quatity);
            }
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;

        case "delete_product":
            unset($_SESSION["cart"][$_GET["id"]]);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
        break;

        case "update_product":
            foreach($_SESSION["cart"] as $key=>$product) {
                if($_SESSION["cart"][$key]["quatity"] != $_POST["quatity$key"]) {
                    $cart = new Cart();
                    $cart->updateProduct($key, $_POST["quatity$key"]);
                    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=cart"/>';
                }
            }
        break;
    }
?>