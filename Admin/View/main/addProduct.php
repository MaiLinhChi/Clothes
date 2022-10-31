<div class="row col-md-4 col-md-offset-4 mt-5" >
  <h1>Thêm sản phẩm</h1>
  <form action="index.php?action=product&act=insert" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">
      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh"  readonly/></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh"  maxlength="100px"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" ></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
          <label><img width="50px" height="50px" src=""></label>
          Chọn file để upload:
          <input type="file" name="image" id="fileupload">
        </td>
      </tr>
      <tr>
        <!-- hiển thị cho người dùng thấy là hiển thị tên, nhưng khi lưu là lưu mã loại -->
        <td>Tên loại</td>
        <td>
          <select name="maloai" class="form-control" style="width:150px;">
            <?php
                $Product = new Product();

                $products = $Product->getCategoryList();
                while($product = $products->fetch()):
            ?>
            <option value="<?php echo $product["maloai"] ?>"><?php echo $product["tenloai"] ?></option>
            <?php
                endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control" name="luotxem" >
        </td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="text" class="form-control" name="ngaylap">
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control" name="mota">
        </td>
      </tr>
      <tr>
        <td>Số lượng tồn</td>
        <td><input type="text" class="form-control" name="tonkho" >
        </td>
      </tr>
      <tr>
        <td>Màu sắc</td>
        <td><input type="text" class="form-control" name="mausac" >
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" value="submit" name="submit">
        </td>
      </tr>
    </table>
  </form>
</div>