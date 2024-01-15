const mySlider = document.querySelectorAll(".mySlider"),
  index = document.querySelectorAll(".index");
let counter = 1;
var timer = setInterval(autoslide, 5000);

slideFun(counter);

function autoslide() {
  counter += 1;
  slideFun(counter);
}
function resetTimer() {
  if (typeof timer !== "undefined") {
    clearInterval(timer);
  }
  timer = setInterval(autoslide, 10000);
}

function plusSlides(n) {
  counter += n;
  slideFun(counter);
  resetTimer();
}
function currentSlide(n) {
  counter = n;
  slideFun(counter);
  resetTimer();
}
function slideFun(n) {
  let i;
  for (i = 0; i < mySlider.length; i++) {
    mySlider[i].style.display = "none";
    mySlider[i].classList.add("hidden");
  }
  for (i = 0; i < index.length; i++) {
    index[i].classList.remove("action");
  }
  if (n > mySlider.length) {
    counter = 1;
  }
  if (n < 1) {
    counter = mySlider.length;
  }
  if (mySlider[counter - 1].style.removeProperty) {
    mySlider[counter - 1].style.removeProperty("display");
  } else {
    mySlider[counter - 1].style.removeAttribute("display");
  }
  mySlider[counter - 1].classList.remove("hidden");
  mySlider[counter - 1].classList.add("md:grid", "md:grid-cols-3", "md:gap-4");
  index[counter - 1].classList.add("action");
}

///////// Scroll to Top /////////////

// Get the button
var mybutton = document.getElementById("backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.classList.remove('hidden')
    } else {
        mybutton.classList.add('hidden')
    }
}

// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function openModalMenu(){
  document.getElementById('modalMenu').classList.remove('hidden')
}

function closeModalMenu(){
  document.getElementById('modalMenu').classList.add('hidden')
}


function animation() {
  return {
    counter: 0,
    animate(finalCount) {
      let time = 1500 /* Time in milliseconds */
      let interval = 9
      let step = Math.floor(finalCount*interval/time)
      let timer = setInterval(() => {
        this.counter = this.counter + step;
        if (this.counter >= finalCount + step) {
          this.counter = finalCount
          clearInterval(timer);
          timer = null;
          return;
        }
      }, interval);
    }
  };
}
