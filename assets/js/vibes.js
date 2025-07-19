// Animation triggers when elements come into view
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
      
      // Full banner parallax effect
      const fullBanner = document.querySelector('.full-banner img');
      if (fullBanner) {
        gsap.to(fullBanner, {
          yPercent: 10,
          ease: 'none',
          scrollTrigger: {
            trigger: '.full-banner',
            start: 'top bottom',
            end: 'bottom top',
            scrub: true
          }
        });
      }
      
      // Animate elements on scroll
      gsap.utils.toArray('.section-title, .content-text p, .image-container, .celebration-card').forEach(element => {
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
    });