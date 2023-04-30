<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Document</title>
</head>
<body>

<?php
include 'menu.php'; ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="room21.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>HOTEL ROYAL</h3>
        <p>Stay in Royal!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="room15.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>HOTEL ROYAL</h3>
        <p>We have such a great service in Hotel!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="room18.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>HOTEL ROYAL</h3>
        <p>Best location!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<!-- <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">
            Our services
        </h2>
        </div>
        <div>

        <h4 class="text-center">We have the best hotel services in all over the world!!</h4> -->
<!--         
    </div>
    <div>
        <p class="text-center">Room Service - Enjoy a delicious meal in the comfort of your own room with our24-hour room service.</p>
        <p class="text-center"> Housekeeping - Our skilled housekeeping team keeps your room clean and tidy during your stay.</p>
        <p class="text-center"> Concierge - Let our knowledgeable concierge team assist you with anything from restaurant reservations to arranging transportation.</p>

        <a href="service.php" class="butn btn-success">Show all services</a>
    </div> -->

    
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card" style="width:400px">
                       <img class="card-img-top" src="room7.jpg" alt="Card image">
                           <div class="card-body">
                                 <h4 class="card-title">Rushik</h4>
                                      <p class="card-text">Some example text.</p>
                                          <a href="#" class="btn btn-primary">See Profile</a>
                           </div>
                 </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card" style="width:400px">
                       <img class="card-img-top" src="room8.jpg" alt="Card image">
                           <div class="card-body">
                                 <h4 class="card-title">Rushik</h4>
                                      <p class="card-text">Some example text.</p>
                                          <a href="#" class="btn btn-primary">See Profile</a>
                           </div>
                 </div>
                 
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                 <div class="card" style="width:400px">
                       <img class="card-img-top" src="room11.jpg" alt="Card image">
                           <div class="card-body">
                                 <h4 class="card-title">Rushik</h4>
                                      <p class="card-text">Some example text.</p>
                                          <a href="#" class="btn btn-primary">See Profile</a>
                           </div>
                 </div>
                 
            </div>
            
        </div>
    </div> -->
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">
            GALLARY
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="room8.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="room12.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="room11.jpg" class="img-fluid pb-4">
                <div class="text-center mx-auto">
                <a href="gallary.php" class="btn btn-success">Check more</a>
                </div>
           

        </div>
    </div>    

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">
            Please give your details
        </h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post"> 
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="email" name="email" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments">

                </textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">
            About US
        </h2>
    </div>
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="room6.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">ROYAL HOTEL</h2>
            <p class="py-4">Welcome to Royal Hotel, where we believe that every guest should feel right at home. Our luxurious accommodations, exceptional amenities, and friendly staff are all designed to ensure that your stay with us is comfortable and memorable. </p> 
            <p>please press Check more to know more about our hotel</p>
            <a href="about.php" class="btn btn-success">Check more</a>
        </div>
    </div>
 </div>
</section>


<footer>
    <h3 class="p-2 bg-dark text-white text-center"> Contact US : Royalhotel2004@gmail.com</h3>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>