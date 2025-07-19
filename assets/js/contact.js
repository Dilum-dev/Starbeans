
document.addEventListener('DOMContentLoaded', function() {
      // Initialize GSAP animations
      gsap.registerPlugin(ScrollTrigger);
      
      // Parallax effect for hero background
      const parallaxBg = document.querySelector('.parallax-bg');
      if (parallaxBg) {
        gsap.to(parallaxBg, {
          yPercent: 20,
          ease: 'none',
          scrollTrigger: {
            trigger: '.hero-section',
            start: 'top top',
            end: 'bottom top',
            scrub: true
          }
        });
      }
      
      // Animate elements on scroll
      gsap.utils.toArray('.section-title, .contact-item, .location-card, .contact-form').forEach(element => {
        gsap.from(element, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          scrollTrigger: {
            trigger: element,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });
      });
      
      // Form submission handling
      const contactForm = document.getElementById('contactForm');
      if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
          e.preventDefault();
          alert('Thank you for your message! We\'ll get back to you soon.');
          contactForm.reset();
        });
      }
      
      // Prevent horizontal scrolling on touch devices
      document.addEventListener('touchmove', function(e) {
        if (e.touches.length === 1) {
          const touch = e.touches[0];
          if (touch.clientX <= 0 || touch.clientX >= window.innerWidth) {
            e.preventDefault();
          }
        }
      }, { passive: false });
    });