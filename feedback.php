<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="form,username">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stylesheets/style.css">
        <link rel="stylesheet" href="stylesheets/body_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="script/jq.js"> </script>
        <script src="script/main.js"></script>
        <title>form</title>
    </head>
    <body>
        <div id="navbar">
            <div id="top" align="center">
                <br>
                <img src="images/logo.png" style="height: 62.5px;width: 150px">
                <h6 align="center" style="margin-top: 0; color: #4d4d4d">ARCHITECTURE | INTERIOR | LANDSCAPE </h6>
            </div>
            <section>
                <nav class="shift">
                    <ul>
                        <li><a id="manu" href="index.html">home</a></li>
                        <li><a id="manu" href="projects.html">Previous Projects</a></li>
                        <li><a id="manu" href="gallery.html">Gallery</a></li>
                        <li><a id="manu" href="feedback.php" >FeedBack</a></li>
                        <li><a id="manu" href="Aboutus.html">About Us</a></li>
                        <li><a id="manu" href="blogs.php">Blogs</a></li>
                        <li><a id="manu" href="mortgage.php">Mortgage</a></li>
                    </ul>
                </nav>
            </section>
        </div>
        <div class="form" align="center" id="body">
            <form id="feedback" method="post" action="feedbackInsert.php">
                <label>First name:<br><input type="text" id="fname" name="fname" placeholder="your firstname..."><span style="font-family: serif">*</span></label><br>

                <label>Last name:<br><input type="text" id="lname" name="lname" placeholder="your lastname..."><span style="font-family: serif">*</span></label><br>

                <label>Email:<br><input type="email" id="email" name="email" placeholder="enter email"><span style="font-family: serif">*</span></label><br>               

                <label>Age:<br><input type="number" id="age" name="age" min=18 max=100 value=18 ></label><br>

                <label>Country:<br><select id="country" name="country">
                    <option value="India">India</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    </select>
                    <br>
                </label>
                <label>Feedback:<br><textarea id="feedback" name="feedback" placeholder="Write something..."></textarea>   </label>
                <br>
                
            </form>     
            <input id="btn" class="btn" style="width: 200px;" type="button" value="Submit"> &nbsp;&nbsp;  
        </div>
        
        <div class="faq-form-main">
            <h2>&nbsp;<u style="text-align: center;">Frequently Asked Question:</u></h2>
            <div>
            <?php include 'faqs.php'; ?>
       

            <?php echo $content ?>
        
            </div>
        </div><br>
        <div  id="fb-footer" class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                        <div class="col item social">
                            <a href="https://www.facebook.com/Clabin-Design-Studio-106715804753599/"><i class="icon ion-social-facebook"></i></a>
                            <a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a>
                            <a href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a>
                            <a href="https://instagram.com/clabin_design_studio?utm_medium=copy_link"><i class="icon ion-social-instagram"></i></a>
                        </div>
                    </div>
                    <p class="copyright">Clabin Disign Studio © 2022</p>
                    <p class="copyright">Authors: Parth Antala, Olesia Mashkovtseva, Deemple. All rights reserved</p>
                </div>
            </footer>
        </div>
    </body>
</html>
