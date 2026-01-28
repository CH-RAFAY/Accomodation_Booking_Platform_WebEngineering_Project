<?php require('inc/init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestRiser - Rooms</title>
    
    <?php require('inc/link.php');?>

    <!-- swipper -->
    <!-- Removed duplicate swiper script -->
</head>

<body class="bg-light">
  <!-- navbar -->
  <?php require('inc/header.php');?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font"> ROOMs</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
        <div class="container-fluid flex-lg-column align-items-stretch">
          <h4 class="mt-2">FILTER</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- check Avalibility -->
          <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Check Avalibility</h5>
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>

            <!--Facilties -->
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
              <div class="mb-3">
                <input class="form-check-input shadow-none mb-3" type="checkbox" id="f1">
                <label class="form-label" for="f1">Wifi</label>
              </div>
              <div class="mb-3">
                <input class="form-check-input shadow-none mb-3" type="checkbox" id="f2">
                <label class="form-label" for="f2">AC</label>
              </div>
              <div class="mb-3">
                <input class="form-check-input shadow-none mb-3" type="checkbox" id="f3">
                <label class="form-label" for="f3">TV</label>
              </div>
              <div class="mb-3">
                <input class="form-check-input shadow-none mb-3" type="checkbox" id="f4">
                <label class="form-label" for="f4">Heater</label>
              </div>
            </div>

            <!--Guests -->
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
              <div class="d-flex">
                <div class="mb-3">
                  <label class="form-label" style="font-weight:500;">Adults</label>
                  <input type="Number" class="form-control shadow-none mb-3">
                </div>
                <div class="mb-3">
                  <label class="form-label" style="font-weight:500;">Childrens</label>
                  <input type="Number" class="form-control shadow-none mb-3">
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4">
        <!-- Card 1 -->
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
              <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded" style="min-height: 160px; height: 100%; width: 100%; object-fit: cover;" alt="Deluxe Suite">
            </div>
            <div class="col-md-8 px-lg-3 px-md-3 px-0">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Deluxe Suite</h5>
                <h6 class="mb-0 fw-bold">$200 <span style="font-size: 0.8rem; font-weight: normal;">/ night</span></h6>
              </div>
              <div class="features mb-2">
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bath</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
              </div>
              <div class="facilities mb-3">
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
              </div>
              <div class="d-flex justify-content-evenly">
                <a href="javascript:void(0)" class="btn btn-sm btn-teal w-100 shadow-none me-2 book-now-button" data-checkout-url="">Book Now</a>
                <a href="#" class="btn btn-sm btn-blue w-100 shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="card mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
              <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded" style="min-height: 160px; height: 100%; width: 100%; object-fit: cover;" alt="Luxury Room">
            </div>
            <div class="col-md-8 px-lg-3 px-md-3 px-0">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Luxury Room</h5>
                <h6 class="mb-0 fw-bold">$200 <span style="font-size: 0.8rem; font-weight: normal;">/ night</span></h6>
              </div>
              <div class="features mb-2">
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bath</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
              </div>
              <div class="facilities mb-3">
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
              </div>
              <div class="d-flex justify-content-evenly">
                <a href="javascript:void(0)" class="btn btn-sm btn-teal w-100 shadow-none me-2 book-now-button" data-checkout-url="">Book Now</a>
                <a href="#" class="btn btn-sm btn-blue w-100 shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="card mb-lg-0 mb-3 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-4 mb-lg-0 mb-md-0 mb-3">
              <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded" style="min-height: 160px; height: 100%; width: 100%; object-fit: cover;" alt="Standard Room">
            </div>
            <div class="col-md-8 px-lg-3 px-md-3 px-0">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Standard Room</h5>
                <h6 class="mb-0 fw-bold">$150 <span style="font-size: 0.8rem; font-weight: normal;">/ night</span></h6>
              </div>
              <div class="features mb-2">
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Room</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bath</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
              </div>
              <div class="facilities mb-3">
                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
              </div>
              <div class="d-flex justify-content-evenly">
                <a href="javascript:void(0)" class="btn btn-sm btn-teal w-100 shadow-none me-2 book-now-button" data-checkout-url="">Book Now</a>
                <a href="#" class="btn btn-sm btn-blue w-100 shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php require('inc/footer.php');?>

  <!-- Lemon Squeezy Script -->
  <script src="https://app.lemonsqueezy.com/js/lemon.js"></script>
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
</body>
</html>