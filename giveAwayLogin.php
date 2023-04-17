<?php
    include 'php/template.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js"></script>
    
</head>
<body onload="getTime()">
    <div class="container">
            
    <!-- <div class="header">
                <a href="index.html" class="logo-link"><img class="logo" src="images/logo.png"  alt="Adopt_a_pet_Home" ></a>         
            <p id="time">
            </p>
    </div> -->
    <?php
            myHeader();
            ?>
            <div class="middle">
                <!-- <div class="side-bar">
                    <a id="Home" href="index.php">Home</a>
                    <a  href="Browse_pets.html">Browse Available Pets</a>
                    <a href="Find_a_pet.html">Find a dog/cat</a>
                    <a href="Dog_care.html"> Dog Care</a>
                    <a href="Cat_care.html">Cat Care</a>
                    <a href="Have_a_pet_to_give_away.html">Have a pet to give away</a>
                    <a href="Contact_us.html">Contact us</a>
                </div> -->
                <?php mySidebar();?>
            
                

        <div id="content">
                <div id="content-area">
                <div id="login">
                        <div id="account_creation_box">
                        <div id="account_form_section">
                        <h1>Please Log in</h1>
                        <form onsubmit="return formSubmit()"  method="POST">
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" require placeholder="Enter your username" pattern="^[a-zA-Z0-9]*$" title="letters and digits only"><br>
                            <label for="password" id="password_label" >Password:</label><br>
                            <input type="password" id="password" name="password" required placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$"
                            title="at least 4 characters, letters and digits only"><br>
                            <div id="response"> 
                                <?php include 'logins_v2.php';
                                    login();
                                ?>
                                
                            </div>
                            <input type="submit" value="Login" id="loginButton">
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
      <?php myFooter();?>
        </div> 
    
    </div>  
</body>
</html>