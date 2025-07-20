
// Add staggered animation to cards
      const cards = document.querySelectorAll(".hotel-card");
      cards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.2}s`;
      });

      // Add click effect to reserve buttons
      const reserveButtons = document.querySelectorAll(".reserve-btn");
      reserveButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
          e.preventDefault();

          // Create ripple effect
          const ripple = document.createElement("span");
          const rect = this.getBoundingClientRect();
          const size = Math.max(rect.width, rect.height);
          const x = e.clientX - rect.left - size / 2;
          const y = e.clientY - rect.top - size / 2;

          ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.5);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;

          this.appendChild(ripple);

          setTimeout(() => {
            ripple.remove();
          }, 600);
          
        });
      });

      // Add CSS animation for ripple effect
      const style = document.createElement("style");
      style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
      document.head.appendChild(style);

      // Add scroll reveal animation
      const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, observerOptions);

      cards.forEach((card) => {
        observer.observe(card);
      });