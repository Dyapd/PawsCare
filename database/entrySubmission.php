 <?php
 
 session_start();

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

    /* this is for validation if an entryname(Ex EN-001) already exists */
    $stmt = $con->prepare("SELECT id FROM profiles_tbl WHERE username = ? LIMIT 1");
    $stmt->bind_param("s", $entryName);
    $stmt->execute();
    $result = $stmt->get_result();

    /* This is the main code for putting everything in the database */
    if($result->num_rows == 1) 
    {
      ?>
        <script>
            alert("Entry Number Already Exists.");
        </script>
      <?php
    } 
    else 
    {
      $stmt = $con->prepare("INSERT INTO entrysubdb(name, location, title, report, type, threat, status, image, entryName) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssssss", $name, $location, $title, $report, $type, $threat, $status, $image, $entryName);
      $stmt->execute();
      ?>
        <script>
            alert("Entry Submitted Successfully!");
        </script>
      <?php
      $stmt->close();
      $con->close();
    }
  }
  
  

?> 


