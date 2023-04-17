<?php include 'php/template.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js"></script>
        <title>Contact us</title>
        <style>
            body{
                background-image: url("images/background.jpg");
                background-size: 100vh;
                margin: unset;
        /* 
        background image url comes from freepik: 
        https://www.freepik.com/free-vector/cute-colorful-kitten-pow-pattern-design_2709577.htm#query=dog%20wallpaper&position=10&from_view=keyword&track=sph
        
        */
            }
        #container{
            background-image: url("background.jpg");
            background-size: 100vh;
        }
            
            
            .header{
                background-color:rgb(42, 22, 12);
            }
            #info{
                background-color: rgb(255, 255, 255);
                margin: 20px;
                height: 75vh;
            }
            </style>
</head>
<body onload="getTime()">

    <div class="container">
        <!-- <div class="header">
            <a href="index.html"><img class="logo" src="images/logo.png"  alt="Adopt_a_pet_Home"></a>         
            <p id="time">
            </p>
        </div> -->
        <?php myHeader();?>        
            <div class="middle">
                <!-- <div class="side-bar">
                    <a id="Home" href="index.html">Home</a>
                    <a  href="Browse_pets.html">Browse Available Pets</a>
                    <a href="Find_a_pet.html">Find a dog/cat</a>
                    <a href="Dog_care.html"> Dog Care</a>
                    <a href="Cat_care.html">Cat Care</a>
                    <a href="Have_a_pet_to_give_away.html">Have a pet to give away</a>
                    <a href="Contact_us.html">Contact us</a>
                </div> -->
                <?php mySidebar();?>
    <div>      
        <div>
            <div id="content-area">
                <div id="container">
                    <div id="info">
                        <h1>Contact us</h1>
                        <dl>
                            <dt></dt>
                            <dd>tel: 514-ADOPT-US</dd><dd>email: pets@Adoptus.com</dd>
                        </dl>
                    </div>
                </div>
            
        
            </div>
                
        </div>
    </div>
    </div>
        <!-- <div class="footer">
        <button class="alert"  onclick="showAlert()">
            Privacy Disclaimer
        </button>
        </div> -->
        <?php myFooter();?>
    </div>  
</body>
</html>