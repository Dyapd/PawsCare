<?php
    session_start();
    include 'database/modals.php';

?>

<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'pawscares_db');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    $query = "SELECT * FROM `profiles_tbl`";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="basep.css">
    <link rel="stylesheet" href="layoutsp.css">
    <link rel="stylesheet" href="modulesp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>
        Paws Cares
    </title>
</head>
<body>


    <header>
        <div class="header-border">
            <div class="logo-img">
                <a href="index.php">
                    <img src="images/logowithtitle.png" alt="Logo" width="75px">
                </a>
            </div> 

            <div class="header-right">
                <?php if(empty($_SESSION)) : ?> <!-- check if session is empty -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-login">Login</a>
                        <a href="signup.php">Signup</a>
                <?php endif ?>

                <!-- check if session has loggedon set if so then is logged in -->
                <?php if(isset($_SESSION['loggedon'])) : ?>
                    <a href="booking.php">Book</a>
                    <a href="accountuser.php?username='<?php echo $_SESSION['loggedon']  ?>'">Profile</a>
                    <a href="database/logout.php" >Signout</a>
                <?php endif ?>
            </div>
        </div>
        
    </header>

    <main class="main-home">

        <!-- check if session is empty (not logged in)  -->
        <?php if(empty($_SESSION)) : ?>
            <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="images/pawslogo.png" alt="Logo" class="modal-logo">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"> 
                            <form id="loginform" action="database/login.php" method="post"> <!-- put php here -->
                                <p>
                                Username:
                                </p>
                                <input type="text" id="username" name="username" required>
                                <p>
                                Password:
                                </p>
                                <input type="password" id="password" name="password" required>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" form="loginform" name="login">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>



       

        <div class="left-top-home">
            <h2>
                Trusted care <br>
                and comfort <br>
                for your furry <br>
                friends
            </h2>

            <button type="button" class="btn btn-primary btn-lg homebutton" 
            <?php if(empty($_SESSION)) : ?> data-bs-toggle="modal" data-bs-target="#modal-login" 
                > 
                <?php endif ?>  
                Book Now
                <?php if(isset($_SESSION['loggedon'])) : ?>> <a href="booking.php" id="booknowbtn">Book Now</a>  <?php endif ?>
                
            </button>
        </div>

        <div class="right-top-home">
            <img src="images/catsdogs.jpg" alt="#">
        </div>

        <div class="content-middle-home">

            <div class="middle-h2-home">
                <h2>
                    Why Paw Cares?
                </h2>
            </div>
            

            <div class="card homecard" style="width: 18rem;">
                <div class="card-body bodycard">
                    <h5 class="card-title">Great for your pet</h5>
                    <p class="card-text">Get a pet lover to care, not a cage!</p>
                    <p class="card-text">Personal care and attention</p>
                    <p class="card-text">Peaceful environment</p>
                </div>
            </div>

            <div class="card homecard" style="width: 18rem;">
                <div class="card-body bodycard">
                    <h5 class="card-title">Great for your you</h5>
                    <p class="card-text">Book a reservation online</p>
                    <p class="card-text">Reliable customer service</p>
                    <p class="card-text">Receive constant updates about your pet</p>
                </div>
            </div>

            

        </div>

        <div class="content-bottom-home">

        
            <div class="content-bottom-topleft-home">
                <h2>
                    Services
                </h2>   
            </div>
            
            <br>

            <div class="content-bottom-left-home">

                <hr>
                
                <h3>
                        Grooming
                    </h3>
                <p>
                    Bathing and Conditioning <br>
                    Nail Trimming <br>
                    Fur Styling <br>
                    Flea/Tick Treatment <br>
                </p>
            </div>

            <div class="content-bottom-right-home">
                <hr>
                <h3>
                    Boarding
                </h3>
                <p>
                    Balanced Meal <br>
                    Play Pen <br>
                    Spacious Rooms

                </p>
            </div>

            <hr>
        </div>



    </main>


    
    <footer>
        <div class="footer-left">
            <a href="aboutus.php">
                <h4>
                    About Us
                </h4>
            </a>

            <img src="images/pawslogo.png" alt="logo image">
            
            <a href="contact.php">
                <h4>
                    Contact Us 
                </h4>
            </a>
            
        </div>

        <div class="footer-right">
            <h4>
                Let's Talk
            </h4>

            <h4>
            1318 España Boulevard, Manila
            </h4>
            <h4>
            0961 485 0754
            </h4>
            <h4>
            paws.cares4@gmail.com
            </h4>

        </div>

    </footer>



    <script src="js/bootstrap.js"></script>
    <script src=""></script>
</body>

</html>