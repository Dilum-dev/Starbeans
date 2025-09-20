<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Starbeans - Contact Us</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="assets/css/contact.css">
  <style>
    .swal2-confirm {
      background-color: #8B5A2B !important
    }

    body.swal2-shown {
      padding-right: 0px !important;
    }
  </style>
</head>

<body>
  <?php include 'includes/header.php'; ?>
  <!-- Hero Section -->
  <header class="hero-section">
    <div class="parallax-bg"></div>
    <div class="hero-content">
      <h1 class="playfair">Contact Us</h1>
      <div class="hero-line"></div>
      <p class="hero-subtitle">Get in Touch</p>
    </div>
    <div class="scroll-indicator">
      <span>Scroll</span>
      <div class="scroll-arrow"></div>
    </div>
  </header>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="section-wrapper">
      <div class="contact-grid">
        <!-- Contact Image -->
        <div class="contact-info">
          <img src="assets/images/sendMessage_img.webp" alt="Contact Starbeans" class="contact-image">
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
          <h3 class="playfair" style="font-size: 2rem; color: var(--primary); margin-bottom: 30px;">Send us a Message</h3>

          <form id="contactForm">
            <div class="form-row">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName">
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
              </div>
            </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <select id="subject" name="subject">
                <option value="">Select a subject</option>
                <option value="reservation">Table Reservation</option>
                <option value="event">Special Event Booking</option>
                <option value="feedback">Feedback</option>
                <option value="careers">Careers</option>
                <option value="other">Other Inquiry</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Tell us how we can help you..."></textarea>
            </div>

            <button type="submit" class="submit-btn btn-send">
              Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Locations Section -->
  <section class="locations-section">
    <div class="section-wrapper">
      <h2 class="section-title playfair" style="text-align: center;">Our Locations</h2>

      <div class="locations-grid">
        <a href="https://starbeans.ceylonlensmedia.com/ocean-bistro/" class="location-card">
          <div class="location-image">
            <img src="assets/images/contactGrid_ocean.webp" alt="Starbeans Fort Location">
            <div class="location-overlay"></div>
          </div>
          <div class="location-info">
            <h3>Ocean Bistro</h3>
            <p class="address">No.4<br>First Floor Dutch Hospital Shopping Precinct<br>
              Fort Galle</p>
            <p class="hours">10:00 AM - 10:30 PM</p>
          </div>
        </a>

        <a href="https://starbeans.ceylonlensmedia.com/the-barn/" class="location-card">
          <div class="location-image">
            <img src="assets/images/about_atmosphere.webp">
            <div class="location-overlay"></div>
          </div>
          <div class="location-info">
            <h3>The Barn</h3>
            <p class="address">No.30 <br>Wellawaya Road <br>
              Ella</p>
            <p class="hours"> 6:00 AM - 10:30 PM</p>
          </div>
        </a>

        <a href="https://starbeans.ceylonlensmedia.com/take-five-cafe/" class="location-card">
          <div class="location-image">
            <img src="assets/images/contactGrid_takeFive.webp" alt="The Barn by Starbeans Ella">
            <div class="location-overlay"></div>
          </div>
          <div class="location-info">
            <h3>Take Five</h3>
            <p class="address">Southern Expressway Service Area <br> Welipenna</p>
            <p class="hours">7:00 AM - 12:00 PM</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="assets/js/contact.js"></script>
  <?php include 'includes/footer.php'; ?>
</body>

</html>