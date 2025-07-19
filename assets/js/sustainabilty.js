// Prevent horizontal scrolling on touch devices
    document.addEventListener('touchmove', function(e) {
      if (e.touches.length === 1) {
        const touch = e.touches[0];
        if (touch.clientX <= 0 || touch.clientX >= window.innerWidth) {
          e.preventDefault();
        }
      }
    }, { passive: false });