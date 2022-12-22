<?php

require_once 'db/conn.php';
require_once 'db/crud.php';
require_once 'includes/auth_check.php';


//Get values from post operation

if(isset($_POST['submit']))
    {
        //extracy values from the $_POST array
        $id = $_POST['id'];
        if($_POST['id'] != null){
            echo '<script>alert("WSuccess")</script>';
        }
       
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        echo '<script>alert("WSuccess")</script>';
        //Call Crud function
        $result = $crud->editSubscriber($id, $fname, $lname, $email, $gender, $address);
        
        //Redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else {
            include 'includes/errormessage.php';
        }
    }
        




?>