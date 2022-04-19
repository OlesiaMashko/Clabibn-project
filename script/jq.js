$(document).ready(function () {
    $("#btn").click(function () {
        const fname=$("#fname").val();
        const lname=$("#lname").val();
        const email=$("#email").val();

        if(fname=="")
        {
            $("#fname").next().text("Please enter FirstName");
        }
        else if(lname=="")
        {
            $("#fname").next().text("*");
            $("#lname").next().text("Please enter LastName");
        }
        else if(email=="")
        {
            $("#lname").next().text("*");
            $("#email").next().text("Please enter Email ID");
        }
        else{
            $("#feedback").submit();
        }
    });

});

$(document).ready(function(){
    $("h1").on({
        mouseenter: function(){
            $(this).css("color", "#FAD7A0");
        },  
        mouseleave: function(){
            $(this).css("color", "#b48404");
        } 
    });
});

$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "gray");
    });
    $("input").blur(function(){
        $(this).css("background-color", "white");
    });
});

$(document).ready(function(){
    $("h1").css({"color": "#b48404", "font-family": "'Righteous'"});

});

$(document).ready(function(){
    $("#a").fadeIn();
    $("#b").fadeIn(2000);
    $("#c").fadeIn(3000);
    $("#d").fadeIn(4000);
    $("#e").fadeIn(5000);
});


//FAQs form
$(document).ready(function() {
        "use strict";
        $(".answer1").hide();
        $(".question1").click(function() {
            $(".answer1").slideToggle(500);
            var src = ($("#state1").attr("src") === "images/down.png") ?
                "images/up.png" :
                "images/down.png";
            $("#state1").attr("src", src);
        });
    });

$(document).ready(function() {
        "use strict";
        $(".answer2").hide();
        $(".question2").click(function() {
            $(".answer2").slideToggle(500);
            var src = ($("#state2").attr("src") === "images/down.png") ?
                "images/up.png" :
                "images/down.png";
            $("#state2").attr("src", src);
        });
    });

$(document).ready(function() {
        "use strict";
        $(".answer3").hide();
        $(".question3").click(function() {
            $(".answer3").slideToggle(500);
            var src = ($("#state3").attr("src") === "images/down.png") ?
                "images/up.png" :
                "images/down.png";
            $("#state3").attr("src", src);
        });
    });

$(document).ready(function() {
        "use strict";
        $(".answer4").hide();
        $(".question4").click(function() {
            $(".answer4").slideToggle(500);
            var src = ($("#state4").attr("src") === "images/down.png") ?
                "images/up.png" :
                "images/down.png";
            $("#state4").attr("src", src);
        });
    });

$(document).ready(function() {
        "use strict";
        $(".answer5").hide();
        $(".question5").click(function() {
            $(".answer5").slideToggle(500);
            var src = ($("#state5").attr("src") === "images/down.png") ?
                "images/up.png" :
                "images/down.png";
            $("#state5").attr("src", src);
        });
    });

$(document).ready(function() {
    "use strict";
    $(".answer6").hide();
    $(".question6").click(function() {
        $(".answer6").slideToggle(500);
        var src = ($("#state6").attr("src") === "images/down.png") ?
            "images/up.png" :
            "images/down.png";
        $("#state6").attr("src", src);
    });
});
