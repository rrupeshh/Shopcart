<?php
	include 'includes/connect.php';

	session_start();

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>ShopCart</title>
        <link rel = "stylesheet" href = "css/style.css">

    </head>
    <body>
		<?php include 'includes/header.php'; ?> <!-- Header of the page -->

        <?php include 'includes/navbar.php'; ?> <!-- Navigation bar of the page -->

        <div id = "bodyleft">
            <div id = "wish_header"><h3>Your Wish List</h3></div>
			<?php
				
                     $sql1 = "SELECT * FROM wishlist";
                     $result1 = mysqli_query($con,$sql1);
                    
                     while($row1 = mysqli_fetch_array($result1)){
                         
                         $table_name = $row1['cat_name'];
                         $product_id = $row1['prod_id'];
                         $username = $row1['username'];
                         if($_SESSION['username'] == $username){
                         
                     $sql = "SELECT * FROM $table_name JOIN wishlist on wishlist.prod_id = $table_name.prod_id JOIN register on register.username = wishlist.username WHERE (wishlist.prod_id = '$product_id') AND (wishlist.cat_name = '$table_name')";
                     $result = mysqli_query($con,$sql);
                                        
                    if (!$result){
                    echo "<script>alert('Error')</script>";
                    }else{
                    while($row = mysqli_fetch_array($result)){
                        ?>
                        <div class='individual_products'> <!-- For individual items -->

								<div class="individual_products_image">
									<img src="images/<?php echo $row['prod_image']; ?>">
								</div>

								<div class="individual_products_nameanddate">
									<?php
										echo $row['prod_name'].'<br>';
										echo '<span style="font-size: 14px;font-weight: normal;">Date: '. $row['date_added'].'</span>';
									?>
								</div>

								<div class="individual_products_priceandlocation">
									<?php
										echo '<span style="font-weight: bold;color: javascript:void(0)222;">Price:</span> '.$row['prod_price'].'<br>';
										
									?>
                            </div>
                                <div class="individual_products_delete">
									<a href="destroy_wish.php?prod_id=<?php echo $row['prod_id']; ?>&amp;prod_name=<?php echo $row['cat_name']; ?>">Delete</a>
								</div>

								<div style="clear: both;"></div>
							</div>
                    <?php

                        }
                    }
                     }
                      }
			?>

		</div>

		<?php include 'includes/sidenews.php'; ?> <!-- sidenews Of the page -->

		<?php include 'includes/footer.php'; ?> <!-- Footer of the page -->
    </body>
</html>
