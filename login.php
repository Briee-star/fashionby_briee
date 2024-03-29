<?php
        $title ='User Login';

        require_once 'includes/header.php'; 
        require_once 'includes/session.php';

        require_once 'db/conn.php';   
        require_once 'db/crud.php';   
        



        //if data was submitted via a form POST request, then...
        if($_SERVER ['REQUEST_METHOD'] == 'POST'){
            $username = strtolower(trim($_POST['username']));
            $password = $_POST['password'];
            $new_password = md5($password.$username);

            $result = $crud->getUserDetails($username,$new_password);
            if(!$result){
                echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
            }else{
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $result['id'];
                header("Location: viewrecords.php");
            }

        }
    ?>

<h1 class="text-center"><?php echo $title ?></h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST">
    <table class="table table-sm">
        <tr>
            <td><label for="username">Username: * </label></td>
            <td><input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER ['REQUEST_METHOD'] == 'POST') $_POST['username']; ?>"> 
            </td>
        </tr>
        <tr>
            <td><label for="password">Password: * </label></td>
            <td><input type="password" name="password" class="form-control" id="password">
            </td>
         </tr>
    </table><br/><br/>
    <input type="submit" value="Login" class="btn btn-primary w-100 btn-block" style="background-color: #E0115F;"><br/>
    <br>
    <a href="#"> Forgot Password </a>

    </form><br/><br/><br/><br/>

    <?php include_once 'includes/footer.php'?>