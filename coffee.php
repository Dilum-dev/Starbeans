<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbeans - Coffee</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="assets/css/coffee.css">
  </head>
<body>
  <?php include 'includes/header.php'; ?>
  <!-- Hero Section with Coffee Beans -->
  <header class="coffee-hero">
    <div class="coffee-parallax"></div>
    <div class="hero-content">
      <h1 class="playfair">Coffee</h1>
      <div class="hero-line"></div>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-arrow"></div>
    </div>
  </header>

  <!-- Poetry Section -->
  <section class="poetry-section">
    <div class="section-wrapper">
      <div class="poem-container">
        <div class="poem-content">
          <h3 class="poem-title playfair">Our Coffee Poetry</h3>
          <div class="poem-text">
            <p>Best coffee in town, come sip and unwind,</p>
            <p>At STARBEANS, the brew is one of a kind!</p>
            <p>Beans of Ethiopia, Indonesian Aràbica,</p>
            <p>Honduran & Brazilian too, roasted just for you.</p>
            
            <div class="poem-line"></div>
            
            <p>Our espresso and cappuccino, brewed to impress,</p>
            <p>Down South or Up the Hills, it's the best you must taste.</p>
            <p>Delicious cakes and pastries await,</p>
            <p>Pair them with coffee — it's never too late!</p>
            
            <div class="poem-line"></div>
            
            <p>With top-notch machines and baristas galore,</p>
            <p>Each cup of STARBEANS makes you want for more.</p>
            <p>Fair trade seeds, fresh and divine,</p>
            <p>Take away for busy folks, anyway you like!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Coffee Showcase Section -->
  <section class="showcase-section">
    <div class="section-wrapper">
      <h2 class="section-title playfair">Specialty Coffees</h2>
      <h3 class="section-subtitle">From Our World to Your Cup</h3>
      
      <div class="coffee-grid">
        <!-- Ethiopian -->
        <div class="coffee-card">
          <div class="coffee-image">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/coffee-2.webp" alt="Ethiopian coffee">
            <div class="coffee-overlay"></div>
          </div>
          <div class="coffee-content">
            <div class="coffee-origin">
              <img src="https://flagcdn.com/w80/et.png" class="origin-flag" alt="Ethiopia flag">
              <span>Ethiopia</span>
            </div>
            <h4 class="coffee-name">Mocha Sidamo</h4>
            <p class="coffee-description">From coffee's birthplace, a treasured crop with floral notes and a bright acidity that dances on the palate.</p>
            <div class="coffee-specs">
              <span class="spec-tag">Floral</span>
              <span class="spec-tag">Bright</span>
              <span class="spec-tag">Complex</span>
            </div>
          </div>
        </div>
        
        <!-- Indonesian -->
        <div class="coffee-card">
          <div class="coffee-image">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/coffee-4-scaled.webp" alt="Indonesian coffee">
            <div class="coffee-overlay"></div>
          </div>
          <div class="coffee-content">
            <div class="coffee-origin">
              <img src="https://flagcdn.com/w80/id.png" class="origin-flag" alt="Indonesia flag">
              <span>Indonesia</span>
            </div>
            <h4 class="coffee-name">Sumatra Mandheling</h4>
            <p class="coffee-description">Full-bodied with earthy tones and a syrupy richness, this coffee lingers with a smooth, chocolaty finish.</p>
            <div class="coffee-specs">
              <span class="spec-tag">Earthy</span>
              <span class="spec-tag">Full-bodied</span>
              <span class="spec-tag">Chocolate</span>
            </div>
          </div>
        </div>
        
        <!-- Brazilian -->
        <div class="coffee-card">
          <div class="coffee-image">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/coffee-3.webp">
            <div class="coffee-overlay"></div>
          </div>
          <div class="coffee-content">
            <div class="coffee-origin">
              <img src="https://flagcdn.com/w80/br.png" class="origin-flag" alt="Brazil flag">
              <span>Brazil</span>
            </div>
            <h4 class="coffee-name">Santos Bourbon</h4>
            <p class="coffee-description">Nutty and sweet with low acidity, this crowd-pleaser features notes of caramel and dark chocolate.</p>
            <div class="coffee-specs">
              <span class="spec-tag">Nutty</span>
              <span class="spec-tag">Sweet</span>
              <span class="spec-tag">Balanced</span>
            </div>
          </div>
        </div>
      </div>
      
      <div style="text-align: center;">
        <!-- <button class="menu-button"> 
          <span>View Full Coffee Menu</span>
          <span class="menu-icon">→</span>
        </button>-->
      </div>
    </div>
  </section>

  <!-- Future of Flavor Section -->
  <section class="future-section">
    <div class="section-wrapper">
      <div class="future-container">
        <div class="future-image">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/coffee-6.webp" alt="Coffee innovation">
        </div>
        <div class="future-content">
          <h2 class="section-title playfair" style="text-align: left; margin-bottom: 30px;">The Future of Flavor</h2>
          <div class="content-text" style="max-width: 100%; text-align: left;">
            <p>
              Step into the future of flavor at your 'Celestialbeans'! Where drinks are iced, blended, foamed, shaken, and flavored to your preference. 
            </p>
            <p>
              Customize your cup of bliss with creamy alternatives, silky froths, and your dash of chocolate magic dusted over your cappuccinos! Whether you're craving a chilled classic or a bold, futuristic twist—every sip is an adventure.
            </p>
            <p>
              Dive into a world where your drink dreams become reality, with the freshest ingredients and cosmic combinations that push the boundaries of coffee craftsmanship.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Final Poetry Section -->
  <section class="poetry-section" style="background-color: var(--light);">
    <div class="section-wrapper">
      <div class="poem-container" style="background-color: white;">
        <div class="poem-content">
          <h3 class="poem-title playfair">Our Coffee Legacy</h3>
          <div class="poem-text">
            <p>From lands afar, a blend divine,</p>
            <p>Indonesian, Ethiopian, a taste to reckon.</p>
            <p>Brazilian and Honduran, roasted with care,</p>
            <p>A symphony of flavors, beyond compare.</p>
            
            <div class="poem-line"></div>
            
            <p>Caramel's sweet embrace, a nutty delight,</p>
            <p>Darker notes add depth, a fragrant sight.</p>
            <p>Buttery smooth, a finish so fine,</p>
            <p>A floral touch, a taste that's divine.</p>
            
            <div class="poem-line"></div>
            
            <p>Mocha Sidamo, a fragrant 'pop',</p>
            <p>From coffee's birthplace, a treasured crop.</p>
            <p>Arabica beans, a blend so rare,</p>
            <p>Luxury Espresso, beyond compare.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php include 'includes/footer.php'; ?>
</body>
</html>