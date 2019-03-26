// READ MORE
const btnText = document.querySelector(".myBtn");
dots = document.querySelector(".dots");
moreText = document.querySelector(".more");

btnText.addEventListener("click", function() {
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Pokaż więcej";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Pokaż mniej";
    moreText.style.display = "inline";
  }
});

// SLIDER

let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
  // Flex?
}

// Show prev
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();
