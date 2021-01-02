<html>
    <body>
        
        
    </body>    
    
</html>


<?php
if(isset($_GET['action']) && $_GET['action']=='logout') {
   $_SESSION = [];
}

if (isset($_POST['lastname']) && isset($_POST['firstname'])){
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['firstname'] = $_POST['firstname'];
}
if (isset($_SESSION['lastname'])){
    include ("include/subject.php");
}  else {
    include ("include/reg-form.php");
}

?>