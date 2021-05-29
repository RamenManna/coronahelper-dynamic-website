<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=adminlogoutindex.php" />
    <title>Contact Us</title>
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
           
            font-size: 12px;
            color: #737373;
            width: 100%;
            bottom: 0px;
        }
        .copyright-text{
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
        .about {
            color: white;
            position: fixed;
            display: inline-block;
            top: 100px;
           
            border: 2px solid black;
            padding: 34px;
            margin: 2px 55px;
            border-radius: 28px;
            background: #b3b300;
            margin-bottom: 20px;
        }

        .aboutph {
            font-weight: bold;
            font-size: 20px;
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
            <li><a href="adminlogin.php">Admin Login</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="Contact.php">Contact us</a></li>
        </ul>
    </header>
    <div class="about">
        <p class="aboutph">Contact Us</caption>
        <p class="aboutpt">For Any Queries contact ramenmanna09@gmail.com. If you want to be a contributer to access data(insert new data) and get the access of admin panel then contact us.</p>
    </div>
    <footer class="site-footer">

        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by CoronaHelper | Design & Developed by Ramen Manna

        </p>
    </footer>
</body>
</html>