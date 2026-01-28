<?php require('inc/init.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestRiser - Facilities</title>
    
    <?php require('inc/link.php');?>

    <!-- swipper -->
    <!-- Removed duplicate swiper script -->
</head>

<body class="bg-light">
  <!-- navbar-->
  <?php $page='facilities'; require('inc/header.php');?>

  <div class="my-5 px-4">
    <h2 class="text-center fw-bold h-font"> Facilities</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium 
      similique illum porro nisi autem quibusdam unde <br>debitis soluta magnam officiis recusandae, 
      fuga eum nostrum nemo ipsam eaque amet impedit voluptatum.</p>
  </div>


  <!--facilities -->
<div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/wifi.png" width="40px">
            <h5 class="m-0 ms-3">Wifi</h5>
            </div>
            <p>High-speed wireless internet access available throughout the hotel premises, ensuring you stay connected with work and family.</p>
          </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/air-conditioner.png" width="40px">
            <h5 class="m-0 ms-3">Air Conditioner</h5>
            </div>
            <p>Individually controlled air conditioning in every room to maintain your perfect temperature for a comfortable stay.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/tv.png" width="40px">
            <h5 class="m-0 ms-3">Television</h5>
            </div>
            <p>Flat-screen TVs with satellite channels in all rooms, offering a wide variety of entertainment options.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/water-heater.png" width="40px">
            <h5 class="m-0 ms-3">Geyser</h5>
            </div>
            <p>24/7 hot water supply in all bathrooms, ensuring a refreshing shower experience whenever you need it.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/massage.png" width="40px">
            <h5 class="m-0 ms-3">Spa</h5>
            </div>
            <p>Relax and rejuvenate at our full-service spa, offering a range of massages and therapeutic treatments.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 pop h-100">
          <div class="d-flex align-items-center mb-2">
            <img src="https://img.icons8.com/ios-filled/50/000000/dumbbell.png" width="40px">
            <h5 class="m-0 ms-3">Gym</h5>
            </div>
            <p>Fully equipped fitness center with modern cardio and weight training equipment for your workout routine.</p>
          </div>
        </div>
    </div>
  </div>
</div>


<!--footer -->
<?php require('inc/footer.php');?>

    
</body>