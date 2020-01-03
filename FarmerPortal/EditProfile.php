<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql="select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($run_query))
{
    $name = $row['farmer_name'];
    $pan = $row['farmer_pan'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $account= $row['farmer_bank']; 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }
        
        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }
        
        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }
        
        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }
        
        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }
        textarea{
             border-width: 3px; 
             border-radius: 16px; 
            border-color: rgb(78, 180, 121);
            
            
        }
   
           
            
            
            .in-icons {
                text-align: center;
            }
            
            .in-icons i {
                position: absolute;
                left: 600px;
                top: 175px;
            }
            .just{
               
        
             /* margin-top:2em;  */
            float:left;
            margin:0px;
            position:absolute;
            left:0;
             top:0px; 
        
        }
        .again{
            cursor: pointer;
            font-size: 24px; 
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left:100px;


        }
        .say{
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding : 10px;
            padding-left:10px;
            padding-right:10px;
            
            
            
        }
        .say:hover{
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
    

    <div class="just"><a  href="FarmerHomepage.php"> <i class="fa fa-home fa-3x"></i></a></div>
        <div class="box">
            <form action="EditProfile.php" method="post">
                <h1> EDIT PROFILE</h1>
                <div class="in-icons">
                <textarea rows="2" column="18" value="" disabled><?php echo $name;?></textarea><br>
                <textarea rows="2" column="20" disabled><?php echo $pan;?></textarea><br>
                    <input type="number" name="phonenumber" value="<?php echo $phone;?>"/> <br>
                    <input type="text" name="address" value="<?php echo $address;?> "/> <br>
                    <input type="number" name="bank" value="<?php echo $account; ?>" />    <br>
 
                    <span style=" display:block;  margin-bottom: .75em; "></span>

                    <input type="submit" name="register" value="Confirm">
                    </form>
                  
                    </div>
                    <div class="again">
                        <a href="ChangePassword.php"><button class="say">Change Password</button></a>
                    </div>
                   
               
            
           
        </div>
    

    
</head>

</body>
</html>

<?php

    include("../Includes/db.php");

    if (isset($_POST['register']))
    {
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $account = $_POST['bank'];      
        
        $query = "update farmerregistration 
                  set farmer_phone = '$phone',
                  farmer_address = '$address', farmer_bank = '$account' where farmer_id 
                  in (select farmer_id from farmerregistration 
                  where farmer_phone='$sessphonenumber')"; 
        $run = mysqli_query($con, $query);
        $_SESSION['phonenumber'] = $phone;
        echo "<script>window.open('FarmerProfile.php','_self')</script>";
    }
?>