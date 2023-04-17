
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <?php include 'php/template.php';?>
    <script src="Javascript/script.js"></script>
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

input[type="submit"] {
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
    <?php myHeader();?>
            <div class="middle">
                <?php mySidebar();?>
        <div id="content">
                <div id="content-area">
                    <div id="account_creation_box">
                    <div id="account_form_section">
                    <h1>Create an Account</h1>
                        <form onsubmit="return formSubmit()"  method="POST">
                            <label for="username">Username:</label><br>
                            <input type="text" id="username" name="username" require placeholder="Enter your username" pattern="^[a-zA-Z0-9]*$" title="letters and digits only"><br>
                            <label for="password" id="password_label" >Password:</label><br>
                            <input type="password" id="password" name="password" required placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$"
                            title="at least 4 characters, letters and digits only"><br>
                            <div id="response">
                              <p id="passwordDescription">
                                <ul>
                                  <li>Username can contain letters and digits only</li>
                                  <li>Password must be at least 4 characters long</li>
                                  <li>Password must be composed of letters and digits only</li>
                                </ul>
                              </p><br>
                                <?php include 'logins_v2.php';?>
                                <?php usernameAvail();?> 
                        </div>
                            <input type="submit" value="Sign up">
                        </form>
                        </div>
                    </div>
            
                </div>
        </div>
    </div>
    <div class="footer">
    <?php myFooter();?>
    </div>
    
    </div>  
</body>
</html>