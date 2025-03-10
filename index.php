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

        footer {
            color: black;
            background-color: orangered;
        }

        .innerfoot {
            display: flex;
            justify-content: space-around;
        }

        .fotlink div {
            border-bottom: 2px solid black;
            border-spacing: 10px;
        }

        .fot li {
            list-style-type: circle;
        }

        .fot ul li a {
            color: white;
            text-decoration: none;
        }

        .fot ul {
            padding: 0px 10px;
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


    <div class="main_card">

        <div class="card" style="width: 20rem;">
            <img src="pic/dress1.png" class="card-img-top" alt="Dress1">
            <div class="card-body">
                <h5 class="card-title">Rs 400</h5>
                <a href="shop/dress_one.php" class="btn btn-danger">MORE DETAILS</a>
                <a href="" class="btn btn-danger">Buy</a>
            </div>
            
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress2.png" class="card-img-top" alt="Dress2">
            <div class="card-body">
                <h5 class="card-title">Rs 450</h5>
                <a href="shop/dress2.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress3.png" class="card-img-top" alt="Dress3">
            <div class="card-body">
                <h5 class="card-title">Rs 650</h5>
                <a href="shop/dress3.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress4.png" class="card-img-top" alt="Dress4">
            <div class="card-body">
                <h5 class="card-title">Rs 550</h5>
                <a href="shop/dress4.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress5.png" class="card-img-top" alt="Dress5">
            <div class="card-body">
                <h5 class="card-title">Rs 1100</h5>
                <a href="shop/dress5.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress6.png" class="card-img-top" alt="Dress6">
            <div class="card-body">
                <h5 class="card-title">Rs 950</h5>
                <a href="shop/dress6.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress7.png" class="card-img-top" alt="Dress7">
            <div class="card-body">
                <h5 class="card-title">Rs 750</h5>
                <a href="shop/dress7.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress8.png" class="card-img-top" alt="Dress8">
            <div class="card-body">
                <h5 class="card-title">Rs 800</h5>
                <a href="shop/dress8.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress9.png" class="card-img-top" alt="Dress9">
            <div class="card-body">
                <h5 class="card-title">Rs 890</h5>
                <a href="shop/dress9.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress10.png" class="card-img-top" alt="Dress10">
            <div class="card-body">
                <h5 class="card-title">Rs 550</h5>
                <a href="shop/dress10.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress11.png" class="card-img-top" alt="Dress11">
            <div class="card-body">
                <h5 class="card-title">Rs 690</h5>
                <a href="shop/dress11.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>

        <div class="card" style="width: 20rem;">
            <img src="pic/dress12.png" class="card-img-top" alt="Dress12">
            <div class="card-body">
                <h5 class="card-title">Rs 1100</h5>
                <a href="shop/dress12.php" class="btn btn-danger">MORE DETAILS</a>
            </div>
        </div>
    </div>



    <footer>
        <div class="fot">
            <div class="innerfoot">
                <div class="simbol">
                    <img src="">
                </div>
                <div>
                    <div class="fotlink">
                        <div>Social</div>
                    </div>
                    <ul>
                        <li><a href="#"> Insta</a> </li>
                        <li><a href="#"> Facebook</a> </li>


                    </ul>
                </div>
                <div>
                    <div class="fotlink">
                        <div>Want To Go?</div>
                    </div>
                    <ul>
                        <li><a href="index.php"> Home</a> </li>
                        <li><a href="about.php"> About</a> </li>
                        <li><a href="more.php"> Contact </a> </li>
                        <li><a href="login.php"> Logic</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>