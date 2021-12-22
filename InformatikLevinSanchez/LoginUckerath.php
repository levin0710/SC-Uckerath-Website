<html>
<head>
<link rel="icon" type="image/png" href="favicon-256x256.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body  {
    font-family: fantasy;
    background-color: darkblue;
    color: darkblue;
        
    }
    h2{
    font-family: fantasy;
    color: darkblue
    }
form {
    display: block;
    background-color:white;
    }

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: deepskyblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.erimaball {
    align-content: center;
    margin-left: 500px ;
    width: 40%;
    border-radius: 50%;
}
    

}
</style>
</head>
<body>

<h2>Login Uckerath</h2>
 <?php
     session_start(); 

    $_logindaten = array("email"=>"informatik@gmail.com", "passwort"=>"levin"); 

    if (isset($_POST["loginmail"]) && isset($_POST["loginpasswort"]) && $_logindaten["mail"] == $_POST["loginmail"] && 
    $_logindaten["passwort"] == $_POST["loginpasswort"]) {
        echo    "Willkomen" ;   
    } else { 
    echo "Falsche Password oder E-mail" ;
    }
     ?>
    <form action="WebsiteUckerath2.php">
  <div class="erimaball">
    <img src="http://www.fussball2go.de/images/_pics/erima/719505_V.jpg" >
  </div>

  <div class="container">
    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" required>

    <label for="passwort"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwort" required>
        
    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:white">
    <button type="button" class="cancelbtn">Cancel</button>
    <a href="FormulareLevin.php">Konto Erstellen?</a>
  </div>
</form>

</body>
</html>
