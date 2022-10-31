  
<!--Section: Examples-->
<section id="examples" class="container">
    <!-- Heading -->
    <h3 class="font-weight-bold text-center" style="color: red; margin: 100px 0 60px 0">SẢN PHẨM MỚI NHẤT</h3>
    
    <div class="row">
        <!-- php get new product list -->
        <?php
            $hh = new Product();

            $result = $hh->getNewProductList();
            while($product = $result->fetch()):
        ?>
        <!-- ============================ -->

        <div class="col-lg-3 col-6 p-3">
            <div class="thean">
                <div class="hieuungsp text-center">
                    <div class="chu">
                        <p style="padding: 0 10px 10px 10px; color: white"><b><?php echo $product["tenhh"]; ?></b></p>
                        <b><font color="gold"><?php echo number_format($product["dongia"]) . ".00"; ?><sup><u>$</u></sup></font><br></b>
                        <a type="button" class="btn btn-outline-danger mt-3" 
                            href="index.php?action=home&act=detail&id=<?php echo $product["mahh"]; ?>">Xem
                        </a>
                    </div>
                </div>
                <img style="object-fit: contain; width:100%; display: block" src="./Content/img/main/<?php echo $product["hinhanh"]; ?>" class="img-fluid" alt="<?php echo $product["tenhh"]; ?>">
            </div>
        </div>


        <!-- end while -->
        <?php
            endwhile;
        ?>
        <!-- ================== -->
    </div>
    <div style="text-align: center; margin-top: 50px">
        <a href="index.php?action=home&act=product" class="btn btn-primary">
            <span>Xem chi tiết</span>
        </a>
    </div>
</section>

<section class="container">
    <!-- Heading -->
    <h3 class="font-weight-bold" style="color: red; text-align:center; margin: 100px 0 60px 0">SẢN PHẨM KHUYẾN MÃI</h3>
    <!--Grid row-->
    <div class="row">
        <!-- php get list product sale -->
            <?php
                $hh = new Product();
                $result = $hh->getSaleProducts();

                while($product = $result->fetch()):
            ?>
        <!-- =============================== -->
        <div class="col-lg-3 col-6 p-3">
            <div class="thean">
                <div class="hieuungsp text-center">
                    <div class="chu">
                        <p style="padding: 0 10px 10px 10px; color: white"><b><?php echo $product["tenhh"]; ?></b></p>
                        <font style="text-decoration: line-through;"><?php echo number_format($product["dongia"]) . ".00"; ?><sup><u>$</u></sup></font>
                        <b><font color="gold"><?php echo number_format($product['giamgia']) . ".00";?><sup><u>$</u></sup></font><br></b>
                        <a type="button" class="btn btn-outline-danger mt-3" href="index.php?action=home&act=detail&id=<?php echo $product["mahh"]; ?>">Xem
                        </a>
                    </div>
                </div>
                <img style="object-fit: contain; width:100%; display: block" src="./Content/img/main/<?php echo $product["hinhanh"]; ?>" class="img-fluid" alt="<?php echo $product["tenhh"]; ?>">
            </div>
        </div>

        <?php
            endwhile;
        ?>

    </div>
    <div style="text-align: center; margin-top: 50px">
        <a href="index.php?action=home&act=sale" class="btn btn-primary">
            <span>Xem chi tiết</span>
        </a>
    </div>
</section>
  <!-- end sản phẩm khuyến mãi -->