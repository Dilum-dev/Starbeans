<div class="starbeans-nav-container">
  <style>
    .starbeans-nav-container * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .starbeans-nav-container .starbeans-nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(130, 98, 61, 0.25);
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding: 15px 5%;
      display: flex;
      align-items: center;
      z-index: 9999;
      transition: all 0.3s ease;
    }

    .starbeans-nav-container .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      position: relative;
    }

    .starbeans-nav-container .logo {
      margin-right: auto;
      z-index: 11001;
    }

    .starbeans-nav-container .logo img {
      height: 48px;
      filter: brightness(0) invert(1);
      transition: all 0.3s ease;
    }

    .starbeans-nav-container .logo img:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }

    /* Hamburger */
    .starbeans-nav-container .hamburger {
      display: none;
      flex-direction: column;
      justify-content: center;
      width: 32px;
      height: 32px;
      cursor: pointer;
      z-index: 11001;
    }
    .starbeans-nav-container .hamburger span {
      height: 3px;
      width: 100%;
      background: #fff;
      margin: 5px 0;
      border-radius: 2px;
      display: block;
      transition: all 0.3s;
    }
    .starbeans-nav-container .hamburger.active span:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }
    .starbeans-nav-container .hamburger.active span:nth-child(2) {
      opacity: 0;
    }
    .starbeans-nav-container .hamburger.active span:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }

    /* Navigation Links */
    .starbeans-nav-container .nav-links {
      display: flex;
      list-style: none;
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      transition: none;
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
    .starbeans-nav-container .has-dropdown.open > a::after,
    .starbeans-nav-container .has-dropdown:hover > a::after {
      transform: rotate(180deg);
    }

    /* Brown Glass Dropdown */
    .starbeans-nav-container .dropdown {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      background: rgba(130, 98, 61, 0.35);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      min-width: 200px;
      border-radius: 6px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      z-index: 100;
      border: 1px solid rgba(255, 255, 255, 0.15);
      pointer-events: none;
    }
    .starbeans-nav-container .has-dropdown:hover .dropdown,
    .starbeans-nav-container .has-dropdown.open .dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
      pointer-events: auto;
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
      color: rgba(255, 255, 255, 0.95);
    }
    .starbeans-nav-container .dropdown a:hover {
      background: rgba(255, 255, 255, 0.1);
      padding-left: 25px;
      color: #ffffff;
    }

    /* Hide/show on scroll */
    .starbeans-nav-container .starbeans-nav.hide {
      transform: translateY(-100%);
    }

    /* Body padding */
    body {
      padding-top: 70px !important;
    }

    /* =================== MOBILE STYLES ===================== */
    @media (max-width: 900px) {
      .starbeans-nav-container .nav-container {
        padding: 0;
        max-width: 100vw;
      }
      .starbeans-nav-container .nav-links {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        width: 85vw;
        max-width: 340px;
        background: rgba(130, 98, 61, 0.92);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        box-shadow: 2px 0 20px rgba(0,0,0,0.13);
        flex-direction: column;
        align-items: flex-start;
        padding-top: 85px;
        padding-left: 32px;
        gap: 0;
        transform: translateX(-110%);
        opacity: 0;
        transition: transform 0.35s cubic-bezier(.86,0,.07,1), opacity 0.28s;
        z-index: 11000;
      }
      .starbeans-nav-container .nav-links.open {
        transform: translateX(0);
        opacity: 1;
      }
      .starbeans-nav-container .nav-links > li {
        margin: 0 0 10px 0;
        width: 100%;
      }
      .starbeans-nav-container .nav-links a {
        font-size: 16px;
        padding: 16px 10px 16px 0;
        width: 100%;
        justify-content: flex-start;
      }
      .starbeans-nav-container .dropdown {
        position: static;
        min-width: unset;
        width: 95%;
        margin-top: 0;
        background: rgba(110, 80, 50, 0.30);
        border-radius: 0 0 6px 6px;
        box-shadow: none;
        border: none;
        opacity: 1;
        visibility: visible;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s cubic-bezier(.86,0,.07,1);
        pointer-events: none;
      }
      .starbeans-nav-container .has-dropdown.open .dropdown {
        max-height: 600px;
        overflow: visible;
        pointer-events: auto;
        transition: max-height 0.4s cubic-bezier(.86,0,.07,1);
      }
      .starbeans-nav-container .dropdown a {
        padding: 13px 20px;
        font-size: 15px;
      }
      .starbeans-nav-container .has-dropdown > a::after {
        font-size: 18px;
      }
      .starbeans-nav-container .hamburger {
        display: flex;
      }
    }

    @media (max-width: 500px) {
      .starbeans-nav-container .logo img {
        height: 36px;
      }
      body {
        padding-top: 60px !important;
      }
    }
  </style>

  <nav class="starbeans-nav">
    <div class="nav-container">
      <div class="logo">
        <a href="https://starbeans.ceylonlensmedia.com/">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/3x1.png" alt="Starbeans Logo">
        </a>
      </div>
      <div class="hamburger" id="starbeans-hamburger" aria-label="Toggle navigation" tabindex="0">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="nav-links" id="starbeans-navlinks">
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
    // Show/hide nav on scroll
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
          nav.classList.add('hide');
        } else {
          nav.classList.remove('hide');
        }
        lastScroll = currentScroll;
      });

      // Hamburger/mobile nav logic
      const hamburger = document.getElementById('starbeans-hamburger');
      const navlinks = document.getElementById('starbeans-navlinks');
      hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navlinks.classList.toggle('open');
        // Close all dropdowns when nav is closed
        if (!navlinks.classList.contains('open')) {
          document.querySelectorAll('.starbeans-nav-container .has-dropdown').forEach(li => li.classList.remove('open'));
        }
      });
      // Accessibility: open nav via enter key
      hamburger.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          hamburger.click();
        }
      });

      // Mobile dropdown tap logic
      document.querySelectorAll('.starbeans-nav-container .has-dropdown > a').forEach(link => {
        link.addEventListener('click', function(e) {
          // Only activate on mobile (nav-links has open class)
          if (window.innerWidth <= 900) {
            e.preventDefault();
            const parent = link.parentElement;
            parent.classList.toggle('open');
            // Close other dropdowns
            document.querySelectorAll('.starbeans-nav-container .has-dropdown').forEach(li => {
              if (li !== parent) li.classList.remove('open');
            });
          }
        });
      });

      // Close mobile nav on link click (optional, good UX)
      document.querySelectorAll('.starbeans-nav-container .nav-links a').forEach(link => {
        link.addEventListener('click', function() {
          if (window.innerWidth <= 900) {
            navlinks.classList.remove('open');
            hamburger.classList.remove('active');
            document.querySelectorAll('.starbeans-nav-container .has-dropdown').forEach(li => li.classList.remove('open'));
          }
        });
      });
    });
  </script>
</div>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
