<footer>
  
<div class="starbeans-footer" onmouseover="this.style.transform='scale(1)';">
  <!-- Top Section -->
  <div class="footer-top">
    <div class="footer-brand">
      <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/main.png" 
           alt="Starbeans Logo" 
           class="footer-logo">
      <p class="footer-slogan">Bringing people together through great food, great coffee, and good vibes since 2010.</p>
    </div>
    
    <div class="footer-award">
      <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/Travelers-choice-award-thema-hotels.avif" 
           alt="Travelers' Choice Award">
      <span>Travelers' Choice Award</span>
    </div>
  </div>

  <!-- Main Content -->
  <div class="footer-main">
    <div class="footer-section">
      <h5>About</h5>
      <ul>
        <li><a href="/about.php">Our Story</a></li>
        <li><a href="/vibes.php">Vibes</a></li>
        <li><a href="/resilience.php">Resilience</a></li>
        <li><a href="/sustainabilty.php">Sustainability</a></li>
      </ul>
    </div>
    
    <div class="footer-divider"></div>
    
    <div class="footer-section">
      <h5>Explore</h5>
      <ul>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/booking.php">Reserve a table</a></li>
        <li><a href="/coffee.php">Coffee</a></li>
        <li><a href="/food_energy.php">Food energy</a></li>
      </ul>
    </div>
    
   
    
    
    
    <div class="footer-divider"></div>
    
    <div class="footer-section newsletter-section">
      <h5>Stay Updated</h5>
      <div class="newsletter-content">
        <p class="newsletter-text">Subscribe for exclusive offers and updates</p>
        <div class="newsletter-form">
          <input type="email" placeholder="Your email address" class="newsletter-input">
          <button class="newsletter-button">
           <i class="fa-solid fa-envelope-open"></i>
          </button>
        </div>
        <p class="newsletter-note">We respect your privacy. Unsubscribe anytime.</p>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>© 2025 Starbeans Ceylon — All rights reserved.</p>
    <p class="powered-by">Powered by Geminiflare</p>
  </div>
</div>

<style>
  @import url('https://fonts.googleapis.com/css2?family=BIZ+UDPMincho:wght@400;700&display=swap');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

  /* Base Styles */
  .starbeans-footer {
    background: #000;
    color: #ccc;
    font-family: 'BIZ UDPMincho', serif !important;
    padding: 50px 5% 30px;
    font-size: 14px;
    line-height: 1.6;
    /* Remove max-width: 1400px; */
    margin: 0;
    width: 100%;
    box-sizing: border-box;
}

footer {
  width: 100%;
  position: relative;
  background: #000; /* Match your footer background */
  z-index: 10; /* Ensure it stays above the video */
  overflow: hidden;
}


  /* Top Section */
  .footer-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 50px;
    padding-bottom: 30px;
    border-bottom: 1px solid #333;
  }

  .footer-brand {
    display: flex;
    align-items: center;
    gap: 20px;
    max-width: 500px;
  }

  .footer-logo {
    width: 85px;
    height: auto;
    filter: brightness(0) invert(1);
  }

  .footer-slogan {
    font-size: 14px;
    color: #999;
    margin: 0;
  }

  .footer-award {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 8px;
  }

  .footer-award img {
    height: 100px;
    width: auto;
  }

  .footer-award span {
    font-size: 13px;
    color: #999;
  }

  /* Main Content */
  .footer-main {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
    gap: 20px;
  }

  .footer-section {
    flex: 1;
    min-width: 0;
    padding: 0 10px;
  }

  .footer-divider {
    width: 1px;
    background: #333;
  }

  .footer-section h5 {
    font-size: 15px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
    position: relative;
    padding-bottom: 8px;
  }

  .footer-section h5::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 1px;
    background: #555;
  }

  .footer-section ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .footer-section li {
    margin-bottom: 12px;
    font-size: 13px;
    transition: color 0.3s ease;
  }

  .footer-section li:hover {
    color: #fff;
  }

  .footer-section a {
    color: #999;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-section a:hover {
    color: #fff;
  }

  .social-links i {
    margin-right: 8px;
    width: 16px;
    text-align: center;
    font-size: 14px;
  }

  /* Newsletter Section - Right Positioned */
  .newsletter-section {
    flex: 1.5;
    max-width: 300px;
    margin-left: auto;
    padding-right: 0;
  }

  .newsletter-content {
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .newsletter-text {
    color: #999;
    margin: -3px 0 20px 0;
    font-size: 13px;
    line-height: 1.5;
  }

  .newsletter-form {
    display: flex;
    margin-bottom: 10px;
    border: 1px solid #333;
    transition: border-color 0.3s ease;
  }

  .newsletter-form:hover {
    border-color: #555;
  }

  .newsletter-input {
    background: transparent;
    border: none;
    padding: 12px 15px;
    font-size: 13px;
    font-family: 'BIZ UDPMincho', serif;
    color: #fff;
    flex-grow: 1;
    min-width: 0;
    width: 100%;
  }

  .newsletter-input::placeholder {
    color: #666;
  }

  .newsletter-button {
    background: #333;
    color: #fff;
    border: none;
    padding: 0 18px;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .newsletter-button:hover {
    background: #555;
    transform: translateX(2px);
  }

  .newsletter-note {
    color: #666;
    font-size: 11px;
    margin-top: auto;
    padding-top: 8px;
    line-height: 1.4;
  }

  /* Footer Bottom */
  .footer-bottom {
    text-align: center;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #333;
  }

  .footer-bottom p {
    font-size: 12px;
    color: #666;
    margin: 5px 0;
  }

  .powered-by {
    font-size: 11px;
    color: #444;
  }

  /* Responsive Design */
  @media (max-width: 1100px) {
    .newsletter-section {
      flex: 1.2;
    }
  }

  @media (max-width: 900px) {
    .footer-main {
      flex-wrap: wrap;
    }
    
    .footer-section {
      flex: 0 0 50%;
      padding: 0 20px 30px;
    }
    
    .footer-divider {
      display: none;
    }
    
    .newsletter-section {
      flex: 0 0 100%;
      max-width: 100%;
      margin-left: 0;
      padding-top: 20px;
      border-top: 1px solid #333;
    }
  }

  @media (max-width: 600px) {
    .footer-top {
      flex-direction: column;
      align-items: flex-start;
      gap: 25px;
    }

    .footer-brand {
      flex-direction: column;
      align-items: flex-start;
      gap: 15px;
    }

    .footer-award {
      align-items: flex-start;
    }

    .footer-section {
      flex: 0 0 100%;
      padding: 0 0 30px;
    }
    
    .newsletter-form {
      max-width: 400px;
    }
  }
</style>

</footer>