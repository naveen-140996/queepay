<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">   
     <link rel="stylesheet"  href="../queepay/style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
   .service-bg{
    background:#f8f9fe;
    }
    .font-size-60{
        font-size:60px;
    }
    .associates-1{
  position: absolute;
  bottom: -13px !important;
  right: 3px !important;
  box-shadow: 3px 5px 10px #cccccc82 !important;
  border-radius: 10px;
}
.associates-2{
  position: absolute;
  bottom: 137px !important;
  left: 50px !important;
  box-shadow: 3px 5px 10px #cccccc82 !important;
  border-radius: 10px;
}
html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }
    .swiper-wrapper{
        width: 96%;
    }
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      flex:0 0 50%;
      height:27%;
      margin: 0px 6px;
      border-radius: 30px;
      cursor: pointer;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .swipper-slide{
        position: relative;
    }
    .swiper-slide::after{
    content: "";
    display: block;
    width: 14px;
    height: 14px;
    background-color: #fff;
    position: absolute;
    -webkit-transform: scaleX(.75) rotate(45deg);
    -ms-transform: scaleX(.75) rotate(45deg);
    transform: scaleX(.75) rotate(45deg);
    border-width: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    bottom: -8px;
    left: 57px;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js"></script>
</head>
<body>
<?php include('../header.php')?>
<!-- first Section -->
<section class="associate-sec mt-lg-5 pt-lg-4">
    <div class="container mt-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6 p-lg-5 p-3">
                <p class="font-size-18 roboto-medium secondary-color"> WELCOME TO QPAY </p>
                <p class="font-size-40 roboto-bold associate-header">Choose The Smart Way To Make Your Payments.</p>
                <p class="font-size-18 secondary-color lh-35"> We offer state-of-the-art payment gateway solutions through groundbreaking technologies.</p>
                <div class="text-center mt-lg-5 mt-3 signup">
                    <a href="https://pg.queepay.com/register.php">
                        <button class="btn signup-btn roboto-medium" data-aos-easing="linear"
                        data-aos-duration="800">Sign Up Now</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 p-lg-5 my-lg-0 my-3">
                <div class="animated-element position-relative"  data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;,&quot;_animation_delay&quot;:50,&quot;_position&quot;:&quot;absolute&quot;}">
                    <img src="../assets/associates-banner-1.jpg"  class="img-fluid" style="border-radius:10px;"> 
                </div>
                <div class="animated-element position-relative"  data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;,&quot;_animation_delay&quot;:50,&quot;_position&quot;:&quot;absolute&quot;}">
                    <img src="../assets/Paid.png" alt="" width="180px" height="90px" class="associates-1 img-fluid" > 
                </div>
               
                <div class="animated-element position-relative"  data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;,&quot;_animation_delay&quot;:200,&quot;_position&quot;:&quot;absolute&quot;}">
                    <img src="../assets/Order.png" alt="" width="120px" height="120px" class="associates-2 img-fluid" > 
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- second section -->
<section class="mt-lg-5 ">
    <div class="container mt-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-6 p-lg-5 mt-lg-0 mt-5" data-aos="fade-right" ata-aos-easing="linear"
                data-aos-delay="300">
                <p class="font-size-18 roboto-medium secondary-color"> Distributors </p>
                <p class="font-size-40 roboto-bold associate-header">Register as a distributor. Create unlimited retailers under you.</p>
                <p class="font-size-18 secondary-color lh-35"> You can join QPay as a renowned distributor, and we will help you become our partner in success.</p>
                <div class="text-center mt-lg-5 mt-3 signup">
                    <a href="https://pg.queepay.com/register.php">
                        <button class="btn signup-btn roboto-medium" data-aos-easing="linear"
                        data-aos-duration="800">Discover More</button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 p-lg-5">
                <div class="my-lg-0 my-3"  data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;,&quot;_animation_delay&quot;:50,&quot;_position&quot;:&quot;absolute&quot;}">
                    <img src="../assets/associates-banner-2.png"  class="img-fluid" style="border-radius:10px;"> 
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- Upcoming Services -->
  <section class="upcome-section mt-5">
        <div class="container p-lg-5 p-3">
            <div class="row">
                <div class="col-lg-5 upcome-left-content">
                    <div  class="animated-element position-relative text-center pt-lg-5"  data-settings="{&quot;_animation&quot;:&quot;bounceInDown&quot;,&quot;_animation_delay&quot;:100,&quot;_position&quot;:&quot;absolute&quot;}">
                        <img src="../assets/associates-banner-3.png" alt="" class="img-fluid" height="500px">
                    </div>
                </div>
                <div class="col-lg-7 py-lg-5 py-5 upcome-right-content">
                    <h2 class="roboto-bold font-size-40 associate-header">Affiliates & Spenny</h2>
                    <p class="roboto-bold secondary-color font-size-18 pt-3">Join Us Today!</p>
                    <p class="roboto-regular secondary-color font-size-18 pt-3 lh-35">We help individuals effectively enhance their savings and ensure their financial stability.</p>
                    <div class="mt-lg-5">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swipper-content p-4  p-lg-4">
                                        <p class="font-size-18 text-start secondary-color roboto-medium">Promote our product and earn incentives with additional benefits based on your performance.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swipper-content p-4 p-lg-4">
                                        <p class="font-size-18 text-start secondary-color roboto-medium">We help individuals effectively enhance their savings and ensure their financial stability.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swipper-content p-4 p-lg-4">
                                        <p class="font-size-18 text-start secondary-color roboto-medium">Promote our product and earn incentives with additional benefits based on your performance.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swipper-content p-4 p-lg-4">
                                        <p class="font-size-18 text-start secondary-color roboto-medium">We help individuals effectively enhance their savings and ensure their financial stability.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- footer -->
  <?php include('../footer.php')?>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    // Initialize AOS
    AOS.init();
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    function animateElement(element) {
        // Parse the settings
        const settings = JSON.parse(element.getAttribute("data-settings").replace(/&quot;/g, '"'));

        // Apply CSS position
        element.style.position = settings._position;

        // Set animation delay
        if (settings._animation && settings._animation_delay) {
            element.style.animationDelay = `${settings._animation_delay}ms`;
        }

        // Add the animation class
        element.classList.add('animated', settings._animation);

        // Ensure element is visible when animation starts
        element.style.opacity = 1;
    }

    // Intersection Observer setup
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Start the animation if it hasn't been started yet
                if (!entry.target.classList.contains('animated')) {
                    animateElement(entry.target);
                    // Stop observing this element after animation has started
                    observer.unobserve(entry.target);
                }
            }
        });
    }, { threshold: 0.5 }); // 50% of the element must be visible

    // Observe all animated elements
    document.querySelectorAll(".animated-element").forEach(el => {
        observer.observe(el);
    });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
    // Function to check if all images are loaded
    function areImagesLoaded(callback) {
        const images = document.querySelectorAll('img');
        let loadedImages = 0;
        const totalImages = images.length;

        if (totalImages === 0) {
            callback();
            return;
        }

        images.forEach(img => {
            img.addEventListener('load', () => {
                loadedImages += 1;
                if (loadedImages === totalImages) {
                    callback();
                }
            });
            img.addEventListener('error', () => {
                loadedImages += 1;
                if (loadedImages === totalImages) {
                    callback();
                }
            });
        });
    }

    // Check if all images are loaded before running the rest of the script
    areImagesLoaded(() => {
        function animateElement(element) {
            const settings = JSON.parse(element.getAttribute("data-settings").replace(/&quot;/g, '"'));
            element.style.position = settings._position;
            if (settings._animation && settings._animation_delay) {
                element.style.animationDelay = `${settings._animation_delay}ms`;
            }
            element.classList.add('animated', settings._animation);
            element.style.opacity = 1;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (!entry.target.classList.contains('animated')) {
                        animateElement(entry.target);
                        observer.unobserve(entry.target);
                    }
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll(".animated-element").forEach(el => {
            observer.observe(el);
        });
    });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
        var swiper = new Swiper('.mySwiper', {
            loop: true, // Ensure it loops
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // Optional: Adjust how many slides to show at a time
            slidesPerView: 2,
        });
    </script>

</body>