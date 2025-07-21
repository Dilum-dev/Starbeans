
document.addEventListener('DOMContentLoaded', function() {
      // Initialize GSAP animations
      gsap.registerPlugin(ScrollTrigger);
      
      
      // Animate elements on scroll
      gsap.utils.toArray('.section-title, .contact-item, .location-card, .contact-form').forEach(element => {
        gsap.from(element, {
          opacity: 0,
          y: 50,
          duration: 0.8,
          scrollTrigger: {
            trigger: element,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        });
      });
    
      
      // Prevent horizontal scrolling on touch devices
      document.addEventListener('touchmove', function(e) {
        if (e.touches.length === 1) {
          const touch = e.touches[0];
          if (touch.clientX <= 0 || touch.clientX >= window.innerWidth) {
            e.preventDefault();
          }
        }
      }, { passive: false });
    });


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
      }

      else if (!message) {
        isValid = false;
        errorMessage = "Please enter your message";
      }else if (message.length < 10) {
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
            return { success: false, message: 'Invalid server response' };
          }
        };

        // Send both requests simultaneously
        Promise.all([
          fetch('email_processes/main/email_send_process.php', {
            method: 'POST',
            body: formData1
          }).then(parseResponse),
          fetch('email_processes/main/email_send_user.php', {
            method: 'POST',
            body: formData2
          }).then(parseResponse)
        ])
        .then(([data1, data2]) => {
          console.log('Responses:', { data1, data2 });
          
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