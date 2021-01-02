<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Registration form</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  text-align: center;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
#regform{
    
    text-align: center;
   
        
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
    
    
        <div id="regform">
        <h2>Registration Form</h2>    
        <form action="index.php" method="post">
            First name:<br>
            <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input  type="text" name="firstname"><br>
            </div>
            Last name:<br>
            <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input type="text" name="lastname"><br>
            </div>
            Email:<br>
            <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <input type="text" name="email"><br>
            </div>
            Password:<br>
             <div class="input-container">
             <i class="fa fa-key icon"></i>
            <input type="password" name="password"><br>
             </div>
            <input type="submit" name="reg" value="Register"><br> 
              <span class="psw"><a href="#">Forgot password?</a></span>
             <br><br>
                    
        </form>
       
        
        </div>

</body>    
        
</html>
