<?php 
    include 'php/template.php';
    include 'logins_v2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Pets</title>
    
    
</head>
<body onload="getTime()">
    

    <div class="container">
            <!-- <div class="header">
                <a href="index.html" class="logo-link"><img class="logo" src="images/logo.png"  alt="Adopt_a_pet_Home" ></a>         
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
            
                

    <div id="content">
        <div id="content-area">
            <h1>
                Browse Our catalogue
            </h1>
            <div class="caption">
                Click on the images for more info about each pet.
            </div>
            <div id="slideshow" >
                <div id="image-wrapper">
                    <table>
                        <tr>
                            <td>
                                <div id="slide1" class = "animals">
                                <img class="slides" src="images/white_dog.jpg" alt="white dog" width="400" height="400">
                                <p class="description" >
                                    <b>DERRYL</b><button class="interested">Interested</button>
                                    <br>
                                    Derryl is a male havanese dog, he is shy and a menace to society. <br>
                                    he is horrible with other pets but he is kind to those he loves most.
                                </p>
                                </div>
                            </td>

                            <td>
                                <div id="slide2" class="animals"></div>
                                <img class="slides" src="images/gangster.jpg" alt="gangster dog image" width="400" height="400" >
                            <p class="description" style="padding-top:0px ; margin-top:10px ;">
                                <b>Tyrone</b><button class="interested">Interested</button>
                                <br>
                                Tyrone is an ex-convict, he used his glock-9 to take down his worst enemies.
                                Rest assured if Tyrone is your pet you will never habe to fear intruders ever again, just watch out he gets extra gangster if he does not sleep in a bed.

                            </p>
                            </td>
                        </tr>
                        <tr>
                           
                                <td>
                                    <div id="slide3" class="animals">
                                    <img class="slides" src="images/cutedipie.jpg" alt="cute dog image" width="400" height="400">
                                    <p class="description">
                                        <b>Jesus</b>   <button style="margin-left: 10px;" class="interested">Interested</button>
                                        <br>
                                        My name is Jesus, I am a religious dawg, I was raised in an orthodox Jewish family, my family has taught me everything they could and they now want to 
                                        make other families as happy as I made them. However, I only eat kosher and I like to pray once every morning with my family. Please adopt me!
                                    </p>
                                    </div>
                                    
                                </td>
                                <td>
                                        <div id="slide4" class="animals">
                                        <img class="slides" src="images/wolf.jpeg" alt="wolf dog" width="400" height="400">
                                        <p class="description" style="margin-top: 100px;">
                                        <b>Lebron</b> <button class="interested">Interested</button>
                                        <br>
                                        Wassup G I'm a wolf, I like my cuddles, I am vegan and I looking for a nice family to adopt me.

                                        </div>
                                </td>
                           
                            
                        </tr>

                    </table>
                        
                  
                <!-- <button class="previous" onclick="plusDivs(-1)">&#10094;</button>
                <button class="next" onclick="plusDivs(1)">&#10095;</button> -->
                
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