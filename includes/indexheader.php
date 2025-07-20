<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Transparent Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            min-height: 200vh; /* For demonstration - to allow scrolling */
            background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4') no-repeat center center/cover;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            padding: 25px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        nav.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .nav-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .nav-links {
            display: flex;
            list-style: none;
            margin: 0 auto;
        }

        .nav-links li {
            margin: 0 20px;
            position: relative;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 400;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            padding: 8px 0;
            position: relative;
        }

        .nav-links a:hover {
            color: #f8f8f8;
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-links a:hover:after {
            width: 100%;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.9);
            min-width: 200px;
            border-radius: 4px;
            padding: 15px 0;
            list-style: none;
            text-align: center;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content li {
            padding: 10px 25px;
            margin: 0;
        }

        .dropdown-content a {
            font-size: 1rem;
            font-weight: 300;
        }

        .dropdown-content li:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            position: absolute;
            right: 30px;
            top: 25px;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }

        .hamburger span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: white;
            transition: all 0.3s ease;
        }

        @media (max-width: 992px) {
            .hamburger {
                display: flex;
            }

            .nav-links {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100vh;
                background-color: rgba(0, 0, 0, 0.95);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0;
                transition: left 0.5s ease;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 20px 0;
                opacity: 0;
            }

            .nav-links.active li {
                animation: fadeIn 0.5s ease forwards;
                animation-delay: calc(0.1s * var(--i));
            }

            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .dropdown-content {
                position: static;
                display: none;
                background-color: transparent;
                padding: 0;
                transform: none;
                width: 100%;
            }

            .dropdown.active .dropdown-content {
                display: block;
            }

            .dropdown-content li {
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <div class="nav-container">
            <ul class="nav-links">
                <li class="dropdown" style="--i: 1">
                    <a href="#">Restaurant</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Ocean Bistro</a></li>
                        <li><a href="#">The Barn</a></li>
                        <li><a href="#">Take Five</a></li>
                    </ul>
                </li>
                <li class="dropdown" style="--i: 2">
                    <a href="#">Our Essence</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Vibes</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Resilience</a></li>
                    </ul>
                </li>
                <li style="--i: 3"><a href="#">Contact</a></li>
            </ul>
            
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        // Hamburger menu toggle
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.querySelector('.nav-links');
        const dropdowns = document.querySelectorAll('.dropdown');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
            
            // Toggle hamburger animation
            if (navLinks.classList.contains('active')) {
                hamburger.children[0].style.transform = 'translateY(9px) rotate(45deg)';
                hamburger.children[1].style.opacity = '0';
                hamburger.children[2].style.transform = 'translateY(-9px) rotate(-45deg)';
            } else {
                hamburger.children[0].style.transform = '';
                hamburger.children[1].style.opacity = '';
                hamburger.children[2].style.transform = '';
            }
        });

        // Dropdown toggle for mobile
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    dropdown.classList.toggle('active');
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 992) {
                    navLinks.classList.remove('active');
                    hamburger.children[0].style.transform = '';
                    hamburger.children[1].style.opacity = '';
                    hamburger.children[2].style.transform = '';
                }
            });
        });
    </script>
</body>
</html>