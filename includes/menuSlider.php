<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smooth Infinite Menu Slider</title>
<style>
  .menu-slider-container {
    position: relative;
    max-width: 1200px;
    margin: auto;
  }

  .slider-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    background: transparent;
    font-family: "Playfair Display", serif;
  }

  .slider-container {
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
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
  }

  .item-image {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    object-fit: cover;
    margin: 0 auto 25px;
    transition: transform 0.3s ease;
    background: #f0f0f0;
  }

  .menu-item:hover .item-image {
    transform: scale(1.05);
  }

  .item-title {
    font-size: 1.4rem;
    color: #8B5A2B;
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
    font-family: "Playfair Display", serif;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: linear-gradient(90deg, #8B5A2B, #6d441eff);
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

  #prevBtn { left: 10px; }
  #nextBtn { right: 10px; }
</style>
</head>
<body>
<div class="menu-slider-container">
  <div class="slider-wrapper">
    <div class="slider-container" id="sliderContainer">
      <div class="menu-item">
        <img src="assets/images/menu/menu1.webp" alt="Chocolate Brownie" class="item-image">
        <h3 class="item-title">Avocado Toast</h3>
        <p class="item-subtitle">Handcrafted</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu2.webp" alt="Prawn & Spinach Penne" class="item-image">
        <h3 class="item-title">Chocolate Brownie</h3>
        <p class="item-subtitle">Handcrafted</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu3.webp" alt="Spaghetti Pomodoro" class="item-image">
        <h3 class="item-title">Prawn & Spinach Penne</h3>
        <p class="item-subtitle">Gourmet</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu8.webp" alt="Creamy Pesto Pasta" class="item-image">
        <h3 class="item-title">Spaghetti Pomodoro</h3>
        <p class="item-subtitle">Gourmet</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu5.webp" alt="Margherita Pizza" class="item-image">
        <h3 class="item-title">Creamy Alfredo Penne</h3>
        <p class="item-subtitle">Gourmet</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu6.webp" alt="Pancakes" class="item-image">
        <h3 class="item-title">Tropical Smoothie Bowl</h3>
        <p class="item-subtitle">Handcrafted</p>
      </div>
      <div class="menu-item">
        <img src="assets/images/menu/menu7.webp" alt="Pancakes" class="item-image">
        <h3 class="item-title">Tempura Platter</h3>
        <p class="item-subtitle">Handcrafted</p>
      </div>
    </div>
  </div>

  <button class="nav-btn" id="prevBtn">‹</button>
  <button class="nav-btn" id="nextBtn">›</button>
</div>

<script>
  const container = document.getElementById('sliderContainer');
  const wrapper = document.querySelector('.slider-wrapper');
  let speed = 0.5;
  let pos = 0;
  const gap = 30; // gap between items
  const items = Array.from(container.children);
  const itemWidth = items[0].offsetWidth + gap;
  const totalItems = items.length;
  const containerWidth = wrapper.offsetWidth;

  // Clone items for seamless infinite scroll
  items.forEach(item => {
    const clone = item.cloneNode(true);
    container.appendChild(clone);
  });

  const maxScroll = -((totalItems * itemWidth));

  let isHovered = false;

  wrapper.addEventListener('mouseenter', () => isHovered = true);
  wrapper.addEventListener('mouseleave', () => isHovered = false);

  function animate() {
    if(!isHovered) {
      pos -= speed;

      if(pos <= maxScroll) {
        pos = 0;
      } else if(pos > 0) {
        pos = maxScroll;
      }

      container.style.transform = `translateX(${pos}px)`;
    }
    requestAnimationFrame(animate);
  }

  animate();

  // Navigation buttons
  document.getElementById('nextBtn').addEventListener('click', () => {
    pos -= itemWidth;
    if(pos <= maxScroll) pos = 0;
    container.style.transform = `translateX(${pos}px)`;
  });

  document.getElementById('prevBtn').addEventListener('click', () => {
    pos += itemWidth;
    if(pos > 0) pos = maxScroll;
    container.style.transform = `translateX(${pos}px)`;
  });
</script>

</body>
</html>