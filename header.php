<head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .font-size-15{
  font-size: 15px !important;
}
.roboto-thin {
  font-family: "Inter", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.roboto-light {
  font-family: "Inter", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.roboto-regular {
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.roboto-medium {
  font-family: "Inter", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.roboto-bold {
  font-family: "Inter", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.roboto-black {
  font-family: "Inter", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.roboto-thin-italic {
  font-family: "Inter", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.roboto-light-italic {
  font-family: "Inter", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.roboto-regular-italic {
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.roboto-medium-italic {
  font-family: "Inter", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.ml-180{
  margin-left:180px;
}
.navbar-nav .nav-item .nav-link{
  color: #42794a;
}
.navbar-nav .nav-item .nav-link.active{
  color: #61ce70;
}
.navbar-nav .nav-item .nav-link:hover{
  color:#61ce70;
}
.dropdown-menu{
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color:#fff;
  list-style: none;
  min-width: 160px;
  border: none;
  box-shadow: 0px 0px 10px #ccc;
  padding: 0 ;
}

.nav-item:hover .dropdown-menu {
  display: block;
}
.nav-item .dropdown-menu:hover{
  color: #61ce70;
}
 .dropdown-item.active{
  color:#61ce70 !important;
  background:#edf1fc !important;
  border-radius:5px !important;
 }
 .dropdown-item.active:focus{
  background-color:#edf1fc !important;
  color: #61ce70;
}

    </style>
</head>
<body>
  
<header class="header-section">
  <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://queepay.com/"
            ><img src="https://queepay.com/wp-content/uploads/elementor/thumbs/q-pay-Logo-pnp3kq9mnhzus0nj9u3qv1eqdw5o6a8vrn2vcn0kqo.png" alt="" class="img-fluid" ></a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <ul class="navbar-nav roboto-medium mb-2 ml-180 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/nippy_new/">Home</a>
              </li>
              <li class="nav-item dropdown ms-lg-4">
                <a
                  class="nav-link"
                  href="/nippy_new/aboutus/"
                  role="button"
                >
                  About us
                  <span class="sub-arrow ms-2">
                    <i class="fa-solid fa-caret-down"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item nav-link" href="/nippy_new/whychooseus/">Why Choose us</a></li>
                <li><a class="dropdown-item nav-link" href="/nippy_new/associates/">Business Associates</a></li>
                </ul>
               
              </li>
              <li class="nav-item ms-lg-4">
                <a class="nav-link" aria-current="page" href="/nippy_new/Services/"
                  >Services</a
                >
              </li>
              
              <li class="nav-item ms-lg-4">
                <a class="nav-link" aria-current="page" href="/nippy_new/payment-gateway/"
                  >Payment gateway</a
                >
              </li>
              <li class="nav-item ms-lg-4">
                <a class="nav-link" aria-current="page" href="/nippy_new/contact-us/"
                  >Contact us</a
                >
              </li>
              <li class="nav-item dropdown ms-lg-4">
                <a class="nav-link" aria-current="page" href="/nippy_new/policy/"
                  >Policy
                  <span class="sub-arrow ms-2">
                    <i class="fa-solid fa-caret-down"></i>
                    </span>
                  </a>
                  <ul class="dropdown-menu">
                  <li><a class="dropdown-item nav-link" href="/nippy_new/privacy-policy/">Privacy Policy</a></li>
                  <li><a class="dropdown-item nav-link" href="/nippy_new/terms-and-condition/">Terms and Condition</a></li>
                  <li><a class="dropdown-item nav-link" href="/nippy_new/refund-and-cancellation-policy/">Refund and Cancellation Policy</a></li>
                  <li><a class="dropdown-item nav-link" href="/nippy_new/merchant-identification-onboarding-policy/">Merchant Identification and Onboarding Policy</a></li>
                </ul>
              </li>
              <li class="nav-item ms-lg-4">
                <a class="nav-link" aria-current="page" href="https://pg.queepay.com/login.php"
                  >Login</a
                >
              </li>
              <li class="nav-item ms-lg-4">
                <a class="nav-link" aria-current="page" href="https://pg.queepay.com/register.php"
                  >SingUp</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous" >
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Get the current path of the URL
    const currentPath = window.location.pathname;

    // Select all navigation links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
    // Function to handle navigation link highlighting
    function highlightActiveLink() {
      // Loop through each nav link
      navLinks.forEach(link => {
        const linkHref = new URL(link.getAttribute('href'), window.location.origin).pathname;
        console.log(linkHref)
        
        // Check if the link's href matches the current path
        if (linkHref === currentPath) {
          link.classList.add('active');
          // Highlight parent dropdown if this link is within a dropdown
          const parentDropdown = link.closest('.nav-item.dropdown');
          console.log(parentDropdown)
          if (parentDropdown) {
            parentDropdown.classList.add('active');
          }
        } else {
          link.classList.remove('active');
          // Remove 'active' class from parent dropdown if this link does not match
          const parentDropdown = link.closest('.nav-item.dropdown');
          if (parentDropdown) {
            parentDropdown.classList.remove('active');
          }
        }
      });
    }

    // Highlight the active link on page load
    highlightActiveLink();
  });
</script>



</body>

  