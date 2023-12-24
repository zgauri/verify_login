<?php
session_start();
$_SESSION['isVerified'] = false;
$_SESSION['email']="";
//assue these are a valid username and password in the database
include 'LoginData.php'; 

if(isset($_POST)) //we are making sure that is code will run only in case of POST
{
    if(isset($_POST['logbutton'])){  //just to ensure, right button was clicked
        $username_user= $_POST['loginUser']; //assign user input to a variable 
        $password_user = $_POST['passcode']; //assign user input to a variable
  
        $username_database = $username_user;
        $password_database = $LoginData[$username_user];

        if($password_database==""){
            echo "Login rejected, check you username and password.";
            echo "<br/>";
            echo '<a href="index.php">Click here</a> to get back to login page';
            exit();
        }        

      
        //now compare the data received from the user with the data in the database
        if($password_user == $password_database){  //use " && " because you need to make sure both username and password "COMBINATION" match. 
            $_SESSION['isVerified']=true;
            $_SESSION['email'] = $username_user;
            header("location:dashboard.php");
            exit();
        } else {
            echo "Login rejected, check you username and password.";
            echo "<br/>";
            echo '<a href="index.php">Click here</a> to get back to login page';
        }        

    } else {
        echo "This link is not working";
        echo "<br/>";
        echo '<a href="index.php">Click here</a> to get back to login page';
    }
}    
?>
