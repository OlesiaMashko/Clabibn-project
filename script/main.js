var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var thumb = document.getElementsByClassName("thumb");
    if (n > slides.length)
        {slideIndex = 1}
    
    if (n < 1)
        {slideIndex = slides.length}
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    for (i = 0; i < thumb.length; i++) {
        thumb[i].className = thumb[i].className.replace(" active", "");
    }
    console.log(slides.length);
    slides[slideIndex-1].style.display = "block";
    thumb[slideIndex-1].className += " active";
}

//search bar
function onSearchClicked() {
    $("#search").animate({ 'width': '50px', 'height': '50px' }, 2000);
    $('#search').hide()
        .animate({}, function() {
            $("#search_place").fadeIn(800)
        });
       
}
function onCloseClicked() {
    $('#search_place').fadeOut(800);
    $("#search").fadeIn();
}


//donation form
function onCloseDonationClicked() {
    $('#donation-form').hide(800);
}

function search_project(){
    let input = document.getElementById('search_line').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('searchProject');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="block";                 
        }
    }
}
