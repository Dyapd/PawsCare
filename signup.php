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

<div class="main-signup">
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
        <h1>
            Signup Form
        </h1>
        <form name="entryForm" action="#" class="login-form" method="post" enctype="multipart/form-data"
        required>    
            <br>

            <label for="fname" class="menu-form">First Name*:</label> <br>
            <input type="text" class="textFields-form" name="fname" required> <br>

            <label for="mname" class="menu-form">Middle Name*:</label> <br>
            <input type="text" class="textFields-form" name="mname" required> <br>

            <label for="lname" class="menu-form">Last Name*:</label> <br>
            <input type="text" class="textFields-form" name="lname" required> <br>

            <label for="username" class="menu-form">Username*:</label> <br>
            <input type="text" class="textFields-form" name="username" required> <br>

            <label for="password" class="menu-form" >Password*:</label> <br>
            <input type="text" class="textFields-form" name="password"
            pattern="(EN|PL|OB|EV)-\d\d\d"
            title="Please use the format (EN-XXX/EV-XXX/PL-XXX/OB-XXX)"
            required> <br>



            <label for="imgrep" class="menu-form">Photo:</label>
            <input type="file" id="fileInput" class="form-control inImg-form" name="img" accept=".jpg, .jpeg, .png"> <br>   

            <br>

            <button class="btn btn-primary" name="entrySubmission">
                Submit
            </button>
        </form>

    </div>
</div>


    
    <footer>
        <div class="footer-left">
            <h4>
                About Us
            </h4>

            <img src="images/pawslogo.png" alt="logo image">

            <h4>
                Contact Us 
            </h4>
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

            <div class="footer-right-container">
                <p>
                    Get Socials
                </p>

                <img src="#" alt="fb logo">
                <img src="#" alt="X logo">
                <img src="#" alt="instagram logo">
            </div>
        </div>

    </footer>



    <script src="js/bootstrap.js"></script>
    <script src=""></script>
</body>

</html>