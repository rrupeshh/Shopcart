<?php include 'includes/connect.php'; ?>
<?php
	session_start();
    $_SESSION['url'] = $_SERVER['REQUEST_URI'];
	if( isset($_GET['prod_id']) && isset($_GET['prod_name']) ) {
		$product_id = $_GET['prod_id'];
		$table_name = $_GET['prod_name']; // table name

		
			// Extracting the value of from the tables
			$sql = "SELECT * FROM wishlist WHERE prod_id = '$product_id' AND cat_name = '$table_name'  ";
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));

			if(mysqli_num_rows($result)== 0) {

            
        
    if ($_SESSION['username']){
    
    $username = $_SESSION['username'];    
     $product_id = $_GET['prod_id'];  
     $table_name = $_GET['prod_name'];
    $sql = "INSERT INTO `wishlist`(`wish_id`, `prod_id`, `cat_name`, `username`) VALUES (NULL,'$product_id','$table_name','$username')";
    $result = mysqli_query($con,$sql) or  die(mysqli_error($con));;
        if (!$result){
            echo '<script>alert("Error") </script>';
        }
        
    }else{
        echo '
        <script>
        alert("User Not logged In!  Login To continue");
        </script>
        
        ';
        header('refresh:0,url=login.php');
    
}
    }
        header('refresh:0,url = index.php');
      
	} 
