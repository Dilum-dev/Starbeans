<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reserve a table</title>
    <link rel="stylesheet" href="assets/css/booking.css">
    </head>
  <body>
    <?php include 'includes/header.php'; ?>
      <!-- Hero Section -->
  <header class="beverage-hero">
    <div class="beverage-parallax"></div>
    <div class="hero-content">
      <h1 class="playfair">Reserve Now!</h1>
      <div class="hero-line"></div>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-arrow"></div>
    </div>
  </header>

    <div class="hotels-container">
      <div class="hotel-card">
        <img
          src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/07/starbeans-plate-2.webp"
          alt="Ocean Bistro"
          class="hotel-image"
        />
        <div class="hotel-info">
          <h2 class="hotel-name hotel-name1">Ocean Bistro</h2>

          <div class="info-item">
            <!-- <span class="info-icon">🕐</span> -->
            <span>Open Hours: 10:00 AM to 10:30 PM</span>
          </div>

          <div class="info-item">
            <!-- <span class="info-icon">📞</span> -->
            <span>+94 912 235 500</span>
          </div>

          <div class="info-item">
            <!-- <span class="info-icon">📍</span> -->
            <span>Galle Dutch Fort, Dutch Hospital, Hospital St, Galle</span>
          </div>

          <a href="" class="reserve-btn reserve-btn1" onclick="window.location.href = 'email_processes/bistro/oceanBistroBooking.php';">Reserve Now</a>
        </div>
      </div>

      <div class="hotel-card">
        <img
          src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/06/menu-5.webp"
          alt="The Barn by Starbeans"
          class="hotel-image"
        />
        <div class="hotel-info">
          <h2 class="hotel-name hotel-name2">The Barn</h2>

          <div class="info-item">
            <!-- <span class="info-icon">🕐</span> -->
            <span>Open Hours: 6:00 AM to 10:30 PM</span>
          </div>

          <div class="info-item">
            <!-- <span class="info-icon">📞</span> -->
            <span>+94 572 232 785 </span>
          </div>

          <div class="info-item">
            <!-- <span class="info-icon">📍</span> -->
            <span>No. 50 Wellawaya Road, Ella</span>
          </div>

          <a href="" class="reserve-btn reserve-btn2" onclick="window.location.href = 'email_processes/barn/theBarnBooking.php';">Reserve Now</a>
        </div>
      </div>
    </div>
    <script src="assets/js/booking.js"></script>
    <?php include 'includes/footer.php'; ?>
  </body>
</html>
