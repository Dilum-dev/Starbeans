<?php include 'includes/indexheader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbeans Ceylon</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    <div class="video-background">
        <video autoplay muted loop id="bg-video">
            <source src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/02/WhatsApp-Video-2025-02-28-at-01.48.17.mp4" type="video/mp4">
        </video>
    </div>

    <div class="content">
      <div class="logo-container">
            <img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/main.png" alt="Starbeans Logo" class="main-logo">
        </div>

        <h1 class="title">Starbeans Ceylon</h1>

        <p class="description">
            Where quality meets comfort. Since 2010, Starbeans has been serving up flavorful dishes, 
            rich coffee, and heartfelt hospitality—creating memorable moments for locals and travelers alike.
        </p>

        <div class="location-logos">
            <a href="/restaurants/ocean_bistro.php" class="location-link">
                <img src="assets/images/ocean-lg.png" alt="Ocean Bistro">
            </a>
            <a href="/restaurants/the_barn.php" class="location-link">
                <img src="assets/images/barn-lg.png" alt="The Barn">
            </a>
            <a href="/restaurants/take_five.php" class="location-link">
                <img src="assets/images/take-lg.png" alt="Take Five">
            </a>
        </div>
</div>

  <script src="assets/js/index.js"></script>
  <?php include 'includes/footer.php'; ?>
</body>
</html>