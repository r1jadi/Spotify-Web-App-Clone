<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Artists</title>
    <link rel="stylesheet" href="favartists.css">
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Images/dualipapic.webp" style="width:100%">
  <div class="text">Dua Lipa</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="Images/travisscott2.jpg" style="width:100%">
  <div class="text">Travis Scott</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="Images/ledrivulapic.jpg" style="width:100%">
  <div class="text">Ledri Vula</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="Images/dhuratadora2.jpg" style="width:100%">
  <div class="text">Dhurata Dora</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<script src="favscript.js">

</script>
</body>
</html>