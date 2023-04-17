<?php include'php/template.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Have a pet to give away</title>
    <link rel="stylesheet" href="css/GiveAwayForm.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="Javascript/script.js"></script> 

    <script>
        
    </script>

<style> 
h1 {
  text-align: center;
}
input[type="text"],
input[type="password"] {
  /* width: 100%; */
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"],input[type="reset"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
  font-size: 16px;
  font-weight: bold;
  clear: both;

}
#account_form_section{
  background-color: white;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}
#password_lable{
    margin-top:10px;
}
#response{
  margin: 10px;
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
            
                

                <div id="content">
                    <div id="content-area">
                    
                        <div id="petFormContainer">
                        <!-- validation is done in javascript in script.js -->
                        <form id="giveForm" onsubmit="return validateGiveForm()" enctype="multipart/form-data"  method="POST">
                                <fieldset>
                                    <legend> <b>Your Pet Give Away Form</b> </legend>
                                    <label class="intro">Please fill out the following form about your pet </label> <br><br>
                                    <label id="typeOfPet">Your pet is a </label> <br>
                                    <label>Cat</label>
                                    <input type="radio" id="Cat" name="pet" value="Cat">
                                    <label>Dog</label>
                                    <input type="radio" id="Dog" name="pet" value="Dog" checked>  <br> <br>
                                    
                                    <label>Breed (leave as <i>Does not matter</i> if you picked cat) <br></label>
                                    <select name="breed" id="breed"> 
                                        <option value="default">--Please choose an option--</option>
                                        <option value="Beagle">Beagle</option>
                                        <option value="Bernese Mountain Dog">Bernese Mountain Dog</option>
                                        <option value="Golden retriever">Golden retriever</option>
                                        <option value="Labrador retriever">Labrador retriever</option>
                                        <option value="Husky">Husky</option>
                                        <option value="Havanese">Havanese</option>
                                        <option value="Other">Other</option>
                                        <option value="Does not matter">Does not matter</option>
                                    </select>
                                    <br><br>
                                    <label>Pet age: </label>
                                    <select name="age" id="age">
                                        <option value="">--Please choose an option--</option>
                                        <option value="Infant">Infant (few months)</option>
                                        <option value="Young">Young (1-2)</option>
                                        <option value="Adult">Adult (5-10)</option>
                                        <option value="Old">Old (10+)</option>
                                        
                                    </select> <br><br>
                    
                                    <label>Pet gender: </label>
                                    <select name="gender" id="gender">
                                        <option value="default">--Please choose an option--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select> <br><br>
                    
                                    <label id="labelC1">Pet gets along with: </label> <br>
                                    <label>Other dogs</label>
                                    <input type="checkbox" name="compatibility[]" value="Other_dogs" id="Other_dogs">
                                    <label>Other cats</label>
                                    <input type="checkbox" name="compatibility[]" id="Other_cats" value="Other_cats">
                                    <label>Small children</label>
                                    <input type="checkbox" name="compatibility[]" id="Small_children" value="Small_children"> <br><br>
                                    <label id="fam">Pet is suitable for families: </label>
                                    <label>Yes</label>
                                    <input type="radio" name="family" id="Yes">
                                    <label>No</label>
                                    <input type="radio" name="family" id="No"> <br> <br>
                
                                    <label id="OwnerName">Owner's name:</label>
                                    <input type="text" id="name1" name="name1"> <br> <br>
                                    <label id="Email">Owner's email:</label>
                                    <input type="text" name="email" id="email">
                
                                    <br><br> <label>Write any comments about your pet in the box below</label><br>
                                    <textarea name="comments" id="comments" ></textarea>
                                    <br><br> 
                                    <input type="file" name="image"><br>
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="Reset">
                                </fieldset>

                        </form>
                        </div>
                        <?php include'logins_v2.php';
                            if(isset($_POST['submit'])){
                                petAdd();
                                echo '<script> alert("form successfully submitted");</script>';
                            }
                        ?>
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