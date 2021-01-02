<!DOCTYPE html>
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>PHP Results</title>

        <style>
            body{
                 
          background-color: lightblue;
      }
      #page-wrap{
          text-align: center;
          margin: 20px;
          padding:10px;
          border: 2px solid white;
          width: 90%;
          height: auto;
              
      }
a:hover{
    color: white;
          
      }
        </style>
</head>
 
<body>
    <form action="contact.php" method="post">
 
	<div id="page-wrap">
 
		<h1>ENGLISH | BOOSTER QUIZ</h1>
		
        <?php
            
            $answer_1 = $_POST['question-1-answers'];
            $answer_2 = $_POST['question-2-answers'];
            $answer_3 = $_POST['question-3-answers'];
            $answer_4 = $_POST['question-4-answers'];
            $answer_5 = $_POST['question-5-answers'];
            $answer_6 = $_POST['question-6-answers'];
            $answer_7 = $_POST['question-7-answers'];
            $answer_8 = $_POST['question-8-answers'];
            $answer_9 = $_POST['question-9-answers'];
            $answer_10 = $_POST['question-10-answers'];
            $answer_11 = $_POST['question-11-answers'];
            $answer_12 = $_POST['question-12-answers'];
            $answer_13 = $_POST['question-13-answers'];
            $answer_14 = $_POST['question-14-answers'];
            $answer_15 = $_POST['question-15-answers'];
            $answer_16 = $_POST['question-16-answers'];
            $answer_17 = $_POST['question-17-answers'];
            $answer_18 = $_POST['question-18-answers'];
            $answer_19 = $_POST['question-19-answers'];
            $answer_20 = $_POST['question-20-answers'];
            
            $totalCorrect = 0;
            
            if ($answer_1 == "B") { $totalCorrect++; }
            if ($answer_2 == "D") { $totalCorrect++; }
            if ($answer_3 == "B") { $totalCorrect++; }
            if ($answer_4 == "A") { $totalCorrect++; }
            if ($answer_5 == "B") { $totalCorrect++; }
            if ($answer_6 == "A") { $totalCorrect++; }
            if ($answer_7 == "C") { $totalCorrect++; }
            if ($answer_8 == "B") { $totalCorrect++; }
            if ($answer_9 == "C") { $totalCorrect++; }
            if ($answer_10 == "C") { $totalCorrect++; }
            if ($answer_11 == "A") { $totalCorrect++; }
            if ($answer_12 == "C") { $totalCorrect++; }
            if ($answer_13 == "A") { $totalCorrect++; }
            if ($answer_14 == "D") { $totalCorrect++; }
            if ($answer_15 == "D") { $totalCorrect++; }
            if ($answer_16 == "A") { $totalCorrect++; }
            if ($answer_17 == "B") { $totalCorrect++; }
            if ($answer_18 == "A") { $totalCorrect++; }
            if ($answer_19 == "C") { $totalCorrect++; }
            if ($answer_20 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect correct  out of  20 questions</div>";
            
        ?>
	
	</div>
<a style="text-decoration: none; border: 2px solid white;" href="index.php?action=logout">Logout</a> 
<a style="text-decoration: none; border: 2px solid white" href="index.php">Back</a>  
    </form>
</body>
 
</html>


