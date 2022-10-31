<?php
    $action = "show";

    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "show":
            isset($_SESSION["admin"]) ? include "./View/main/product.php" : include "./View/main/login.php";
        break;
        case "add":
            isset($_SESSION["admin"]) ? include "./View/main/addProduct.php" : include "./View/main/login.php";
        break;
        case "insert":
            if(isset($_SESSION["admin"])) {
                if(isset($_POST["submit"])) {
                    $mahh = $_POST["mahh"];
                    $tenhh = $_POST["tenhh"];
                    $dongia = $_POST["dongia"];
                    $giamgia = $_POST["giamgia"];
                    $hinhanh = $_FILES["image"]["name"];
                    $maloai = $_POST["maloai"];
                    $luotxem = $_POST["luotxem"];
                    $ngaylap = $_POST["ngaylap"];
                    $mota = $_POST["mota"];
                    $tonkho = $_POST["tonkho"];
                    $mausac = $_POST["mausac"];

                    $Product = new Product();
                    $Product->insertProduct($tenhh, $dongia, $giamgia, $hinhanh, $maloai, $luotxem, $ngaylap, $mota, $tonkho, $mausac);

                    uploadImage($hinhanh);
                    echo "<script>alert('Saved')</script>";

                    include "./View/main/product.php";
                }
            }
            else {
                include "./View/main/login.php";
            }
        break;
        case "edit":
            isset($_SESSION["admin"]) ? include "./View/main/editProduct.php" : include "./View/main/login.php";
        break;
        case "update":
            if(isset($_SESSION["admin"])) {
                if(isset($_POST["submit"])) {
                    $mahh = $_POST["mahh"];
                    $tenhh = $_POST["tenhh"];
                    $dongia = $_POST["dongia"];
                    $giamgia = $_POST["giamgia"];
                    $hinhanh = $_FILES["image"]["name"];
                    $maloai = $_POST["maloai"];
                    $luotxem = $_POST["soluotxem"];
                    $ngaylap = $_POST["ngaylap"];
                    $mota = $_POST["mota"];
                    $tonkho = $_POST["tonkho"];
                    $mausac = $_POST["mausac"];

                    $Product = new Product();
                    $Product->updateProduct($mahh, $tenhh, $dongia, $giamgia, $hinhanh, $maloai, $luotxem, $ngaylap, $mota, $tonkho, $mausac);

                    uploadImage($hinhanh);
                    echo "<script>alert('UPDATED!!!')</script>";

                    include "./View/main/product.php";
                }
            } else {
                include "./View/main/login.php";
            }
        break;
        case "delete":
            if(isset($_SESSION["admin"])) {
                if(isset($_GET["id"])) {
                    $mahh = $_GET["id"];
                    $Product = new Product();
                    $Product->deleteProduct($mahh);
                    echo "<script>alert('DELETED')</script>";
                }
                include "./View/main/product.php";
            } else {
                include "./View/main/login.php";
            }
        break;
    }
?>