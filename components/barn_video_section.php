<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Background Section</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .video-section_component {
        position: relative;
        width: 100%;
        height: 500px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .video-background_component {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
        object-fit: cover;
        z-index: -1;
      }

      .video-overlay_component {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 1;
      }

      .content_video_component {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 20px;
      }

      .main-title_video {
        font-family: "Playfair Display", serif;
        font-size: 3.2rem;
        font-weight: lighter;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
      }

      .subtitle_video {
        margin-top: 20px;
        font-family: "Poppins", sans-serif;
        width: 70%;
        font-size:0.9rem;
        font-weight: 300;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
      }

      @media (max-width: 430px){
        .main-title_video{
          font-size: 2.5rem;
        }

        .subtitle_video{
          font-size: 0.6rem !important;
          width: 95%;
        }

        .video-section_component{
          height: 400px;
        }
      }


    </style>
  </head>
  <body>
    <section class="video-section_component">
      <video class="video-background_component" autoplay muted loop playsinline>
        <source
          src="../assets/video/Sri Lanka - Heart of the Indian Ocean.mp4"
          type="video/mp4"
        />
      </video>

      <div class="video-overlay_component"></div>

      <div class="content_video_component">
        <h1 class="main-title_video">This is Sri Lanka</h1>
        <p class="subtitle_video">
          Located on the southern coast of Sri Lanka, Galle is a vibrant city
          known for its rich colonial heritage, stunning ocean views, and
          charming cobblestone streets. At its heart lies the iconic Galle Fort,
          a UNESCO World Heritage Site built by the Portuguese and later
          fortified by the Dutch.
        </p>
      </div>
    </section>
  </body>
</html>
