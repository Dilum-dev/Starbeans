<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Starbeans - Vibes</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/vibes.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  </head>
<body>
  <?php include 'includes/header.php'; ?>
  <!-- Hero Section with Parallax -->
  <header id="vibes" class="hero-section">
    <div class="parallax-bg"></div>
    <div class="hero-content">
      <h1 class="playfair">Vibes</h1>
      <div class="hero-line"></div>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-arrow"></div>
    </div>
  </header>

  <!-- Section 1: Elegant Vibes -->
  <section id="elegant" class="elegant-vibes">
    <div class="section-wrapper">
      <div class="content-container">
        <h2 class="section-title playfair">Elegant Vibes</h2>
        <div class="content-text">
          <p>
            The atmosphere at Starbeans is elevated by vibrant, trendy & curated music that perfectly complements your culinary experience, allowing you to relax, unwind, and savor each moment with style & elegance.
          </p>
          <p>
            The ambiance is nothing short of delightful, with spacious, well-lit seating areas providing the perfect spot to relax and unwind. Whether you're gazing out over the sparkling sea from the Fort, taking a breather at Welipenna's Southern Highway stopover, or soaking in the cool highland vibes at The Barn by STARBEANS in Ella, comfort and charm greet you at every turn.
          </p>
        </div>
      </div>
    </div>
    <div class="elegant_images">
          <img src="assets/images/barn_vibe.webp" alt="">
          <img src="assets/images/ocean_vibe.webp" alt="">
          <img src="assets/images/take_vibe.webp" alt="">
      </div>
  </section>
  

  <!-- Section 2: Modern Tech & Agility -->
  <section id="tech" class="modern-tech">
    <div class="section-wrapper">
      <div class="content-container two-column">
        <div class="left-column">
          <h2 class="section-title playfair">Modern Tech & Agility</h2>
          <h3 class="section-subtitle">Elevate Dining with Technology</h3>
          <div class="content-text">
            <p>
              Incorporating cutting-edge technology, we have streamlined our operations to deliver an impeccable dining experience. From sophisticated systems that manage the inventory of food & beverages, process orders to the efficient monitoring of table service and swift, hassle-free bill payments, every detail is designed for ease.
            </p>
            <p>
              Complementing this, our guests enjoy complimentary high-speed Wi-Fi, while our dynamic online presence ensures that we remain just a click away.
            </p>
          </div> 
        </div>
        <div class="right-column">
          <div class="image-gallery">
            <div class="image-container">
              <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/tb-2.jpg" alt="Swift billing machine with bill" class="tech-image" />
            </div>
            <div class="image-container">
              <img src="assets/images/barista_working.jpg" alt="Baristas working with modern equipment" class="tech-image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Celebrations -->
  <section id="celebrate" class="celebrations">
    <div class="section-wrapper">
      <div class="content-container">
        <h2 class="section-title playfair">Celebrations</h2>
        <h3 class="section-subtitle">Celebrate your Special Moments with Us</h3>
        
        <div class="celebrations-grid">
          <div class="celebration-card">
            <div class="celebration-image">
              <img src="assets/images/birthday_celebration.jpg" alt="Birthday celebration at Starbeans" />
              <div class="celebration-overlay"></div>
              <div class="celebration-text">
                <span class="playfair">Birthday</span>
                <div class="event-line"></div>
              </div>
            </div>
          </div>
          <div class="celebration-card">
            <div class="celebration-image">
              <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/glasses-213156_1280.webp" alt="Honeymoon setting at Starbeans" />
              <div class="celebration-overlay"></div>
              <div class="celebration-text">
                <span class="playfair">Honeymoon</span>
                <div class="event-line"></div>
              </div>
            </div>
          </div>
          <div class="celebration-card">
            <div class="celebration-image">
              <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.55.40_22929715-scaled.jpg" />
              <div class="celebration-overlay"></div>
              <div class="celebration-text">
                <span class="playfair">Special Events</span>
                <div class="event-line"></div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="content-text">
          <p>
            At Starbeans, we offer an exceptional setting for your special event, from intimate candle lit dinners to elegant high tea celebrations or an excuse to party with friends.
          </p>
          <p>
            Whether you're savoring a great meal, beverage, a perfectly brewed coffee, tea or thirst for a beer while admiring a breathtaking sunset, or celebrating a special occasion with loved ones, Starbeans is the ideal destination.
          </p>
          <p>
            Our baristas, seasoned professionals with years of expertise in hospitality, deliver flawless service with grace and precision, even in the most demanding circumstances. Friendly, attentive, and unwavering in their dedication, they ensure that the renowned Starbeans quality is always upheld.
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/vibes.js"></script>
  <?php include 'includes/footer.php'; ?>
</body>
</html>