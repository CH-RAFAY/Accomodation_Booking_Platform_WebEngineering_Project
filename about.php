<?php require('inc/init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestRiser - ABOUT</title>
    
    <?php require('inc/link.php');?>

    <!-- swipper -->
    <!-- Removed duplicate swiper script -->
</head>

<body class="bg-light">
  <!-- navbar-->
  <?php require('inc/header.php');?>


  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font"> ABOUT Us</h2>
    <div class="h-line bg-dark mb-5"></div>
    <p class="text-center mt-3">
      At RestRiser, we believe in providing more than just a place to sleep. We offer an experience of comfort, luxury, and tranquility. <br>
      Our hotel is designed to be your sanctuary away from home, whether you are traveling for business or leisure. <br>
      With state-of-the-art facilities, exquisite dining options, and a dedicated staff ready to cater to your every need, we ensure your stay is memorable.
    </p>
  </div>


  <div class="container">
    <div class="row justify-content-between align-item-center">
      <div class="col-lg-6 col-md-5 mb-4 order-md-1 order-2">
        <h3 class="mb-3">Laorem ispns dolor sit </h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Hic facere in alias adipisci atque. Non provident, sequi magnam 
          delectus consequuntur nulla at, sed quam itaque ab maxime alias. Repudiandae, eveniet.
        </p>
        </div>

        <div class="col-lg-5 col-md mb-4  order-md-2 order-1">
          <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="w-100">
        </div>
        
      </div>
    </div>
  </div>

  <!-- our hotel Mansgment-->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop h-100">
          <img src="https://img.icons8.com/color/96/group.png" width="70px">
          <h4 class="mt-3">200+ Customer</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop h-100">
          <img src="https://img.icons8.com/color/96/bed.png" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop h-100">
          <img src="https://img.icons8.com/color/96/star.png" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop h-100">
          <img src="https://img.icons8.com/color/96/rating.png" width="70px">
          <h4 class="mt-3">100+ RATINGS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center pop h-100">
          <img src="https://img.icons8.com/color/96/waiter.png" width="70px">
          <h4 class="mt-3">200+ STAFF</h4>
        </div>
      </div>
    </div>
  </div>



  <!-- Management -->
  <h3 class="my-5 text-center fw-bold  h-font">Management Team</h3>
  <div class="h-line bg-dark mb-5"></div>
  <div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white text-center rounded">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-100">
        <h5 class="mt-2">Manager</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-100">
        <h5 class="mt-2">Receptionist</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-100">
        <h5 class="mt-2">Director</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-100">
        <h5 class="mt-2">Staff</h5>
      </div>
      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="w-100">
        <h5 class="mt-2">Supervisor</h5>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>

<!--footer -->
<?php require('inc/footer.php');?>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
  slidesPerView:4,
  spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      320:{
        slidesPerView: 1,
      },
      640:{
        slidesPerView: 1,
      },
      768:{
        slidesPerView: 3,
      },
      1024:{
        slidesPerView: 3,
      }
    }
  });
</script>
    
</body>
</html>