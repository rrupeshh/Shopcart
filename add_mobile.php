<?php
	
	include 'includes/connect.php';
	
	$msg = "";
	$submit = @$_POST['submit'];
	
	if($submit == "Submit"){
		if(empty($_POST['txtProdName']))
			$msg = "Product Name is empty!";
		else{
			$prod_name = $_POST['txtProdName'];
			$prod_image = file_get_contents ($_FILES['txtProdImage']['tmp_name']);
			$prod_price = $_POST['txtProdPrice'];
			$prod_quan = $_POST['txtProdQuan'];
			$keyword = $_POST['txtProdKeyword'];

			$sql = "INSERT INTO `product_mobile`(`prod_name`, `prod_image`, `prod_price`, `prod_quan`, `date_added`, `keyword`) VALUES ('$prod_name', '$prod_image', '$prod_price', '$prod_quan', now(), '$keyword')";

			mysqli_query($con, $sql) or die("Couldn't insert!");
		}
	}
?>
<html>
    <head>
        <title>Shop-Cart</title>
        <link rel = "stylesheet" href = "css/style.css">      
    </head>
    <body>
		<?php include 'includes/header.php'; ?> <!-- Header of the page -->
            
        <div id = "navbar">
            <ul>
                 <li><a href = "admin.php">Add Products</a></li>
            
            </ul>
        </div>
		
		<div id="admin_content">
			<h2>Product Information <span style="color: #a11; font-size: 13px; margin-left: 50px;"><?php echo $msg; ?><span></h2>
			
                <div id = "form">
			<form id="addnew_product_form" method="post" action="add_mobile.php" enctype="multipart/form-data">
			<table>
			<!--
				<tr>
					<td>Product No:</td>
					<td><input  class = "input_form" type="text" name="txtProdNo" value = "MOB_"></td>
				</tr>-->
				<tr>
					<td>Product Name:</td>
					<td><input  class = "input_form"  type="text" name="txtProdName" /></td>
				</tr>
                <tr>
					<td>Product Image:</td>
					<td><input  class = "input_form"  type="file" name="txtProdImage" /></td>
				</tr>
<!--
                <tr>
					<td>Product RAM:</td>
					<td><input  class = "input_form"  type="text" name="txtProdRam" /></td>
				</tr>
                <tr>
					<td>Product Warranty:</td>
					<td><input  class = "input_form"  type="text" name="txtProdWarranty" /></td>
				</tr>
                <tr>
					<td>Product Storage:</td>
					<td><input  class = "input_form"  type="text" name="txtProdStorage" /></td>
				</tr>
                <tr>
					<td>Product Battery:</td>
					<td><input  class = "input_form"  type="text" name="txtProdBattery" /></td>
				</tr>
                <tr>
					<td>Product Camera:</td>
					<td><input  class = "input_form"  type="text" name="txtProdCamera" /></td>
				</tr>          
				<tr>
					<td>Product Description:</td>
					<td><textarea  class = "input_form" name="txtProdDesc" cols="40" rows="4"></textarea></td>
				</tr>			
-->
				<tr>
					<td>Product Price:</td>
					<td><input  class = "input_form"  type="text" name="txtProdPrice" /></td>
				</tr>
				<tr>
					<td>Product Quantity:</td>
					<td><input  class = "input_form" type="text" name="txtProdQuan" /></td>
				</tr>
                <tr>
					<td>Product Keyword:</td>
					<td><input  class = "input_form"  type="text" name="txtProdKeyword" /></td>
				</tr>
			</table>
			<input id="sub_btn" type="submit" name="submit" value="Submit">
			</form>
                </div>
		</div><!-- end of content -->
		
	</div><!-- end of con -->
	
</div>
</body>
</html>