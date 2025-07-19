<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans Take Five</title>
    <link rel="stylesheet" href="../assets/css/take_five.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Georgia&display=swap" rel="stylesheet">
    </head>
<body>
    <section class="video-section">
        <div class="video-background">
            <video autoplay muted loop>
                <source src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/02/WhatsApp-Video-2025-02-28-at-01.48.17.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="content">
            <a href="https://www.tripadvisor.com/Restaurant_Review-g11911888-d27173793-Reviews-Starbeans-Welipenna_Western_Province.html" 
               target="_blank" 
               class="award-link">
                <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/Travelers-choice-award-thema-hotels.avif" 
                     alt="Traveler's Choice Award" 
                     class="award-logo">
            </a>
            
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/07/new-final-take-five-.png" alt="Starbeans Logo" class="main-logo">
             <h2 class="subtitle" id="ocean-bistro">Take Five</h2>
            <h1 class="title">By Starbeans</h1>
           
            
            <p class="description">
                A cozy expressway stop where warm coffee and local flavors fuel your journey.
            </p>
            
            <button class="reserve-button" onclick="window.location.href='tel:0777775177'">Pre Order</button>
        </div>
    </section>

    //MENU

    <div class="gallery-header">
  <h2>Our Menu</h2>
</div>

<div class="elegant-pasta-carousel">
  <div class="carousel-viewport">
    <div class="carousel-track">
      <!-- 6 items (3 original + 3 duplicates for seamless loop) -->
      <div class="pasta-card" data-title="GOURMET PASTA" data-desc="Handcrafted with imported Italian durum wheat semolina">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Gourmet Pasta">
        <div class="dish-info">
          <h3 class="dish-title">GOURMET PASTA</h3>
          <p class="dish-subtitle">Handcrafted</p>
        </div>
      </div>
      <div class="pasta-card" data-title="TRUFFLE PASTA" data-desc="Infused with black truffle essence">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Truffle Pasta">
        <div class="dish-info">
          <h3 class="dish-title">TRUFFLE PASTA</h3>
          <p class="dish-subtitle">Gourmet</p>
        </div>
      </div>
      <div class="pasta-card" data-title="SEAFOOD PASTA" data-desc="With fresh Mediterranean seafood">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Seafood Pasta">
        <div class="dish-info">
          <h3 class="dish-title">SEAFOOD PASTA</h3>
          <p class="dish-subtitle">Fresh Catch</p>
        </div>
      </div>
      <!-- Duplicates -->
      <div class="pasta-card" data-title="GOURMET PASTA" data-desc="Handcrafted with imported Italian durum wheat semolina">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Gourmet Pasta">
        <div class="dish-info">
          <h3 class="dish-title">GOURMET PASTA</h3>
          <p class="dish-subtitle">Handcrafted</p>
        </div>
      </div>
      <div class="pasta-card" data-title="TRUFFLE PASTA" data-desc="Infused with black truffle essence">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Truffle Pasta">
        <div class="dish-info">
          <h3 class="dish-title">TRUFFLE PASTA</h3>
          <p class="dish-subtitle">Gourmet</p>
        </div>
      </div>
      <div class="pasta-card" data-title="SEAFOOD PASTA" data-desc="With fresh Mediterranean seafood">
        <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/pasta-01-min.png" alt="Seafood Pasta">
        <div class="dish-info">
          <h3 class="dish-title">SEAFOOD PASTA</h3>
          <p class="dish-subtitle">Fresh Catch</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="menu-buttons-container">
  <button class="menu-button active">Food Menu</button>
  <button class="menu-button">Beverage Menu</button>
</div>
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

//Reviews

<?php

@include '../includes/take_five_reviews.php'

?>
    
    //experience

    <div class="coffee-flip-gallery">
  <div class="gallery-header">
    <h2>Take Five Experience</h2>
    <p>A comfortable space to take a break before continuing your journey to Colombo.</p>
  </div>
  
  <div class="flip-grid">
    <!-- Pair 1 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/Take-five-5.webp" alt="Starbeans Store Front">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/Take-five-6.webp" alt="Coffee Preparation">
        </div>
      </div>
    </div>
    
    <!-- Pair 2 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Take-five-11.webp" alt="Coffee Art">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/flatwhhite-1.jpg" alt="Coffee Shop Interior">
        </div>
      </div>
    </div>
    
    <!-- Pair 3 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/cappuccinos.jpg" alt="Coffee Beans">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/Take-five-1.webp" alt="Barista Working">
        </div>
      </div>
    </div>
    
    <!-- Pair 4 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/05/Take-five-3.webp" alt="Coffee Cup">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Take-five-8.webp" alt="Coffee Machine">
        </div>
      </div>
    </div>
    
    <!-- Pair 5 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/photo0jpg.jpg" alt="Coffee Presentation">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Take-five-12.webp" alt="Coffee Ingredients">
        </div>
      </div>
    </div>
    
    <!-- Pair 6 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Take-five-9.jpg" alt="Coffee Details">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Take-five-7.webp" alt="Starbeans Store Front">
        </div>
      </div>
    </div>
  </div>
  
  <div class="see-more-btn">
    <a href="#">
      Explore More
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </a>
  </div>
</div>

<script src="../assets/js/take_five.js"></script>
</body>
</html>