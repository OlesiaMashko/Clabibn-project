<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/body_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="script/jq.js"> </script>
    <script src="script/main.js"></script>
    <title>Clabin design studio</title>
    <style>
        .HiringForm {
            border-radius: 5px;
            background-color: #4d4d4d;
            color: white;
            padding: 20px;
            margin-top: 2%;
            
        }

        .HiringForm label {
            font-family: 'Julius Sans One', sans-serif;
            font-size: 16px;
            color: #b48404;
            
        }

        .HiringForm input,
        select {
            width: 771px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            
            
        }
    </style>
</head>

<body>
    <div id="navbar">
        <div id="top" align="center">
            <br>
            <img src="images/logo.png" style="height: 62.5px;width: 150px">
            <h6 align="center" style="margin-top: 0; color: #4d4d4d">ARCHITECTURE | INTERIOR | LANDSCAPE </h6>
        </div>
        <!-- Search bar -->
        <aside id="search_box">
            <img id="search" class="search" src="images/search2.png" onclick="onSearchClicked()">
            <div id="search_place">
                <img id="search_icon" src="images/search1.png">
                <input id="search_line" type="text" placeholder="Search.." name="search">
                <img id="close_search_bar" src="images/close_bar.png" onclick="onCloseClicked()">
            </div>
        </aside>
        <div id="section">
            <section>
                <nav class="shift" id="nav">
                    <ul>
                        <li><a id="manu" href="index.html">home</a></li>
                        <li><a id="manu" href="projects.html">Previous Projects</a></li>
                        <li><a id="manu" href="gallery.html">Gallery</a></li>
                        <li><a id="manu" href="feedback.php">FeedBack</a></li>
                        <li><a id="manu" href="Aboutus.html">About Us</a></li>
                        <li><a id="manu" href="blogs.php">Blogs</a></li>
                        <li><a id="manu" href="mortgage.php">Mortgage</a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>

    <div class="HiringForm" align="center" id="body">
        <form  method="POST" action="" >
            <table>
                <tr>
                    <td>
                        <label>ENTER MORTGAGE AMOUNT: </label>&nbsp;&nbsp;
                    </td>
                    <td>
                        <input name="amount" type="text" placeholder="$"><span style="font-family: serif">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label >TERM IN YEARS: </label></td>
                    <td>
                        <select id="terms" name="term_in_years">
                            <option value="">--SELECT LOAN TERM--</option>
                            <option value="1">1 year</option>
                            <option value="2">2 years</option>
                            <option value="5">5 years</option>
                            <option value="10">10 years</option>
                            <option value="15">15 years</option>
                            <option value="20">20 years</option>
                            <option value="25">25 years</option>
                        </select><span style="font-family: serif">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label>INTEREST RATE: </label></td>
                    <td>
                        <input name="interest_rate" type="text" placeholder="%"><span style="font-family: serif">*</span>
                    </td>
                </tr>
                <tr>
                    <td><label> ENTER DOWN PAYMENT:</label></td>
                    <td>
                        <input name="down_payment" type="text" placeholder="$"><span style="font-family: serif">*</span>
                    </td>
                </tr>
            </table>
            <input id="btn" class="btn" style="width: 200px;" type="submit" value="Submit"> &nbsp;&nbsp;
        </form>    
        
        <?php
        if (isset($_POST["amount"]) && isset($_POST["term_in_years"]) && isset($_POST["interest_rate"]) && isset($_POST["down_payment"])) {
            $amount = $_POST['amount'];
            $term = $_POST['term_in_years'];
            $rate = $_POST['interest_rate'];
            $prepayment = $_POST['down_payment'];

            $rateProc = $rate / 100;

            $monthlyPayment = ((($amount - $prepayment) * $rateProc) + ($amount - $prepayment)) / ($term * 12);
            $routeMonthlyPayment = round($monthlyPayment,2);
        }

        if (isset($routeMonthlyPayment)){
            echo "Amount of mortgage: $".$amount;
            echo "<br>";
            echo "Loan term: ".($term * 12)." months";
            echo "<br>";
            echo "Interest Rate: ".$rateProc."%";
            echo "<br>";
            echo "Down payment amount: $".$prepayment;
            echo "<br>";
            echo "<h5 style='color:#F39C12'>The monthly payment amount: $".$routeMonthlyPayment."</h5>";
            echo "<br>";
        }
        
        ?>

    </div>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Interior designing</a></li>
                            <li><a href="#">Exterior designing</a></li>
                            <li><a href="#">Landscapes</a></li>
                            <li><a href="#">Commercial buildings</a></li>
                            <li><a href="#">Structure designing</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="Aboutus.html">Company</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="hiring.php">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Clabin</h3>
                        <p>We do not just build things, we give soul to the clay! We are not just a company, we’re the
                            family of mother earth and that is why our focus is always on the eco friendly development.
                            Feel free to contact us for more.</p>
                    </div>
                    <div class="col item social">
                        <a href="https://www.facebook.com/Clabin-Design-Studio-106715804753599/"><i
                                class="icon ion-social-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a>
                        <a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a>
                        <a href="https://instagram.com/clabin_design_studio?utm_medium=copy_link"><i
                                class="icon ion-social-instagram"></i></a>
                    </div>
                </div>
                <a href="contact%20us.html"><input type="button" value="Contact Us" id="contactbtn"
                        class="footer-contact-btn"></a>
                <p class="copyright">Clabin Disign Studio © 2022</p>
                <p class="copyright">Authors: Parth Antala, Olesia Mashkovtseva, Deemple. All rights reserved</p>
            </div>
        </footer>
    </div>
</body>

</html>