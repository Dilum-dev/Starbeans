<div class="starbeans-nav-container">
  <style>
    /* Basic Reset */
    .starbeans-nav-container * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    /* Main Navigation - Green Glass Effect */
    .starbeans-nav-container .starbeans-nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(40, 60, 50, 0.45); /* Slight green tint */
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding: 15px 5%;
      display: flex;
      align-items: center;
      z-index: 9999;
      transition: all 0.3s ease;
    }
    
    /* Navigation Container */
    .starbeans-nav-container .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
    }
    
    /* Logo Styles - Larger and Left Aligned */
    .starbeans-nav-container .logo {
      margin-right: auto; /* Pushes logo to left */
    }
    
    .starbeans-nav-container .logo img {
      height: 48px; /* Increased from 40px */
      filter: brightness(0) invert(1);
      transition: all 0.3s ease;
    }
    
    .starbeans-nav-container .logo img:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }
    
    /* Navigation Links - Perfectly Centered */
    .starbeans-nav-container .nav-links {
      display: flex;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .starbeans-nav-container .nav-links > li {
      position: relative;
      margin: 0 12px;
    }
    
    .starbeans-nav-container .nav-links a {
      color: white;
      text-decoration: none;
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      font-size: 14px;
      padding: 8px 12px;
      display: flex;
      align-items: center;
      transition: all 0.3s ease;
    }
    
    .starbeans-nav-container .nav-links a:hover {
      color: #ffffff;
      text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    }
    
    /* Dropdown Indicator */
    .starbeans-nav-container .has-dropdown > a::after {
      content: '⌄';
      margin-left: 6px;
      font-size: 14px;
      transition: transform 0.3s ease;
    }
    
    .starbeans-nav-container .has-dropdown:hover > a::after {
      transform: rotate(180deg);
    }
    
    /* Dropdown Styles */
    .starbeans-nav-container .dropdown {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      background: rgba(50, 70, 60, 0.95); /* Green tint */
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      min-width: 200px;
      border-radius: 6px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 100;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .starbeans-nav-container .has-dropdown:hover .dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }
    
    .starbeans-nav-container .dropdown li {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .starbeans-nav-container .dropdown li:last-child {
      border-bottom: none;
    }
    
    .starbeans-nav-container .dropdown a {
      padding: 12px 20px;
      white-space: nowrap;
    }
    
    .starbeans-nav-container .dropdown a:hover {
      background: rgba(255, 255, 255, 0.1);
      padding-left: 25px;
    }
    
    /* Hide/show on scroll */
    .starbeans-nav-container .starbeans-nav.hide {
      transform: translateY(-100%);
    }
    
    /* Body padding to prevent content hiding */
    body {
      padding-top: 70px !important;
    }
  </style>

  <nav class="starbeans-nav">
    <div class="nav-container">
      <div class="logo">
        <a href="https://starbeans.ceylonlensmedia.com/">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/3x1.png" alt="Starbeans Logo">
        </a>
      </div>
      
      <ul class="nav-links">
        <li class="has-dropdown">
          <a href="#">Restaurants</a>
          <ul class="dropdown">
            <li><a href="https://starbeans.ceylonlensmedia.com/ocean-bistro/">Ocean Bistro</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/the-barn/">The Barn</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/take-five-cafe/">Take Five</a></li>
          </ul>
        </li>
        <li><a href="#">Booking</a></li>
        <li class="has-dropdown">
          <a href="#">Menu</a>
          <ul class="dropdown">
            <li><a href="https://starbeans.ceylonlensmedia.com/food-energy/">Food</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/beverages/">Beverages</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/coffee-2/">Coffee</a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <a href="#">Our Essence</a>
          <ul class="dropdown">
            <li><a href="https://starbeans.ceylonlensmedia.com/vibes/">Vibes</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/resilience/">Resilience</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/sustainability/">Sustainability</a></li>
          </ul>
        </li>
        <li><a href="https://starbeans.ceylonlensmedia.com/about-us-2/">About Us</a></li>
        <li><a href="https://starbeans.ceylonlensmedia.com/contact/">Contact Us</a></li>
      </ul>
    </div>
  </nav>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const nav = document.querySelector('.starbeans-nav-container .starbeans-nav');
      let lastScroll = 0;
      
      window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
          nav.classList.remove('hide');
          return;
        }
        
        if (currentScroll > lastScroll && currentScroll > 100) {
          // Scrolling down
          nav.classList.add('hide');
        } else {
          // Scrolling up
          nav.classList.remove('hide');
        }
        
        lastScroll = currentScroll;
      });
    });
  </script>
</div>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">