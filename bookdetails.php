<?php
    session_start();
    include 'database/modals.php';

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
    

<!-- palitan ung name ng main later to the page mismo -->
    <main class="main-booking">
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


    </main>

    

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