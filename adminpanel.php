<?php
session_start();
include 'conn.php';
if (!isset($_SESSION['username'])) {
    echo "<script>window.open('adminlogin.php','_self');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300;url=adminlogout.php" />
    <title>Admin Data Access</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            position: relative;
            margin: 0 0 100px;
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

        .container {
            display: flex;
            top: 70px;
            position: relative;
            justify-content: center;
            align-items: center;
            width: auto;
        }
        @media (max-width: 480px) {
            .container{
                display: flex;
                width: fit-content;
            }
            .caption-div{
                display: flex;
                width: auto;
                justify-content: center;
                align-items: center;
            }
            .insertbtn {
            display: flex;
            width: auto;
            justify-content: center;
            top: 82px;
            position: relative;
            text-align: center;
            text-align: center;
        }

        }
        .caption-div{
            display: flex;
            width: auto;
            justify-content: center;
            align-items: center;
        }
        .table1 {
            background: #012B39;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;

        }

        th {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            font-size: 0.85em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: center;
        }

        td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
        }


        tbody tr {
            transition: background 0.25s ease;
        }

        tbody tr:hover {
            background: #014055;
        }

        .caption {
            color: white;
            font-weight: bold;
            display: flex;
            position: relative;
            top: 65px;
            justify-content: center;
            width: auto;

        }

        .tr {
            text-align: center;
        }





        html {
            position: relative;
            min-height: 100%;
        }

        /* .copyright-text {

            align-items: center;
            justify-content: center;
        } */
        /* @media (max-width:640px) {
            .btn-insert {
                position: relative;
                top: 138px;
                color: white;
                background-color: green;
                cursor: pointer;
                display: inline-block;
                left: 46%;
                right: 40%;
            }


        } */

        .btn-update {
            color: white;
            padding: 5px;
            background-color: blue;
            cursor: pointer;
        }

        .insertbtn {
            display: flex;
            width: auto;
            justify-content: center;
            top: 82px;
            position: relative;
        }

        .btn-insert {
            position: relative;
            border-radius: 5px;
            padding: 5px;
            color: white;
            background-color: green;
            cursor: pointer;
        }

        .btn-delete {
            padding: 5px;
            color: white;
            background-color: red;
            cursor: pointer;
        }

        .text-white {
            color: white;
            text-decoration: none;
        }

        .site-footer {
            background-color: #26272b;
            position: fixed;
            left: 0;
            font-size: 12px;
            color: #737373;
            width: 100%;
            bottom: 0;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="index.php" class="logo">Corona Helper</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Visitors Mode</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="Contact.php">Contact us</a></li>
        </ul>
    </header>

    <div class="caption-div"><p class="caption">Oxygen Availability</p></div>
    <div class="insertbtn"> <a href="insert.php"> <button class="btn-insert">Insert</button></a></div>
    <div class="container">
        <table class="table1">





            <thead>
                <tr class="tr">
                    <th>ID</th>
                    <th>Dealer Name</th>
                    <th>Location</th>
                    <th>Available Stocks</th>
                    <th>Ph No</th>
                    <th>Last Updated</th>
                    <th>Edit</th>
                    <th>Update</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'conn.php';


                $q = "select *from user";
                $query = mysqli_query($con, $q);
                while ($res = mysqli_fetch_array($query)) {
                    $userid = $res['user_id'];
                    $username = $res['user_name'];
                    $userlocation = $res['user_location'];
                    $userstock = $res['user_stocks'];
                    $userphno = $res['user_phno'];
                    $usertime = $res['time'];
                ?>
                    <tr class="tr">
                        <td><?php echo $userid ?></td>
                        <td><?php echo $username ?></td>
                        <td><?php echo $userlocation ?></td>
                        <td><?php echo $userstock ?></td>
                        <td><?php echo $userphno ?></td>
                        <td><?php echo $usertime ?></td>
                        <td><button class="btn-update"><a class="text-white" href="update.php?id=<?php echo $userid ?>">Update</a></button></td>
                        <td> <button class="btn-delete"><a class="text-white" href="delete.php?id=<?php echo $userid ?>">
                                    Delete</a></button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    </br><br><br><br><br>
    <footer class="site-footer">

        <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by CoronaHelper | Design & Developed by Ramen Manna

        </p>
    </footer>



</body>

</html>
<?php
include 'conn.php';

$q = "select *from user";
$query = mysqli_query($con, $q);


?>