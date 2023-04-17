<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
?>

<?php
echo '<link rel="stylesheet" type="text/css" href="css/style.css" />'; 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function myHeader(){
// echo "<link rel='stylesheet' type='text/css' href='css/style.css' />"; 
echo' <div class="header">
        <a href="index.php" class="logo-link"><img class="logo" src="images/logo.png"  alt="Adopt_a_pet_Home" ></a>         
            <p id="time">
            </p>
            </div>';
}

function myFooter(){
    echo '<link rel="stylesheet" type="text/css" href="css/style.css" />';
    echo '<script src="Javascript/script.js"></script>';
   echo'  <div class="footer">
   <button class="alert"  onclick="showAlert()">
       Privacy Disclaimer
   </button>
   </div> ';
}
function mySidebar(){

    if(session_status() === PHP_SESSION_ACTIVE && !isset($_SESSION['username'])){
        echo '<div class="side-bar">
        <a id="Home" href="index.php">Home</a>
        <a href="Find_a_pet.php">Find a dog/cat</a>
        <a href="Dog_care.php"> Dog Care</a>
        <a href="Cat_care.php">Cat Care</a>
        <a href="giveAwayLogin.php">Have a pet to give away</a>
        <a href="Contact_us.php">Contact us</a>
        <a href="Create_account.php">Create Account</a>
       
        </div>';
    }
        else{
            echo '<div class="side-bar">
            <a id="Home" href="index.php">Home</a>
            <a href="Find_a_pet.php">Find a dog/cat</a>
            <a href="Dog_care.php"> Dog Care</a>
            <a href="Cat_care.php">Cat Care</a>
            <a href="Have_a_pet_to_give_away.php">Have a pet to give away</a>
            <a href="Contact_us.php">Contact us</a>
            <a href="logout.php">Logout' . '('. $_SESSION["username"] .')'.'</a> 
            </div>';
        }
         // echo '<div class="side-bar">
    //     <a id="Home" href="index.php">Home</a>
    //     <a href="Find_a_pet.php">Find a dog/cat</a>
    //     <a href="Dog_care.php"> Dog Care</a>
    //     <a href="Cat_care.php">Cat Care</a>
    //     <a href="giveAwayLogin.php">Have a pet to give away</a>
    //     <a href="Contact_us.php">Contact us</a>
    //     <a href="Create_account.php">Create Account</a>
    //     <a href="logout.php">Logout</a>
       
    //     </div>';
    }

   

?>