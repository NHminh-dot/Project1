<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		<form action="?case=14" method="post" enctype="multipart/form-data">
			Mã sản phẩm: <input type="text" name="txt_ma_san_pham">
			<br>
			Mã nhà sản xuất: 
			<select name="select_ma_nha_san_xuat" id="">
				<option value="">----------------------</option>
				<option value="2">Gỗ cốt thái</option>
				<option value="10">Tranh dán tường</option>
				<option value="12">Công Ty TNHH Nội Thất Daco</option>
			</select>
			<br>
			Tên sản phẩm: <input type="text" name="txt_ten_san_pham">
			<br>
			Ảnh sản phẩm: <input type="file" name="txt_anh_san_pham" accept="anh/*">
			<br>
			Giá: <input type="text" name="txt_gia">
			<br>
			Kích thước: <input type="text" name="txt_kich_thuoc">
			<br>
			Chất liệu: <input type="text" name="txt_chat_lieu">
			<br>
			<input type="submit" value="Thêm sản phẩm">
		</form>
	</div>
</body>
</html>