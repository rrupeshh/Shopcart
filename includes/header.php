<div id ="header">
	<a href = "index.php">
		<div id = "logo">
			<img src = "images/logoshop.png">
		</div>
	</a>
<div id = "link">
<ul>
	
    <?php
    	if (isset($_SESSION['username'])){
    ?>
        <li><a href="add_details.php">Add Details</a></li>
    	<li><a href="view_wishlist.php">WishList</a></li>
    <?php
    	}else{
    ?>
        <li><a href="signup.php">SignUp</a></li>
    <?php
    	}
    ?>
	
	<?php
    
    if (isset($_SESSION['username'])){
        ?>
    <li>Logged in as <?php echo @$_SESSION['username'];?>&nbsp;&nbsp;&nbsp;<a href="logout.php">LogOut</a></li>
    <?php
    }else{
        ?>
        <li><a href="login.php">LogIn</a></li>
    <?php
    }
        ?>
</ul>

</div>

<div id="searchandcart">
	<div id = "search">
		<form method ="post" action = "search.php">
			<input name = "search" type = "text" placeholder ="Search Here..." >
			<button name = "submit" id = "search_btn">Search</button>
		</form>
	</div>

	<button id = "cart_btn" onclick="location.href='customercart.php'">Cart<?php
		if(isset($_SESSION['product_name'])) {
			echo ' ['.sizeof($_SESSION['product_name']).']';
		} else {
			echo ' [0]';
		}
	 ?></button>

	<div style="clear: both;"></div>
</div>

</div>
