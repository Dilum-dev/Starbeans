<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smooth Infinite Menu Slider</title>
  <style>
    .menu-slider-container1 {
      position: relative;
      max-width: 1200px;
      margin: auto;
    }

    .slider-wrapper {
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      background: white;
    }

    .slider-container1 {
      display: flex;
      gap: 30px;
      width: max-content;
    }

    .menu-item {
      flex: 0 0 280px;
      text-align: center;
      padding: 30px 20px;
      border-radius: 15px;
      background: white;
      transition: transform 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .menu-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .item-image {
      width: 200px;
      height: 200px;
      /* border-radius: 50%; */
      object-fit: cover;
      margin: 0 auto 25px;
      transition: transform 0.3s ease;
    }

    .menu-item:hover .item-image {
      transform: scale(1.05);
    }

    .item-title {
      font-size: 1.7rem;
      color: #3e8d3c;
      margin-bottom: 10px;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .item-subtitle {
      color: #888;
      font-size: 1rem;
      font-weight: 300;
      letter-spacing: 0.5px;
    }

    /* Navigation buttons */
    .nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: linear-gradient(90deg, #3e8d3c, #164d15);
      color: white;
      border: none;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-size: 2rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 8px 20px rgba(44, 90, 160, 0.3);
      display: flex;
      justify-content: center;
      z-index: 2;
    }

    .nav-btn:hover {
      transform: translateY(-50%) scale(1.1);
    }

    #prevBtn {
      left: -70px;
    }

    #nextBtn {
      right: -70px;
    }

    @media (max-width: 1345px) {
      #prevBtn {
        left: 10px;
      }

      #nextBtn {
        right: 10px;
      }
    }
  </style>
</head>

<body>
  <div class="menu-slider-container1">
    <div class="slider-wrapper">
      <div class="slider-container1" id="sliderContainer1">
        <div class="menu-item">
          <img src="../assets/images/menu/menu1.webp" alt="Chocolate Brownie" class="item-image">
          <h3 class="item-title">Arrabbiata</h3>
          <p class="item-subtitle">Gourmet</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu2.webp" alt="Prawn & Spinach Penne" class="item-image">
          <h3 class="item-title">Brumby Cocktail</h3>
          <p class="item-subtitle">Handcrafted</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu3.webp" alt="Spaghetti Pomodoro" class="item-image">
          <h3 class="item-title">Chocolate Cake</h3>
          <p class="item-subtitle">Gourmet</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu8.webp" alt="Creamy Pesto Pasta" class="item-image">
          <h3 class="item-title">Tuna Steak</h3>
          <p class="item-subtitle">Gourmet</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu5.webp" alt="Margherita Pizza" class="item-image">
          <h3 class="item-title">Waffles</h3>
          <p class="item-subtitle">Handcrafted</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu6.webp" alt="Pancakes" class="item-image">
          <h3 class="item-title">Latte</h3>
          <p class="item-subtitle">Handcrafted</p>
        </div>
        <div class="menu-item">
          <img src="../assets/images/menu/menu4.webp" alt="Pancakes" class="item-image">
          <h3 class="item-title">Flat White</h3>
          <p class="item-subtitle">Handcrafted</p>
        </div>
      </div>
    </div>

    <button class="nav-btn" id="prevBtn">‹</button>
    <button class="nav-btn" id="nextBtn">›</button>
  </div>

  <script>
    const container1 = document.getElementById('sliderContainer1');
    const wrapper = document.querySelector('.slider-wrapper');
    let speed = 0.5;
    let pos1 = 0;
    const gap = 30; // gap between items
    const items = Array.from(container1.children);
    const itemWidth = items[0].offsetWidth + gap;
    const totalItems = items.length;
    const containerWidth = wrapper.offsetWidth;

    // Clone items for seamless infinite scroll
    items.forEach(item => {
      const clone = item.cloneNode(true);
      container1.appendChild(clone);
    });

    const maxScroll = -((totalItems * itemWidth));

    let isHovered = false;

    wrapper.addEventListener('mouseenter', () => isHovered = true);
    wrapper.addEventListener('mouseleave', () => isHovered = false);

    function animate() {
      if (!isHovered) {
        pos1 -= speed;

        if (pos1 <= maxScroll) {
          pos1 = 0;
        } else if (pos1 > 0) {
          pos1 = maxScroll;
        }

        container1.style.transform = `translateX(${pos1}px)`;
      }
      requestAnimationFrame(animate);
    }

    animate();

    // Navigation buttons
    document.getElementById('nextBtn').addEventListener('click', () => {
      pos1 -= itemWidth;
      if (pos1 <= maxScroll) pos1 = 0;
      container1.style.transform = `translateX(${pos1}px)`;
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
      pos1 += itemWidth;
      if (pos1 > 0) pos1 = maxScroll;
      container1.style.transform = `translateX(${pos1}px)`;
    });
  </script>

</body>

</html>