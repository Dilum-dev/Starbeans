document.addEventListener("DOMContentLoaded", function () {
  const text = "The Barn";
  const subtitle = document.getElementById("ocean-bistro");

  // Clear the subtitle
  subtitle.innerHTML = "";

  // Create spans for each character
  for (let i = 0; i < text.length; i++) {
    const span = document.createElement("span");
    span.textContent = text[i];
    span.style.animationDelay = `${i * 0.1}s`;
    subtitle.appendChild(span);

    // Add space after character if it's not the last one
    if (text[i] === " " && i < text.length - 1) {
      subtitle.appendChild(document.createTextNode(" "));
    }
  }

  // Function to restart animation
  function restartAnimation() {
    const spans = subtitle.querySelectorAll("span");
    spans.forEach((span) => {
      // Reset animation
      span.style.animation = "none";
      void span.offsetWidth; // Trigger reflow
      span.style.animation = "reveal 0.5s forwards";
      span.style.animationDelay = `${Array.from(spans).indexOf(span) * 0.1}s`;
    });
  }

  // Set interval to restart animation every 5 seconds
  setInterval(restartAnimation, 5000);
});


//menu js

document.addEventListener('DOMContentLoaded', function() {
  // Prevent double-tap on iOS devices
  document.addEventListener('touchstart', function() {}, {passive: true});
  
  // Set up click handlers for all cards
  document.querySelectorAll('.pasta-card').forEach(function(card) {
    card.addEventListener('click', function(e) {
      e.preventDefault();
      
      const imgSrc = this.querySelector('img').src;
      const title = this.getAttribute('data-title');
      const desc = this.getAttribute('data-desc');
      
      document.getElementById('modalDishImage').src = imgSrc;
      document.getElementById('modalDishTitle').textContent = title;
      document.getElementById('modalDishDescription').textContent = desc;
      document.getElementById('pastaModal').classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  // Close modal
  document.querySelector('.close-btn').addEventListener('click', function() {
    document.getElementById('pastaModal').classList.remove('active');
    document.body.style.overflow = '';
  });

  // Close when clicking outside modal
  document.getElementById('pastaModal').addEventListener('click', function(e) {
    if (e.target === this) {
      this.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
});
