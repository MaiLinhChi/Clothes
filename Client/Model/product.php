<?php
    class Product {
        // contructor
        function __construct()
        {
            
        }

        // methods
        function getProduct($id) {
            $database = new connect();

            $query = "SELECT * FROM product WHERE mahh = $id";
            $result = $database->getItem($query);
            return $result;
        }

        function getNewProductList() {
            $database = new connect();

            $query = "SELECT * FROM product WHERE giamgia = 0 ORDER BY mahh DESC LIMIT 8";
            $result = $database->getListItems($query);

            return $result;
        }

        function getSaleProducts() {
            $database = new connect();

            $query = "SELECT * FROM product WHERE giamgia > 0 ORDER BY mahh";
            $result = $database->getListItems($query);

            return $result;
        }

        function getSaleProductAll() {
            $database = new connect();

            $query = "SELECT * FROM product WHERE giamgia > 0 ORDER BY mahh";
            $result = $database->getListItems($query);

            return $result;
        }

        function getAllProduct() {
            $database = new connect();

            $query = "SELECT * FROM product WHERE giamgia = 0 ORDER BY mahh DESC";
            $result = $database->getListItems($query);

            return $result;
        }

        function getDetailProduct($id) {
            $database = new connect();

            $query = "SELECT * FROM product WHERE mahh = $id";
            $result = $database->getItem($query);

            return $result;
        }

        function getImageId($mahh) {
            $database = new connect();

            $query = "SELECT * FROM image WHERE mahh = $mahh";
            $result = $database->getListItems($query);

            return $result;
        }

        // function getColorGroup($group) {
        //     $database = new connect();

        //     $query = "SELECT DISTINCT mausac FROM product WHERE Nhom = $group";
        //     $result = $database->getListItems($query);

        //     return $result;
        // }

        // function getSizeGroup($mahh) {
        //     $database = new connect();

        //     $query = "SELECT size FROM size WHERE mahh = $mahh";
        //     $result = $database->getListItems($query);

        //     return $result;
        // }

        //========================= page
        function getCountProduct() {
            $database = new connect();

            $select = "SELECT count(*) FROM product WHERE giamgia = 0";
            $result = $database->getItem($select);
            
            return $result[0];
        }

        function getProductOnePage($start, $limit) {
            $database = new connect();

            $select = "SELECT * FROM product WHERE giamgia = 0 LIMIT $start, $limit";
            $result = $database->getListItems($select);

            return $result;
        }

        function getSearchProducts($name) {
            $database = new connect();

            $select = "SELECT * FROM product WHERE tenhh LIKE '%$name%'";
            $result = $database->getListItems($select);

            return $result;
        }
    }
?>