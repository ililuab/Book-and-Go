
// Begin - Slideshow
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); 
}
// Eind - Slideshow

// Begin Calender Past Fix

var vandaag = new Date().toISOString().split('T')[0];
document.getElementsByName("indexcalender")[0].setAttribute('min', vandaag);

// Eind Calender Past Fix

// Begin required border change

// const Zoek = document.querySelector('#formindex .Zoeken');

// Zoek.addEventListener('click', (e) => {
//   e.preventDefault();

//   const inputs = document.querySelectorAll('#formindex input');

//   for (let i = 0; i < inputs.length; i++) {
//     if (inputs[i].hasAttribute("required")) {
//       if (inputs[i].value == "") {
//         inputs[i].style.border = "1px solid red";
//       }
//     }
//   }
// })
                
// B required border change