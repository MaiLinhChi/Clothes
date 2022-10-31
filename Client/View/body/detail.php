<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
    }
</script>


<section class="container">
    <h3 class="font-weight-bold text-center" style="margin: 100px 0 80px 0; color: red">CHI TIẾT SẢN PHẨM</h3>

    <article class="col-12">
            <form action="index.php?action=cart&act=add_product" method="post">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="tab-content">
                           <?php
                                if(isset($_GET["id"])) {
                                    $id = $_GET["id"];
                                    
                                    $hh = new Product();
                                    $product = $hh->getDetailProduct($id);
                                }
                           ?>
                            <div class="tab-pane active" id="">
                                <img style="border: 1px solid #3333 object-fit: cover;" src="./Content/img/main/<?php echo $product["hinhanh"];?>" alt="" width="400px" height="350px">
                            </div>
                        </div>

                        <ul class="nav mt-5">
                         <?php
                            $imgs = $hh->getImageId($product["mahh"]);
                            while($img = $imgs->fetch()):
                         ?>
                            <li style="margin-right: 10px;">
                                <img src="./Content/img/list/<?php echo $img["hinhanh"];?>" style="width: 100px; border: 1px solid #3333">
                            </li>
                         <?php
                            endwhile;
                         ?>
                        </ul>
                    </div>

                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $product["mahh"]; ?>" />
                        <b><h3 class="product-title"><?php echo $product["tenhh"]; ?></h3></b>
                        <div class="rating">
                            <?php
                                $start = new Start();
                                $averages = $start->averaged();
                                if(isset($_SESSION["taikhoan"])) {
                                    $username = $_SESSION["taikhoan"];
                                }
                            ?>
                            Rating: <?php
                                if(isset($averages[$id])) {
                                    echo $averages[$id];
                                } else {
                                    echo 0;
                                }

                                if(isset($_POST["id"]) && isset($_POST["number-star"])) {
                                    $productId = $_POST["id"];
                                    $numberStar = $_POST["number-star"];
                                    $start->updateRating($productId, $_SESSION["taikhoan"], $numberStar);
                                }
                                $result = $start->getRating($username, $id);
                                $result ? $rating = $result[0] : $rating = 0;
                            ?>
                            <div class="stars" data-id="<?php echo $id ?>"> 
                                <?php
                                    for($i = 1; $i <= 5; $i++) {
                                        $img = $i <= $rating ? "<span class='fa fa-star star' style='color: gold; cursor: pointer' data-number=$i></span>"
                                        : "<span class='fa fa-star star' style='color: black;cursor: pointer' data-number=$i></span>";
                                        echo $img;
                                    }
                                ?>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $product["mota"]; ?>
                        </p>
                        <h4 class="mb-4">
                        <?php
                            if(($product["giamgia"]) != 0) {
                                echo "
                                Giá bán: 
                                <font style='text-decoration: line-through; font-size: 16px; margin-right: 14px'>" . number_format($product["dongia"]) .".00<sup><u>$</u></sup></font>";
                                echo '<b><font color="gold">'. number_format($product['giamgia']) .'.00<sup><u>$</u></sup></font></b>';
                            } else {
                                echo 'Giá bán: <font style="color: gold">' . number_format($product["dongia"]) . '.00<sup><u>$</u></sup></font>';
                            }
                        ?>
                        </h4>
                        <h5>
                            <div class="d-flex align-items-center">
                                Màu:
                                <select name="mausac" class="form-control" style="width:150px; margin-left: 10px; border: none">
                                    <option style="outline: none;" value="<?php echo $product['mausac']?>"><?php echo $product['mausac'];?></option>
                                </select>
                            </div>
                            <br>
                           
                            <input type="hidden" name="kichthuoc" id="size" value="S" />
                            <div class="d-flex">
                                Kích Thước:
                                <button type="button" onclick="chonsize('S')" 
                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                    value="S" style="border-radius: 100%; width: 30px; height: 30px; margin-left: 10px"
                                    >
                                        S
                                </button>
                                <button type="button" onclick="chonsize('M')" 
                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                    value="M" style="border-radius: 100%; width: 30px; height: 30px; margin-left: 10px"
                                    >
                                        M
                                </button>
                                <button type="button" onclick="chonsize('L')" 
                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                    value="L" style="border-radius: 100%; width: 30px; height: 30px; margin-left: 10px"
                                    >
                                        L
                                </button>
                                <button type="button" onclick="chonsize('XL')" 
                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                    value="XL" style="border-radius: 100%; width: 30px; height: 30px; margin-left: 10px"
                                    >
                                        XL
                                </button>
                                </div>
                                </br>
                                Số Lượng:
                                <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                            </h5>
                            
                            <button 
                                class="btn btn-primary" 
                                type="submit" name="add_product" style="margin-top: 20px"
                            >
                                MUA NGAY
                            </button>
                    </div>
                </div>
            </form>
    </article>
</section>

<form action="" target="" id="form-rating" target="_self" method="POST" hidden>
    <input type="text" value="" name="id" class="id">
    <input type="text" value="" name="number-star" class="number-star">
</form>

<section class="container" style="margin-top: 100px;">
    <?php
        $user = new User();
        $countComment = $user->countComment($_GET["id"]);
    ?>
    <div class="">
        <b>BÌnh luận </b><?php echo $countComment; ?>
    </div>
    <br>
    <form action="
    <?php 
        if(isset($_SESSION["makh"])) {
            echo "index.php?action=home&act=comment&id=".$_GET['id'];
        } else {
            echo "index.php?action=login";
        }
    ?>"
    method="post">
        <div class="d-flex align-items-stretch">
            <input type="hidden" name="mahh" value="<?php echo $_GET["id"] ?>" />
            <i class="fas fa-user" style="font-size: 50px; margin-right: 20px"></i>
            <div class="d-flex justify-content-center align-center"> 
                <textarea type="text" name="comment" style="width: 600px" placeholder="Thêm bình luận" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" id="submitButton" name="addComment" style="margin-left: 10px;" value="Bình Luận" />
        </div>
    </form>
    <?php
        $comments = $user->getComment($_GET["id"]);
        while($comment = $comments->fetch()):
    ?>
    <br>

    <div class="be-comment-block">
        <div class="be-comment">
            <div class="be-img-comment">	
                <a href="blog-detail-2.html">
                    <i class="fas fa-user" class="be-ava-comment"></i>
                </a>
            </div>
            <div class="be-comment-content">
                    <span class="be-comment-name">
                        <a href="blog-detail-2.html"><?php echo $comment["tenkh"] ?></a>
                        </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        <?php echo $comment["ngaybl"] ?>
                    </span>

                <p class="be-comment-text">
                    <?php
                        echo $comment["noidung"];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <?php
        endwhile;
    ?>
</section>

<script>
    const stars = [...document.querySelector(".stars").children];
    const id = document.querySelector(".stars").dataset.id;
    const form = document.getElementById("form-rating");
    const idForm = form.querySelector(".id");
    const numberStarForm = form.querySelector(".number-star");

    stars.forEach(star => {
        star.onclick = () => {
            rating = Number(star.dataset.number);
            let i = 1;
            stars.forEach(item => {
                i <= rating ? item.style = "color: gold; cursor: pointer" : item.style = "color: black; cursor: pointer";
                i++;
            })
            
            idForm.value = id;
            numberStarForm.value = rating;
            form.submit();
        }
    })
</script>

