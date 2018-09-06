<?php
	include 'includes/connect.php';
	
	$msg = "";
	$submit = @$_POST['submit'];
	
	if($submit == "Submit"){
	   if($_POST['selProdCat'] =="Mobiles & Tablets"){
           header("location:add_mobile.php");  
       }
         if($_POST['selProdCat'] =="Electronics"){
           header("location:add_electronics.php");  
       }
         if($_POST['selProdCat'] =="Computer & Gaming"){
           header("location:add_comp.php");  
       }
         if($_POST['selProdCat'] =="Men's Fashion"){
           header("location:add_men.php");  
       }
         if($_POST['selProdCat'] =="Women's Fashion"){
           header("location:add_women.php");  
       }
         if($_POST['selProdCat'] =="Home & Kitchen"){
           header("location:add_home.php");  
       }
		
		
	}
?>
<html>
    <head>
        <title>ShopCart</title>
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
			<h2>Product Information</h2>
			<div id = "form">
			<form id="addnew_product_form" method="post" action="admin.php" enctype="multipart/form-data">
			<table>
				
				<tr>
					<td>Product Category:</td>
					<td  colspan="3" ><select class = "input_form" name="selProdCat"><option class= "opt"></option><option class= "opt">Mobiles &amp; Tablets</option><option class= "opt">Electronics</option><option class= "opt">Computer &amp; Gaming</option><option class= "opt">Men's Fashion</option><option class= "opt">Women's Fashion</option><option class= "opt">Home &amp; Kitchen</option></select></td>
				</tr>
				
			</table>
			
			
				<input id="sub_btn" type="submit" name="submit" value="Submit">
				
			</form>
                </div>
		</div><!-- end of content -->

	
</div>
</body>
</html>