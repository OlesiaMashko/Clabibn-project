//donation form
var firstName = "";
var lastName = "";
var email = "";
var dType = "";
var receipt = "";
var anon = "";
var list = "";
var amount = "";
var paymentMethod = "";

// $('.set-amount').autoGrow(0);
window.onload = function() {

    //Set & Highlight Donation Amount
    $(".button").click(function() {
        $(".button").removeClass("selected");
        if ($(this).attr('id') != "enter_amount") {
            amount = $(this).html();
        }
        $(".amount").css("background-color", "#F5F5F5");
        $(this).addClass("selected");
        $(this).find("input").focus();
    });

    //Grow the donation box if they type more than 4 numbers
    $(".set-amount").keyup(function() {
        if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        }
        amount = "$" + $(".set-amount").val();

    });

    $("input").on("change", function() {
        firstName = $("#firstName").val();
        lastName = $("#lastName").val();
        email = $("#email").val();

        if ($("#one-time").prop("checked")) {
            dType = "One-Time";
        }
        if ($("#monthly").prop("checked")) {
            dType = "Monthly";
        }
    });

    $(".pay_method").click(function() {
        console.log("selected");
        $(".pay_method").removeClass("selected_method");
        paymentMethod = $(this).attr('value');
        $(this).addClass("selected_method");
        $(this).find("input").focus();
    });

};

function isNotValid(str) {
    return str == "";
}

function onSelectPaymentMethodClicked() {
    let isValidFilds = true;
    console.log(amount);
    if (isNotValid(firstName)) {
        isValidFilds = false;
        $("#firstName").css("background-color", "#D47D7D");
    }
    if (isNotValid(lastName)) {
        isValidFilds = false;
        $("#lastName").css("background-color", "#D47D7D");
    }
    if (isNotValid(email)) {
        isValidFilds = false;
        $("#email").css("background-color", "#D47D7D");
    }
    if (isNotValid(amount)) {
        isValidFilds = false;
        $(".amount").css("background-color", "#D47D7D");
    }
    if (isValidFilds) {
        $("#pay_method_box").slideDown(200);
        $("#donation_amount").slideUp(100);
    }

};

function onBackClicked() {
    $("#pay_method_box").slideUp(100);
    $("#donation_amount").slideDown(200);
};


function onDonateClicked() {
    if (isNotValid(paymentMethod)) {
        //TODO show error
    } else {
        $("#success").show(100)
        $("#pay_method_box").hide(100);
        $("#first_name_output").text(firstName);
        $("#last_name_output").text(lastName);
        $("#email_output").text(email);
        $("#amount_output").text(amount);
        $("#payment_method_output").text(paymentMethod);
        $("#payment_type_output").text(dType);

    }
}
