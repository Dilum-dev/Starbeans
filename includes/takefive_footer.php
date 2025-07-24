
<style>
  @import url('https://fonts.googleapis.com/css2?family=BIZ+UDPMincho:wght@400;700&display=swap');
  @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

  .glink {
    text-decoration: none !important;
    color: white;
  }

  .glink:hover {
    color: #ccc;
  }

  /* Base Styles */
  .starbeans-footer {
    background: linear-gradient(135deg, #520B0C 0%, #802a2bff 50%, #520B0C 100%);
    color: #eee;
    font-family: 'BIZ UDPMincho', serif;
    padding: 50px 5% 30px;
    font-size: 14px;
    line-height: 1.6;
  }

  /* Top Section */
  .footer-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 50px;
  }

  .footer-brand {
    display: flex;
    align-items: center;
    gap: 20px;
    max-width: 500px;
  }

  .footer-logo {
    width: 80px;
    height: auto;
    filter: brightness(0) invert(1);
  }

  .footer-slogan {
    font-size: 14px;
    color: #ddd;
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
    color: #ddd;
  }

  /* Main Content */
  .footer-main {
    display: flex;
    justify-content: space-between;
    position: relative;
    margin-bottom: 40px;
  }

  .footer-section {
    flex: 1;
    padding: 0 15px;
  }

  .footer-divider {
    width: 1px;
    background: rgba(255, 255, 255, 0.1);
  }

  .footer-section h5 {
    font-size: 15px;
    color: #fff;
    font-weight: 700;
    margin-bottom: 15px;
    letter-spacing: 0.5px;
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
    color: #ddd;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-section a:hover {
    color: #fff;
  }

  .social-links i {
    width: 16px;
    text-align: center;
  }

  /* Footer Bottom */
  .footer-bottom {
    text-align: center;
    margin-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 20px;
  }

  .footer-bottom p {
    font-size: 12px;
    color: #fff;
    margin: 5px 0;
  }

  .powered-by {
    font-size: 11px;
    color: rgba(255, 255, 255, 0.6);
  }

  /* Responsive Design */
  @media (max-width: 900px) {
    .footer-main {
      flex-wrap: wrap;
      gap: 30px 0;
    }

    .footer-section {
      flex: 0 0 50%;
      padding: 0 20px;
    }

    .footer-divider:nth-child(2),
    .footer-divider:nth-child(6) {
      display: none;
    }

    .footer-divider:nth-child(4) {
      height: 1px;
      width: 100%;
      order: 1;
    }
  }

  @media (max-width: 600px) {
    .footer-top {
      flex-direction: column;
      align-items: flex-start;
      gap: 25px;
      margin-bottom: 40px;
    }

    .footer-brand {
      flex-direction: column;
      align-items: flex-start;
      gap: 15px;
    }

    .footer-award {
      align-items: flex-start;
    }

    .footer-main {
      flex-direction: column;
      gap: 30px;
    }

    .footer-section {
      flex: 1;
      padding: 0;
    }

    .footer-divider {
      display: none;
    }
  }

    .trip a{
    color: white !important;
    opacity: 0.8 !important;
  }

  .trip a:hover{
    opacity: 1 !important;
  }
</style>

<div class="starbeans-footer">
  <!-- Top Section -->
  <div class="footer-top">
    <div class="footer-brand">
      <img src="../assets/images/footer/take_footer.webp"
        alt="Starbeans Logo"
        class="footer-logo">
      <p class="footer-slogan">Bringing people together through great food, great coffee, and good vibes since 2010.</p>
    </div>

    <div class="footer-award">
      <img src="../assets/images/footer/trip_footer.avif"
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
        <li><a href="/contact.php">Locations</a></li>
        <li><a href="/resilience.php">Resilience</a></li>
        <li><a href="/sustainability.php">Sustainability</a></li>
      </ul>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-section">
      <h5>Explore</h5>
      <ul>
        <li><a href="/food_energy.php">Menu</a></li>
        <li><a href="/vibes.php">Vibes</a></li>
        <li><a href="/coffee.php">Coffee</a></li>
        <li><a href="/beverages.php">Beverages</a></li>
      </ul>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-section">
      <h5>Contact</h5>
      <ul>
        <li>Canowin Arcade</li>
        <li>Southern Expressway Service Area </li>
        <li></li>Welipenna<li></li>
        <li>+94 77 777 5177</li>
        <li><a href="mailto:info@starbeansceylon.com">info@starbeansceylon.com</a></li>
      </ul>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-section">
      <h5>Connect</h5>
      <ul class="social-links">
        <li><a href="https://www.facebook.com/starbeansocean/"><i class="fab fa-facebook-f" style="margin-right: 11px;"></i> Facebook</a></li>
        <li><a href="https://www.instagram.com/starbeans_oceanbistro/?hl=en"><i class="fab fa-instagram" style="margin-right: 8px;"></i> Instagram</a></li>
        <li class="trip"><a href="https://www.tripadvisor.com/Restaurant_Review-g297896-d8015592-Reviews-Ocean_Bistro_by_Starbeans-Galle_Galle_District_Southern_Province.html"><i style="margin-right: 8px;"><img src="../assets/images/tripadvisor_logo.png" alt="" width="12px" height="auto" style="opacity: 0.8;"></i> TripAdvisor</a></li>
      </ul>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>© 2025 Starbeans Ceylon — All rights reserved.</p>
    <p class="powered-by">Powered by <a href="https://www.geminiflare.com" target="_blank" rel="noopener noreferrer" class="glink">Geminiflare</a></p>
  </div>
</div>
