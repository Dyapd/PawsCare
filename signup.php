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
                    <a href="database/logout.php" >Signout</a>
                <?php endif ?>
            </div>
        </div>
        
    </header>

<main class="main-signup">
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

    <div class="container">
    
    <form name="entryForm" action="#" class="login-form" method="post" enctype="multipart/form-data" required>    
        <h1 class="sign">Signup Form</h1>
        <div class="input-group">
            <label for="fname" class="register-label">First Name*:</label>
            <input type="text" class="textFields-form register" name="fname" id="fname" required>
        </div>

        <div class="input-group">
            <label for="mname" class="register-label">Middle Name*:</label>
            <input type="text" class="textFields-form register" name="mname" id="mname" required>
        </div>

        <div class="input-group">
            <label for="lname" class="register-label">Last Name*:</label>
            <input type="text" class="textFields-form register" name="lname" id="lname" required>
        </div>

        <div class="input-group">
            <label for="username" class="register-label">Username*:</label>
            <input type="text" class="textFields-form register" name="username" id="username" required>
        </div>

        <div class="input-group">
            <label for="password" class="register-label">Password*:</label>
            <input type="password" class="textFields-form register" name="password" id="password"
                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$"
                title="Password must be 8-12 characters long and include at least one lowercase letter, one uppercase letter, one digit, and one special character"
                required>
        </div>

        <button class="submit-btn" name="signupform">Submit</button>
    </form>
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