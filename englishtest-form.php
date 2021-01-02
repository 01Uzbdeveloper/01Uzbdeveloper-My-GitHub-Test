<html>
    <body>
              <div id="page-wrap">
    <h1 style="border: 3px solid red">Welcome to test form</h1>
</div>
       
    
            <?php
            $abc = ['A', 'B', 'C', 'D', 'E'];
            $conn = new PDO("mysql:host=localhost;dbname=test", 'root', 'root');
            //set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            if (!empty($_POST ['variant']) and (!empty($_POST['testId']))){
                    if ($_POST['testId'] == $row['Id']) {
                       if ($_POST['variant'] == $row['Answer']) {
                       echo "Javob to'g'ri";
                            
                     } else {
                       echo "Javob noto'g'ri";   
                    }
                  }
            }
            if(empty($_POST['position'])){
                $position = 1;
            }else{
                $position=$_POST['position']+1;
            }    
             
                        
            $statement=$conn->query('select * from englishtest where Position='.$position);
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            $variantText ='<h1>'.$row['Title'].'</h1>';
            $variantText.='<p>'.$row['Source'].'</p>';
            $variantText.='<img src=\''.$row['Image'].'\'>'; 
            $variants = explode('#', $row['Variant']);   
            $variantText .= "<form action='index.php?p=englishtest-form' method='post'>";
                foreach ($abc as $k => $v) {
                    if (!empty($variants[$k])) {
                        $id = $row['Id'].$v;
                        $variantText=$variantText. $v .  ") <input type='radio' id='$id' name='variant' value='$v'/><label for='$id'>{$variants[$k]}</label><br>";
                      }
                 }
                 $variantText .= "<input type='hidden' name='testId' value='{$row['Id']}'>";
                 $variantText .= "<input type='hidden' name='position' value='{$row['Position']}'>";
                 $variantText .="<input type='submit' name='previous' value='Previous'>"."<input type='submit' name='submit' value='Submit'>"."<input type='submit' name='next' value='Next'>"."</form>" ;
                 echo $variantText;
                 ?>
