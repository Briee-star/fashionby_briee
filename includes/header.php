<?php
//This includes the session file. This file contains code that starts/resume a session.
//By having it in the header file, it will be included on every page , allowing session capability to be used on every page across the website.

include_once 'includes/session.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

   <link rel="stylesheet" href="css/site.css" /> 
    <br>
    <br>
    <br>
   <title>FashionByBriee - <?php echo $title ?></title>
  </head>
  <body>
  <!-- <nav class="navbar navbar-expand-lg navbar-primary bg-dark" style="background-color: #FFC0CB;"> -->
  <nav class=" fixed-top navbar navbar-expand-lg navbar-primary" style="background-color: #E0115F;">
  <div class="container">
  <a class="navbar-brand" href="index.php">Fashion By Briee</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="Home" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <p>&nbsp;|&nbsp;</p>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="viewrecords.php">Women's Clothing</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="viewrecords.php">Men's Clothing</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="viewrecords.php">Baby's Clothing</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="viewrecords.php">Accessories</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="viewrecords.php">About Us</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="View Attendees" href="index.php">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
            if(!isset($_SESSION['userid'])){
         ?>
            <a class="nav-link active text-white" aria-current="Login" href="login.php">Login</a>
            
          <?php } else { ?>
            <a class="nav-link" href="#"><span>Welcome
                                        <?php echo $_SESSION['username'] ?>!</span></a>
                            
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="viewrecords.php">View Members</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
                            </li>



           
            <?php } ?>
      
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container">
  
<br>

