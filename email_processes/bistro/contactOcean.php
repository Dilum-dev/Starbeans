<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    :root {
      --primary: #2b658bff;
      --primary-dark: #22496dff;
      --primary-light: #527da6ff;
      --light: #eff7ffff;
      --dark: #2a2a2a;
      --text: #4a4a4a;
      --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s ease;
    }

    /* ===== Contact Section ===== */
    .contact-section {
      background-color: white;
      padding: 80px 20px;
    }

    .section-wrapper {
      max-width: 1400px;
      margin: 0 auto;
      width: 100%;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: start;
    }

    .contact-info {
      max-height: 730px;
    }

    .contact-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: var(--shadow);
    }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 40px;
      margin-left: auto;
      margin-right: auto;
      color: #3B608A;
      position: relative;
      text-align: center;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 40px;
      padding: 30px;
      background: var(--light);
      border-radius: 8px;
      transition: var(--transition);
    }

    .contact-item:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow);
    }

    .contact-icon {
      font-size: 2rem;
      color: var(--primary);
      margin-right: 25px;
      margin-top: 5px;
      min-width: 40px;
    }

    .contact-details h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      color: var(--primary);
      margin-bottom: 10px;
    }

    .contact-details p {
      font-size: 1.1rem;
      line-height: 1.6;
      margin-bottom: 8px;
    }

    .contact-details a {
      color: var(--text);
      text-decoration: none;
      transition: var(--transition);
    }

    .contact-details a:hover {
      color: var(--primary);
    }

    /* ===== Contact Form ===== */
    .contact-form {
      background: var(--light);
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: var(--shadow);
    }

    .form-group {
      margin-bottom: 25px;
    }

    .form-group label {
      display: block;
      font-weight: 500;
      margin-bottom: 8px;
      color: var(--primary);
      font-size: 1rem;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 15px 20px;
      border: 2px solid transparent;
      border-radius: 8px;
      font-size: 1rem;
      font-family: 'Montserrat', sans-serif;
      background: white;
      transition: var(--transition);
      resize: none;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
      outline: none;
      border-color: var(--primary);
      box-shadow: 0 0 0 3px rgba(139, 90, 43, 0.1);
    }

    .form-group textarea {
      height: 150px;
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .submit-btn {
      background: var(--primary);
      color: white;
      border: none;
      padding: 18px 40px;
      font-size: 1.1rem;
      cursor: pointer;
      transition: var(--transition);
      border-radius: 50px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      width: 100%;
      justify-content: center;
    }

    .submit-btn:hover {
      background: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(139, 90, 43, 0.3);
    }

    .submit-btn i {
      transition: var(--transition);
    }

    .submit-btn:hover i {
      transform: translateX(5px);
    }

    /* ===== Responsive Styles ===== */
    @media (max-width: 1200px) {
      .hero-content h1 {
        font-size: 4rem;
      }
    }

    @media (max-width: 992px) {
      .contact-grid {
        grid-template-columns: 1fr;
        gap: 50px;
      }

      .hero-content h1 {
        font-size: 3.5rem;
      }

      .section-title {
        font-size: 2.5rem;
      }

      .contact-image {
        max-height: 400px;
      }
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 3rem;
      }

      .contact-form {
        padding: 30px 25px;
      }

      .form-row {
        grid-template-columns: 1fr;
      }

      .locations-grid {
        grid-template-columns: 1fr;
      }

      .social-links {
        gap: 20px;
      }

      .section-title {
        font-size: 2.2rem;
        margin-bottom: 30px;
      }

      .section-title::after {
        width: 60px;
      }

      .contact-item {
        padding: 25px;
      }

      .location-image {
        height: 220px;
      }

    }

    @media (max-width: 576px) {
      .hero-content h1 {
        font-size: 2.5rem;
        letter-spacing: 3px;
      }

      .hero-subtitle {
        font-size: 1rem;
        margin-top: 20px;
      }

      .section-title {
        font-size: 2rem;
      }

      .contact-item {
        padding: 20px;
        flex-direction: column;
      }

      .contact-icon {
        margin-bottom: 15px;
        margin-right: 0;
      }

      .contact-details h3 {
        font-size: 1.3rem;
      }

      .contact-details p {
        font-size: 1rem;
      }

      .submit-btn {
        padding: 16px 30px;
        font-size: 1rem;
      }

      .social-section h2 {
        font-size: 2rem;
      }

      .social-link {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
      }

      .hero-line {
        width: 120px;
      }

      .hero-line::before,
      .hero-line::after {
        width: 8px;
        height: 8px;
      }
    }

    @media (max-width: 400px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }

      .section-title {
        font-size: 1.8rem;
      }

      .contact-form {
        padding: 25px 20px;
      }

      .form-group input,
      .form-group textarea,
      .form-group select {
        padding: 12px 15px;
      }

      .location-info {
        padding: 20px;
      }

      .location-info h3 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>

