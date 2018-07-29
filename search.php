<?php include 'includes/connect.php'; 
session_start();?>
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
        <div class = "cat_disp">
                <h3>Search Results</h3>
                 <ul>
					    <?php
                if(isset($_POST['submit'])){
                $search= $_POST['search']; 
                    
                $query = "SELECT  * FROM product_mobile WHERE keyword LIKE '%$search%'";
                $query1 = "SELECT  * FROM product_electronics WHERE keyword LIKE '%$search%'";
                $query2 = "SELECT  * FROM product_men WHERE keyword LIKE '%$search%'";
                $query3 = "SELECT  * FROM product_women WHERE keyword LIKE '%$search%'";
                $query4 = "SELECT  * FROM product_home WHERE keyword LIKE '%$search%'";
                $query5 = "SELECT  * FROM product_comp WHERE keyword LIKE '%$search%'";
                    
                $search_query = mysqli_query($con,$query);
                $search_query1 = mysqli_query($con,$query1);
                $search_query2 = mysqli_query($con,$query2);
                $search_query3 = mysqli_query($con,$query3);
                $search_query4 = mysqli_query($con,$query4);
                $search_query5 = mysqli_query($con,$query5);
                    
                if(!$search_query && !$search_query1 && !$search_query2 && !$search_query3 && !$search_query4 && !$search_query5  ){
                    echo "CHECK: ".mysqli_error($con);
                }
                    $count = mysqli_num_rows($search_query);
                    $count1 = mysqli_num_rows($search_query1);
                    $count2 = mysqli_num_rows($search_query2);
                    $count3 = mysqli_num_rows($search_query3);
                    $count4 = mysqli_num_rows($search_query4);
                    $count5 = mysqli_num_rows($search_query5);
                    if($count == 0 && $count1 == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0){
                        echo "<h1>NO RESULT </h1>";
                    } else {
                        
                        
                           
                           while($row = mysqli_fetch_assoc($search_query)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }
                        
                              while($row = mysqli_fetch_assoc($search_query1)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }       while($row = mysqli_fetch_assoc($search_query2)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }       while($row = mysqli_fetch_assoc($search_query3)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }       while($row = mysqli_fetch_assoc($search_query4)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }       while($row = mysqli_fetch_assoc($search_query5)){
                            $prod_id = $row['prod_id'];
								$prod_no = $row['prod_no'];
								$prod_name = $row['prod_name'];
								
								$prod_image = $row['prod_image'];
								$prod_price = $row['prod_price'];
								$prod_quan = $row['prod_quan'];
								$date_added = $row['date_added'];
								$keyword = $row['keyword'];
                                
                           ?> 
                            
                      
									<li onclick="location.href='cart.php?prod_id=<?php echo $prod_id; ?>'">
										<div class = "pro_img">
											<img src = "images/<?php echo $prod_image; ?>">
										</div> 
										
										<div class="slide_section">
											<div class = "pro_head">
												<?php echo $prod_name; ?>
											</div>
											
											<div class="pro_price">
												Rs. <?php echo $prod_price; ?>
											</div>
										
											<div class="pro_rating">
												&#9733;&#9733;&#9733;&#9733;&#9734; <span style="font-size: 14px;color: #333;">4.0 (From Reviews)</span>
											</div>
											
											<div class="pro_wishlist">
												<a href="javascript: void(0);">&#9825; <span style="font-size: 14px;color: #333;">Add to Wishlist</span></a>
											</div>
										</div>
									</li>
                
                
                <?php     }
                   
                 
                    
                    }
                    
                }
                 
             ?>
                
					
			
					<div style="clear: both;"></div>
                </ul>
            </div><br clear = "all"/>

        </div>

        <?php include 'includes/sidenews.php'; ?> <!-- sidenews Of the page -->

        <?php include 'includes/footer.php'; ?> <!-- Footer of the page -->
    </body>



</html>