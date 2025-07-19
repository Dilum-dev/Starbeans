// Parallax effect for hero background
      const parallaxBg = document.querySelector('.food-parallax');
      if (parallaxBg) {
        gsap.to(parallaxBg, {
          yPercent: 20,
          ease: 'none',
          scrollTrigger: {
            trigger: '.food-hero',
            start: 'top top',
            end: 'bottom top',
            scrub: true
          }
        });
      }
      
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
      
      // Menu button functionality
      document.querySelectorAll('.menu-buttons-container .menu-button').forEach(button => {
        button.addEventListener('click', function() {
          document.querySelector('.menu-buttons-container .menu-button.active').classList.remove('active');
          this.classList.add('active');
        });
      });

    
      
      // Special animation for food cards
      gsap.utils.toArray('.food-card').forEach((card, i) => {
        gsap.from(card, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          delay: i * 0.15,
          scrollTrigger: {
            trigger: '.showcase-section',
            start: 'top 85%',
            toggleActions: 'play none none none'
          }
        });
      });