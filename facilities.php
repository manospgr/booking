<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Facilities</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <?php require('inc/links.php');?>

    <style>
        .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and (max-width: 575px) {
        .availability-form {
          margin-top: 25px;
          padding: 0 35px;
        }
      }
    </style>
  </head>
  <body class="bg-light">
      <?php require('inc/header.php');?>
    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/2.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/4.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/5.png" class="w-100 d-block" />
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/6.png" class="w-100 d-block" />
          </div>
        </div>
      </div>
    </div>
    <!-- check availability form -->
    <div class="container availability-form">
      <div class="row">
        <div class="col lg 12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Gia des exei?</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Mpes</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Bges</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500">Megaloi malakes</label>
                <select class="form-select shadow-none">
                  <option value="1">1</option>
                  <option value="2">toulaxiston 2</option>
                  <option value="3">oloi</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500">mikroi malakes</label>
                <select class="form-select shadow-none">
                  <option value="1">1</option>
                  <option value="2">toulaxiston 2</option>
                  <option value="3">oloi</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button type="submit" class="btn text-white shadow-none custom-bg">Des</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- our rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold oswald-font">ta domatia mas</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>WOW domatio full</h5>
              <h6 class="mb-4">$6.000.000 thn nuxta :)</h6>
              <div class="features mb-4">
                <h6 class="mb-1">pragmata</h6>
                <span class="badge bg-light text-dark text-wrap"> 2 domatia </span>
                <span class="badge bg-light text-dark text-wrap"> 8 mpania </span>
                <span class="badge bg-light text-dark text-wrap"> 13 mpalkonia </span>
                <span class="badge bg-light text-dark text-wrap"> 2 tostieres </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">alla pragmata</h6>
                <span class="badge bg-light text-dark text-wrap"> internet </span>
                <span class="badge bg-light text-dark text-wrap"> thleorash </span>
                <span class="badge bg-light text-dark text-wrap"> erkontision </span>
                <span class="badge bg-light text-dark text-wrap"> kati gia zesth </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">parto twra</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">pio polla pragmata</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>WOW domatio full</h5>
                <h6 class="mb-4">$6.000.000 thn nuxta :)</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">pragmata</h6>
                  <span class="badge bg-light text-dark text-wrap"> 2 domatia </span>
                  <span class="badge bg-light text-dark text-wrap"> 8 mpania </span>
                  <span class="badge bg-light text-dark text-wrap"> 13 mpalkonia </span>
                  <span class="badge bg-light text-dark text-wrap"> 2 tostieres </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">alla pragmata</h6>
                  <span class="badge bg-light text-dark text-wrap"> internet </span>
                  <span class="badge bg-light text-dark text-wrap"> thleorash </span>
                  <span class="badge bg-light text-dark text-wrap"> erkontision </span>
                  <span class="badge bg-light text-dark text-wrap"> kati gia zesth </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">parto twra</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">pio polla pragmata</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
              <img src="images/rooms/1.jpg" class="card-img-top">
              <div class="card-body">
                <h5>WOW domatio full</h5>
                <h6 class="mb-4">$6.000.000 thn nuxta :)</h6>
                <div class="features mb-4">
                  <h6 class="mb-1">pragmata</h6>
                  <span class="badge bg-light text-dark text-wrap"> 2 domatia </span>
                  <span class="badge bg-light text-dark text-wrap"> 8 mpania </span>
                  <span class="badge bg-light text-dark text-wrap"> 13 mpalkonia </span>
                  <span class="badge bg-light text-dark text-wrap"> 2 tostieres </span>
                </div>
                <div class="facilities mb-4">
                  <h6 class="mb-1">alla pragmata</h6>
                  <span class="badge bg-light text-dark text-wrap"> internet </span>
                  <span class="badge bg-light text-dark text-wrap"> thleorash </span>
                  <span class="badge bg-light text-dark text-wrap"> erkontision </span>
                  <span class="badge bg-light text-dark text-wrap"> kati gia zesth </span>
                </div>
                <div class="rating mb-4">
                  <h6 class="mb-1">Rating</h6>
                  <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                  </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                  <a href="#" class="btn btn-sm text-white custom-bg shadow-none">parto twra</a>
                  <a href="#" class="btn btn-sm btn-outline-dark shadow-none">pio polla pragmata</a>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Kiala</a>
        </div>
      </div>
    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold oswald-font">kati alla pragmata</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/features/wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">kiala apo ta alla</a>
            </div>
        </div>
    </div>
    <!-- Our Testimonials -->
 <h2 class="mt-5 pt-4 mb-4  text-center fw-bold (font)">TESTIMONIALS</h2>
 <div class="container">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
            <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center mb-3">
                    <img src="featurs\star" width="30px">
                    <h6>Random User</h6>
                </div>
                <p>toumpano</p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
 </div>
 <!-- Reach Us -->
 <h2 class="mt-5 pt-4 mb-4  text-center fw-bold (font)">REACH US</h2>
 <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d571.7526187849397!2d23.685418865631835!3d38.041355113140334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1a3760a4c24c9%3A0xbd42a5cd6268c26a!2sPAGE!5e0!3m2!1sen!2sgr!4v1747321784096!5m2!1sen!2sgr" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href="tel: +306969696969" class="d-inline-block mb-3 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i>+306969696969
                </a>
            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>Follow us</h5>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter-x me-1"></i>Twitter
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i>Facebook
                    </span>
                </a>
                <br>
                <a href="#" class="d-inline-block mb-3">
                    <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i>Instagram
                    </span>
                </a>
            </div>
        </div>
    </div>
 </div>
    <?php require('inc/footer.php');?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }
      });
    </script>
     <script>var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView: 1,
        },
        640:{
            slidesPerView: 1,
        },
        768:{
            slidesPerView: 2,
        },
        1024:{
            slidesPerView: 3,
        },
      },
    });
    </script>
  </body>
</html>