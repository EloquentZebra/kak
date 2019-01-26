<div class="slideshow-container">

<div class="slide fade">
  <img src="img/slideshow/bild1.jpg">
</div>

<div class="slide fade">
  <img src="img/slideshow/bild2.jpg">
</div>

<div class="slide fade">
  <img src="img/slideshow/bild3.JPG">
</div>

<div class="slide fade">
  <img src="img/slideshow/bild4.jpg">
</div>

<div class="slide fade">
  <img src="img/slideshow/bild5.jpg">
</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>
