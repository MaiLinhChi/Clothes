<?php
    $action = "order";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "order":
            include "./View/body/order.php";
        break;
        
        case "order_detail":
            $order = new Order();
            $mahd = $order->insertOrder($_SESSION["makh"]);
            $_SESSION["mahd"] = $mahd;

            foreach($_SESSION["cart"] as $product) {
                $order->insertOrderDetail($mahd, $product["id"], $product["quatity"], $product["color"], $product["size"], $product["total"]);
            }

            $order->updateTotalOrder($mahd);
            include "./View/body/order.php";
        break;
    }
?>