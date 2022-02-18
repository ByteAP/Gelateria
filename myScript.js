var slideIndex = 1;
var punt = document.getElementsByClassName("punto");


function showSlides(x) {
  var i;
  var slides = document.getElementsByClassName("slidess");
  var dot = document.getElementsByClassName("punto");
    if (x > slides.length) {
    slideIndex = slides.length
  }
  if (x < 1) {
    slideIndex = 1
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

//   for (i = 0; i < dot.length; i++) {
//     dot[i].className = dot[i].className.replace(" colorato", "");
// }
  slides[slideIndex-1].style.display = "block";
  dot[slideIndex-1].className += " colorato";
}

function plusSlides(x) {
  punt[slideIndex-1].className = punt[slideIndex-1].className.replace(" colorato", "");
  showSlides(slideIndex += x);
}
function dots(y){
  punt[slideIndex-1].className = punt[slideIndex-1].className.replace(" colorato", "");
  showSlides(slideIndex = y);

}


showSlides(slideIndex);
