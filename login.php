<?php 
    session_start();
    include('includes/connect.php');
    $errormessage = "Enter Username & Password";
    $username = $password = "";


if (isset($_POST['submit'])){
    if (!preg_match("/^[a-z0-9._]*$/i",$username)){
        $errormessage = "Invalid username";
    }else{
     $username = test_input($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM register WHERE BINARY username = '$username' AND password = '$password'";
    $result = mysqli_query($con,$sql);
    
    if (mysqli_num_rows($result) == 1){
        header('Location:index.php');
        
        $sql = "SELECT * FROM register WHERE username = '$username' AND password= '$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        if ($row){
            $_SESSION['user_id'] = $row['reg_id'];
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['first_name'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
        }
    }else{
        $errormessage = "Invalid Username & Password";
    }
    }
}

function test_input($data){
    $data = trim($data);
    $data  = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}
?>



<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>ShopCart</title>
        <link rel = "stylesheet" href = "css/style.css">

    </head>
    <body>
		<?php include 'includes/header.php'; ?> <!-- Header of the page -->
        
                  <div id="left">
                    <div id="form" >
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <table>
                            <tr>
                                
                                <td>
                                    <input type="text" name="username" autocomplete="on" autofocus="on" placeholder="Username" required/>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input  type="password" name="password" autocomplete="off" placeholder="Password" required/>
                                </td>
                            </tr>
                           
                            
                            <tr>
                                
                                <td>
                                    <input type="submit" name="submit" value = "SUBMIT"/>
                                </td>
                            </tr>
                           
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>