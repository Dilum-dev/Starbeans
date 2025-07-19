<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans The Barn</title>
    <link rel="stylesheet" href="../assets/css/the_barn.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Georgia&display=swap" rel="stylesheet">
    </head>
<body>
    <section class="video-section">
        <div class="video-background">
            <video autoplay muted loop>
                <source src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/Barn-intro-.mov" type="video/mp4">
            </video>
        </div>
        
        <div class="content">
            <a href="https://www.tripadvisor.com/Restaurant_Review-g297896-d8015592-Reviews-Ocean_Bistro_by_Starbeans-Galle_Galle_District_Southern_Province.html" 
               target="_blank" 
               class="award-link">
                <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/Travelers-choice-award-thema-hotels.avif" 
                     alt="Traveler's Choice Award" 
                     class="award-logo">
            </a>
            
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/ella-png-.png" alt="Starbeans Logo" class="main-logo">
            <h2 class="subtitle" id="ocean-bistro">The Barn</h2>
            <h1 class="title">By Starbeans</h1>
            
            
            <p class="description">
                The Barn is your go-to spot for relaxed dining, hearty flavors, and unforgettable comfort
            </p>
            
            <button class="reserve-button">Reserve table</button>
        </div>
    </section>

    //menu

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

//reviews
<?php
    include '../includes/the_barn_reviews.php';
?>

//Experience

<div class="coffee-flip-gallery">
  <div class="gallery-header">
    <h2>The Barn Experience</h2>
    <p>Cozy dining spot in the scenic town of Ella, offering hearty meals and a warm, homely atmosphere</p>
  </div>
  
  <div class="flip-grid">
    <!-- Pair 1 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/the-barn-by-starbeans-4.jpg" alt="Starbeans Store Front">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/happy-customers.jpg" alt="Coffee Preparation">
        </div>
      </div>
    </div>
    
    <!-- Pair 2 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/our-egg-and-bacon-croissants.jpg" alt="Coffee Art">
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
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/barn-1.webp" alt="Coffee Beans">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/a-chilled-evening-at.jpg" alt="Barista Working">
        </div>
      </div>
    </div>
    
    <!-- Pair 4 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/happy-families.jpg" alt="Coffee Cup">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/the-barn-by-starbeans-6.jpg" alt="Coffee Machine">
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
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/discover-the-authentic.jpg" alt="Coffee Ingredients">
        </div>
      </div>
    </div>
    
    <!-- Pair 6 -->
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/start-your-day-off-on.jpg" alt="Coffee Details">
        </div>
        <div class="flip-card-back">
          <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/look-no-further-than.jpg" alt="Starbeans Store Front">
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
    
    <script src="../assets/js/the_barn.js"></script>
</body>
</html>