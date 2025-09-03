<?php include 'includes/indexheader.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans Ceylon</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.csshttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        @media (max-width: 480px) {
            .video-background {
                height: auto;
            }

            .content {
                padding: 1.5rem;
                justify-content: flex-start;
                padding-top: 2rem;
                height: auto;
            }
        }
        #loading-overlay {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.6);
  display: none;              /* hidden by default */
  align-items: center;
  justify-content: center;
  z-index: 99999;             /* ensure above footer/header */
}

#loading-overlay .spinner {
  border: 6px solid #f3f3f3;
  border-top: 6px solid #3e8d3c;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.swal2-confirm {
      background-color: #3e8d3c !important
    }

    </style>

</head>

<body>
    <div class="video-background">
        <video autoplay muted loop playsinline id="bg-video">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include 'includes/footer.php'; ?>
</body>

</html>