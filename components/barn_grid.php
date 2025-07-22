<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Grid Layout</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(3, 1fr);
            gap: 15px;
            width: 90vw;
            max-width: 1200px;
            margin: 0 auto;
            aspect-ratio: 3/2;
        }

        .grid-item {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            background-color: #222;
        }

        /* Grid layout positioning */
        .grid-item:nth-child(1) {
            grid-column: 1;
            grid-row: 1;
        }

        .grid-item:nth-child(2) {
            grid-column: 2;
            grid-row: 1 / 3;
        }

        .grid-item:nth-child(3) {
            grid-column: 3;
            grid-row: 1;
        }

        .grid-item:nth-child(4) {
            grid-column: 1;
            grid-row: 2 / 4;
        }

        .grid-item:nth-child(5) {
            grid-column: 2;
            grid-row: 3;
        }

        .grid-item:nth-child(6) {
            grid-column: 3;
            grid-row: 2 / 4;
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .grid-item:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .grid-item:hover .overlay {
            opacity: 1;
        }

        .overlay h3 {
            font-size: 1.6rem;
            font-family: "Playfair Display", serif !important;
            font-weight: 600;
            margin-bottom: 8px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.4s ease 0.1s;
        }

        .overlay p {
            font-size: 0.9rem;
            font-family: "Roboto", sans-serif !important;
            opacity: 0;
            line-height: 1.3;
            transform: translateY(30px);
            transition: all 0.4s ease 0.2s;
            color: #31b62fff;
        }

        .grid-item:hover .overlay h3,
        .grid-item:hover .overlay p {
            transform: translateY(0);
            opacity: 1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(3, 1fr);
                max-width: 600px;
                aspect-ratio: 2/3;
            }

            .grid-item:nth-child(1) {
                grid-column: 1;
                grid-row: 1;
            }

            .grid-item:nth-child(2) {
                grid-column: 2;
                grid-row: 1 / 3;
            }

            .grid-item:nth-child(3) {
                grid-column: 1;
                grid-row: 2;
            }

            .grid-item:nth-child(4) {
                grid-column: 1;
                grid-row: 3;
            }

            .grid-item:nth-child(5) {
                grid-column: 2;
                grid-row: 3;
            }

            .grid-item:nth-child(6) {
                display: none;
            }

            .overlay h3 {
                font-size: 1.2rem;
            }

            .overlay p {
                font-size: 0.8rem;
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, 200px);
                max-width: 100%;
                aspect-ratio: unset;
                gap: 6px;
            }

            .grid-item {
                grid-column: 1 !important;
                grid-row: auto !important;
                display: block !important;
            }

            .overlay {
                padding: 15px;
            }

            .overlay h3 {
                font-size: 1.1rem;
                margin-bottom: 6px;
            }

            .overlay p {
                font-size: 0.8rem;
            }
        }

        .grid_top_section {
            text-align: center;
            margin: 40px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .grid_title {
            font-family: "Playfair Display", serif !important;
            font-size: 3rem;
            color: #004d05ff;
            margin-top: 40px;
            font-weight: 500;
        }

        .grid_sub {
            margin-top: 20px;
            font-family: "Roboto", sans-serif !important;
            font-size: 14px;
            color: #949494;
            max-width: 600px;
            font-weight: 400;
        }

        @media (max-width: 430px) {

            .grid_title {
                padding: 0 5px 0 5px;
                font-size: 2rem !important;
            }

            .grid_sub {
                font-size: 0.65rem !important;
            }
        }
    </style>
</head>

<body>
    <div class="grid_top_section">
        <h1 class="grid_title">Where Comfort Meets Taste – The BARN</h1>
        <p class="grid_sub">Explore the heartwarming atmosphere of The Barn through our gallery. From rustic wooden interiors and soft ambient lighting to beautifully plated comfort dishes, each image reflects the cozy, welcoming spirit that makes every visit special.</p>
    </div>


    <div class="grid-container">
        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg1.webp" alt="image1">
            <div class="overlay">
                <p>The Barn</p>
                <h3>Aura</h3>
            </div>
        </div>

        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg2.webp" alt="image2">
            <div class="overlay">
                <p>The Barn</p>
                <h3>The Vibe</h3>
            </div>
        </div>

        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg3.webp" alt="image3">
            <div class="overlay">
                <p>The Barn</p>
                <h3>Culinary Delight</h3>
            </div>
        </div>

        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg4.webp" alt="image4">
            <div class="overlay">
                <p>The Barn</p>
                <h3>Experience</h3>
            </div>
        </div>

        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg5.webp" alt="image5">
            <div class="overlay">
                <p>The Barn</p>
                <h3>Ambience</h3>
            </div>
        </div>

        <div class="grid-item">
            <img src="../assets/images/barnGrid/bimg6.webp" alt="image6">
            <div class="overlay">
                <p>The Barn</p>
                <h3>Interior</h3>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const gridItems = document.querySelectorAll('.grid-item');

            gridItems.forEach((item, index) => {
                item.addEventListener('click', function() {
                    const title = this.querySelector('h3').textContent;
                    console.log(`Clicked on: ${title}`);
                });

                // Add entrance animation
                item.style.opacity = '0';
                item.style.transform = 'scale(0.8)';

                setTimeout(() => {
                    item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, index * 100);
            });
        });
    </script>
</body>

</html>