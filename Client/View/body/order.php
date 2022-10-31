<div class="table-responsive">
<?php
if(!isset($_SESSION["cart"]) || count($_SESSION['cart'])==0):
  echo '<script> alert("Bạn vẫn chưa thanh toán");</script>';
  echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
?>
 <?php
  else:
 ?>
    <form action="" method="post">
      <table class="table table-bordered" border="0">
      <?php
          $order = new Order();
          $info = $order->getInfoCustomer($_SESSION["mahd"]);
          $date = new DateTime($info["ngaydat"]);
          $time = $date->format("d-m-Y");
      ?>
                        
       <tr>
          <td colspan="4">
            <h2 style="color: red;">HÓA ĐƠN</h2>
          </td>
        </tr>
      <tr>
          <td colspan="2">Số Hóa đơn: <?php echo $info["mahd"]; ?> </td>
          <td colspan="2"> Ngày lập: <?php echo $time; ?></td>
        </tr>
       <tr>
          <td colspan="2">Họ và tên:</td>
          <td colspan="2"><?php echo $info["tenkh"]; ?></td>
        </tr>
       <tr>
          <td colspan="2">Địa chỉ:  </td>
          <td colspan="2"><?php echo $info["diachi"]; ?></td>
        </tr>
        <tr>
          <td colspan="2">Số điện thoại: </td>
          <td colspan="2"><?php echo $info["sodienthoai"]; ?></td>
        </tr>
     
      </table>
      <!-- Thông tin sản phầm -->
      <table class="table table-bordered">
        <thead>

          <tr class="table-success">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Tùy Chọn Của Bạn</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $result = $order->getProductOrder($_SESSION["mahd"]);
            $i = 0;
            while($product = $result->fetch()):
              $i++;
          ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $product["tenhh"] ?></td>
              <td>Màu: <?php echo $product["mausac"] ?>  Size: <?php echo $product["kichthuoc"] ?> </td>
              <td>Đơn Giá: <?php echo $product["thanhtien"] / $product["soluong"] . ",00$" ?> - Số Lượng: <?php echo $product["soluong"]; ?> <br />
              </td>
            </tr>
          <?php
           endwhile;
          ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b><?php $cart = new Cart(); echo number_format($cart->getTotalPrice()) . ",00$"; ?> <sup><u>$</u></sup></b>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  <?php endif; ?>
</div>
</div>