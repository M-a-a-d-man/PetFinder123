<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
function process(){
    $pattern = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/';
    // $patCond = false;
    $exists = false; 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo file_exists("files/logins.txt");
        if(file_exists("files/logins.txt")){
            $fptr = fopen("files/logins.txt","r+");
            while(!feof($fptr)){
                $result = explode(":",fgets($fptr));
                if(strcmp($username, $result[0]) == 0){
                    // echo '<p style="color:red;">This username already exists<br></p>';
                    echo '<script type="text/javascript">';
                    echo 'document.getElementById("response").innerHTML="This username already exists<br>"' ;
                    echo '</script>';
                    $exists = true;
                    break;
                }
            }
    
            if(!$exists){
                if(preg_match($pattern, $password)){
                    fseek($fptr, 0, SEEK_END);
                    $user_info = $username . ":" . $password . "\n";
                    fwrite($fptr, $user_info);
                    // echo '<p style="color:green"> &#x2713; Your account has been Successfully created!</p>';
                    echo '<script type="text/javascript">';
                    echo 'let response = document.getElementById("response");
                        response.write("&#x2713; Your account has been Successfully created!");
                        ' ;
                    echo '</script>';
                } else {    
                    echo '<script type="text/javascript">';
                    echo 'document.getElementById("response").innerHTML="Your password must contain at least 4 characters, and must have at least one letter and one digit<br>"' ;
                    echo '</script>';
                    // echo '<p style="color:red;">Your password must contain at least 4 characters, and must have at least one letter and one digit<br></p>';
                }
            }
            fclose($fptr);
        }
        else{
            if(preg_match($pattern, $password)){
                $fptr = fopen("logins.txt","w");
                fseek($fptr, 0, SEEK_END);
                $user_info = $username . ":" . $password . "\n";
                $wrt = fwrite($fptr, $user_info);
                fclose($fptr);
                echo '<script type="text/javascript">';
                echo 'document.getElementById("response").innerHTML="&#x2713; Your account has been Successfully created!"' ;
                echo '</script>';
            } else {    
                echo '<script type="text/javascript">';
                echo 'document.getElementById("response").innerHTML="Your password must contain at least 4 characters, and must have at least one letter and one digit<br>"' ;
                echo '</script>';
            }
        }
    
    }
}

// function userAvail($username){
//     echo file_exists("files/logins.txt");
//         if(file_exists("files/logins.txt")){
//             $fptr = fopen("files/logins.txt","r+");
//             while(!feof($fptr)){
//                 $result = explode(":",fgets($fptr));
//                 if(strcmp($username, $result[0]) == 0){
//                     // echo '<p style="color:red;">This username already exists<br></p>';
//                     echo '<script type="text/javascript">';
//                     echo 'document.getElementById("response").innerHTML="This username already exists<br>"' ;
//                     echo '</script>';
//                     $exists = true;
//                     break;
//                 }
//             }
    
//             if(!$exists){
//                 if(preg_match($pattern, $password)){
//                     fseek($fptr, 0, SEEK_END);
//                     $user_info = $username . ":" . $password . "\n";
//                     fwrite($fptr, $user_info);
//                     // echo '<p style="color:green"> &#x2713; Your account has been Successfully created!</p>';
//                     echo '<script type="text/javascript">';
//                     echo 'let response = document.getElementById("response");
//                         reponse.innerHTML="&#x2713; Your account has been Successfully created!";
//                         ' ;
//                     echo '</script>';
//                 } else {    
//                     echo '<script type="text/javascript">';
//                     echo 'document.getElementById("response").innerHTML="Your password must contain at least 4 characters, and must have at least one letter and one digit<br>"' ;
//                     echo '</script>';
//                     // echo '<p style="color:red;">Your password must contain at least 4 characters, and must have at least one letter and one digit<br></p>';
//                 }
//             }
//             fclose($fptr);
//         }
//         else{
//             if(preg_match($pattern, $password)){
//                 $fptr = fopen("logins.txt","w");
//                 fseek($fptr, 0, SEEK_END);
//                 $user_info = $username . ":" . $password . "\n";
//                 $wrt = fwrite($fptr, $user_info);
//                 fclose($fptr);
//                 echo '<script type="text/javascript">';
//                 echo 'document.getElementById("response").innerHTML="&#x2713; Your account has been Successfully created!"' ;
//                 echo '</script>';
//             } else {    
//                 echo '<script type="text/javascript">';
//                 echo 'document.getElementById("response").innerHTML="Your password must contain at least 4 characters, and must have at least one letter and one digit<br>"' ;
//                 echo '</script>';
//             }
//         }
    
