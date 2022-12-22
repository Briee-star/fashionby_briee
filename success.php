<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    require_once 'db/crud.php';
    require_once 'sendemail.php';
?>

<?php
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
        $destination = "$target_dir$email.$ext";
        move_uploaded_file($orig_file,$destination);
        }
        else 
        {
          $destination = "uploads/avatar.png";
        }
        $verify = 0;
        
      
    }
   
    $result = $crud->getSubscribers();
    while ($r = $result->fetch(PDO::FETCH_ASSOC)){
      
      if($r['emailaddress'] ==  $email ){
        $verify = 1;
        echo '<script>alert("This email address already exists!")</script>';
        echo '<script type="text/javascript"> window.location="index.php";</script>';
      }
    }

    if($verify == 0) {
      $isSuccess = $crud->insertSubscribers($fname,$lname,$email,$gender,$address,$destination);
      if($isSuccess){
        include 'includes/successmessage.php';
        ?>
<h1 class="text-center text-dark">Welcome New Subscriber! <br> You Have Been Registered Successfully!</h1>
<?php
        SendEmail::SendMail($email,"Welcome to Fasion By Briee",'You have Successfully registered for updates');
      
       ?>
<img src="<?php echo $destination?>" class="rounded-circle" style="width : 10%; height : 10%" />
<div class="card" style="width: 18rem;">
    <div class="card" style="width: 18rem;">

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

            <?php }
       else 
       {
 
         include 'includes/errormessage.php';
 
       }
    }
    ?>



            <br>



        </div>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>