<?php
    class crud
    {
            //private database object\
        private $db;

        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }

        //function to insert a new record into the attendee database
        public function insertSubscribers($fname, $lname,$email, $gender, $address, $avatar_path)
        {
            try{
            //define sql statement to be executed
            $sql = "INSERT INTO subscribers (firstname, lastname, emailaddress, gender, address, avatar_path) VALUES
             (:fname,:lname,:email,:gender,:address,:avatar_path)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':gender', $gender);
            $stmt->bindparam(':address', $address);

            $stmt->bindparam(':avatar_path', $avatar_path);
            //execute statement
            $stmt->execute();
            return true;

        }catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false; 
        }
    }

    public function editSubscriber($id, $fname, $lname, $email, $gender, $address)
    {
        try{
            $sql = "UPDATE `subscribers` SET `firstname`=:fname,`lastname`=:lname,
            `emailaddress`=:email,`gender`=:gender,`address`=:address1 WHERE subscriber_id =  :id ";
            $stmt = $this->db->prepare($sql);
            //bind all placeholders to the actual values
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':gender', $gender);
            $stmt->bindparam(':address1', $address);
           
            //execute statement
            $stmt->execute();
            echo '<script>alert("WSuccess")</script>';
            return true;

        }catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false; 
        }
    }

    public function getSubscribers(){
        try{
        $sql = "SELECT * FROM `subscribers` "; 
        $result = $this->db->query($sql);
        return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false; 
        }
        
    }

    public function getSubscriberDetails($id){
        try{
        $sql = "select * from subscribers where subscriber_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false; 
    }
        
    }

    public function deleteSubscriber($id){
        try{
        $sql = "delete from subscribers where subscriber_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        return true;
    }catch (PDOException $e) {
        echo $e->getMessage();
        return false; 
        }
    }
    public function getUserDetails($username,$password){
        try{
            $sql = "select * from users where username = :username AND password = :password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false; 
        }
    }

    
    
        

        
    }
?>