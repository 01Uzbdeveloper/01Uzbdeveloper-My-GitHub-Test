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
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers'];
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers'];
            
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "B") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }
            if ($answer9 == "C") { $totalCorrect++; }
            if ($answer10 == "B") { $totalCorrect++; }
            if ($answer11 == "C") { $totalCorrect++; }
            if ($answer12 == "A") { $totalCorrect++; }
            if ($answer13 == "C") { $totalCorrect++; }
            if ($answer14 == "D") { $totalCorrect++; }
            if ($answer15 == "A") { $totalCorrect++; }
            if ($answer16 == "D") { $totalCorrect++; }
            if ($answer17 == "B") { $totalCorrect++; }
            if ($answer18 == "A") { $totalCorrect++; }
            if ($answer19 == "C") { $totalCorrect++; }
            if ($answer20 == "C") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect correct  out of  20 questions</div>";
            
        ?>
	
	</div>
<a style="text-decoration: none; border: 2px solid white;" href="index.php?action=logout">Logout</a> 
<a style="text-decoration: none; border: 2px solid white" href="index.php">Back</a>  
    </form>
</body>
 
</html>
