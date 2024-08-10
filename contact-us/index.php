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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
   .service-bg{
    background:#f8f9fe;
    }
    .font-size-60{
        font-size:60px;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js"></script>
</head>
<body>
<?php include('../header.php')?>
<!-- Here help to Section -->
<section class="service-bg p-lg-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-lg-5">
                <p class="mb-0"><span class="roboto-bold font-size-18 ">Home</span> <span class="roboto-bold right-arrow font-size-18 px-lg-3">></span> <span class="roboto-bold font-size-18">Contact us</span></p>
                <p class="font-size-60 roboto-bold">Contact us</p>
            </div>
            <div class="col-lg-6 p-lg-5">
                <p class="roboto-bold font-size-40">We're here to help you.</p>
                <p class="roboto-regular font-size-18">Call us, and our support team representative will get in touch with you shortly.</p>
            </div>
        </div>
    </div>
</section>
<!-- customer supprot box -->
<section class="mt-lg-5 digital-paymet-sec">
        <div class="container mt-lg-5 mt-3">
            <div class="row justify-content-center p-lg-0 p-4">
                <div class="col-lg-5 border-box mt-lg-4" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="800">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="border-box-img text-center" style="width:80%;margin:0 auto">
                                <img src="../assets/SVG/customer_support .svg" alt="" class="img-fluid" width="100px">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="border-box-inner-content mt-lg-0 mt-4">
                                <p class="roboto-bold border-box-header pt-lg-4">
                                Customer Support</p>
                                <p class="roboto-light border-box-card-inner lh-35 font-size-18">
                                We will provide 24*7 support to our customers and enhance their payment process. 
                                </p>
                             </div>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-5 border-box mt-lg-4 ms-lg-4 mt-3 me-lg-0 ms-lg-0 me-3 ms-3" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="800">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="border-box-img" style="width:80%;margin:0 auto">
                                <img src="../assets/SVG/quick_payment .svg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="border-box-inner-content mt-lg-0 mt-4">
                                <p class="roboto-bold border-box-header pt-lg-4"> Quick Payment</p>
                                <p class="roboto-light font-size-18 lh-35 border-box-card-inner">
                                 We help our customers and  users accept digital payments online  and offline. 
                                </p>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
</section>
    <!-- Form Section -->

    <section class="contact-form mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 form p-lg-5" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="800">
                    <div>
                        <p class="font-size-18 roboto-medium secondary-color"> Send us a message</p>
                        <h3 class="font-size-40 pt-lg-3 roboto-bold">Can't find the answer you're looking for?</h3>
                        <p class="font-size-18 form-input-para roboto-medium secondary-color pt-lg-3 pb-lg-5">Please fill in your details, and we will get back to you.</p>
                    </div>
                    <form action="" >
                        <div class="form-inputs p-lg-3">
                            <div class="d-flex align-items-center">
                                <div class="w-50">
                                    <label for="Name" class="form-label roboto-medium ms-lg-3">Name</label>
                                    <input type="text" class="form-control form-input-field" placeholder="Name" required="required"> 
                                </div>
                                <div class="w-50 ms-lg-2">
                                    <label for="Name" class="form-label roboto-medium ms-lg-3">Company</label>
                                    <input type="text" class="form-control form-input-field" placeholder="Company" required="required">
                                </div>
                            </div>
                            <div class="w-100 pt-lg-3">
                                <label for="Name" class="form-label roboto-medium ms-lg-3">Email</label>
                                <input type="text" class="form-control form-input-field" placeholder="Email" required="required">
                            </div>
                            <div class="w-100 pt-lg-3">
                                <label for="Name" class="form-label roboto-medium ms-lg-3">Subject</label>
                                <input type="text" class="form-control form-input-field" placeholder="Subject" required="required">
                            </div>
                            <div class="w-100 pt-lg-3">
                                <label for="Name" class="form-label roboto-medium ms-lg-3">Message</label>
                                <textarea type="text-area" class="form-control form-input-field" placeholder="Message" rows="4" required="required"></textarea>
                            </div>
                            <div class="w-100 pt-lg-5 text-center">
                                <button type="submit" class="submit-btn roboto-medium">Submit</button>
                            </div>
                        </div>  
                    </form>
                  
                </div>
                <div class="col-lg-6 p-lg-5" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="800">
                    <div>
                        <p class="font-size-18 roboto-medium secondary-color"> Visit us</p>
                        <h3 class="font-size-40 pt-lg-3 roboto-bold">Need Direct Support? Please visit our office.</h3>
                        <p class="font-size-18 form-input-para roboto-medium secondary-color pt-lg-3 pb-lg-5">We are available to help you get the best and most reliable payment solutions.</p>
                    </div>
                    <div class="d-flex contact-us-information p-lg-3">
                        <div class="contact-us-img">
                            <img src="../assets/SVG/location.svg" alt="" class="img-fluid contact-us-icon position-relative" >
                        </div>
                        <div class="ms-lg-4">
                            <p class="roboto-bold font-size-24"> Location</p>
                            <p class="roboto-medium font-size-18">H- 28, Ponvizha Nagar,Tirunelveli-627007</p>
                        </div>
                    </div>
                    <div class="d-flex contact-us-information  p-lg-3">
                        <div class="contact-us-img">
                            <img src="../assets/SVG/mail.svg" alt="" class="img-fluid contact-us-icon-email position-relative">
                        </div>
                        <div class="ms-lg-4">
                            <p class="roboto-bold font-size-24"> Email Us </p>
                            <p class="roboto-medium font-size-18">[email protected]</p>
                        </div>
                    </div>
                    <div class="d-flex contact-us-information p-lg-3">
                        <div class="contact-us-img">
                            <img src="../assets/SVG/call.svg" alt="" class="img-fluid contact-us-icon-mobile position-relative">
                        </div>
                        <div class="ms-lg-4">
                            <p class="roboto-bold font-size-24"> Call Us</p>
                            <p class="roboto-medium font-size-18">6374551711</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map section -->
    <section>
        <div class="container my-lg-5" data-aos="fade-up" data-aos-easing="linear"
        data-aos-duration="800">
            <div class="map text-center">
                <iframe aria-label="H- 28, Ponvizha Nagar,Tirunelveli-627007" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?q=H-%2028%2C%20Ponvizha%20Nagar%2CTirunelveli-627007&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="H- 28, Ponvizha Nagar,Tirunelveli-627007" class="map-frame"></iframe>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include('../footer.php')?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>

</body>