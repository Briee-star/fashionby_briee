   
   <?php
        $title ='Edit Record';

        require_once 'includes/header.php'; 
      //  require_once 'includes/auth_check.php'; 
        require_once 'db/conn.php';
        require_once 'db/crud.php';
        require_once 'includes/auth_check.php';


      
        if(!isset($_GET['id']))
        {
            //echo 'error';
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }
        else{
            $id = $_GET['id'];
            $subscriber = $crud->getSubscriberDetails($id);     
    ?>

 <h1 class="text-center">Edit Record</h1>

<form method="post" action="editpost.php">
          <input type="hidden" name='id' value="<?php echo $subscriber['subscriber_id'] ?>"> 
  <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $subscriber['firstname'] ?>" 
        id="firstname" name="firstname">
        <br>
  </div>
  <div class="form-group">
        <label for="las
        name">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $subscriber['lastname'] ?>" 
        id="lastname" name="lastname">
        <br>
  </div>
  <div class="form-group">
        <label for="dob">Email</label>
        <input type="text" class="form-control" value="<?php echo $subscriber['emailaddress'] ?>" 
        id="dob" name="email" readonly>
        <br>
  </div>
  <div class="form-group">
            <label name="gender" for="gender"> Gender </label>
            <select class="form-control" id="gender" name="gender">
                <option name="gender"><?php echo $subscriber['gender'] ?></option>
                <?php if ($subscriber['gender'] == 'Male') { ?>
                <option name="gender" value="Female"><?php echo "Female" ?></option>
                <?php }  else {?>
                <option name="gender" value="Male"><?php echo "Male" ?></option>
                <?php }?>
            </select>
        </div>
        <br>
 
  <div class="form-group">
    <label for="address">Address</label>
    <input type="address" class="form-control" value="<?php echo $subscriber['address'] ?>" id="address" 
    name="address" aria-describedby="address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Address with anyone else.</small>
    <br>
  </div>
  <div class="d-grid gap-3 col-4 mx-auto">
  <a href="viewrecords.php" class="btn btn-default">Back To List</button></a>
  <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
                </div>
</form>

    <?php } ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>
    