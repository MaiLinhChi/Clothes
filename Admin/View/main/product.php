
<div  class="col-md-4 col-md-offset-4 mt-5"><h3 ><b>DANH SÁCH HÀNG HÓA</b></h3></div>
<div class="row col-12">
<a href="index.php?action=product&act=add"><h4>Thêm sản phẩm</h4></a>
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã hàng</th>
        <th>Tên hàng</th>
        <th>Đơn giá</th>
        <th>Giảm giá</th>
        <th>Hình</th>
        <th>Mã loại</th>
        <th>Số lượt xem</th>
        <th>Ngày lập</th>
        <th>Mô tả</th>
        <th>Số lượng tồn</th>
        <th>Màu sắc</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $Product = new Product();
        $products = $Product->getListProduct();
        while($product = $products->fetch()):
      ?>
      <tr>
        <td><?php echo $product["mahh"] ?></td>
        <td><?php echo $product["tenhh"] ?></td>
        <td><?php echo $product["dongia"] ?></td>
        <td><?php echo $product["giamgia"] ?></td>
        <td><img width="50px" height="50px" src="./Content/img/main/<?php echo $product["hinhanh"] ?>"/></td>
        <td><?php echo $product["maloai"] ?></td>
        <td><?php echo $product["soluotxem"] ?></td>
        <td><?php echo $product["ngaylap"] ?></td>
        <td><?php echo $product["mota"] ?></td>
        <td><?php echo $product["tonkho"] ?></td>
        <td><?php echo $product["mausac"] ?></td>
        <td><a href="index.php?action=product&act=edit&id=<?php echo $product["mahh"] ?>">Cập nhật</a></td>
        <td><a href="index.php?action=product&act=delete&id=<?php echo $product["mahh"] ?>">Xóa</a></td>
      </tr>
    </tbody>
    <?php
      endwhile;
    ?>
  </table>
</div>