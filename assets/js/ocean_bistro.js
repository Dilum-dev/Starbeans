document.addEventListener("DOMContentLoaded", function () {
  const text = "Ocean Bistro";
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
