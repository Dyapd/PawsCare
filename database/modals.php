<?php

   
    if(isset($_REQUEST['entrySubmission']))
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
            
            /* This is the main code for putting everything in the database */


            $stmt = $con->prepare("INSERT INTO profiles_tbl(fname, mname, lname, username, password) values (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $fname, $mname, $lname, $username, $password);
            $stmt->execute();
            ?>
            <script>
                alert("User Account Successfully Created!");
            </script>
            <?php
            header("Location:index.php");
            $stmt->close();
            $con->close();
        
        }
    }elseif(isset($_REQUEST['entrySubmission']))
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
            $fromdate = $_POST['fromdate'];
            $todate = $_POST['todate'];
            $numcats = $_POST['numcats'];
            $numdogs = $_POST['numdogs'];
            $userid = $_SESSION['id'];

            $stmt = $con->prepare("INSERT INTO bookings(fromdate, todate, numcats, numdogs, userid) values (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $fromdate, $todate, $numcats, $numdogs, $userid);
            $stmt->execute();
            ?>
            <script>
                alert("User Account Successfully Created!");
            </script>
            <?php
            header("Location:index.php");
            $stmt->close();
            $con->close();
        }

    }

?>