<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestRiser - HOME</title>
    
    <?php require('inc/link.php');?>

    <!-- swipper -->
    <!-- Removed duplicate swiper script -->
</head>

<body class="bg-light">
  <!-- navbar-->
  <?php require('inc/header.php');?>

  <!-- carousel -->
  <div class="container-fluid px-0">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="https://images.unsplash.com/photo-1596436889106-be35e843f974?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" class="w-100 d-block"/>
        </div>
      </div>
    </div>
  </div>

  <!-- check availability form -->
  <div class="container availability-form" id="abc">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <!-- adults -->
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Adults</label>
              <select class="form-select shadow-none">
                <option selected>2 Adults</option>
                <option value="1">1 Adult</option>
                <option value="2">2 Adults</option>
              </select>
            </div>
            <!-- children -->
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option selected>2 children</option>
                <option value="1">1 child</option>
                <option value="2">2 children</option>
              </select>
            </div>
            <!-- button -->
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn shadow-none custom-bg btn-teal">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="h-line bg-dark mb-5"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow h-100">
          <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top room-card-img" alt="...">
          <div class="card-body d-flex flex-column">
            <h5>Deluxe Suite</h5>
            <h6 class="mb-4"> £2000 per night </h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Bathroom.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Balcony.
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-auto">
              <a href="javascript:void(0)" class="btn btn-teal text-white shadow-none book-now-button" data-checkout-url="">Book Now</a>
              <a href="#" class="btn btn-blue shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow h-100">
          <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top room-card-img" alt="...">
          <div class="card-body d-flex flex-column">
            <h5>Luxury Room</h5>
            <h6 class="mb-4"> £2000 per night </h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Bathroom.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Balcony.
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-auto">
              <a href="javascript:void(0)" class="btn btn-teal text-white shadow-none book-now-button" data-checkout-url="">Book Now</a>
              <a href="#" class="btn btn-blue shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow h-100">
          <img src="https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top room-card-img" alt="...">
          <div class="card-body d-flex flex-column">
            <h5>Standard Room</h5>
            <h6 class="mb-4"> £2000 per night </h6>
            <div class="features mb-4">
              <h6 class="mb-1">features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Bathroom.
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Balcony.
              </span>
            </div>
            <div class="Facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mt-auto">
              <a href="javascript:void(0)" class="btn btn-teal text-white shadow-none book-now-button" data-checkout-url="">Book Now</a>
              <a href="#" class="btn btn-blue shadow-none">More details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="h-line bg-dark mb-5"></div>
  <div class="container">
    <div class="row justify-content-between px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
        <img src="https://img.icons8.com/ios/100/wifi--v1.png" alt="" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
        <img src="https://img.icons8.com/ios/100/air-conditioner.png" alt="" width="80px">
        <h5 class="mt-3">AC</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
        <img src="https://img.icons8.com/ios/100/tv.png" alt="" width="80px">
        <h5 class="mt-3">TV</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
        <img src="https://img.icons8.com/ios/100/valet-parking.png" alt="" width="80px">
        <h5 class="mt-3">Parking</h5>
      </div> 
      <div class="col-lg-2 col-md-2 text-center bg-light rounded shadow py-4 my-3">
        <img src="https://img.icons8.com/ios/100/water-heater.png" alt="" width="80px">
        <h5 class="mt-3">Heater</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
      </div>
    </div>
  </div>

  

  <!-- Testimonial -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
  <div class="h-line bg-dark mb-5"></div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="bg-white p-4 shadow rounded h-100 testimonial-card">
          <div class="d-flex align-items-center mb-3">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="50px" height="50px" alt="Profile">
            <div class="ms-3">
              <h6 class="m-0 fw-bold">John Doe</h6>
              <p class="m-0 text-muted small">Business Traveler</p>
            </div>
          </div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ea animi commodi, voluptates saepe dicta ut quos a.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="bg-white p-4 shadow rounded h-100 testimonial-card">
          <div class="d-flex align-items-center mb-3">
            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="50px" height="50px" alt="Profile">
            <div class="ms-3">
              <h6 class="m-0 fw-bold">Jane Smith</h6>
              <p class="m-0 text-muted small">Tourist</p>
            </div>
          </div>
          <p>
            Temporibus ea animi commodi, voluptates saepe dicta ut quos a. Nam suscipit itaque sed consequuntur cum aperiam.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="bg-white p-4 shadow rounded h-100 testimonial-card">
          <div class="d-flex align-items-center mb-3">
            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="rounded-circle" width="50px" height="50px" alt="Profile">
            <div class="ms-3">
              <h6 class="m-0 fw-bold">Emily Clark</h6>
              <p class="m-0 text-muted small">Backpacker</p>
            </div>
          </div>
          <p>
            Nam suscipit itaque sed consequuntur cum aperiam reiciendis unde nisi molestiae facilis? Lorem ipsum dolor sit amet.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
    </div>
  </div>

  <!-- Reach US -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="h-line bg-dark mb-5"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.5851838428!2d-0.26640253299971084!3d51.52852620463016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2s!4v1739004948143!5m2!1sen!2s" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel:+923355392030" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-outbound-fill me-1"></i> +923355392030
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> facebook
            </span>
          </a>
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel:+923355392030" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-outbound-fill"></i> +923355392030
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php require('inc/footer.php');?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Lemon Squeezy Script -->
  <script src="https://app.lemonsqueezy.com/js/lemon.js"></script>

  <!-- Initialize Lemon Squeezy Buttons -->
  <script>
    function initializeLemonSqueezyButtons(buttonSelector) {
      const buttons = document.querySelectorAll(buttonSelector);
      buttons.forEach(button => {
        const checkoutUrl = button.getAttribute('data-checkout-url');
        if (checkoutUrl) {
          button.addEventListener('click', (event) => {
            event.preventDefault();
            LemonSqueezy.Url.Open(checkoutUrl, {
              embed: 0,
              media: 0,
              logo: 0,
              discount: 0,
              dark: 0,
              test_mode: 1
            });
          });
        }
      });
    }

    document.addEventListener('DOMContentLoaded', () => {
      initializeLemonSqueezyButtons('.book-now-button');
    });
  </script>

  <!-- Initialize Swiper carousel -->
  <script>
    var swiperContainer = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      }
    });
  </script>
</body>
</html>