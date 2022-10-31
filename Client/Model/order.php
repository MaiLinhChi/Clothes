<?php
    class Order {
        // contructor
        function __construct()
        {
            
        }

        // methods
        function insertOrder($makh) {
            $database = new connect();
            $date = new DateTime("now");

            $datedtb = $date->format("y-m-d");

            $query = "INSERT INTO bill (`mahd`, `makh`, `ngaydat`, `tongtien`) VALUES (NULL, $makh, '$datedtb', 0)";
            $database->getExec($query);

            $select = "SELECT mahd FROM bill ORDER BY mahd DESC LIMIT 1";
            $result = $database->getItem($select);

            return $result[0];
        }

        function insertOrderDetail($mahd, $mahh, $quatity, $color, $size, $total) {
            $database = new connect();

            $query = "INSERT INTO `billdetail`(`mahd`, `mahh`, `soluong`, `mausac`, `kichthuoc`, `thanhtien`) VALUES ($mahd, $mahh, $quatity, '$color', '$size', '$total')";

            $database->getExec($query);
        }

        function updateTotalOrder($mahd) {
            $database = new connect();
            $cart = new Cart();
            $result = $cart->getTotalPrice();
            
            $query = "UPDATE `bill` SET `tongtien`='$result' WHERE mahd = $mahd";
            $database->getExec($query);
        }

        function getInfoCustomer($mahd) {
            $database = new connect();

            $query = "SELECT HD.mahd, HD.ngaydat, KH.tenkh, KH.diachi, KH.sodienthoai FROM customer AS KH, bill AS HD WHERE HD.mahd = $mahd AND KH.makh = HD.makh";
            $result = $database->getItem($query);
            return $result;
        }
        
        function getProductOrder($mahd) {
            $database = new connect();

            $query = "SELECT CT.mausac, CT.kichthuoc, CT.soluong, CT.thanhtien, HH.tenhh FROM billdetail AS CT, product AS HH WHERE CT.mahd = $mahd AND HH.mahh = CT.mahh";
            $result = $database->getListItems($query);
            return $result;
        }
    }
?>