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

        .about {
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

    <div class="about">
        <h1>About</h1>
        <p>
            Welcome to our website RenSho! We understand that a peron want to look and feel their best,
            whether it's for a special occasion or just for a small gathering. That's why we offer both rental
            and shopping options, so you can choose the option that works best for you. Our rental selection includes a
            wide range of dresses, from formal gowns to casual sundresses, all available to rent for a fraction of
            the retail price. Our shopping selection features high-quality dresses that you can purchase and keep in your 
            wardrobe for future occasions. We take pride in providing our customers with an exceptional shopping experience,
             with easy-to-use website navigation, detailed descriptions, sizing information, and reviews from previous 
             customers. Whether you choose to rent or buy, we're committed to helping you find the perfect dress to make 
             you feel confident and beautiful. Thank you for choosing our website RenSho! and we look 
             forward to serving you! 
             For more delails you can click here.
            <br><br>
            
            <a href="more.php" class="btn btn-dark">CLICK HERE</a>
        </p>
    </div>


    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>