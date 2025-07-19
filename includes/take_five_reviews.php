<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans Reviews Section</title>
    <link rel="stylesheet" href="../assets/css/take_five_reviews.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Georgia&display=swap" rel="stylesheet">
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
                                Hotel level food! Very suprised to find this place! Recommend the fish and chips for sure
Beautifully built - great atmosphere and wooden design
Definetly come here !
                            </p>
                            <div class="review-author">
Sean De Silva
</div>
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
                                Excellent! 30 years visiting SL and living here for over 6 years, the coffee was the best I’ve had here. The wraps were fresh and tasty, the service professional. Clean, well presented cafe.
                            </p>
                            <div class="review-author">Stephen Gapes</div>
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
                               Best coffee I’ve had in Sri Lanka. As good as any I’d find in Melbourne
                            </p>
                            <div class="review-author">Creeind Swinny</div>
                           <!-- <div class="review-location">Milan, Italy</div> -->
                            <div class="review-platform">Google Reviews</div>
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
                              You can have good coffee here. Carefully roasted. Good flavour.
                            </p>
                            <div class="review-author">

Thiran Ediriweera</div>
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
    
    <script src="../assets/js/take_five_reviews.js"></script>
</body>
</html>