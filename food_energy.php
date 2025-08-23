<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbeans - Food Energy</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="assets/css/food_energy.css">
  </head>
<body>
  <!-- Hero Section -->
   <?php include 'includes/header.php'; ?>
  <header class="food-hero">
    <div class="food-parallax"></div>
    <div class="hero-content">
      <h1 class="playfair">Food Energy</h1>
      <div class="hero-line"></div>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-arrow"></div>
    </div>
  </header>

  <!-- New Pasta Carousel Section -->
  <section class="poetry-section">
    <div class="section-wrapper">
      <div class="gallery-header">
        <h2>Top Menu Items</h2>
      </div>
      
          <div class="elegant-pasta-carousel">
    <div class="carousel-viewport">
      <div class="carousel-track">
        <!-- 6 items (3 original + 3 duplicates for seamless loop) -->
        <div class="pasta-card" data-title="GOURMET PASTA" data-desc="Handcrafted with imported Italian durum wheat semolina">
          <img src="../assets/images/menu/menu1.webp" alt="Gourmet Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Avocado Toast</h3>
            <p class="dish-subtitle">Handcrafted</p>
          </div>
        </div>
        <div class="pasta-card" data-title="TRUFFLE PASTA" data-desc="Infused with black truffle essence">
          <img src="../assets/images/menu/menu2.webp" alt="Truffle Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Chocolate Brownie</h3>
            <p class="dish-subtitle">Handcrafted</p>
          </div>
        </div>
        <div class="pasta-card" data-title="SEAFOOD PASTA" data-desc="With fresh Mediterranean seafood">
          <img src="../assets/images/menu/menu3.webp" alt="Seafood Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Prawn & Spinach Penne</h3>
            <p class="dish-subtitle">Gourmet</p>
          </div>
        </div>
        <!-- Duplicates -->
        <div class="pasta-card" data-title="GOURMET PASTA" data-desc="Handcrafted with imported Italian durum wheat semolina">
          <img src="../assets/images/menu/menu8.webp" alt="Gourmet Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Spaghetti Pomodoro</h3>
            <p class="dish-subtitle">Gourmet</p>
          </div>
        </div>
        <div class="pasta-card" data-title="TRUFFLE PASTA" data-desc="Infused with black truffle essence">
          <img src="../assets/images/menu/menu5.webp" alt="Truffle Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Creamy Alfredo Penne</h3>
            <p class="dish-subtitle">Gourmet</p>
          </div>
        </div>
        <div class="pasta-card" data-title="SEAFOOD PASTA" data-desc="With fresh Mediterranean seafood">
          <img src="../assets/images/menu/menu6.webp" alt="Seafood Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Tropical Smoothie Bowl</h3>
            <p class="dish-subtitle">Handcrafted</p>
          </div>
        </div>
        <div class="pasta-card" data-title="SEAFOOD PASTA" data-desc="With fresh Mediterranean seafood">
          <img src="../assets/images/menu/menu7.webp" alt="Seafood Pasta">
          <div class="dish-info">
            <h3 class="dish-title">Tempura Platter</h3>
            <p class="dish-subtitle">Handcrafted</p>
          </div>
      
    </div>
  </section>

  <!-- Modal Popup -->
  <div id="pastaModal" class="modal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <div class="modal-grid">
        <div class="modal-image-container">
          <img id="modalDishImage" src="" alt="Dish Image">
        </div>
        <div class="modal-text-container">
          <h2 id="modalDishTitle"></h2>
          <p id="modalDishDescription"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Casual Bistro Section -->
  <section class="showcase-section">
    <div class="section-wrapper">
      <h2 class="section-title playfair">Casual / Bistro Diner</h2>
      <div class="content-text">
        <p>Indulge in the STARBEANS culinary journey with a casual meal, where an exquisite selection of Sri Lankan, Italian, Mexican, Japanese and seafood dishes await, crafted from the finest authentic ingredients and freshly sourced local seafood.</p>
        <p>Complementing our vibrant menu, we offer an array of premium wines, handcrafted cocktails, refreshing fruit juices, smoothies, & refreshing cafē all designed to elevate your dining experience.</p>
        <p>To complete the relaxation, our signature coffee and decadent desserts provide the perfect finale, making every meal at STARBEANS truly unforgettable.</p>
      </div>
      
      <div class="button-group">
        <button class="menu-button">
          <span>Ocean Bistro Menu</span>
          <span class="menu-icon">→</span>
        </button>
        <button class="menu-button">
          <span>The Barn Menu</span>
          <span class="menu-icon">→</span>
        </button>
        <button class="menu-button">
          <span>Take five menu</span>
          <span class="menu-icon">→</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Chef Section -->
  <section class="chef-section">
    <div class="section-wrapper">
      <div class="chef-container">
        <div class="chef-image">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/menu-5.webp" alt="Chef preparing pizza">
        </div>
        <div class="chef-content">
          <h2 class="section-title playfair" style="text-align: left; margin-bottom: 30px;">Fresh & Healthy Creations</h2>
          <div class="content-text" style="max-width: 100%; text-align: left;">
            <p>
              When preparing fresh & healthy Pizza, Tempura, and Quesadilla at Starbeans, it's essential for us to focus on using fresh, high-quality ingredients that promote a balance of taste and health.
            </p>
            <p>
              We offer innovative options in pizza crusts, lightly battered tempura, and vegetable-filled quesadillas. Pair these with carefully selected beer, wine, coffee or our signature 'Startails' to complement the flavors.
            </p>
            <p>
              The relaxed ambiance of smooth jazz is to enhance the experience, creating a laid-back, elegant setting where you can unwind and savor the luscious food, pungence and the aroma in the atmosphere.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Signature Dishes Section -->
  <section class="showcase-section" style="background-color: white;">
    <div class="section-wrapper">
      <h2 class="section-title playfair">Signature Dishes</h2>
      <h3 class="section-subtitle">Global Flavors, Local Touch</h3>
      
      <div class="food-grid">
        <!-- Sri Lankan -->
        <div class="food-card">
          <div class="food-image">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/milk-rice.jpg" alt="Sri Lankan Milk Rice">
            <div class="food-overlay"></div>
          </div>
          <div class="food-content">
            <div class="food-origin">
              <img src="https://flagcdn.com/w80/lk.png" class="origin-flag" alt="Sri Lanka flag">
              <span>Sri Lankan</span>
            </div>
            <h4 class="food-name">Kiri Bath (Milk Rice)</h4>
            <p class="food-description">A traditional Sri Lankan delicacy made with rice cooked in coconut milk, often served during special occasions. This creamy, comforting dish is typically paired with spicy sambols or curries for a perfect balance of flavors.</p>
            <div class="food-specs">
              <span class="spec-tag">Comforting</span>
              <span class="spec-tag">Creamy</span>
              <span class="spec-tag">Traditional</span>
            </div>
          </div>
        </div>
        
        <!-- Italian -->
        <div class="food-card">
          <div class="food-image">
            <img src="https://images.unsplash.com/photo-1593504049359-74330189a345?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1600&q=80" alt="Italian pasta">
            <div class="food-overlay"></div>
          </div>
          <div class="food-content">
            <div class="food-origin">
              <img src="https://flagcdn.com/w80/it.png" class="origin-flag" alt="Italy flag">
              <span>Italian</span>
            </div>
            <h4 class="food-name">Truffle Tagliatelle</h4>
            <p class="food-description">Handmade tagliatelle pasta tossed in a creamy truffle sauce with wild mushrooms, finished with aged parmesan and a drizzle of truffle oil for an indulgent experience.</p>
            <div class="food-specs">
              <span class="spec-tag">Creamy</span>
              <span class="spec-tag">Earthy</span>
              <span class="spec-tag">Handmade</span>
            </div>
          </div>
        </div>
        
        <!-- Japanese -->
  <div class="food-card">
  <div class="food-image">
    <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/food-menu-1-scaled.webp" alt="Burrito Wrap with sides">
    <div class="food-overlay"></div>
  </div>
  <div class="food-content">
    <div class="food-origin">
      <img src="https://flagcdn.com/w80/mx.png" class="origin-flag" alt="Mexico flag">
      <span>Mexican</span>
    </div>
    <h4 class="food-name">Burrito Wrap Platter</h4>
    <p class="food-description">A hearty burrito wrap stuffed with shredded chicken, rice, beans and veggies, served with crispy tortilla chips and three dips: fresh guacamole, garlic sauce, and pico de gallo salsa.</p>
    <div class="food-specs">
      <span class="spec-tag">Hearty</span>
      <span class="spec-tag">Flavorful</span>
      <span class="spec-tag">Shareable</span>
    </div>
  </div>
</div>
      </div>
    </div>
  </section>

<script src="assets/js/food_energy.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>