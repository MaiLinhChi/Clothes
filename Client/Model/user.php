<?php
    class User {
        // contructor
        function __construct()
        {
            
        }

        // method
        function insertUserC1($name, $address, $phone, $username, $email, $password) {
            $database = new connect();

            $query = "INSERT INTO customer (`makh`, `tenkh`, `taikhoan`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES (NULL, '$name', '$username', '$password', '$email', '$address', '$phone')";

            $result = $database->getExec($query);
            return $result;
        }

        function insertUserC2($name, $address, $phone, $username, $email, $password)
        {
            $database = new connect();

            $query = "INSERT INTO customer (`makh`, `tenkh`, `taikhoan`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES (NULL, ?, ?, ?, ?,?, ?)";

            $result = $database->getPrepare($query);
            $result->execute([$name, $username, $password, $email, $address, $phone]);

            return $result;
        }

        function insertUserC3($name, $address, $phone, $username, $email, $password)
        {
            $database = new connect();

            $query = "INSERT INTO customer (`makh`, `tenkh`, `taikhoan`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES (NULL, :tenkh,:taikhoan, :matkhau, :email, :diachi, :sodienthoai)";

            $result = $database->getPrepare($query);
            
            $result->bindValue(':tenkh',$name);
            $result->bindValue(':taikhoan',$username);
            $result->bindValue(':matkhau',$password);
            $result->bindValue(':email',$email);
            $result->bindValue(':diachi',$address);
            $result->bindValue(':sodienthoai',$phone);

            // hoặc

            // $result->bindParam(':tenkh',$name);
            // $result->bindParam(':taikhoan',$username);
            // $result->bindParam(':matkhau',$phone);
            // $result->bindParam(':email',$email);
            // $result->bindParam(':diachi',$password);
            // $result->bindParam(':sodienthoai',$address);

            $result->execute();

            return $result;
        }

        function login($username, $password) {
            $database = new connect();

            $select = "SELECT * FROM customer WHERE taikhoan = '$username' AND matkhau = '$password'";
            $result = $database->getItem($select);

            return $result;
        }

        //========================= comment
        function countComment($id) {
            $database = new connect();

            $select = "SELECT count(*) FROM comment WHERE mahh = $id";
            $result = $database->getItem($select);

            return $result[0];
        }

        function insertComment($mahh, $makh, $noidung) {
            $database = new connect();

            $d = new DateTime("now");
            $date = $d->format("Y-m-d");

            $query = "INSERT INTO `comment`(`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES (NULL, $mahh, $makh, '$date','$noidung')";

            $result = $database->getExec($query);
        }

        function getComment($id) {
            $database = new connect();

            $select = "SELECT kh.tenkh, cm.noidung, cm.ngaybl FROM comment AS cm, customer AS kh WHERE cm.mahh = $id AND cm.makh = kh.makh";
            $result = $database->getListItems($select);

            return $result;
        }
    }
?>