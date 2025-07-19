// Prevent horizontal scrolling on touch devices
    document.addEventListener('touchmove', function(e) {
      if (e.touches.length === 1) {
        const touch = e.touches[0];
        if (touch.clientX <= 0 || touch.clientX >= window.innerWidth) {
          e.preventDefault();
        }
      }
    }, { passive: false });
    
    // Initialize GSAP animations
    document.addEventListener('DOMContentLoaded', function() {
      // Parallax effect for hero background
      gsap.to(".parallax-bg", {
        y: 100,
        ease: "none",
        scrollTrigger: {
          trigger: ".hero-section",
          start: "top top",
          end: "bottom top",
          scrub: true
        }
      });
      
      // Animate cards on scroll
      gsap.utils.toArray(".modern-card").forEach((card, i) => {
        gsap.from(card, {
          y: 50,
          opacity: 0,
          duration: 0.8,
          delay: i * 0.1,
          scrollTrigger: {
            trigger: card,
            start: "top 80%",
            toggleActions: "play none none none"
          }
        });
      });
    });