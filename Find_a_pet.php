<?php include 'php/template.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- default pic from: https://ws.petango.com/Webservices/adoptablesearch/wsFoundAnimalDetails.aspx?id=51925743&css=http://www.green-hill.org/wp-content/uploads/2018/09/animalstyles2.css&authkey=x092s378c561r2ixd72d6lr55q5q41zjqv07054h69t8pcw5l4 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Form</title>
    <link rel="stylesheet" href="css/petForm.css"> 
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    
    <script src="Javascript/script.js"></script>
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
                <?php mySidebar();?>
    <div id="content">
                
        <div id="area">
            <div id="content-area">
    <?php 
    if(!isset($_POST['submit'])){
    echo '
    <div id="form">
        <form id="findForm" onsubmit="return validateFindPetForm();" method="POST">
                <fieldset>
                    <legend> <b>Pet search form</b> </legend>
                    <label class="intro">Before we can find you a pet please fill out the following form so we can find the best pet for you.  </label> <br><br>
                    <label id="petSelection">Would you like a cat or a dog? </label> <br>
                    <label for="Cat">Cat</label>
                    <input type="radio" id="Cat" name="pet" value="Cat">
                    <label for="Dog">Dog</label>
                    <input type="radio" id="Dog" name="pet" value="Dog"><br>

                    <label>Preferred dog breed (leave as <i>Does not matter</i> if you picked cat) <br></label>
                    <select name="breed" id="breed" > 
                        <option value="">--Please choose an option--</option>
                        <option value="Beagle">Beagle</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Labrador retriever">Labrador retriever</option>
                        <option value="Husky">Husky</option>
                        <option value="Havanese">Havanese</option>
                        <option value="DNM">Does not matter</option>
                    </select>
                    <br><br>
                    <label id="labelA">Preferred pet age: </label>
                    <select name="age" id="age" >
                        <option value="">--Please choose an option--</option>
                        <option value="Infant">Infant (few months)</option>
                        <option value="Young">Young (1-2)</option>
                        <option value="Adult">Adult (5-10)</option>
                        <option value="Old">Old (10+)</option>
                        <option value="DNM">Does not matter</option>
                    </select> <br><br>
        
                    <label>Preferred gender: </label>
                    <select name="gender" id="gender">
                        <option value="">--Please choose an option--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="DNM">Does not matter</option>
                    </select> <br><br>
        
                    <label id="labelC">Your pet needs to get along with: </label> <br>
                    <label for="Other_dogs">Other dogs</label>
                    <input type="checkbox" name="compatibility[]" id="Other_dogs" value="Other_dogs" >
                    <label for="Other_cats">Other cats</label>
                    <input type="checkbox" name="compatibility[]" id="Other_cats" value="Other_cats">
                    <label for="Small_children">Small children</label>
                    <input type="checkbox" name="compatibility[]" id="Small_children" value="Small_children">
                    <label for="Does_not_matter2">Does not matter</label>
                    <input type="checkbox" name="compatibility[]" id="Does_not_matter2" value="DNM"><br>

                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Reset">
                </fieldset>
             </form>
        </div>';}
        else{
            $pet = $_POST['pet'];
            $breed =  $_POST['breed'];
            $age = $_POST['age'];
            $gender=$_POST['gender'];
            $compatibility= implode(",",$_POST['compatibility']);
            if(!file_exists("files/available_pet_information.txt")){
                echo 'File does not exist';
                exit();
            }
            else{
                $file = fopen("files/available_pet_information.txt","r");
                $found = false;
                ?>
                <div id="result-section">
                    <h1>
                        Results
                    </h1>

                </div>
                <div id="pet-grid">
                    <?php
                    $count = 1;
                while (!feof($file)) {
                    $pet_record = rtrim(fgets($file));
                    if(empty($pet_record))
                        continue;
                    $pet_arr = explode(":", $pet_record);
                    $pet_arr1 = array_replace(array(),$pet_arr);
/**
 * pet[0] = entry number
 * pet[1] = username
 * pet[2] = pet
 * pet[3] = breed
 * pet[4] = age
 * pet[5] = gender
 * pet[6] = compatibility
 * pet[7] = owner name
 * pet[8] = owner email
 * pet[9] = comments
 * pet[10] = image path;
 */
if ($breed == "DNM"){
    $pet_arr[3] =  $breed;
}
if ($age == "DNM"){
    $pet_arr[4] =$age;
}
if ($gender == "DNM"){
    $pet_arr[5] =$gender;
}
if($compatibility === "DNM"){
    $pet_arr[6] =$compatibility;
}
if($pet_arr[10]=="none"){
    $pet_arr[10]= "images/default.jpg";
}



if ($pet_arr[2]===$pet && $pet_arr[3]===$breed && $pet_arr[4]=== $age && $pet_arr[5] === $gender && $pet_arr[6] === $compatibility) {
    $found = true;                 
                        ?>
                        <div class="pet">
                            <figure>
                                <figcaption>
                                    <img class="pet_image" id="pet_pic" alt="pet_image" width="300px" height="200px" ><br>

                                    <?php 
                                    echo'<script> document.getElementById("pet_pic").setAttribute("id","pet_pic' . $count.'");';
                                    echo'document.getElementById("pet_pic' . $count++ .'").setAttribute("src","' . $pet_arr[10].'");';
                                    echo '</script>';
                                     ?>
                                    Pet Type: <?php echo $pet_arr1[2]?><br>
                                    Breed: <em><?php echo $pet_arr1[3]?></em><br>
                                    Age (in human years): <em><?php echo $pet_arr1[4]?></em><br>
                                    Animal Gender: <em><?php echo $pet_arr1[5]?></em><br>
                                    This pet is compatible with: <em><?php echo $pet_arr1[6]?></em><br>
                                    Owner contact information: <em><?php echo $pet_arr1[8]?></em><br>
                                    Other comments: <em><?php echo $pet_arr1[9]?></em><br>
                                </figcaption>
                            </figure>
                            <button>Interested?</button>
                        </div>
                        <?php
                    }
                }
            }
                if($found == false){
                    echo '<p style="align-content:center;"><h1>No Results found</h1></p><br>';
                    
                }
                    
        }
        ?>
        

            
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