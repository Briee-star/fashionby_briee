<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
      //extrtact values rom the $_POST array
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      if(!$_FILES["avatar"]["size"] == 0){
        $orig_file = $_FILES["avatar"]["tmp_name"];
        $ext  = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$contact.$ext";
        move_uploaded_file($orig_file,$destination);
        }
        else 
        {
          $destination = "uploads/avatar.png";
        }
      //Call function to insert and track if success or not
      $isSuccess = $crud->insertSubscribers($fname,$lname,$email,$gender,$address,$destination);
      
    }
?>

<h1 class="text-center text-dark">Welcome New Subscriber! <br> You Have Been Registered Successfully!</h1>
<br>
<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
        <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'];?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php //echo $_GET['gender']; ?>
    </h6>
    <p class="card-text">
        Email Address: <?php //echo $_GET['email']; ?>
    </p>
    <p class="card-text">
        Address: <?php //echo $_GET['address']; ?>
    </p>

  </div>
</div> -->

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
    <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];?>
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $_POST['gender']; ?>
    </h6>
    <p class="card-text">
        Email Address: <?php echo $_POST['email']; ?>
    </p>
    <p class="card-text">
        Address: <?php echo $_POST['address']; ?>
    </p>

  </div>
</div>


<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
    