<?php

@include "../../includes/ocean_header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Starbeans Booking</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    :root {
      --background-color: #163266;
      --normalText-color: #F3F1C4;
      --innerText-color: #F3F1C4;
      --calendarHover-color: #23427c;
      --calendarText-color: #F3F1C4;
      --calendarSelect-color: #143168;
      --calendarToday-color: #203c70;
      --calendarOther-color: #ccc;
      --border-color: #F3F1C4;
      --borderOther-color: #ccc;
      --timeSlot-color: #22417a;
      --timeSlotHover-color: #1e3a6e;
      --timeSlotSelect-color: #143168;
      --reserveHover-color: #23427c;
      --reserveBackground-color: #143168;
    }

    /* footer styles */

    @import url("https://fonts.googleapis.com/css2?family=BIZ+UDPMincho:wght@400;700&display=swap");
    @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');


    /* body section styles */

    body {
      background-color: var(--background-color);
    }

    .container {
      width: 100%;
      max-width: 900px;
      margin: 50px auto;
      padding: 32px;
      text-align: center;
      padding: 16px;
    }

    .header {
      color: var(--normalText-color);
      margin: 50px 0px;
    }

    .header h1 {
      font-size: 2.25rem;
      margin-bottom: 16px;
      font-weight: 400;
      font-family: 'Montserrat', sans-serif;
    }

    .header p {
      font-size: 1.125rem;
      font-family: 'Montserrat', sans-serif;
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 24px;
      margin-bottom: 48px;
    }

    @media (min-width: 768px) {
      .form-grid {
        grid-template-columns: 1fr 1fr 1fr;
      }
    }

    .form-field {
      text-align: left;
      font-family: 'Montserrat', sans-serif;
    }

    .form-field label {
      display: block;
      font-size: 0.875rem;
      margin-bottom: 8px;
      color: var(--normalText-color);
      font-family: 'Montserrat', sans-serif;
    }

    .form-field-full {
      text-align: left;
      margin-bottom: 48px;
      font-family: 'Montserrat', sans-serif;
    }

    .form-field-full label {
      display: block;
      font-size: 0.875rem;
      margin-bottom: 8px;
      color: var(--normalText-color);
    }

    .dropdown-container {
      position: relative;
    }

    .dropdown-container select {
      width: 100%;
      background: transparent;
      border: 1px solid var(--borderOther-color);
      padding: 12px 16px;
      border-radius: 0;
      appearance: none;
      color: var(--normalText-color);
      font-size: 1rem;
      font-family: 'Montserrat', sans-serif;
    }

    .dropdown-container select:focus {
      outline: none;
      border-color: var(--border-color);
    }

    .dropdown-container select option {
      background-color: var(--background-color);
      color: var(--normalText-color);
    }

    .dropdown-arrow::after {
      content: '▼';
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 10px;
      color: var(--normalText-color);
      pointer-events: none;
    }

    .input-container {
      position: relative;
      font-family: 'Montserrat', sans-serif;
    }

    .input-container input {
      width: 100%;
      background: transparent;
      border: 1px solid var(--borderOther-color);
      padding: 12px 16px;
      border-radius: 0;
      color: var(--innerText-color);
      font-size: 1rem;
    }

    .input-container input:focus {
      outline: none;
      border-color: var(--border-color);
    }

    .infoarea {
      background-color: transparent;
      border: 1px solid var(--border-color);
      padding: 10px;
      color: var(--innerText-color);
    }

    .infoarea:focus {
      border: 1px solid var(--border-color) !important;
      border-radius: 0%;
      outline: 0;
    }

    .time-slots-section {
      margin-bottom: 48px;
      font-family: 'Montserrat', sans-serif !important;
    }

    .time-slots-section h3 {
      font-size: 1.125rem;
      margin-bottom: 24px;
      text-align: left;
      color: var(--normalText-color);
    }

    .time-slots-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;

    }

    .time-slot {
      background: var(--timeSlot-color);
      border: 1px solid var(--border-color);
      transition: all 0.2s ease;
      color: var(--normalText-color);
      padding: 12px 16px;
      text-align: center;
      cursor: pointer;
      font-size: 1rem;
      font-family: 'Montserrat', sans-serif !important;
    }

    .time-slot:hover {
      background: var(--timeSlotHover-color);
      border-color: rgba(212, 175, 55, 0.6);
      transform: translateY(-1px);
    }

    .time-slot.selected {
      background: var(--timeSlotSelect-color);
      border-color: var(--borderOther-color);
    }

    .button-container {
      text-align: center;
    }

    .reserve-btn {
      background: var(--reserveBackground-color);
      transition: all 0.2s ease;
      color: var(--normalText-color);
      font-weight: 500;
      padding: 12px 32px;
      font-size: 1.125rem;
      cursor: pointer;
      border: 1px solid var(--border-color);
      border-radius: 0;
      font-family: 'Montserrat', sans-serif;
    }

    .reserve-btn:hover {
      background: var(--reserveHover-color);
      transform: translateY(-1px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 767px) {
      .container {
        padding: 16px;
      }

      .header h1 {
        font-size: 2rem;
      }

      .time-slots-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
      }

      .time-slot {
        padding: 10px 8px;
        font-size: 0.875rem;
      }
    }

    @media (max-width: 480px) {
      .time-slots-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }


    /* calendar styles */

    .calendar-section {
      margin-bottom: 32px;
      font-family: 'Montserrat', sans-serif;
    }

    .calendar-container {
      background: transparent;
      border: 1px solid var(--border-color);
      padding: 20px;
      max-width: 400px;
      margin: 0 auto;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .calendar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .calendar-header label {
      font-size: 16px;
      font-weight: 500;
      color: var(--calendarText-color);
      margin: 0;
    }

    .month-selector {
      position: relative;
      display: flex;
      align-items: center;
    }

    .month-selector select {
      background: var(--background-color);
      border: none;
      font-size: 16px;
      font-weight: 500;
      color: var(--calendarText-color);
      appearance: none;
      cursor: pointer;
      outline: none;
    }

    .month-selector .dropdown-arrow {
      position: absolute;
      right: 0;
      font-size: 12px;
      color: transparent;
      pointer-events: none;
    }

    .calendar-grid {
      width: 100%;
    }

    .calendar-weekdays {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 1px;
      margin-bottom: 8px;
    }

    .weekday {
      text-align: center;
      font-size: 14px;
      font-weight: 600;
      color: var(--calendarText-color);
      padding: 8px 0;
    }

    .calendar-days {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 1px;
    }

    .calendar-day {
      aspect-ratio: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: var(--calendarText-color);
      cursor: pointer;
      border-radius: 4px;
      transition: all 0.2s ease;
      min-height: 32px;
      border-radius: 50%;
    }

    .calendar-day:hover {
      background-color: var(--calendarHover-color);
    }

    .calendar-day.other-month {
      color: var(--calendarOther-color);
    }

    .calendar-day.selected {
      background-color: var(--calendarSelect-color);
      color: white;
    }

    .calendar-day.today {
      background-color: var(--calendarToday-color);
      color: white;
      font-weight: 600;
    }

    .title1 {
      font-family: 'Playfair Display', serif !important;
      font-size: 5rem !important;
      color: #71CDFF !important;
    }

    .title2 {
      font-family: 'Playfair Display', serif !important;
      font-size: 5rem !important;
      color: white !important;
      margin-bottom: 100px !important;
    }

    .error-message {
      color: #ff6b6b;
      font-size: 0.9rem;
      margin-top: 4px;
      display: none;
    }

    .input-error {
      border-color: #ff6b6b !important;
    }

    @media (max-width: 480px) {
      .title1 {
        font-size: 3.5rem !important;
      }

      .title2 {
        font-size: 3.5rem !important;
      }
    }
  </style>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

  <!-- booking section -->

  <div class="container">
    <!-- Header -->
    <div class="header">
      <h1 class="title1">Ocean Bistro</h1>
      <h1 class="title2">By Starbeans</h1>
      <h1>Make a reservation</h1>
      <p>Select your details and we'll try to get the best seats for you.</p>
    </div>

    <!-- Form Fields -->
    <div class="form-grid">
      <!-- Name Field -->
      <div class="form-field">
        <label>Your Name :</label>
        <div class="input-container">
          <input type="text" placeholder="Enter your name" id="nameInput">
        </div>
        <span class="error-message" id="nameError">Please enter your name</span>
      </div>

      <!-- Email Field -->
      <div class="form-field">
        <label>Your Email :</label>
        <div class="input-container">
          <input type="text" placeholder="Enter your email" id="emailInput">
        </div>
        <span class="error-message" id="emailError">Please enter a valid email</span>
      </div>

      <!-- Guest -->
      <div class="form-field">
        <label>Party Count :</label>
        <div class="dropdown-container dropdown-arrow">
          <select>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Contact Field -->
    <div class="form-field-full">
      <label>How can we contact you :</label>
      <div class="input-container">
        <input type="text" placeholder="Enter your mobile number" id="contactInput">
      </div>
      <span class="error-message" id="contactError">Invalid contact information</span>
    </div>

    <!-- calendar section start -->

    <!-- Date Selection Calendar -->
    <div class="calendar-section">
      <div style="display: flex; margin-bottom: 20px;">
        <p style="text-align: left; color: #F3F1C4;">Selected Date :</p>
        <p id="selectedDateDisplay" style="text-align: left; color: #F3F1C4; display: none; margin-left: 10px;"></p>

      </div>
      <div class="calendar-container">
        <div class="calendar-header">
          <label>Date</label>
          <div class="month-selector">
            <select id="monthSelect">
              <option value="0">January</option>
              <option value="1">February</option>
              <option value="2">March</option>
              <option value="3">April</option>
              <option value="4" selected>May</option>
              <option value="5">June</option>
              <option value="6">July</option>
              <option value="7">August</option>
              <option value="8">September</option>
              <option value="9">October</option>
              <option value="10">November</option>
              <option value="11">December</option>
            </select>
            <span class="dropdown-arrow">▼</span>
          </div>
        </div>

        <div class="calendar-grid">
          <div class="calendar-weekdays">
            <div class="weekday">M</div>
            <div class="weekday">T</div>
            <div class="weekday">W</div>
            <div class="weekday">T</div>
            <div class="weekday">F</div>
            <div class="weekday">S</div>
            <div class="weekday">S</div>
          </div>

          <div class="calendar-days" id="calendarDays">
            <!-- Days will be populated by JavaScript -->
          </div>
        </div>
      </div>
    </div>

    <!-- calendar section end -->

    <!-- Available Time Slots -->
    <div class="time-slots-section">
      <h3>Choose an available time slot:</h3>


      <div class="time-slots-grid">
        <!-- Row 1 -->
        <button class="time-slot">10:00 AM</button>
        <button class="time-slot">11:00 AM</button>
        <button class="time-slot">12:00 PM</button>
        <button class="time-slot">01:00 PM</button>
        <button class="time-slot">02:00 PM</button>

        <!-- Row 2 -->
        <button class="time-slot">03:00 PM</button>
        <button class="time-slot">04:00 PM</button>
        <button class="time-slot">05:00 PM</button>
        <button class="time-slot">06:00 PM</button>
        <button class="time-slot">07:00 PM</button>

        <!-- Row 3 -->
        <button class="time-slot">08:00 PM</button>
        <button class="time-slot">09:00 PM</button>
        <button class="time-slot">10:00 PM</button>
      </div>

      <p id="timeSlotError" class="error-message">Please select a time slot</p>
    </div>

    <!-- Additional info -->
    <div class="form-field-full">
      <label>Additional Information :</label>
      <div class="input-container">
        <textarea class="infoarea" name="info" id="info" style="width: 100%; height: 150px;"></textarea>
      </div>
    </div>

    <!-- Reserve Button -->
    <div class="button-container">
      <button class="reserve-btn">
        Reserve Now
      </button>
    </div>
  </div>


  <script>
    // Calendar functionality
    class Calendar {
      constructor() {
        this.currentDate = new Date();
        this.selectedDate = null;
        this.monthSelect = document.getElementById('monthSelect');
        this.calendarDays = document.getElementById('calendarDays');
        this.selectedDateDisplay = document.getElementById('selectedDateDisplay');

        this.init();
      }

      init() {
        this.monthSelect.addEventListener('change', () => {
          this.currentDate.setMonth(parseInt(this.monthSelect.value));
          this.renderCalendar();
        });

        this.renderCalendar();
      }

      renderCalendar() {
        const year = this.currentDate.getFullYear();
        const month = this.currentDate.getMonth();

        // Get first day of month and number of days
        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const daysInMonth = lastDay.getDate();

        // Get the day of week for first day (0=Sunday, 1=Monday, etc.)
        // Convert to Monday=0 format
        let startDay = firstDay.getDay();
        startDay = startDay === 0 ? 6 : startDay - 1;

        // Clear previous days
        this.calendarDays.innerHTML = '';

        // Add empty cells for days before month starts
        for (let i = 0; i < startDay; i++) {
          const prevMonth = new Date(year, month, 0 - (startDay - 1 - i));
          const dayElement = this.createDayElement(prevMonth.getDate(), true);
          this.calendarDays.appendChild(dayElement);
        }

        // Add days of current month
        for (let day = 1; day <= daysInMonth; day++) {
          const dayElement = this.createDayElement(day, false);
          this.calendarDays.appendChild(dayElement);
        }

        // Fill remaining cells with next month days
        const totalCells = this.calendarDays.children.length;
        const remainingCells = 42 - totalCells; // 6 rows × 7 days

        for (let day = 1; day <= remainingCells && totalCells < 35; day++) {
          const dayElement = this.createDayElement(day, true);
          this.calendarDays.appendChild(dayElement);
        }
      }

      createDayElement(day, isOtherMonth) {
        const dayElement = document.createElement('div');
        dayElement.className = 'calendar-day';
        dayElement.textContent = day;

        if (isOtherMonth) {
          dayElement.classList.add('other-month');
        }

        // Get current date and the date being rendered
        const today = new Date();
        const currentMonth = this.currentDate.getMonth();
        const currentYear = this.currentDate.getFullYear();
        const renderedDate = new Date(currentYear, currentMonth, day);

        // Check if this is today
        const isToday = !isOtherMonth &&
          day === today.getDate() &&
          currentMonth === today.getMonth() &&
          currentYear === today.getFullYear();

        // Check if date is in the past
        const isPastDate = renderedDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());

        if (isToday) {
          dayElement.classList.add('today');
        }

        // Disable past dates
        if (isPastDate && !isToday) {
          dayElement.style.pointerEvents = 'none';
          dayElement.style.opacity = '0.5';
          dayElement.style.cursor = 'not-allowed';
        } else {
          // Add click event for today and future dates
          dayElement.addEventListener('click', () => {
            if (!isOtherMonth) {
              // Remove previous selection
              document.querySelectorAll('.calendar-day.selected').forEach(el => {
                el.classList.remove('selected');
              });

              // Add selection to clicked day
              dayElement.classList.add('selected');
              this.selectedDate = new Date(currentYear, currentMonth, day);

              // Display the selected date
              const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
              };
              this.selectedDateDisplay.textContent = this.selectedDate.toLocaleDateString('en-US', options);
              this.selectedDateDisplay.style.display = 'block';
            }
          });
        }

        return dayElement;
      }

      selectToday() {
        const today = new Date();
        if (today.getMonth() === this.currentDate.getMonth() &&
          today.getFullYear() === this.currentDate.getFullYear()) {
          const days = this.calendarDays.querySelectorAll('.calendar-day:not(.other-month)');
          days.forEach(day => {
            if (parseInt(day.textContent) === today.getDate()) {
              day.click(); // Trigger click to select
            }
          });
        }
      }

      getSelectedDate() {
        return this.selectedDate;
      }
    }

    // Form validation
    function validateForm() {
      let isValid = true;

      // Name validation
      const name = document.getElementById('nameInput').value.trim();
      const nameError = document.getElementById('nameError');
      if (!name) {
        nameError.style.display = 'block';
        document.getElementById('nameInput').classList.add('input-error');
        isValid = false;
      } else {
        nameError.style.display = 'none';
        document.getElementById('nameInput').classList.remove('input-error');
      }

      // Email validation
      const email = document.getElementById('emailInput').value.trim();
      const emailError = document.getElementById('emailError');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email || !emailRegex.test(email)) {
        emailError.style.display = 'block';
        document.getElementById('emailInput').classList.add('input-error');
        isValid = false;
      } else {
        emailError.style.display = 'none';
        document.getElementById('emailInput').classList.remove('input-error');
      }

      // Contact validation
      const contact = document.getElementById('contactInput').value.trim();
      const contactError = document.getElementById('contactError');
      if (!contact) {
        contactError.style.display = 'block';
        document.getElementById('contactInput').classList.add('input-error');
        isValid = false;
      } else {
        contactError.style.display = 'none';
        document.getElementById('contactInput').classList.remove('input-error');
      }

      // Time slot validation
      const timeSlotError = document.getElementById('timeSlotError');
      if (!document.querySelector('.time-slot.selected')) {
        timeSlotError.style.display = 'block';
        isValid = false;
      } else {
        timeSlotError.style.display = 'none';
      }

      return isValid;
    }

    // Booking form functionality
    function setupBookingForm() {
      // Add interactivity for time slot selection
      const timeSlots = document.querySelectorAll('.time-slot');

      timeSlots.forEach(slot => {
        slot.addEventListener('click', function() {
          // Remove selected class from all slots
          timeSlots.forEach(s => s.classList.remove('selected'));
          // Add selected class to clicked slot
          this.classList.add('selected');
          // Hide error if shown
          document.getElementById('timeSlotError').style.display = 'none';
        });
      });

      // Add input event listeners to clear errors when typing
      document.getElementById('nameInput').addEventListener('input', function() {
        document.getElementById('nameError').style.display = 'none';
        this.classList.remove('input-error');
      });

      document.getElementById('emailInput').addEventListener('input', function() {
        document.getElementById('emailError').style.display = 'none';
        this.classList.remove('input-error');
      });

      document.getElementById('contactInput').addEventListener('input', function() {
        document.getElementById('contactError').style.display = 'none';
        this.classList.remove('input-error');
      });
    }

    // Form submission handler
    function submitReservation() {
      if (!validateForm()) {
        return; // Stop if validation fails
      }

      const name = document.getElementById('nameInput').value;
      const email = document.getElementById('emailInput').value;
      const partySize = document.querySelector('select').value;
      const contact = document.getElementById('contactInput').value;
      const timeSlot = document.querySelector('.time-slot.selected').textContent;
      const additionalInfo = document.getElementById('info').value;
      const selectedDate = document.getElementById('selectedDateDisplay').innerText;

      const formData = new FormData();
      formData.append('name', name);
      formData.append('email', email);
      formData.append('partySize', partySize);
      formData.append('contact', contact);
      formData.append('timeSlot', timeSlot);
      formData.append('additionalInfo', additionalInfo);
      formData.append('selectedDate', selectedDate);

      // Show loading state
      const reserveBtn = document.querySelector('.reserve-btn');
      reserveBtn.disabled = true;
      reserveBtn.textContent = 'Processing...';

      // Send to both email processors
      const promises = [
        fetch('email_send_admin.php', {
          method: 'POST',
          body: formData
        }),
        fetch('email_send_user.php', {
          method: 'POST',
          body: formData
        })
      ];

      Promise.all(promises)
        .then(responses => {
          if (responses.every(r => r.ok)) {
            window.location.href = "finalScreen.html"; // Redirect to final screen
          } else {
            throw new Error('One or more email services failed');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          window.location.href = "finalError.html"; // Redirect to error screen
        })
        .finally(() => {
          reserveBtn.disabled = false;
          reserveBtn.textContent = 'Reserve Now';
        });
    }

    // Initialize everything when DOM is loaded
    document.addEventListener("DOMContentLoaded", function() {
      // Initialize calendar
      if (document.getElementById('monthSelect') && document.getElementById('calendarDays')) {
        window.calendar = new Calendar();
        // Select today's date by default
        setTimeout(() => calendar.selectToday(), 100);
      }

      // Setup booking form
      setupBookingForm();


      // Attach submit handler to reserve button
      document.querySelector('.reserve-btn').addEventListener('click', submitReservation);
    });
  </script>

</body>

<?php
@include '../../includes/footer.php';
?>

</html>