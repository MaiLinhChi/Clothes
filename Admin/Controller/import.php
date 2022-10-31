<?php
    $action = "import";
    
    if(isset($_GET["act"])) {
        $action = $_GET["act"];
    }

    switch($action) {
        case "import":
            isset($_SESSION["admin"]) ? include "./View/main/importCsv.php" : include "./View/main/login.php";
        break;
        case "import_action":
            if(isset($_SESSION["admin"])) {
                if(isset($_POST["submit"])) {
                    $file = $_FILES["file"]["tmp_name"];
                    file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
    
                    $file_open = fopen($file, "r");
    
                    $Product = new Product();
                    while(($csv = fgetcsv($file_open, 1000, ',')))
                    {
                        $maloai = $csv[1];
                        $tenloai = $csv[2];
                        $tenhh = $csv[3];
                        $dongia = $csv[4];
                        $giamgia = $csv[5];
                        $hinhanh = $csv[6];
                        $soluotxem = $csv[7];
                        $ngaylap = $csv[8];
                        $mota = $csv[9];
                        $tonkho = $csv[10];
                        $mausac = $csv[11];
                        
                        $Product->insertProductType($maloai, $tenloai, $tenhh, $dongia, $giamgia, $hinhanh, $soluotxem, $ngaylap, $mota, $tonkho, $mausac);
                    }
                    echo "<script>alert('IMPORTED!!!')</script>";
                    include "./View/main/product.php";
                }
            } else {
                include "./View/main/login.php";
            }
        break;
    }

?>