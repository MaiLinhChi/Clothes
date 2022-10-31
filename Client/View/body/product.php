<?php
  include "./View/header/banner.php";
?>

<?php
    $product = new Product();
    $count = $product->getCountProduct();
    
    $limit = 4;

    $p = new Page();
    $page = $p->allPages($count, $limit);

    $start = $p->startPage($limit);
    $currentPage = $_GET["page"];
?>

<section class="container">
    <div class="text-center mt-5">
        <?php
            $hh = new Product();

            if(isset($_GET["act"])) {
                $act = $_GET["act"];
                switch($act) {
                    case "product":
                        $result = $hh->getProductOnePage($start, $limit);
                        echo "<h3 class='mb-5 font-weight-bold text-align-center'>SẢN PHẨM</h3>";
                    break;
                    case "sale":
                        $result = $hh->getSaleProductAll();
                        echo "<h3 class='mb-5 font-weight-bold'>SẢN PHẨM KHUYẾN MÃI</h3>";
                    break;
                    case "search":
                        $result = $hh->getSearchProducts($_POST["search"]);
                        echo "<h3 class='mb-5 font-weight-bold'>SẢN PHẨM TÌM KIẾM</h3>";
                    break;
                }     
            }
        ?>
    </div>

    <div class="row">
        <?php
                while($product = $result->fetch()):
        ?>
        <div class="col-lg-3 col-6 p-3">
            <div class="thean">
                <div class="hieuungsp text-center">
                    <div class="chu">
                        <p style="padding: 0 10px 10px 10px; color: white"><b><?php echo $product["tenhh"]; ?></b></p>
                        <?php
                            if($act == "product") {
                                    echo '<b><font color="gold">'.number_format($product['dongia']) . '.00' . '<sup><u>$</u></sup></font></b><br>';
                            } elseif($act == "sale") {
                                    echo '
                                    <font style="text-decoration: line-through;" color="gold">'.number_format($product['giamgia']) . '.00' . '<sup><u>$</u></sup></font>
                                    <b><font color="red">'.number_format($product['dongia']) . '.00' . '<sup><u>đ</u></sup></font><br></b>';
                            }
                        ?>
                        <a type="button" class="btn btn-outline-danger mt-3"
                            href="index.php?action=home&act=detail&id=<?php echo $product["mahh"]; ?>">Xem
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
</section>  
            
 
<section class="container mt-5">
    <div class="d-flex justify-content-center">
    <ul class="pagination">
        <?php
            if( $currentPage > 1 && $page > 1)
            {
                echo '<li class="page-item" ><a class="page-link" href="index.php?action=home&act=product&page='.($currentPage-1).'">
                Prev</a></li>';
            }
            for($i=1;$i<=$page;$i++)
            {
        ?>
            <li class="page-item" ><a class="page-link" href="index.php?action=home&act=product&page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php
            }
            if($page > $currentPage && $page > 1)
            {
                echo '<li class="page-item" ><a class="page-link" href="index.php?action=home&act=product&page='.($currentPage+1).'">Next</a></li>'; 
            }
        ?>
    </ul>
    </div>
</section>