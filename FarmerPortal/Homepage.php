<!-- <?php
     include("../Functions/functions.php");
     ?>  -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Agrocraft Homepage</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .options {
               color: yellow;
               margin-left: 20px;
               width: 25px;
               margin-right: 50px;


          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               height: 50px;
               width: 100%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }

          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
          }

          h3 {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #000;
               line-height: 0.1em;
               margin: 10px 0 20px;
          }

          h3 span {
               background: #fff;
               padding: 0 10px;
          }

          .morefooter {
               height: 100px;
               width: 100%;
               background-color: white;

          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .gmail {
               margin-top: 10px;
               float: right;
               margin-right: 150px;

          }

          .instagram {
               margin-top: 10px;
               float: left;
               margin-left: 420px;
          }

          .instaid {
               height: 10px;
               width: 100%;

          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .gmailid {
               float: right;
               margin-right: 80px;
               margin-top: -60px;
          }

          .copy {
               float: left;
               margin-top: -65px;
          }
          body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background-image: url(images/Website/FarmerLogin.jpg); */
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
        }

        .wrapper {
            /* width: 300px; */
            background-image: 100px;
        }

        .add_button {
            /* clear:left;
            margin-left:450px; */
            float: right;
            /* margin-top: 10px; */
            text-align: center;
            /* margin-right:10%; */
            /* background-color:red; */
        }

        /* .dropdown {
            float: right;
            margin-right: 1em;
            margin-top: 0;
            margin-bottom: 52em;
            color: white;
            background-color:green;

        } */

        /* ul li {
            display: none;
        } */

        /* ul li:hover ul li {
            display: block;
             width: 30px; 
        }

        ul li a {
            display: block;
             width: 30px; 
        } */

        .products:last-child {}

        h1 {
            /* color: rgb(20, 83, 31); */
            font-family: 'Times New Roman', Times, serif;
            color: white;

        }

        /* .trans {
            clear: left;
            background-color: red;
        } */

        .lost{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            text-align: center;
            /* margin-top: 5em; */
            background-color: olive;
            /* height: 8%; */
            margin-top: 120px;
            /* border-radius: 30px; */
            margin:auto;
        }

        /* .dropdown-content {
            display: none;
            /* position: sticky;  */
            /* background-color: transparent; */
            /* min-width: 250px; */
            /* z-index: 1;
        } */

        /* .dropdown-content a {
            color: rgb(12, 11, 11);
            padding: 30px 16px;
            text-align: center;
            text-decoration: none;
            display: block;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            font-size: 20px;
            background-color: white;
            width: 100px;  
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
        } */

        /* .dropdown-content a:hover {
            background-color: white;
             color: black; 
             position:absolute; 
        }

        .dropdown:hover .dropdown-content {
            display: block;
            background-color: white;
             position:relative; 
        } */
/* 
        .dropdown:hover .dropbtn {
            background-color: #ffffff;
        }  */

        .new {
            /* display: table-cell;
            vertical-align: middle; */
            text-align: center;
        }

        .button {
            position: relative;
            /* margin-left: 130px; */
            float: right;
            /* margin-bottom:250px; 
             margin-top:3em; */
            /* clear:left;  */
        }

        h2 {
            color: white;
            margin-top: 3em;
            /* background-color: green;
         */
            text-align: center;

            /* background-color: darkcyan; */

        }

        .hii {
            float: right;
            margin-right: 5em;
            /* margin-top:254em;  */
            /* background-color:red; */
        }

        .ribbon {
            position: relative;
            top: -16px;
            right: -706px;
            float: left;
            top: 0px;
            left: 0px;
            height: 74px;
            background-color: green;
        }

        .over {
            background-color: green;
            border: 1px;
            width: 100%;
            white-space: nowrap;

            height: 70px;


        }
        .subtract{
             float:right;
             border-color:olive;
          
             margin-top: 2%; 
             text-align: center;
             /* font-weight: 10px; */
             /* font-family: Arial, Helvetica, sans-serif; */
             /* background-color: green; */
             border-radius: 25px;

            
        } 
        /* .box{
            
            color: rgb(6, 36, 7);
            width: 1050px;
             line-height: 40px; 
             float:center;
            margin: auto;
            text-align: center;
              margin-top: 120px;  
             /* padding: 5px;  */
             /* border-style: outset;  */
            /* border-width: 5px;
            border-radius: 16px; */
             /* border-color:black;  */
            /* font-size:20px; */
            /* height: 900px;
            border-radius: 30px;
            
        } */
         */
     </style>

</head>

<body>

     <div class="header">

          <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="search_input">
               <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                    <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                    <input type="text" id="input1" name="search" placeholder="Search...">
               </form>
          </div>

          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button"id="menu1" data-toggle="dropdown" style="margin-top:-5px;">  <i class="fa fa-user fa-2x">
            </button></i>
			<!-- <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top:-5px;"> </span></button> -->
			<ul  class="dropdown-menu etc"1
              <li class="options"> <a   href="FarmerProfile.php"><label class='makeitgreen'>Profile</label> <i class="fa fa-edit fa-1x"></i></a><br></li>
               <li class="options"> <a href="#">Logout <i class="fa-sign-out fa-1x"></i></a></li>
     </ul>

			<!-- <?php
				if (isset($_SESSION['phonenumber'])) {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../Includes/BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";
				
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
				}
				else {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				}
			?> -->
		</div>
		<div class="proicon">
			<?php
		if (!isset($_SESSION['phonenumber'])) {
		 echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
		}
		else {
			echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
		}
		?>
		</div>


          <div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> 5 </span>
		</div>

          <div class="loginz">
               <?php getUsername(); ?>
          </div>
     </div>

     <!-- <div class="headerdown">
		<div class="sel1 sel">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
				<span class="caret"></span></button>
			<ul class="dropdown-menu  ">
				<?php getCrops(); ?>
			</ul>
		</div>
		<div class="sel2 sel">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
				<span class="caret"></span></button>
			<ul class="dropdown-menu ">
				<?php getVegetables(); ?>
			</ul>
		</div>
		<div class="sel3 sel">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
				<span class="caret"></span></button>
			<ul class="dropdown-menu ">
			<?php getFruits(); ?>
			</ul>
		</div>
	</div>
 -->

   <div class="lost">ALL PRODUCTS </div>
   <div class="subtract"><button class="subtract"><b>Add Product </b> <div class="add_button"></button>
     </div></button></div>>
    <!-- <div class="add_button">  <button class="button"><i  class="fa fa-plus fa-3x"></i></button></div>                      --> 

    <br>

    <div>
        <?php
        include("../Includes/db.php");
        $sess_phone_number = $_SESSION['phonenumber'];
        getFarmerProducts();
        ?>


    </div>
    </div>
     </div>
    <div class="trans">


        <div class="lost">TRANSACTION HISTORY</h3>
    </div>


    <div>
        <br>
        <br>

        <table border="2">

            <tr>
                <th width=200px>Date</th>
                <th width=200px>Name</th>
                <th width=200px>Phone Number</th>
                <th width=200px>Address</th>
                <th width=200px>Quantity</th>
                <th width=200px>Price</th>

            </tr>
            <tr>
                <td>12-1-2000</td>
                <td>melissa</td>
                <td>1234567890</td>
                <td>sajgdkagdd</td>
                <td>500</td>
                <td>200</td>
            </tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>

 


     <div class="footer">
          <hr>
          <label class="payment">Payment Options:-</label>
          <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
          <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
     </div><br><br>
     <h3><span> GET SOCIAL WITH US </span></h3>
     </div>
     <div class="morefooter">

          <div class="call">
               <i class="fas fa-phone-alt call_color"></i>
               <a href="#" style="color:black;">+91-8191046421</a>
          </div>

          <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
          </div>

          <div class="gmail">
               <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
          </div>

     </div>
     <div class="instaid">
          <div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>

          <div class="gmailid">
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>