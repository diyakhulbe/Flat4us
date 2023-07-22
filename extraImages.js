
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 

let popup=document.getElementById("p2");
function openpopup(){
  // popup.classList.add("open-popup");
  popup.style.visibility="visible";
  popup.style.top="58%";
  popup.style.left="85%";
  popup.style.padding="16px";
  popup.style.transform="translate(-50%,-70%) scale(1)"; 
}
function closepopup(){
 //popup.classList.remove("open-popup");
 popup.style.visibility="hidden";
}