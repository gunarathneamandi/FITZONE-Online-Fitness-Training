

let currentSlide2 = 1;
let currentSlide3 = 1;
let currentSlide4 = 1;

function showSlide(section,n) {
	if(section=="section2"){
	  currentSlide2 += n;
	  
	  const slides = document.querySelectorAll('#section2 .flex-box');
	  if (currentSlide2 > slides.length) {
		currentSlide2 = 1;
	  }
	  else if (currentSlide2 < 1) {
		currentSlide2 = slides.length;
	  }
	  for (let i = 0; i < slides.length; i++) {
		if (i === currentSlide2 - 1) {
		  slides[i].style.display = "flex";
		} else {
		  slides[i].style.display = "none";
		}
	  }
	}
	
	else if(section=="section3"){
	  currentSlide3 += n;
	  
	  const slides = document.querySelectorAll('#section3 .flex-box');
	  if (currentSlide3 > slides.length) {
		currentSlide3 = 1;
	  }
	  else if (currentSlide3 < 1) {
		currentSlide3 = slides.length;
	  }
	  for (let i = 0; i < slides.length; i++) {
		if (i === currentSlide3 - 1) {
		  slides[i].style.display = "flex";
		} else {
		  slides[i].style.display = "none";
		}
	  }
	}
	
	else if(section=="section4"){
	  currentSlide4 += n;
	  
	  const slides = document.querySelectorAll('#section4.flex-box');
	  if (currentSlide4 > slides.length) {
		currentSlide4 = 1;
	  }
	  if (currentSlide4 < 1) {
		currentSlide4 = slides.length;
	  }
	  for (let i = 0; i < slides.length; i++) {
		if (i === currentSlide4 - 1) {
		  slides[i].style.display = "flex";
		} else {
		  slides[i].style.display = "none";
		}
	  }
	}
}

//References : 
//https://timetoprogram.com/automatic-image-slider-html-css-javascript/
//https://codepen.io/yenteho/pen/Empvwq
//https://stackoverflow.com/questions/56982841/translatex-with-other-distance
