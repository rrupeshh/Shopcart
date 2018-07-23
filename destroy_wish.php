<?php include 'includes/connect.php'; ?>
<?php
    
    if( isset($_GET['prod_id']) && isset($_GET['prod_name']) ) {
		$product_id = $_GET['prod_id'];
		$table_name = $_GET['prod_name'];
        $sql = "DELETE FROM `wishlist` WHERE  cat_name = '$table_name' AND prod_id = '$product_id' ";
        mysqli_query($con,$sql) or die(mysqli_error($con));
        
    }
    header('refresh:0,url=view_wishlist.php');  

    ?>