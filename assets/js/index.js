 
    // DOM Elements
    const menuToggle = document.getElementById('menuToggle');
    const overlayMenu = document.getElementById('overlayMenu');
    const closeBtn = document.getElementById('closeBtn');
    const navLinks = document.querySelectorAll('.nav-link');
    const featureImage = document.getElementById('featureImage');

    // Default image
    const defaultImage = 'https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/IMG_3142-scaled.webp';

    // Toggle menu function
    function toggleMenu() {
      menuToggle.classList.toggle('active');
      overlayMenu.classList.toggle('active');
      document.body.style.overflow = overlayMenu.classList.contains('active') ? 'hidden' : 'auto';
    }

    // Close menu function
    function closeMenu() {
      menuToggle.classList.remove('active');
      overlayMenu.classList.remove('active');
      document.body.style.overflow = 'auto';
    }

    // Event listeners
    menuToggle.addEventListener('click', toggleMenu);
    closeBtn.addEventListener('click', closeMenu);

    // Image hover effects
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        const newImage = link.getAttribute('data-image');
        if (newImage) {
          featureImage.style.opacity = '0';
          setTimeout(() => {
            featureImage.src = newImage;
            featureImage.style.opacity = '1';
          }, 150);
        }
      });

      link.addEventListener('mouseleave', () => {
        featureImage.style.opacity = '0';
        setTimeout(() => {
          featureImage.src = defaultImage;
          featureImage.style.opacity = '1';
        }, 150);
      });

      // Close menu when clicking nav links
      link.addEventListener('click', closeMenu);
    });

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && overlayMenu.classList.contains('active')) {
        closeMenu();
      }
    });

    // Prevent body scroll when menu is open
    overlayMenu.addEventListener('transitionend', () => {
      if (overlayMenu.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
      }
    });
