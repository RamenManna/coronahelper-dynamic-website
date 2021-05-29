<?php
session_start();
include'conn.php';
if(!isset($_SESSION['username'])){
    echo "<script>window.open('adminlogin.php','_self');</script>";
}
?>
<?php
        include 'conn.php';
        if (isset($_GET['id'])) {
            $userid = $_GET['id'];
            $q = "SELECT *FROM user WHERE user_id='$userid'";
            $query = mysqli_query($con, $q);
           $res = mysqli_fetch_array($query);
                $username = $res['user_name'];
                $userlocation = $res['user_location'];
                $userstock = $res['user_stocks'];
                $userphno = $res['user_phno'];
        }
        
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=adminlogout.php" />
    <title>Update Data</title>
    <style>
        body {
            margin: 0;
            font-family: Helvetica, sans-serif;
            background-color: #f4f4f4;
        }

        a {
            color: #000;
        }

        .header {
            background-color: #fff;
            box-shadow: 1px 1px 4px 0 rgba(0, 0, 0, .1);
            position: fixed;
            width: 100%;
            z-index: 3;
        }

        .header ul {
            margin: 0;
            padding: 0;
            list-style: none;
            overflow: hidden;
            background-color: #fff;
        }

        .header li a {
            display: block;
            padding: 20px 20px;
            border-right: 1px solid #f4f4f4;
            text-decoration: none;
        }

        .header li a:hover,
        .header .menu-btn:hover {
            background-color: #b3ccff
        }

        .header .logo {
            display: block;
            float: left;
            font-size: 2em;
            padding: 10px 20px;
            text-decoration: none;
        }



        .header .menu {
            clear: both;
            max-height: 0;
            transition: max-height .2s ease-out;
        }



        .header .menu-icon {
            cursor: pointer;
            display: inline-block;
            float: right;
            padding: 28px 20px;
            position: relative;
            user-select: none;
        }

        .header .menu-icon .navicon {
            background: #333;
            display: block;
            height: 2px;
            position: relative;
            transition: background .2s ease-out;
            width: 18px;
        }

        .header .menu-icon .navicon:before,
        .header .menu-icon .navicon:after {
            background: #333;
            content: '';
            display: block;
            height: 100%;
            position: absolute;
            transition: all .2s ease-out;
            width: 100%;
        }

        .header .menu-icon .navicon:before {
            top: 5px;
        }

        .header .menu-icon .navicon:after {
            top: -5px;
        }


        .header .menu-btn {
            display: none;
        }

        .header .menu-btn:checked~.menu {
            max-height: 240px;
        }

        .header .menu-btn:checked~.menu-icon .navicon {
            background: transparent;
        }

        .header .menu-btn:checked~.menu-icon .navicon:before {
            transform: rotate(-45deg);
        }

        .header .menu-btn:checked~.menu-icon .navicon:after {
            transform: rotate(45deg);
        }

        .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:before,
        .header .menu-btn:checked~.menu-icon:not(.steps) .navicon:after {
            top: 0;
        }

        @media (min-width: 48em) {
            .header li {
                float: left;
            }

            .header li a {
                padding: 20px 30px;
            }

            .header .menu {
                clear: none;
                float: right;
                max-height: none;
            }

            .header .menu-icon {
                display: none;
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);



        body {
            background: #105469;
            font-family: 'Open Sans', sans-serif;
        }

        .site-footer {
            background-color: #26272b;
            position: fixed;
            left: 0px;
            font-size: 12px;
            color: #737373;
            width: 100%;
            bottom: 0px;
        }

        .copyright-text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width:500px) {
            .site-footer {
                position: fixed;
                width: 100%;
            }
        }

        input[type=text], [type=number]{

            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: green;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
       
        input[type=submit]:hover {
            background-color: darkblue;
        }

        .container {
            position: relative;
            display: inline-block;
            top: 100px;
            width: 50%;
            left: 25%;
            right: 25%;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        
        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            /* .col-25,
            .col-75, */
            .container {
                position: relative;
                width: 70%;
                display: inline-block;
                top: 100px;
                left: 12%;
                right: 4%;
            }

            /* input[type=submit] {
                width: 100%;
                margin-top: 0;
            } */
        }
        .caption{
            text-align: center;
            background-color: green;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
        }
    </style>
</head>


<body>
    <header class="header">
        <a href="home" class="logo">Corona Helper</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="adminpanel.php">Admin Login</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="Contact.php">Contact us</a></li>
        </ul>
    </header>
    <div class="container">
        <p class="caption">Update Existing Data</p></br>
        <form action="" method="POST">
       
            <div class="row">
                <div class="col-25">
                    <label>User Name</label>
                </div>
                <div class="col-75">
                    <input type="text"  name="user_name" value="<?php echo $username?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>User Location</label>
                </div>
                <div class="col-75">
                    <input type="text" name="user_location" value="<?php echo $userlocation?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>User Stock</label>
                </div>
                <div class="col-75">
                    <input type="number" name="user_stocks" value="<?php echo $userstock?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>User Ph No.</label>
                </div>
                <div class="col-75">
                    <input type="text" name="user_phno" value="<?php echo $userphno?>" required>
                </div>
            </div></br>
            <div class="row">
              <input type="submit" value="Submit" name="done">
            </div>
            
              
           
        </form>
        <?php
        include 'conn.php';
        if (isset($_POST['done'])) {
            $userid=$_GET['id'];
            $eusername = $_POST['user_name'];
            $euserlocation = $_POST['user_location'];
            $euserstock = $_POST['user_stocks'];
            $euserphno = $_POST['user_phno'];
            $update= "update user set user_name='".$eusername."', user_location='".$euserlocation."', user_stocks='".$euserstock."', user_phno='". $euserphno."', time=current_timestamp where user_id='".$userid."' ";
            $updatequery = mysqli_query($con, $update);
            
            if($updatequery===true){
             echo   '<script>alert(" Data Has Been Updated Successfully!");</script>';
             echo "<script>window.open('adminpanel.php','_self');</script>";
            }
            else{
                echo   '<script>alert("Sorry Data not Updated their might be server problem! Try Sometimes later!")</script>';
            }
           
        }
       
        ?>
    </div><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="site-footer">

        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by CoronaHelper | Design & Developed by Ramen Manna

        </p>
    </footer>
</body>
</html>