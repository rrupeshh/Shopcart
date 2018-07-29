<?php
    require('includes/connect.php'); 
    session_start();
?>
<?php

    // Defining the variables
    $firstname = $lastname = $email = $emailagain = $password = $passwordagain = $userpost = $username = "";
    
    if( isset($_POST['submit_reg']) ) {
        $firstname = test_input($_POST['firstname']);
        $lastname = test_input($_POST['lastname']);
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $passwordagain = test_input($_POST['passwordagain']);
        $username = test_input($_POST['username']);
        
        if( !empty($email) ) {
            
            if( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
                $errormessage = "Not Valid!";
            } else {
                
                    if( !empty($password) ) {
                        
                        if( $password == $passwordagain ) {
                            
                            $newpassword = md5($password);
                            
                                
                                if( !preg_match("/^[a-z0-9._]+$/i",$username) ) {
                                    $errormessage = "Username not valid!";
                                } else {
                                    
                                    if( $firstname && $lastname ) {
                                        
                                        $query = mysqli_query($con,"SELECT * FROM register WHERE username = '$username'");
                                        
                                        if( mysqli_num_rows($query) == 0 ) {
                                            $sql = "INSERT INTO register VALUES (NULL, '$firstname', '$lastname', '$email', '$username', '$newpassword')";
                                        
                                            $insert = mysqli_query($con,$sql);

                                            if(!$insert) {
                                                echo "Couldn't insert";
                                            } else {
                                                $errormessage = "Registered Succesfully!";
                                            }
                                        } else {
                                            $errormessage = "User Already Registered!";
                                        }
                                        
                                    } else {
                                        $errormessage = "Fill Up the Name fields";
                                    }
                                    
                                }
                            
                        } else {
                            $errormessage = "Password Do not match!";
                        }
                        
                    } else {
                        $errormessage = "Password Empty!";
                    }
            }}
                    
            
        else {
            $errormessage = "Empty Email";
        }
    
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
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
                        <table id="register-login-table">
                            <tr>
                                
                                <td>
                                    <input  type="text" name="firstname" autocomplete="on" autofocus="on" placeholder="First Name" required/>
                                    <input  type="text" name="lastname" autocomplete="on" autofocus="on" placeholder="Last Name" required/>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="email" name="email" autocomplete="on" autofocus="on" placeholder="Email" required/>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input type="text" name="username" autocomplete="on" autofocus="on" placeholder="Username" required/>
                                </td>
                            </tr>
                            <tr>
                                
                                <td>
                                    <input  type="password" name="password" autocomplete="off" placeholder="Password" required/>
                                    <input  type="password" name="passwordagain" autocomplete="off" placeholder="Re-Enter Password" required/>
                                </td>
                            </tr>
                            <tr>
                                
                            <tr>
                                
                                <td>
                                    <input class = "pop_sub" type="submit" name="submit_reg" value = "SUBMIT"/>
                                </td>
                            </tr>
                           
                        </table>
                    </form>
                         
                       
                </div>
            </div>
        </div>
    </body>
</html>
