<?php
include '../includes/ocean_header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbeans Ocean Bistro</title>
  <link rel="stylesheet" href="../assets/css/ocean_bistro.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Georgia&display=swap" rel="stylesheet">

  <style>
    .location_map {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.frame {
  width: 90%;
  height: 600px;
}
  </style>
</head>

<body>
  <section class="video-section">
    <div class="video-background">
      <video autoplay muted loop>
        <source src="../assets/video/ocean_intro.mp4" type="video/mp4">
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

      <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/galle-png-.png" alt="Starbeans Logo" class="main-logo">
      <h2 class="subtitle" id="ocean-bistro">Ocean Bistro</h2>
      <h1 class="title">By Starbeans</h1>


      <p class="description">
        Enjoy a unique blend of colonial charm, ocean views, and exquisite cuisine—crafted for those who appreciate the finer things in life.
      </p>

      <button class="reserve-button" onclick="goToBooking()">RESERVE TABLE</button>
    </div>
  </section>

  <?php
  include '../components/ocean_grid.php';
  ?>

  <div class="history_img">
    <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/ocean-bistro-wording-min.png" alt="">
  </div>

  <br>

  <!-- menu -->
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
    <button class="menu-button active" onclick="window.open('../assets/OCEAN BISTRO - FOOD & DRINK.pdf', '_blank');">Food & Drink</button>
    <button class="menu-button" onclick="window.open('../assets/OCEAN BISTRO - WINE & LIQUOR.pdf', '_blank');">Wine & Liquor</button>
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

  <!-- video section -->

  <?php
  include '../components/video_section.php';
  ?>

  <!-- reviews -->
  <?php
  include '../includes/ocean_bistro_reviews.php';
  ?>

  <div class="location_map">
    <iframe class="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7661511121323!2d80.2176323864962!3d6.02680256315019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173a66d5c3eeb%3A0x687d6e1ded70935f!2sOcean%20Bistro%20by%20Starbeans!5e0!3m2!1sen!2slk!4v1752929179589!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- experience -->
  <div class="coffee-flip-gallery">
    <div class="gallery-header">
      <h2>Ocean Bistro Experience</h2>
      <p>Experience Semi Fine Dining and Coastal Charm at Ocean Bistro</p>
    </div>

    <div class="flip-grid">
      <!-- Pair 1 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/IMG_3142-scaled.webp" alt="Starbeans Store Front">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.41.10_abb59a31-scaled.jpg" alt="Coffee Preparation">
          </div>
        </div>
      </div>

      <!-- Pair 2 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.47.07_3da6c3fc-scaled.jpg" alt="Coffee Art">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.47.39_b74d085b-scaled.jpg" alt="Coffee Shop Interior">
          </div>
        </div>
      </div>

      <!-- Pair 3 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.47.39_d433e567-scaled.jpg" alt="Coffee Beans">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.50.27_9dfe75a9-scaled.jpg" alt="Barista Working">
          </div>
        </div>
      </div>

      <!-- Pair 4 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.50.28_cccec2a0-scaled.jpg" alt="Coffee Cup">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.55.39_dfad539e-scaled.jpg" alt="Coffee Machine">
          </div>
        </div>
      </div>

      <!-- Pair 5 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.55.40_22929715-scaled.jpg" alt="Coffee Presentation">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.55.41_e0ec3d1b-scaled.jpg" alt="Coffee Ingredients">
          </div>
        </div>
      </div>

      <!-- Pair 6 -->
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-20-at-09.55.42_0f7da11a-scaled.jpg" alt="Coffee Details">
          </div>
          <div class="flip-card-back">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/IMG_3142-scaled.webp" alt="Starbeans Store Front">
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="see-more-btn">
      <a href="#">
        Explore More
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div> -->
  </div>

  <?php
  include '../includes/ocean_footer.php';
  ?>

  <script src="../assets/js/ocean_bistro.js"></script>
</body>

</html>