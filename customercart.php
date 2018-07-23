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
			<?php
				if(empty($_SESSION['product_name'])) {
					echo 'Your Cart is empty!';
				} else {
					for($i=0;$i<sizeof($_SESSION['product_name']);$i++) {
						?>
							<div class='individual_products'> <!-- For individual items -->

								<div class="individual_products_image">
									<img src="images/<?php echo $_SESSION['product_image'][$i]; ?>">
								</div>

								<div class="individual_products_nameanddate">
									<?php
										echo $_SESSION['product_name'][$i].'<br>';
										echo '<span style="font-size: 14px;font-weight: normal;">Date: '.$_SESSION['date_added'][$i].'</span>';
									?>
								</div>

								<div class="individual_products_priceandlocation">
									<?php
										echo '<span style="font-weight: bold;color: javascript:void(0)222;">Price:</span> '.$_SESSION['product_price'][$i].'<br>';
										echo '<span style="font-weight: bold;color: javascript:void(0)222;">Location:</span> '.$_SESSION['location'][$i].'<br>';
									?>
								</div>

								<div class="individual_products_quantity">
									<?php
										echo '<span style="font-weight: bold;color: javascript:void(0)222;">Quantity:</span> '.$_SESSION['product_quantity'][$i].'';
									?>
								</div>

								<div class="individual_products_delete">
									<a href="destroy_specific.php?specific_id=<?php echo $i; ?>" title="<?php echo $i; ?>">Delete</a>
								</div>

								<div style="clear: both;"></div>
							</div>
						<?php
					}
				}
			?>

			<?php
				if(!empty($_SESSION['product_name'])) {
					?>
						<div id="checkandclear">
							<a href="destroy.php">Clear Cart</a>

							<a href="javascript: void(0)">Check Out</a>
						</div>
					<?php
				}
			?>
		</div>

		<?php include 'includes/sidenews.php'; ?> <!-- sidenews Of the page -->

		<?php include 'includes/footer.php'; ?> <!-- Footer of the page -->
    </body>
</html>