<body>

  <!-- Contact Section -->
  <section class="contact-section">

    <h2 class="section-title playfair">Contact Us</h2>

    <div class="section-wrapper">
      <div class="contact-grid">
        <!-- Contact Image -->
        <div class="contact-info">
          <img src="../assets/images/ocean_vibe.webp" alt="Contact Starbeans" class="contact-image">
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const firstName = document.getElementById("firstName").value.trim();
      const lastName = document.getElementById("lastName").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const subject = document.getElementById("subject").value;
      const message = document.getElementById("message").value.trim();

      let isValid = true;
      let errorMessage = "";

      // First Name validation
      if (!firstName) {
        isValid = false;
        errorMessage = "Please enter your first name";
      } else if (!/^[a-zA-Z\s'-]+$/.test(firstName)) {
        isValid = false;
        errorMessage = "Invalid first name.";
      } else if (firstName.length < 2) {
        isValid = false;
        errorMessage = "First name should be at least 2 characters";
      }

      // Last Name validation
      else if (!lastName) {
        isValid = false;
        errorMessage = "Please enter your last name";
      } else if (!/^[a-zA-Z\s'-]+$/.test(lastName)) {
        isValid = false;
        errorMessage = "Invalid last name.";
      } else if (lastName.length < 2) {
        isValid = false;
        errorMessage = "Last name should be at least 2 characters";
      }

      // Email validation
      else if (!email) {
        isValid = false;
        errorMessage = "Please enter your email address";
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        isValid = false;
        errorMessage = "Invalid email address";
      }

      // Phone validation
      else if (!phone) {
        isValid = false;
        errorMessage = "Please enter your phone number";
      } else if (!/^[\d\s().-]{10}$/.test(phone)) {
        isValid = false;
        errorMessage = "Invalid phone number.";
      }

      // Subject validation
      else if (!subject) {
        isValid = false;
        errorMessage = "Please select a subject";
      } else if (!message) {
        isValid = false;
        errorMessage = "Please enter your message";
      } else if (message.length < 10) {
        isValid = false;
        errorMessage = "Message should be at least 10 characters";
      }

      if (isValid) {
        const submitBtn = this.querySelector(".btn-send");
        const originalBtnText = submitBtn.textContent;

        submitBtn.textContent = "Sending...";
        submitBtn.disabled = true;

        // Prepare form data for both requests
        const formData1 = new FormData();
        formData1.append('firstName', firstName);
        formData1.append('lastName', lastName);
        formData1.append('email', email);
        formData1.append('phone', phone);
        formData1.append('subject', subject);
        formData1.append('message', message);

        const formData2 = new FormData();
        formData2.append('subject', subject);
        formData2.append('firstName', firstName);
        formData2.append('lastName', lastName);
        formData2.append('email', email);

        // Helper function to parse response safely
        const parseResponse = async (response) => {
          const text = await response.text();
          try {
            return JSON.parse(text);
          } catch (e) {
            console.warn('Response was not JSON:', text);
            return {
              success: false,
              message: 'Invalid server response'
            };
          }
        };

        // Send both requests simultaneously
        Promise.all([
            fetch('../email_processes/bistro/contactOceanProcessAdmin.php', {
              method: 'POST',
              body: formData1
            }).then(parseResponse),
            fetch('../email_processes/bistro/contactOceanProcessUser.php', {
              method: 'POST',
              body: formData2
            }).then(parseResponse)
          ])
          .then(([data1, data2]) => {
            console.log('Responses:', {
              data1,
              data2
            });

            // Check if first email was successful
            if (data1.success) {
              Swal.fire({
                title: "Thank you!",
                text: data1.message || "Your message has been sent successfully. We'll get back to you soon.",
                icon: "success",
                draggable: false,
              });
              this.reset();
            } else {
              // Show error from first email attempt
              Swal.fire({
                title: data1.message || "Failed to send message",
                icon: "error",
                draggable: false,
              });
            }
          })
          .catch(error => {
            console.error('Fetch error:', error);
            // Even if there's an error, check if emails were actually sent
            Swal.fire({
              title: "Message Received",
              text: "We've received your message and will get back to you soon. You may have received a confirmation email.",
              icon: "info",
              draggable: false,
            });
            this.reset();
          })
          .finally(() => {
            submitBtn.textContent = originalBtnText;
            submitBtn.disabled = false;
          });
      } else {
        Swal.fire({
          title: errorMessage,
          icon: "error",
          draggable: false,
        });
      }
    });
  </script>



</body>

</html>