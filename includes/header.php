<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbeans Navigation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', 'Segoe UI', sans-serif;
        }
        
        nav {
            background: rgba(40, 40, 40, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .logo img {
            height: 40px;
            width: auto;
            transition: transform 0.3s ease, filter 0.3s ease;
            filter: brightness(0) invert(1);
        }
        
        .logo img:hover {
            transform: scale(1.05);
            filter: brightness(0) invert(1) drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            position: relative;
            margin: 0 12px;
        }
        
        .nav-links li a {
            color: #e0e0e0;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            padding: 12px 15px;
            transition: all 0.3s ease;
            position: relative;
            letter-spacing: 0.3px;
        }
        
        .nav-links li a:hover {
            color: #ffffff;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
        }
        
        .nav-links li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: rgba(255, 255, 255, 0.9);
            bottom: 0;
            left: 15px;
            transition: width 0.3s ease;
        }
        
        .nav-links li:hover > a::after {
            width: calc(100% - 30px);
        }
        
        /* Modern dropdown indicator */
        .nav-links li:has(.dropdown) > a::after {
            content: '';
            display: inline-block;
            margin-left: 8px;
            width: 8px;
            height: 8px;
            border-right: 2px solid rgba(255,255,255,0.7);
            border-bottom: 2px solid rgba(255,255,255,0.7);
            transform: rotate(45deg);
            transition: all 0.3s ease;
            position: relative;
            top: -2px;
        }
        
        .nav-links li:hover > a::after {
            
            top: 1px;
            border-color: white;
        }
        
        /* Elegant Glass Dropdown - No slash effect */
        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: rgba(50, 50, 50, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            width: 220px;
            border-radius: 6px ;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.4);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            z-index: 100;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            transform: translateY(10px);
        }
        
        .nav-links li:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown li {
            padding: 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        
        .dropdown li:last-child {
            border-bottom: none;
        }
        
        .dropdown li a {
            color: rgba(230, 230, 230, 0.95);
            font-size: 14px;
            padding: 12px 20px;
            display: block;
            transition: all 0.3s ease;
        }
        
        .dropdown li:hover {
            background: rgba(255, 255, 255, 0.05);
        }
        
        .dropdown li a:hover {
            color: #ffffff;
            padding-left: 25px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), transparent);
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        /* Mobile Styles (only added for mobile) */
        .hamburger {
            display: none;
            cursor: pointer;
            z-index: 1000;
            width: 30px;
            height: 24px;
            position: relative;
        }

        .hamburger span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: white;
            border-radius: 3px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        .hamburger span:nth-child(1) {
            top: 0px;
        }

        .hamburger span:nth-child(2) {
            top: 10px;
        }

        .hamburger span:nth-child(3) {
            top: 20px;
        }

        .hamburger.active span:nth-child(1) {
            top: 10px;
            transform: rotate(135deg);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
            left: -30px;
        }

        .hamburger.active span:nth-child(3) {
            top: 10px;
            transform: rotate(-135deg);
        }

        /* Mobile menu overlay */
        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            z-index: 900;
        }

        /* Responsive adjustments - only for mobile */
        @media (max-width: 1024px) {
            .hamburger {
                display: block;
            }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background: rgba(30, 30, 30, 0.95);
                backdrop-filter: blur(20px);
                flex-direction: column;
                align-items: flex-start;
                padding: 100px 30px 30px;
                transition: right 0.5s ease;
                z-index: 950;
                border-left: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                width: 100%;
                margin: 0;
                padding: 10px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-links li a {
                padding: 12px 0;
                font-size: 16px;
            }

            .dropdown {
                position: static;
                width: 100%;
                background: rgba(40, 40, 40, 0.8);
                box-shadow: none;
                border: none;
                border-radius: 0;
                max-height: 0;
                overflow: hidden;
                opacity: 1;
                visibility: visible;
                transform: none;
                transition: max-height 0.4s ease;
            }

            .nav-links li:hover .dropdown {
                max-height: 500px;
            }

            .dropdown li a {
                padding: 12px 0 12px 20px;
            }

            .mobile-overlay.active {
                display: block;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="https://starbeans.ceylonlensmedia.com/"><img src="https://starbeans.ceylonlensmedia.com/wp-content/uploads/2025/04/3x1.png" alt="Starbeans Logo"></a>
        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="nav-links">
            <li>
                <a href="#">Restaurants</a>
                <ul class="dropdown">
                    <li><a href="https://starbeans.ceylonlensmedia.com/ocean-bistro/">Ocean Bistro</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/the-barn/">The Barn</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/take-five-cafe/">Take Five</a></li>
                </ul>
            </li>
            <li><a href="#">Booking</a></li>
            <li>
                <a href="#">Menu</a>
                <ul class="dropdown">
                    <li><a href="https://starbeans.ceylonlensmedia.com/food-energy/">Food</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/beverages/">Beverages</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/coffee-2/">Coffee</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Our Essence</a>
                <ul class="dropdown">
                    <li><a href="https://starbeans.ceylonlensmedia.com/vibes/">Vibes</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/resilience/">Resilience</a></li>
                    <li><a href="https://starbeans.ceylonlensmedia.com/sustainability/">Sustainability</a></li>
                </ul>
            </li>
            <li><a href="https://starbeans.ceylonlensmedia.com/about-us-2/">About Us</a></li>
            <li><a href="https://starbeans.ceylonlensmedia.com/contact/">Contact Us</a></li>
        </ul>

        <div class="mobile-overlay"></div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.nav-links');
            const overlay = document.querySelector('.mobile-overlay');

            hamburger.addEventListener('click', function() {
                this.classList.toggle('active');
                navLinks.classList.toggle('active');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', function() {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                this.classList.remove('active');
            });

            // Close dropdowns when clicking elsewhere on mobile
            if (window.innerWidth <= 1024) {
                document.addEventListener('click', function(e) {
                    const dropdowns = document.querySelectorAll('.dropdown');
                    dropdowns.forEach(dropdown => {
                        if (!dropdown.contains(e.target) && !dropdown.previousElementSibling.contains(e.target)) {
                            dropdown.style.maxHeight = '0';
                        }
                    });
                });

                // Toggle dropdowns on mobile
                const dropdownParents = document.querySelectorAll('.nav-links > li:has(.dropdown)');
                dropdownParents.forEach(parent => {
                    const link = parent.querySelector('a');
                    link.addEventListener('click', function(e) {
                        if (window.innerWidth <= 1024) {
                            e.preventDefault();
                            const dropdown = parent.querySelector('.dropdown');
                            dropdown.style.maxHeight = dropdown.style.maxHeight === '0px' || !dropdown.style.maxHeight ? '500px' : '0';
                        }
                    });
                });
            }
        });
    </script>
</body>
</html>