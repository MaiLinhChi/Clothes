
<div class="table-responsive">
    <form action="./index.php?action=cart&act=update_product" method="post">
        <table class="table table-bordered">
            <thead>
                <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2></td></tr>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Hình ảnh</th>
                    <th>Tên</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Giá</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $i=0;
                    foreach($_SESSION['cart'] as $product):
                        $i++;
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td>
                        <img style="width: 50px" height="80px" src="<?php echo $product['image'] ?>">
                    </td>
                    <td>
                        <b style="margin-top: 20px; text-align: center; width: 50px"><?php echo $product['name']; ?></b>

                    </td>
                    <td>
                        Số Lượng: <input type="text" value="<?php echo $product['quatity'];?>" name="quatity<?php echo $product["id"] ?>" /><br>
                        Màu: <?php echo $product['color'];?> <br>
                        Size: <?php echo $product['size'];?></td>
                    <td>
                        Đơn Giá: <?php echo number_format($product['price']) .",00";?><sup><u>$</u></sup><br>
                        <br />
                        <p style="float: right;"> Thành Tiền: <?php echo number_format($product['total']) .",00";?> <sup><u>$</u></sup></p>
                    </td>
                    <td>
                        <a href="index.php?action=cart&act=delete_product&id=<?php echo $product['id'];?>">
                            <button type="button" class="btn btn-danger">Xóa</button>
                        </a>
                        <button type="submit" class="btn btn-secondary" name="update">Sửa</button>
                    </td>
                </tr>
            <?php
                endforeach;
            ?>
            <tr>
                <td colspan="3">
                    <b>Tổng Tiền</b>
                </td>
                <td style="float: right;">
                    <b><?php $cart = new Cart(); echo number_format($cart->getTotalPrice()) .",00"; ?> <sup><u>$</u></sup></b>
                </td>
                <td>
                    <a href="index.php?action=order&act=order_detail">Thanh toán</a>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>