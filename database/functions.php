<?php


    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'pawscares_db');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    if(isset($_REQUEST['username'])){
        $username = $_REQUEST['username'];
        $sql = "SELECT * FROM `profiles_tbl` WHERE username = $username";
        $query = mysqli_query($conn, $sql);

        $querya  = "SELECT * FROM `bookings_tbl` WHERE username = $username";
        $result = mysqli_query($conn, $querya);
    }
?>