<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forgot Password</title>
    </head>
    <body>
        <form action="BuyerForgotPassword.php" method = "post">
            <input type="text" name = "phonenumber" placeholder = "Phone Number" required><br>
            <input type="text" name = "pan" placeholder = "Pan Number" required><br>
            
            <input type ="password" name="password" placeholder="Password" required><br>
		    <input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>
            
            <input type="submit" name="register" value = "Update Password">
        </form>
    </body>
</html>

<?php 
    include("Includes/db.php");
    if(isset($_POST['register'])) {
        $phonenumber = $_POST['phonenumber'];
        $pan = $_POST['pan'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
        $run_query = mysqli_query($con,$query);
        $count_rows = mysqli_num_rows($run_query);
        
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$password' ,
            buyer_conf_pswd = '$confirmpassword' where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con,$update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('BuyerLogin.php','_self')</script>";
        }
        else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    }

?>