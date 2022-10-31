<?php
    class Cart {
        // contructor
        function __construct()
        {
            
        }

        // method
        function addProduct($id, $color, $size, $quatity) {
            if(!(isset($_SESSION["cart"][$id]))) {
                $product = new Product();
                $result = $product->getDetailProduct($id);

                $price = $result['dongia'];
                $name = $result['tenhh'];
                $image = $result['hinhanh'];
                $total = $price * $quatity;

                $item = array(
                    "id"=>$id,
                    "color"=>$color,
                    "size"=>$size,
                    "quatity"=>$quatity,
                    "price"=>$price,
                    "name"=>$name,
                    "image"=>$image,
                    "total"=>$total,
                );
                $_SESSION["cart"][$id] = $item;
            } else {
                $quatity += $_SESSION["cart"][$id]["quatity"];
                $this->updateProduct($id, $quatity);
            }
        }

        function updateProduct($id, $quality) {
            if(!($quality <= 0)) {
                $_SESSION["cart"][$id]["quatity"] = $quality;
                $newtotal = $_SESSION["cart"][$id]["quatity"] * $_SESSION["cart"][$id]["price"];
                $_SESSION["cart"][$id]["total"] = $newtotal;
            } else {
                unset($_SESSION["cart"][$id]);
            }
        }

        function getTotalPrice() {
            $intomoney = 0;
            foreach($_SESSION["cart"] as $product) {
                $intomoney += $product["total"];
            }
            return $intomoney;
        }
    }
?>