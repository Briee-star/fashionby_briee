<?php
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
  ?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="uploads/BodyconDress.png" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">DRESSES</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">We have the best comfotable and affordable dressers available</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="uploads/highwaist jeans.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">JEANS</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">We have the best comfotable and affordable jeans available</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="uploads/bathingsuit.jpg" class="d-block" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 style = "color: black">BATHING SUITS</h5>
          <p style = "color: #2b5795; font-size :18px; font-weight: bold;">We have the best comfotable and affordable bathing suits available</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<style>
   .carousel-item 
   {
  height: 500px;
}