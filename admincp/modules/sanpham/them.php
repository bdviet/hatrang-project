<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<form action="modules/sanpham/xuly.php" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center;">Thêm sản phẩm</td>
  </tr>
  <tr>
    <td class="td">Tiêu đề sản phẩm</td>
    <td>
    <input type="text" name="product_title" id="product_title"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td>
      <input type="text" name="product_price" id="product_price" /></td>
  </tr>
  <tr>
    <td>Loại</td>
    <td>
      <select name="product_cat" id="product_cat">
      <?php
	  		$sql="select * from loai";
			$loai=mysql_query($sql);
			while($dong=mysql_fetch_array($loai)){
	  ?>	
      				<option value="<?php echo $dong['loai_id'] ?>"><?php echo $dong['tenloai'] ?></option>
      <?php
			}
	  ?>
      </select></td>
  </tr>
  <tr>
    <td>Hãng</td>
    <td>  <select name="product_brand" id="product_brand">
      <?php
	  		$sql="select * from hieu";
			$hieu=mysql_query($sql);
			while($dong=mysql_fetch_array($hieu)){
	  ?>	
      				<option value="<?php echo $dong['hieu_id'] ?>"><?php echo $dong['tenhieu'] ?></option>
      <?php
			}
	  ?>
      </select></td>
  </tr>
  <tr>
    <td>Mô tả </td>
    <td>
      <textarea name="product_desc" id="product_desc" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file"  name="image" /></td>
  </tr>
  <tr>
    <td>Từ khoá</td>
    <td>
      <input type="text" name="product_keyword" id="product_keyword" /></td>
  </tr>
  <tr>
    <td colspan="2">
    <input " type="submit" name="them" value="Thêm">    </td>
  </tr>
</table>
</form>



