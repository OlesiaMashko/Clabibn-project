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
            * {
              box-sizing: border-box;
            }
            .blogbody {
              font-family: Arial;
              padding: 20px;
              background: black;
              color: black;
              text-align: center;
              align-items: center;
            }
            .header {
              padding: 30px;
              font-size: 40px;
              text-align: center;
              background: white;
            }
            .fakeimg {
              background-color: #aaa;
              width: 100%;
              padding: 20px;
            }
            .blogcard {
               background-color: white;
               padding: 20px;
               margin-top: 20px;
            }
            .blogrow:after {
              content: "";
              display: table;
              clear: both;
            }
            @media screen and (max-width: 800px) {
              .leftcolumn, .rightcolumn {   
                width: 100%;
                padding: 0;
              }
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
                        <li><a id="manu" href="feedback.html" >FeedBack</a></li>
                        <li><a id="manu" href="Aboutus.html">About Us</a></li>
                        <li><a id="manu" href="blogs.php">Blogs</a></li>
                        <li><a id="manu" href="mortgage.php">Mortgage</a></li>
                    </ul>
                </nav>
            </section>
            </div>
        </div>
        <div id="body">

             <?php include 'blogs_content.php'; ?>

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
                            <p>We do not just build things, we give soul to the clay! We are not just a company, we’re the family of mother earth and that is why our focus is always on the eco friendly development. Feel free to contact us for more.</p>
                        </div>
                        <div class="col item social">
                            <a href="https://www.facebook.com/Clabin-Design-Studio-106715804753599/"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a>
                            <a href="https://instagram.com/clabin_design_studio?utm_medium=copy_link"><i class="icon ion-social-instagram"></i></a>
                        </div>
                    </div>
                    <a href="contact%20us.html"><input type="button" value="Contact Us" id="contactbtn" class="footer-contact-btn"></a>
                    <p class="copyright">Clabin Disign Studio © 2022</p>
                    <p class="copyright">Authors: Parth Antala, Olesia Mashkovtseva, Deemple. All rights reserved</p>
                </div>
            </footer>
        </div>
    </body>

</html>