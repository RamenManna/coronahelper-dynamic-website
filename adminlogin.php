<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=adminlogout.php" />
    <title>Admin Login</title>
</head>
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
        font-size: 12px;
        color: #737373;
        bottom: 0;
        left: 0;
        position: fixed;
        width: 100%;
        text-align: center;
    }

  
   /* from */
   body {
	
	background-size: cover;
	font-size: 16px;
	
	font-weight: 300;
	margin: 0;
	color: #666;
}




a {
	text-decoration: none;
	color: #666;
}

a:hover {
	color: #aeaeae;
}

h2 {
	text-transform: uppercase;
	color: white;
	font-weight: 400;
	letter-spacing: 1px;
	font-size: 1.4em;
	line-height: 2.8em;
}
/* Layout */
.container {
	margin: 0;
}

.login-box {
	background-color: white;
	max-width: 340px;
	margin: 0 auto;
	position: relative;
	top: 80px;
	padding-bottom: 30px;
	border-radius: 5px;
	box-shadow: 0 5px 50px rgba(0,0,0,0.4);
	text-align: center;
}

.login-box .box-header {
	background-color: #665851;
	margin-top: 0;
	border-radius: 5px 5px 0 0;
}

.login-box label {
	font-weight: 700;
	font-size: .8em;
	color: #888;
	letter-spacing: 1px;
	text-transform: uppercase;
	line-height: 2em;
}

.login-box input {
	margin-bottom: 20px;
	padding: 8px;
	border: 1px solid #ccc;
	border-radius: 2px;
	font-size: .9em;
	color: #888;
}

.login-box input:focus {
	outline: none;
	border-color: #665851;
	transition: 0.5s;
	color: #665851;
}

.login-box button {
	margin-top: 0px;
	border: 0;
	border-radius: 2px;
	color: white;
	padding: 10px;
	text-transform: uppercase;
	font-weight: 400;
	font-size: 0.7em;
	letter-spacing: 1px;
	background-color: #665851;
	cursor:pointer;
	outline: none;
}

.login-box button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.login-box button:hover {
	opacity: 0.7;
	transition: 0.5s;
}

.selected {
	color: #665851!important;
	transition: 0.5s;
}


</style>

<body>
    <header class="header">
        <a href="#home" class="logo">Corona Helper</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Visitors Mode</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="Contact.php">Contact us</a></li>
        </ul>
    </header>
   
    

    <div class="container">
		
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div><form method="POST">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="userpassword">
			<br/>
			<button type="submit" name="submit">Sign In</button>
			<br/></form>
		</div>
	</div>
<?php
include'conn.php';
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['userpassword'];
    $select="SELECT * FROM admin";
    $run=mysqli_query($con,$select);
    $res=mysqli_fetch_array($run);
    $db_name=$res['username'];
    $db_password=$res['userpassword'];
    if($username==$db_name && $password==$db_password){
        echo "<script>window.open('adminpanel.php','_self');</script>";
        $_SESSION['username']=$db_name;
    }
    else{
        echo '<script>alert("Wrong Username & Password Entered!");</script>';
    }
}
?>
<br><br><br><br><br><br><br><br>
    <footer class="site-footer">

        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by CoronaHelper | Design & Developed by Ramen Manna

        </p>
    </footer>
</body>

</html>