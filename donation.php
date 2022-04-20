<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donation</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="stylesheets/donation2.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script/donate1.js"></script>

</head>

<body class="body-donation" style="background-image: url('images/donation_bg1.jpeg');">
    <form action="dbDonation.php" method="post">
    <div class="title-main"></div>
    <h1 class="donationMainTitle">SAVE THE PLANET!</h1>
    <div class="donation-container">
        <div id="donation_amount" class="donation-box">
            <div class="title">Donate and help us plant a tree.</div>
            <div class="fields">
                <input type="text" id="firstName" name="firstName" placeholder="First Name"> </input>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name"> </input>
                <input type="text" id="email" name="email" placeholder="Email"> </input>
            </div>
            <div class="amount" >
                <div id="enter_amount" class="button">$<input type="text" class="set-amount" name="amount" placeholder=""> </input>
                </div>
            </div>
            <div class="switch">
                <input type="radio" class="switch-input" name="permission" value="One-Time" id="one-time" checked="">
                <label for="one-time" class="switch-label switch-label-off">One-Time</label>
                <input type="radio" class="switch-input" name="permission" value="Monthly" id="monthly">
                <label for="monthly" class="switch-label switch-label-on">Monthly</label>
                <span class="switch-selection"></span>
            </div>
            <div class="checkboxes">
                <input type="checkbox" id="receipt" class="checkbox" name='distribution[]' value="Email Me A Receipt" />
                <label for="receipt">Email Me A Receipt</label>
                <br />
                <input type="checkbox" id="anon" class="checkbox" name='distribution[]' value="Give Anonymously" />
                <label for="anon">Give Anonymously</label>
                <br />
                <input type="checkbox" id="list" class="checkbox" name='distribution[]' value="Add Me To Email List" />
                <label for="list">Add Me To Email List</label>
            </div>
            <div class="confirm">
            </div>
            <div class="donate-button" onclick="onSelectPaymentMethodClicked()"><i class="fa fa-credit-card"></i> Next </div>
        </div>
        <div class="donation-container">
            <div id="pay_method_box" class="donation-box">
                <div class="title">Select donation method</div>
                <button class="back_btn" onclick="onBackClicked()"><img src="images/back_chevron.png" style="padding-top: 4px;"/></button>
                <table>
                    <tr class="table_line">
                        <td><input type="radio" name="payMethod" value="Bitcoin"><img class="pay_method" src="images/bitcoin.png" value="bitcoin"></input></td>
                        <td><input type="radio" name="payMethod" value="Ethereum"><img class="pay_method" src="images/ethereum.png" value="ethereum"></input></td>
                    </tr>
                    <tr class="table_line">
                        <td><input type="radio" name="payMethod" value="Apple Pay"><img class="pay_method" src="images/apple_pay.png" value="Apple Pay"></td>
                        <td><input type="radio" name="payMethod" value="Google Pay"><img class="pay_method" src="images/google_pay.png" value="Google Pay"></input></td>
                    </tr>
                    <tr class="table_line">
                        <td><input type="radio" name="payMethod" value="Visa"><img class="pay_method" src="images/visa.png" value="Visa"></td>
                        <td><input type="radio" name="payMethod" value="Master Card"><img class="pay_method" src="images/master_card.png" value="Master Card"></td>
                    </tr>

                </table>
                <div class="donate-button" onclick="onDonateClicked()"><i class="fa fa-credit-card"></i>Next</div>
            </div>
        </div>

        <div class="donation-container">
            <div id="success" class="donation-box">
                <div class="title">Success</div>
                <div style="height: 20%; width: 100%; text-align: center;">
                    <img src="images/success.png" />
                </div>
                <table style="margin-top: 30%;">
                    <tr class="table_line">
                        <td class="table_title">First Name</td>
                        <td class="table_value" id="first_name_output">FirstName</td>
                    </tr>
                    <tr class="table_line">
                        <td class="table_title">Last Name</td>
                        <td class="table_value" id="last_name_output">LastName</td>
                    </tr>
                    <tr class="table_line">
                        <td class="table_title">Email</td>
                        <td class="table_value" id="email_output">Email</td>
                    </tr>
                    <tr class="table_line">
                        <td class="table_title">Amount</td>
                        <td class="table_value" id="amount_output">$1000</td>
                    </tr>
                    <tr class="table_line">
                        <td class="table_title">Payment Method</td>
                        <td class="table_value" id="payment_method_output">$1000</td>
                    </tr>
                    <tr class="table_line">
                        <td class="table_title">Payment Type</td>
                        <td class="table_value" id="payment_type_output">$1000</td>
                    </tr>
                </table>
            </div>
        </div>
        <div  class="donation-btn-submit-set">
            <input type="submit" class="submit_donation" value="Donate Now">
        </div>
        <div class="donation-btn-set"> 
            <a href="Aboutus.html"><input type="button" value="BACK" id="donation-btn"></a>
        </div>
    </div>
    </form>
    <?php include 'dbDonation.php';?>
</body>

</html>
