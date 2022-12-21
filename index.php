   
   <?php
        $title ='Index';

        require_once 'includes/header.php'; 
        require_once 'db/conn.php';

       
       
    ?>
    <!--
        -First Name
        -Last Name
        -Date of Birth (Use DatePicker)
        -Specialty (Database Admin, Software Developer, Web Administrator, Other)
        -Email Address
        -Contact Number
    -->

 <h1 class="text-center">Registration for Subcribers</h1>

<form method="post" action="success.php" enctype="multipart/form-data">
  <div class="form-group">
        <label for="firstname">Firstname:</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
        <br>
  </div>
  <div class="form-group Registration Form">
        <label for="lastname">Lastname:</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
        <br>
  </div>
  <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" class="form-control" id="email" name="email"
        aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
        <label for="gender">Gender:</label>
        <select class="form-control" id="gender" name="gender">
            <option>Female</option>
            <option>Male</option>
        </select>
        <br>
  </div>
  <div class="form-group">
        <label for="address">Address:</label>
        <input type="address" class="form-control" id="address" name="address"
        aria-describedby="addressHelp" placeholder="Enter address">
        <small id="addressHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  </div>

  <div class="form-group">
            <label for="formFile" class="form-label">Select Profile Picture</label>
            <input class="form-control" name="avatar" type="file" id="formFile">
        </div>
<br>

  <button type="submit" name="submit" class="btn btn-primary w-100 btn-block" style="background-color: #E0115F">Register</button>
</form>
    <br>
    <br>
    <br>
    <br>
    <?php require_once 'includes/footer.php'; ?>
    