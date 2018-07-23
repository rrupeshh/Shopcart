<?php
  session_start();

  $specific_id = $_GET['specific_id'];
  $last_id = sizeof($_SESSION['product_name']) - 1;

  echo $specific_id;
  echo $last_id; 

  if($specific_id < $last_id) {
    //handeling error
    array_splice($_SESSION['product_name'],$specific_id,1);
    array_splice($_SESSION['product_image'],$specific_id,1);
    array_splice($_SESSION['product_quantity'],$specific_id,1);
    array_splice($_SESSION['product_id'],$specific_id,1);
    array_splice($_SESSION['date_added'],$specific_id,1);
    array_splice($_SESSION['product_price'],$specific_id,1);
    array_splice($_SESSION['location'],$specific_id,1);

    header('Location: customercart.php');

  } else {
    unset($_SESSION['product_name'][$specific_id]);
    unset($_SESSION['product_image'][$specific_id]);
    unset($_SESSION['product_quantity'][$specific_id]);
    unset($_SESSION['product_id'][$specific_id]);
    unset($_SESSION['date_added'][$specific_id]);
    unset($_SESSION['product_price'][$specific_id]);
    unset($_SESSION['location'][$specific_id]);

    header('Location: customercart.php');
  }
?>
