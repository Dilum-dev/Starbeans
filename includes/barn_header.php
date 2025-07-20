<div class="starbeans-nav-container">
  <style>
    /* Basic Reset */
    .starbeans-nav-container * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    /* Main Navigation - Enhanced Blue Glass */
    .starbeans-nav-container .starbeans-nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(40, 60, 50, 0.45);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding: 15px 5%;
      display: flex;
      align-items: center;
      z-index: 9999;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Navigation Container */
    .starbeans-nav-container .starbeans-nav-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    /* Logo Styles */
    .starbeans-nav-container .starbeans-logo-section {
      margin-right: auto;
      z-index: 10001;
    }
    
    .starbeans-nav-container .starbeans-logo-section img {
      height: 48px;
      filter: brightness(0) invert(1);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-logo-section img:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }
    
    /* Desktop Navigation Links */
    .starbeans-nav-container .starbeans-nav-links {
      display: flex;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      opacity: 1;
      visibility: visible;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-nav-links > .starbeans-nav-item {
      position: relative;
      margin: 0 12px;
    }
    
    .starbeans-nav-container .starbeans-nav-links .starbeans-nav-link {
      color: white;
      text-decoration: none;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      font-size: 14px;
      display: flex;
      align-items: center;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
    }
    
    .starbeans-nav-container .starbeans-nav-links .starbeans-nav-link::before {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 50%;
      width: 0;
      height: 2px;
      background: rgba(255, 255, 255, 0.8);
      transform: translateX(-50%);
      transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-nav-links .starbeans-nav-link:hover {
      color: #ffffff;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }
    
    .starbeans-nav-container .starbeans-nav-links .starbeans-nav-link:hover::before {
      width: 80%;
    }
    
    /* Dropdown Indicator */
    .starbeans-nav-container .starbeans-has-dropdown > .starbeans-nav-link::after {
      content: '⌄';
      margin-left: 6px;
      font-size: 14px;
      transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-has-dropdown:hover > .starbeans-nav-link::after {
      transform: rotate(180deg);
    }
    
    /* Enhanced Glass Dropdown */
    .starbeans-nav-container .starbeans-dropdown {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(15px) scale(0.95);
      background: rgba(23, 88, 21, 0.7);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      min-width: 200px;
      border-radius: 8px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: 100;
      border: 1px solid rgba(255, 255, 255, 0.15);
      overflow: hidden;
    }
    
    .starbeans-nav-container .starbeans-has-dropdown:hover .starbeans-dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(5px) scale(1);
    }
    
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      transform: translateY(10px);
      opacity: 0;
      animation: starbeans-dropdown-slide-in 0.3s cubic-bezier(0.4, 0, 0.2, 1) forwards;
    }
    
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-item:nth-child(1) { animation-delay: 0.1s; }
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-item:nth-child(2) { animation-delay: 0.15s; }
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-item:nth-child(3) { animation-delay: 0.2s; }
    
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-item:last-child {
      border-bottom: none;
    }
    
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-link {
      padding: 12px 20px;
      white-space: nowrap;
      color: rgba(255, 255, 255, 0.95);
      text-decoration: none;
      display: block;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-size: 13px;
    }
    
    .starbeans-nav-container .starbeans-dropdown .starbeans-dropdown-link:hover {
      background: rgba(255, 255, 255, 0.1);
      padding-left: 25px;
      color: #ffffff;
    }
    
    /* Hamburger Menu Button */
    .starbeans-nav-container .starbeans-hamburger {
      display: none;
      flex-direction: column;
      justify-content: space-between;
      width: 28px;
      height: 20px;
      background: none;
      border: none;
      cursor: pointer;
      z-index: 10001;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-hamburger:hover {
      transform: scale(1.1);
    }
    
    .starbeans-nav-container .starbeans-hamburger-line {
      width: 100%;
      height: 2px;
      background-color: white;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      transform-origin: center;
    }
    
    /* Hamburger Animation */
    .starbeans-nav-container .starbeans-hamburger.starbeans-active .starbeans-hamburger-line:nth-child(1) {
      transform: rotate(45deg) translate(7px, 7px);
    }
    
    .starbeans-nav-container .starbeans-hamburger.starbeans-active .starbeans-hamburger-line:nth-child(2) {
      opacity: 0;
      transform: scale(0);
    }
    
    .starbeans-nav-container .starbeans-hamburger.starbeans-active .starbeans-hamburger-line:nth-child(3) {
      transform: rotate(-45deg) translate(7px, -7px);
    }
    
    /* Mobile Menu Overlay */
    .starbeans-nav-container .starbeans-mobile-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background: rgba(18, 70, 33, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      opacity: 0;
      visibility: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      z-index: 10000;
      padding-top: 80px;
      overflow-y: auto;
    }
    
    /* Mobile Close Button */
    .starbeans-nav-container .starbeans-mobile-close {
      position: absolute;
      top: 20px;
      right: 5%;
      width: 44px;
      height: 44px;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      transform: rotate(0deg) scale(0.8);
      opacity: 0;
    }
    
    .starbeans-nav-container .starbeans-mobile-overlay.starbeans-active .starbeans-mobile-close {
      transform: rotate(180deg) scale(1);
      opacity: 1;
      transition-delay: 0.2s;
    }
    
    .starbeans-nav-container .starbeans-mobile-close:hover {
      background: rgba(255, 255, 255, 0.2);
      border-color: rgba(255, 255, 255, 0.4);
      transform: rotate(180deg) scale(1.1);
    }
    
    .starbeans-nav-container .starbeans-mobile-close::before,
    .starbeans-nav-container .starbeans-mobile-close::after {
      content: '';
      position: absolute;
      width: 18px;
      height: 2px;
      background: white;
      border-radius: 1px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-mobile-close::before {
      transform: rotate(45deg);
    }
    
    .starbeans-nav-container .starbeans-mobile-close::after {
      transform: rotate(-45deg);
    }
    
    .starbeans-nav-container .starbeans-mobile-close:hover::before,
    .starbeans-nav-container .starbeans-mobile-close:hover::after {
      background: rgba(255, 255, 255, 0.9);
      width: 20px;
    }
    
    .starbeans-nav-container .starbeans-mobile-overlay.starbeans-active {
      opacity: 1;
      visibility: visible;
    }
    
    /* Mobile Navigation */
    .starbeans-nav-container .starbeans-mobile-nav {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-item {
      width: 100%;
      max-width: 300px;
      margin-bottom: 10px;
      transform: translateY(30px);
      opacity: 0;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-mobile-overlay.starbeans-active .starbeans-mobile-nav-item {
      transform: translateY(0);
      opacity: 1;
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(1) { transition-delay: 0.1s; }
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(2) { transition-delay: 0.15s; }
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(3) { transition-delay: 0.2s; }
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(4) { transition-delay: 0.25s; }
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(5) { transition-delay: 0.3s; }
    .starbeans-nav-container .starbeans-mobile-nav-item:nth-child(6) { transition-delay: 0.35s; }
    
    .starbeans-nav-container .starbeans-mobile-nav-link {
      display: block;
      width: 100%;
      padding: 18px 25px;
      color: white;
      text-decoration: none;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      font-size: 16px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      position: relative;
      overflow: hidden;
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-link::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      transition: left 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-link:hover {
      background: rgba(255, 255, 255, 0.15);
      border-color: rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-link:hover::before {
      left: 100%;
    }
    
    /* Mobile Dropdown */
    .starbeans-nav-container .starbeans-mobile-dropdown {
      margin-top: 10px;
      max-height: 0;
      overflow: hidden;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      opacity: 0;
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-item.starbeans-dropdown-active .starbeans-mobile-dropdown {
      max-height: 200px;
      opacity: 1;
    }
    
    .starbeans-nav-container .starbeans-mobile-dropdown .starbeans-mobile-dropdown-link {
      display: block;
      padding: 12px 20px;
      color: rgba(255, 255, 255, 0.8);
      text-decoration: none;
      font-family: 'Montserrat', sans-serif;
      font-weight: 400;
      font-size: 14px;
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.05);
      border-radius: 8px;
      margin-bottom: 5px;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      transform: translateX(-10px);
      opacity: 0;
    }
    
    .starbeans-nav-container .starbeans-mobile-nav-item.starbeans-dropdown-active .starbeans-mobile-dropdown-link {
      transform: translateX(0);
      opacity: 1;
      transition-delay: 0.1s;
    }
    
    .starbeans-nav-container .starbeans-mobile-dropdown .starbeans-mobile-dropdown-link:hover {
      background: rgba(255, 255, 255, 0.1);
      color: white;
      transform: translateX(5px);
    }
    
    /* Hide/show on scroll */
    .starbeans-nav-container .starbeans-nav.starbeans-hide {
      transform: translateY(-100%);
    }
    
    /* Dropdown Slide Animation */
    @keyframes starbeans-dropdown-slide-in {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
    
    /* Mobile Responsive */
    @media (max-width: 1212px) {
      .starbeans-nav-container .starbeans-nav-links {
        display: none;
      }
      
      .starbeans-nav-container .starbeans-hamburger {
        display: flex;
      }
      
      .starbeans-nav-container .starbeans-nav {
        padding: 12px 5%;
      }
      
      .starbeans-nav-container .starbeans-logo-section img {
        height: 40px;
      }
    }
    
    @media (max-width: 480px) {
      .starbeans-nav-container .starbeans-mobile-nav-item {
        max-width: 280px;
      }
      
      .starbeans-nav-container .starbeans-mobile-nav-link {
        padding: 16px 20px;
        font-size: 15px;
      }
    }
    
    /* Body padding */
    body {
      padding-top: 70px !important;
    }
    
    @media (max-width: 768px) {
      body {
        padding-top: 64px !important;
      }
    }

    .extra_margin{
      margin-bottom: 10px;
    }
  </style>

  <nav class="starbeans-nav">
    <div class="starbeans-nav-wrapper">
      <div class="starbeans-logo-section">
        <a href="https://starbeansceylon.ceylonlensmedia.com/">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/3x1.png" alt="Starbeans Logo">
        </a>
      </div>
      
      <!-- Desktop Navigation -->
      <ul class="starbeans-nav-links">
        <li class="starbeans-nav-item starbeans-has-dropdown">
          <a href="#" class="starbeans-nav-link">Restaurants</a>
          <ul class="starbeans-dropdown">
            <li class="starbeans-dropdown-item"><a href="/restaurants/ocean_bistro.php" class="starbeans-dropdown-link">Ocean Bistro</a></li>
            <li class="starbeans-dropdown-item"><a href="/restaurants/the_barn.php" class="starbeans-dropdown-link">The Barn</a></li>
            <li class="starbeans-dropdown-item"><a href="/restaurants/take_five.php" class="starbeans-dropdown-link">Take Five</a></li>
          </ul>
        </li>
        <li class="starbeans-nav-item"><a href="/booking.php" class="starbeans-nav-link">Booking</a></li>
        <li class="starbeans-nav-item starbeans-has-dropdown">
          <a href="#" class="starbeans-nav-link">Menu</a>
          <ul class="starbeans-dropdown">
            <li class="starbeans-dropdown-item"><a href="/food_energy.php" class="starbeans-dropdown-link">Food</a></li>
            <li class="starbeans-dropdown-item"><a href="/beverages.php" class="starbeans-dropdown-link">Beverages</a></li>
            <li class="starbeans-dropdown-item"><a href="/coffee.php" class="starbeans-dropdown-link">Coffee</a></li>
          </ul>
        </li>
        <li class="starbeans-nav-item starbeans-has-dropdown">
          <a href="#" class="starbeans-nav-link">Our Essence</a>
          <ul class="starbeans-dropdown">
            <li class="starbeans-dropdown-item"><a href="/vibes.php" class="starbeans-dropdown-link">Vibes</a></li>
            <li class="starbeans-dropdown-item"><a href="/resilience.php" class="starbeans-dropdown-link">Resilience</a></li>
            <li class="starbeans-dropdown-item"><a href="/sustainability.php" class="starbeans-dropdown-link">Sustainability</a></li>
          </ul>
        </li>
        <li class="starbeans-nav-item"><a href="/about.php" class="starbeans-nav-link">About Us</a></li>
        <li class="starbeans-nav-item"><a href="/contact.php" class="starbeans-nav-link">Contact Us</a></li>
      </ul>
      
      <!-- Hamburger Menu Button -->
      <button class="starbeans-hamburger" aria-label="Toggle Menu">
        <span class="starbeans-hamburger-line"></span>
        <span class="starbeans-hamburger-line"></span>
        <span class="starbeans-hamburger-line"></span>
      </button>
    </div>
  </nav>

  <!-- Mobile Menu Overlay -->
  <div class="starbeans-mobile-overlay">
    <button class="starbeans-mobile-close" aria-label="Close Menu"></button>
    <nav class="starbeans-mobile-nav">
      <div class="starbeans-mobile-nav-item">
        <a href="#" class="starbeans-mobile-nav-link starbeans-mobile-dropdown-trigger">Restaurants</a>
        <div class="starbeans-mobile-dropdown">
          <a href="/restaurants/ocean_bistro.php" class="starbeans-mobile-dropdown-link">Ocean Bistro</a>
          <a href="/restaurants/the_barn.php" class="starbeans-mobile-dropdown-link">The Barn</a>
          <a href="/restaurants/take_five.php" class="starbeans-mobile-dropdown-link">Take Five</a>
        </div>
      </div>
      
      <div class="starbeans-mobile-nav-item">
        <a href="/booking.php" class="starbeans-mobile-nav-link extra_margin">Booking</a>
      </div>
      
      <div class="starbeans-mobile-nav-item">
        <a href="#" class="starbeans-mobile-nav-link starbeans-mobile-dropdown-trigger">Menu</a>
        <div class="starbeans-mobile-dropdown">
          <a href="/food_energy.php" class="starbeans-mobile-dropdown-link">Food</a>
          <a href="/beverages.php" class="starbeans-mobile-dropdown-link">Beverages</a>
          <a href="/coffee.php" class="starbeans-mobile-dropdown-link">Coffee</a>
        </div>
      </div>
      
      <div class="starbeans-mobile-nav-item">
        <a href="#" class="starbeans-mobile-nav-link starbeans-mobile-dropdown-trigger">Our Essence</a>
        <div class="starbeans-mobile-dropdown">
          <a href="/vibes.php" class="starbeans-mobile-dropdown-link">Vibes</a>
          <a href="/resilience.php" class="starbeans-mobile-dropdown-link">Resilience</a>
          <a href="/sustainability.php" class="starbeans-mobile-dropdown-link">Sustainability</a>
        </div>
      </div>
      
      <div class="starbeans-mobile-nav-item">
        <a href="/about.php" class="starbeans-mobile-nav-link extra_margin">About Us</a>
      </div>
      
      <div class="starbeans-mobile-nav-item">
        <a href="/contact.php" class="starbeans-mobile-nav-link extra_margin">Contact Us</a>
      </div>
    </nav>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const nav = document.querySelector('.starbeans-nav-container .starbeans-nav');
      const hamburger = document.querySelector('.starbeans-nav-container .starbeans-hamburger');
      const mobileOverlay = document.querySelector('.starbeans-nav-container .starbeans-mobile-overlay');
      const mobileCloseBtn = document.querySelector('.starbeans-nav-container .starbeans-mobile-close');
      const dropdownTriggers = document.querySelectorAll('.starbeans-nav-container .starbeans-mobile-dropdown-trigger');
      
      let lastScroll = 0;
      
      // Function to close mobile menu
      function closeMobileMenu() {
        hamburger.classList.remove('starbeans-active');
        mobileOverlay.classList.remove('starbeans-active');
        document.body.style.overflow = '';
      }
      
      // Function to open mobile menu
      function openMobileMenu() {
        hamburger.classList.add('starbeans-active');
        mobileOverlay.classList.add('starbeans-active');
        document.body.style.overflow = 'hidden';
      }
      
      // Scroll behavior
      window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
          nav.classList.remove('starbeans-hide');
          return;
        }
        
        if (currentScroll > lastScroll && currentScroll > 100) {
          nav.classList.add('starbeans-hide');
        } else {
          nav.classList.remove('starbeans-hide');
        }
        
        lastScroll = currentScroll;
      });
      
      // Hamburger menu toggle
      hamburger.addEventListener('click', function() {
        if (mobileOverlay.classList.contains('starbeans-active')) {
          closeMobileMenu();
        } else {
          openMobileMenu();
        }
      });
      
      // Mobile close button
      mobileCloseBtn.addEventListener('click', function() {
        closeMobileMenu();
      });
      
      // Mobile dropdown toggles
      dropdownTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
          e.preventDefault();
          const parentItem = this.closest('.starbeans-mobile-nav-item');
          
          // Close other dropdowns
          document.querySelectorAll('.starbeans-nav-container .starbeans-mobile-nav-item').forEach(item => {
            if (item !== parentItem) {
              item.classList.remove('starbeans-dropdown-active');
            }
          });
          
          // Toggle current dropdown
          parentItem.classList.toggle('starbeans-dropdown-active');
        });
      });
      
      // Close mobile menu when clicking overlay background
      mobileOverlay.addEventListener('click', function(e) {
        if (e.target === mobileOverlay) {
          closeMobileMenu();
        }
      });
      
      // Close mobile menu on window resize if desktop breakpoint
      window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
          closeMobileMenu();
          
          // Close all mobile dropdowns
          document.querySelectorAll('.starbeans-nav-container .starbeans-mobile-nav-item').forEach(item => {
            item.classList.remove('starbeans-dropdown-active');
          });
        }
      });
      
      // Handle escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileOverlay.classList.contains('starbeans-active')) {
          closeMobileMenu();
        }
      });
    });
  </script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">