var i = 0;
var imgArray = [ 
  "//localhost/Images/dhuratadora2.jpg", 
  "//localhost/Images/ledrivulapic.jpg",
  "//localhost/Images/dualipapic.webp",
  "//localhost/Images/travisscott2.jpg",
];

function ndrroImg() { 
  var slideshow = document.getElementById('slideshow');
  
  if (!slideshow) {
    console.error("Element with id 'slideshow' not found.");
    return;
  }

  if (i < imgArray.length) {
    slideshow.src = imgArray[i];
    i++;
  } else {
    i = 0;
  }
}

window.addEventListener('load', function() {
  console.log("Page loaded.");
  ndrroImg();
});

