<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
            background-color: orangered;
        }


        .nav_links {
            flex: 5;
            text-align: right;
            font-family: Arial;

        }

        .nav_links ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }

        .nav_links ul li a {
            color: black;
            text-decoration: none;
            font-size: 13px;

        }

        .nav_links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: maroon;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav_links ul li:hover::after {
            width: 100%;
        }

        .main_card {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            flex-wrap: wrap;
        }
        .more {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
        }
    </style>

</head>

<body>

    <nav>
        <h1>RenSho!</h1>
        <div class="nav_links">

            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="more.php">HOW TO CONTACT ?</a></li>
                <li><a href="login.php">LOGIN</a></li>

            </ul>
        </div>

    </nav>

    <div class="more">
        <h1>MORE DETAIL.</h1>
        <p>
            In this page you will know how to order via. whatapp,email and contact no.<br>
            COD is also available through our store.<br>

            you can contact us in our contact no: 9xxxxxxxxx<br>
            email_id : xyz@gmail.com<br>
            whatapp no. : 912xxxxxxx<br>


        </p>
    </div>


    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>