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
                    <h1>Adopt a Pet </h1> <br>
                    
                    
                        This website is where Organization you can connect with us,
                        find your new Best friend <b>for life!</b>
                        <br><br>
                        Browse our catalogue of Cats and Dogs, we have a large selection of Dog breeds, such as
                        large Bernese Mountain dogs, beautiful golden retrievers, and small cute beagles.
                    
            
                </div>
        </div>
    </div>
      <?php myFooter();?>
        </div> 
    
    </div>  
</body>
</html>