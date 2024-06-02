<?php

   
    if(isset($_REQUEST['signupform']))
    {
        /* connection to database */
        $con = new mysqli("localhost", "root", "", "pawscares_db");
        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }

        /* if connected successfuly then execute this else block */
        else 
        {
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $password = $_POST['password']; 

            $stmt = $con->prepare("SELECT id FROM profiles_tbl WHERE username = ? LIMIT 1");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows  == 1)
            {
                
                ?>
                <script>
                    alert("Username already exists.");
                </script>
                <?php
            }

            else {

                
                /* This is the main code for putting everything in the database */
    
    
                $stmt = $con->prepare("INSERT INTO profiles_tbl(fname, mname, lname, username, password) values (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $fname, $mname, $lname, $username, $password);
                $stmt->execute();
                ?>
                <script>
                    alert("User account successfully created!");
                </script>
                <?php
                header("Location:index.php");
                $stmt->close();
                $con->close();

            }
            
        
        }
    }elseif(isset($_REQUEST['bookform']))
    {
        /* connection to database */
        $con = new mysqli("localhost", "root", "", "pawscares_db");
        if($con->connect_error) 
        {
            die("Failed to connect : ".$con->connect_error);
        }

        /* if connected successfuly then execute this else block */
        else
        {
            if (isset($_SESSION['loggedon']))
                echo $_SESSION['loggedon'];
        }

    }

?>