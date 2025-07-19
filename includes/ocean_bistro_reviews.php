<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans Reviews Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Georgia&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            width: 100%;
        }

        /* Reviews Section Styles */
        .reviews-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.15) 0%, rgba(248, 248, 248, 0.95) 100%),
                        url('https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/galle-.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
            min-height: 100vh;
        }

        .reviews-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="1" fill="rgba(113,205,255,0.1)"/><circle cx="80" cy="40" r="0.5" fill="rgba(113,205,255,0.15)"/><circle cx="40" cy="80" r="1.5" fill="rgba(113,205,255,0.08)"/></svg>') repeat;
            pointer-events: none;
        }

        .reviews-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .reviews-header {
            text-align: center;
            margin-bottom: 60px;
        }
         .reviews-header h2 {
    font-size: 3rem !important;
    font-weight: 800 ;
    color: #1a365d ;
    margin-bottom: 20px;
    letter-spacing: -1.2px ;
    background: linear-gradient(90deg, #2b6cb0, #4a5568);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  
           .reviews-header h3 {
    font-size: 3rem;
    font-weight: 800;
    color: #1a365d;
    margin-bottom: 20px;
    letter-spacing: -1.2px;
    background: linear-gradient(90deg, #2b6cb0, #4a5568);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

        

        .reviews-description {
            font-family: 'Georgia', serif;
            font-size: 1.1rem;
            color: #555;
            max-width: 500px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            margin-top: 40px;
        }

        .reviews-slider {
            display: flex;
            transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.4);
        }

        .review-card {
            min-width: 100%;
            padding: 40px;
            text-align: center;
            opacity: 0.7;
            transform: scale(0.95);
            transition: all 0.8s ease;
        }

        .review-card.active {
            opacity: 1;
            transform: scale(1);
        }

        .review-content {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(113, 205, 255, 0.2);
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .review-content::before {
            content: '"';
            font-family: 'Playfair Display', serif;
            font-size: 6rem;
            color: #71CDFF;
            position: absolute;
            top: -10px;
            left: 30px;
            opacity: 0.4;
        }

        .review-text {
            font-family: 'Georgia', serif;
            font-size: 1.3rem;
            line-height: 1.8;
            color: #2c2c2c;
            margin-bottom: 30px;
            font-style: italic;
        }

        .review-author {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: #71CDFF;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .review-location {
            font-family: 'Georgia', serif;
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        .review-stars {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-bottom: 10px;
        }

        .star {
            color: #FFD700;
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .review-platform {
            font-family: 'Georgia', serif;
            font-size: 0.9rem;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 40px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(113, 205, 255, 0.);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: #71CDFF;
            transform: scale(1.2);
            box-shadow: 0 0 10px rgba(113, 205, 255, 0.5);
        }

        .slider-nav {
            position: absolute;
            top: 45%;
            transform: translateY(-50%) ;
            background: rgba(255, 255, 255, 0.8) !important;
            border: 2px solid #71CDFF !important;
            color: #71CDFF !important;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px) ;
            font-size: 1.5rem !important;
            font-weight: bold !important;
        }

        .slider-nav:hover {
            background: #71CDFF!important;
            color: white!important;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 5px 15px rgba(113, 205, 255, 0.3);
        }

        .slider-nav.prev {
            left: 20px;
        }

        .slider-nav.next {
            right: 20px;
        }

        @media (max-width: 768px) {
            .reviews-section {
                padding: 60px 20px;
                background-attachment: scroll;
            }
            
            .reviews-title {
                font-size: 2.5rem;
            }
            
            .reviews-subtitle {
                font-size: 1.8rem;
            }
            
            .review-content {
                padding: 30px 25px;
            }
            
            .review-text {
                font-size: 1.1rem;
            }
            
            .slider-nav {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Reviews Section -->
    <section class="reviews-section">
        <div class="reviews-container">
            <div class="reviews-header">
                <h2 class="reviews-title">Guest Experiences</h2>
            </div>

            <div class="slider-container">
                <div class="reviews-slider" id="reviewsSlider">
                    <div class="review-card active">
                        <div class="review-content">
                            <div class="review-stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="review-text">
                                We had a very delicious fish and crab. Beautiful atmosphere within the restaurant. Prabath was a great waiter who looked after us very well. Overall a must visit when in Galle
                            </p>
                            <div class="review-author">Ken Dsouza</div>
                          <!--  <div class="review-location">London, UK</div> -->
                            <div class="review-platform">Google reviews</div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-content">
                            <div class="review-stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="review-text">
                                Delicious food with great service! Tried the seafood Kottu and very much enjoyed! Would recommend to others to visit here!
                            </p>
                            <div class="review-author">Rosie Jones</div>
                           <!-- <div class="review-location">Sydney, Australia</div> -->
                            <div class="review-platform">TripAdvisor</div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-content">
                            <div class="review-stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="review-text">
                                Excellent service and outstanding location. Recommend the balcony as a great location to spend a hot afternoon by the sea.
                            </p>
                            <div class="review-author">Wayne K</div>
                           <!-- <div class="review-location">Milan, Italy</div> -->
                            <div class="review-platform">Tripadvisor</div>
                        </div>
                    </div>

                    <div class="review-card">
                        <div class="review-content">
                            <div class="review-stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                            <p class="review-text">
                               A remarkable restaurant in the Galle Old town.
The restaurant is located in a very antique colonial building, absolutely clean and well preserved.
Food & beverage offer is quite huge, tasty and portions are very abundant.
I think I had the best Tuna Steak of my life, perfectly rare and chunky 😋.
Staff is very welcoming and polite.
Not exactly cheap prices but absolutely matching with the quality of food and service.
Absolutely recommended 💯
                            </p>
                            <div class="review-author">
Caius Bernardi</div>
                           <!-- <div class="review-location">Mumbai, India</div> -->
                            <div class="review-platform">Google Reviews</div>
                        </div>
                    </div>
                </div>

                <button class="slider-nav prev" onclick="changeSlide(-1)">‹</button>
                <button class="slider-nav next" onclick="changeSlide(1)">›</button>
            </div>

            <div class="slider-dots" id="sliderDots">
                <span class="dot active" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </section>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-play slider
            setInterval(() => {
                changeSlide(1);
            }, 12000);
        });

        // Reviews slider functionality
        let currentSlideIndex = 0;
        const totalSlides = 4;

        function changeSlide(direction) {
            const slider = document.getElementById('reviewsSlider');
            const cards = document.querySelectorAll('.review-card');
            const dots = document.querySelectorAll('.dot');
            
            // Remove active class from current slide
            cards[currentSlideIndex].classList.remove('active');
            dots[currentSlideIndex].classList.remove('active');
            
            // Update slide index
            currentSlideIndex += direction;
            
            if (currentSlideIndex >= totalSlides) {
                currentSlideIndex = 0;
            } else if (currentSlideIndex < 0) {
                currentSlideIndex = totalSlides - 1;
            }
            
            // Move slider
            slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
            
            // Add active class to new slide
            cards[currentSlideIndex].classList.add('active');
            dots[currentSlideIndex].classList.add('active');
        }

        function currentSlide(index) {
            const slider = document.getElementById('reviewsSlider');
            const cards = document.querySelectorAll('.review-card');
            const dots = document.querySelectorAll('.dot');
            
            // Remove active class from current slide
            cards[currentSlideIndex].classList.remove('active');
            dots[currentSlideIndex].classList.remove('active');
            
            // Set new slide index
            currentSlideIndex = index - 1;
            
            // Move slider
            slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
            
            // Add active class to new slide
            cards[currentSlideIndex].classList.add('active');
            dots[currentSlideIndex].classList.add('active');
        }
    </script>
</body>
</html>