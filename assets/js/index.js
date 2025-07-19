document.addEventListener('DOMContentLoaded', function() {
    // Ensure the video plays correctly
    const video = document.getElementById('bg-video');
    
    // Attempt to play the video (muted autoplay may be blocked by some browsers)
    const playPromise = video.play();
    
    if (playPromise !== undefined) {
        playPromise.catch(error => {
            // Auto-play was prevented, show a play button or handle accordingly
            console.log('Auto-play prevented:', error);
        });
    }
    
    // Additional interactive effects can be added here
    const locationLinks = document.querySelectorAll('.location-link');
    
    locationLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});