document.addEventListener("DOMContentLoaded", function () {
  const video = document.querySelector("video");

  video.play().catch(function (error) {
    console.log("Video playback failed:", error);
    if (error.name === "NotAllowedError") {
      const playButton = document.createElement("button");
      playButton.textContent = "Play Video";
      playButton.style.position = "absolute";
      playButton.style.zIndex = "3";
      playButton.style.top = "10px";
      playButton.style.right = "10px";
      playButton.style.padding = "10px";
      playButton.style.backgroundColor = "rgba(255, 255, 255, 0.7)";
      playButton.style.border = "none";
      playButton.style.borderRadius = "5px";
      playButton.style.cursor = "pointer";

      playButton.addEventListener("click", function () {
        video.play();
        playButton.style.display = "none";
      });

      document.body.appendChild(playButton);
    }
  });

  const locationLogos = document.querySelectorAll(".location-logo");
  locationLogos.forEach((logo) => {
    logo.addEventListener("click", function () {
      console.log(`${logo.alt} clicked`);
    });
  });
});
