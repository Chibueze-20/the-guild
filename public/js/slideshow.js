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
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

var sliderIndex = 0;
showAutoSlides();

function showAutoSlides() {
    var i;
    var Autoslides = document.getElementsByClassName("mySlides");
    var Autodots = document.getElementsByClassName("dot");
    for (i = 0; i < Autoslides.length; i++) {
        Autoslides[i].style.display = "none";
    }
    sliderIndex++;
    if (sliderIndex > Autoslides.length) {sliderIndex = 1}
    for (i = 0; i < Autodots.length; i++) {
        Autodots[i].className = Autodots[i].className.replace(" active", "");
    }
    Autoslides[sliderIndex-1].style.display = "block";
    Autodots[sliderIndex-1].className += " active";
    setTimeout(showAutoSlides, 5000); // Change image every 2 seconds
}