//     }
function usernameAvail(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $exists = false;
        // echo file_exists("files/logins.txt");
        if(file_exists("files/logins.txt")){
            $fptr = fopen("files/logins.txt","r+");
            while(!feof($fptr)){
                $result = explode(":",fgets($fptr));
                if(strcmp($username, $result[0]) == 0){
                    // echo '<p style="color:red;">This username already exists<br></p>';
                    echo '<script type="text/javascript">';
                    echo 'let dest = document.getElementById("response");' ;
                    echo 'let node = document.createElement("p");';
                    echo 'node.textContent = "This username already exists. Please try again.";';
                    echo 'node.style.color = "red";';
                    echo 'dest.insertBefore(node,document.getElementById("passwordDescription"));';
                    echo '</script>';
                    $exists = true;
                    break;
                }
            }
            if($exists == false){
                fseek($fptr, 0, SEEK_END);
                $user_info = $username . ":" . $password . "\n";
                fwrite($fptr, $user_info);
                echo '<script type="text/javascript">';
                echo 'let dest = document.getElementById("response");' ;
                echo 'let node = document.createElement("p");';
                echo 'node.textContent = "Your account has been Successfully created! You are now ready to login.";';
                echo 'node.style.color = "green";';
                echo 'dest.insertBefore(node,document.getElementById("passwordDescription"));';
                echo '</script>';
            } 
        } 
            fclose($fptr);
    }
}

function login(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // echo $password;
        $found = false;
        if(file_exists("files/logins.txt")){
            $fptr = fopen("files/logins.txt","r");
            while(!feof($fptr)){
                // echo fgets($fptr)
                $line = trim(fgets($fptr));
                $result = explode(":",$line,2);
                // print_r($result);
                if($username == $result[0] && $password == $result[1]){
                    if(session_status()===PHP_SESSION_NONE)
                        session_start();
                    $_SESSION["username"] = $username;
                    echo'<script> window.location.href="Have_a_pet_to_give_away.php";</script>';
                    // $_SESSION["username"] = $username;
                    $found = true;
                    break;
                }
            }
            if($found == false){
                echo '<script> 
                let node = document.createElement("p");
                node.textContent = "Login failed. Please try again.";
                node.style.color = "red";
                document.getElementById("response").appendChild(node);
                </script>';
            }
        }
        fclose($fptr);
    }
}

function petAdd(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pet = $_POST['pet'];
        $breed =  $_POST['breed'];
        $age = $_POST['age'];
        $gender=$_POST['gender'];
        $compatibility= implode(",",$_POST['compatibility']); //to make it one string
        // $family=$_POST['family'];
        $owner = $_POST['name1'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $file = $_FILES['image'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];
        $uploadedFilePath = "none";
    // Check if a file was uploaded
    if ($fileError === UPLOAD_ERR_NO_FILE) {
        echo '<script> alert("Warning: No file was uploaded.");</script>';
    } else if ($fileError === UPLOAD_ERR_OK) {
        // Validate file upload
        $uploadPath = 'images/' . $fileName;
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            $uploadedFilePath = $uploadPath;
        } else {
            echo '<script> alert("Failed to upload file");</script>';
        }
    } else {
        echo '<script> alert("Error uploading file");</script>';
    }
        $entry_number = countLinesInFile('files/available_pet_information.txt')+1;
        $fptr = fopen('files/available_pet_information.txt','a');
        $info = $entry_number.":".$_SESSION["username"].":".$pet.":".$breed.":".$age.":".
        $gender.":".$compatibility.":".$owner.":".$email.":".$comments.":".$uploadedFilePath."\n";
        fwrite($fptr,$info);
        fclose($fptr);
    }
}

function countLinesInFile($filename) {
    $lineCount = 0; // Initialize line count to 0

    // Open the file in read mode
    $file = fopen($filename, 'r');

    // Check if the file was opened successfully
    if ($file) {
        // Loop through each line in the file
        while (!feof($file)) {
            // Read the line
            $line = fgets($file);

            // Trim the line to remove leading/trailing whitespace characters
            $line = trim($line);

            // If the line is not empty after trimming, increment the line count
            if (!empty($line)) {
                $lineCount++;
            }
        }

        // Close the file
        fclose($file);
    }

    // Check if line count is 0 and file is empty
    if ($lineCount === 0 && filesize($filename) === 0) {
        $lineCount = 0;
    }
    return $lineCount;
}
?>
