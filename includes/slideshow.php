<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/slideshow/bild1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slideshow/bild2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slideshow/bild3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slideshow/bild4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slideshow/bild5.jpg" style="width:100%">
</div>

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}
</script>
