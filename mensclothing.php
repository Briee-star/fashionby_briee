<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<?php
        require_once 'includes/header.php'; 
        require_once 'db/conn.php';
  ?><?php
  require_once 'includes/header.php'; 
  require_once 'db/conn.php';
?><div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="uploads/shirt.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>SHIRTS</h5>
      <p>We have the most comfortable and affordable shirts available.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="uploads/leatherjacket.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>JACKETS</h5>
      <p>We have the most comfortable and affordable jacket available.</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="uploads/boxers.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>Boxers</h5>
      <p>We have the most comfortable and affordable boxers available.</p>
    </div>
  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
<style>
   .carousel-item 
   {
  height: 800px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 100px;
} 
</style>
</div>
