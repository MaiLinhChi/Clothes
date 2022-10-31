<?php
    class Product {
        // Properties

        // Contructor
        function __construct()
        {
            
        }

        // Method
        function getListProduct() {
            $db = new connect();
            $select = "SELECT * FROM product";
            $result = $db->getListItems($select);

            return $result;
        }

        function getCategoryList() {
            $db = new connect();
            $select = "SELECT maloai, tenloai FROM product GROUP BY maloai";

            $result = $db->getListItems($select);
            return $result;
        }

        function insertProduct($tenhh, $dongia, $giamgia, $hinhanh, $maloai, $luotxem, $ngaylap, $mota, $tonkho, $mausac) {
            $db = new connect();

            $query = "INSERT INTO product(mahh, tenhh, dongia, giamgia, hinhanh, maloai, soluotxem, ngaylap, mota, tonkho, mausac) VALUES(NULL, '$tenhh', $dongia, $giamgia, '$hinhanh', $maloai, $luotxem, '$ngaylap', '$mota', $tonkho, '$mausac')";

            $db->getExec($query);
        }

        function getProductById($id) {
            $db = new connect();
            $select = "SELECT * FROM product WHERE mahh=$id";

            $result = $db->getItem($select);
            return $result;
        }

        function updateProduct($mahh, $tenhh, $dongia, $giamgia, $hinhanh, $maloai, $luotxem, $ngaylap, $mota, $tonkho, $mausac) {
            $db = new connect();
            $query = "UPDATE product SET tenhh= '$tenhh', dongia= $dongia, giamgia= $giamgia, hinhanh= '$hinhanh', maloai= $maloai, soluotxem= $luotxem, ngaylap= '$ngaylap', mota= '$mota', tonkho= $tonkho , mausac= '$mausac' WHERE mahh = $mahh";


            $db->getExec($query);
        }

        function deleteProduct($mahh) {
            $db = new connect();
            $query = "DELETE FROM product WHERE mahh=$mahh";

            $db->getExec($query);
        }

        function insertProductType($maloai, $tenloai, $tenhh, $dongia, $giamgia, $hinhanh, $soluotxem, $ngaylap, $mota, $tonkho, $mausac) {
            $db = new connect();
            
            $query = "INSERT INTO product(mahh, maloai, tenloai, tenhh, dongia, giamgia, hinhanh, soluotxem, ngaylap, mota, tonkho, mausac) VALUES (NULL, $maloai, '$tenloai', '$tenhh', $dongia, $giamgia, '$hinhanh', $soluotxem, '$ngaylap', '$mota', $tonkho, '$mausac')";

            $db->getExec($query);
        }

        function getListProductStatistical() {
            $db = new connect();

            $query = "SELECT a.mahh,a.tenhh,sum(soluongmua) as soluongban from product a INNER join billdetail b on a.mahh=b.mahh GROUP by a.mahh,a.tenhh";

            $result = $db->getListItems($query);
            return $result;
        }
    } 
?>