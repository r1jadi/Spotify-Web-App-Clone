/*let fotoIndex = 1;
showDivs(fotoIndex);

function plusDivs(n) {
  showDivs(fotoIndex += n);
}

function showDivs(n) {
  let i;
  let x = document.getElementsByClassName("fotoslide");
  if (n > x.length) {fotoIndex = 1}
  if (n < 1) {fotoIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[fotoIndex-1].style.display = "block";
}*/