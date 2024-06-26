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
            $phone = $_POST['phone'];
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
    
    
                $stmt = $con->prepare("INSERT INTO profiles_tbl(fname, mname, lname, phone ,username, password) values (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $fname, $mname, $lname, $phone, $username, $password);
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
            
                $fromdate = $_POST['fromdate'];
                $todate = $_POST['todate'];
                $numcats = $_POST['numcats'];
                $numdogs = $_POST['numdogs']; 
                $username = $_SESSION['loggedon'];
                $numpets = $numcats + $numdogs;
                $groomingservice = intval($_POST['groomingservice']);
                $info = $_POST['info'];

                if ($numpets == 0){
                    {
                
                        ?>
                        <script>
                            alert("There can't be 0 pets!.");
                        </script>
                        <?php
                    }
                }
                else if ($groomingservice != null || $info != ''){
                    $stmt = $con->prepare("INSERT INTO bookings_tbl(fromdate, todate, numpets, numcats, numdogs,  groomingservice, info, username) values (?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssiiiiss", $fromdate, $todate, $numpets, $numcats, $numdogs, $groomingservice, $info, $_SESSION['loggedon'] );
                    $stmt->execute();
                    header("Location:receipt.php");
                    $stmt->close();
                    $con->close();
                }
                else{
                    $stmt = $con->prepare("INSERT INTO bookings_tbl(fromdate, todate, numpets, numcats, numdogs, username) values (?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("ssiiis", $fromdate, $todate, $numpets, $numcats, $numdogs, $_SESSION['loggedon']);
                    $stmt->execute();
                    header("Location:receipt.php");
                    $stmt->close();
                    $con->close();
                }
                
        }

    }

?>