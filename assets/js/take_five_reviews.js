document.addEventListener("DOMContentLoaded", function () {
  // Auto-play slider
  setInterval(() => {
    changeSlide(1);
  }, 10000);
});

// Reviews slider functionality
let currentSlideIndex = 0;
const totalSlides = 4;

function changeSlide(direction) {
  const slider = document.getElementById("reviewsSlider");
  const cards = document.querySelectorAll(".review-card");
  const dots = document.querySelectorAll(".dot");

  // Remove active class from current slide
  cards[currentSlideIndex].classList.remove("active");
  dots[currentSlideIndex].classList.remove("active");

  // Update slide index
  currentSlideIndex += direction;

  if (currentSlideIndex >= totalSlides) {
    currentSlideIndex = 0;
  } else if (currentSlideIndex < 0) {
    currentSlideIndex = totalSlides - 1;
  }

  // Move slider
  slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;

  // Add active class to new slide
  cards[currentSlideIndex].classList.add("active");
  dots[currentSlideIndex].classList.add("active");
}

function currentSlide(index) {
  const slider = document.getElementById("reviewsSlider");
  const cards = document.querySelectorAll(".review-card");
  const dots = document.querySelectorAll(".dot");

  // Remove active class from current slide
  cards[currentSlideIndex].classList.remove("active");
  dots[currentSlideIndex].classList.remove("active");

  // Set new slide index
  currentSlideIndex = index - 1;

  // Move slider
  slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;

  // Add active class to new slide
  cards[currentSlideIndex].classList.add("active");
  dots[currentSlideIndex].classList.add("active");
}
