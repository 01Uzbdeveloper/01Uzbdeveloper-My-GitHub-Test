<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       
  <style>
      .grade {
               
                width: 45px;
                border: 2px solid  darkseagreen;
            }
      .column {
  float: left;
  width: 45%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
 * {
  box-sizing: border-box;
}  
.container-fluid{
    font-family: sans-serif;
    color: white;
    border-right:5px solid whitesmoke; 
    border-left: 5px solid whitesmoke;
    
}
.test{
    text-decoration: none;
}
.back-image{
    width: 50%;
    height: 10%;

}
.image{
    width: 180px;
    height: 250px;
}
p{
    font-size: 17px;
}
.box-container{
    display: flex;
    justify-content: space-between;
}
.box-1,.box-2,box-3{
    width: 180px;
    height:250px;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.3);
    background-repeat: no-repeat;
    align-items: center;
    
      
}


.box-1{
    
}
.box-2{

}
.box-3{
 
}

.adv{
    color: black;
}
 
button{
    border: none;
    border-radius: 10px;
    color: #c3c3c3;
    background-color: #3e3d3d;
}
  </style>
  </head>
 
  <body>
      <div class="container-fluid">
         
          <img class="back-image" src=" https://cdn.pixabay.com/photo/2017/02/11/22/38/quiz-2058883__340.png"alt="image">
    <br><br>
    <div>
        <h1>WELCOME TO BOOSTER|ENGLISH QUIZ  </h1>
    </div>
    <div class="w3-row padding">
        <div class="w3-third">
            <div class="row">
                <div class="column">
                    <p>BOOSTER|ENGLISH QUIZ is a collection of free online English quizzes and tests designed for ESL (English as a Second Language) learners. The questions come in six levels: from beginner to advanced levels.</p>
                </div>
            </div>
        </div>
        <div class="w3-third">
            <div class="row">
                <div class="column">
             <p>Supporting high-quality test materials.Improving gramatical knowledge of English.Preparing students for university exams.</p>
                </div>
            </div>
        </div>   
        <div class="w3-third"> 
            <div class="row">
                <div class="column">
            <p>Take our English quiz to estimate your level, including English grammar and vocabulary.</p>
            <ul>
                <li>No fees.Start now.</li>
            </ul>
                </div>
            </div>    
        </div>  

        
        </div>
    <div class="p-text">  
        <p style="font-family: cursive;color: #FFFFFF;line-height:none;font-size:30px;margin: 10px 0px;">If you are not familiar with your english level.</p>
        <p style="font-family: cursive;color: #FFFFFF;line-height:none;font-size:30px;margin: 10px 0px;">We recommend you to take level check test.</p> 
        <button><a href="/pages/Levelcheck.php">Take a test</a></button>
    </div><br>
    <br>  
        <label class="grade" for="grade">Level:</label>
<br>
<div class="test">
<a href="index.php?p=Beginner-form">Beginner</a><br>

<a href="index.php?p=Elementary-form">Elementary</a><br>

<a href="index.php?p=Preintermediate-form">Pre-intermediate</a><br>

<a href="index.php?p=Intermediate-form">Intermediate</a><br>

<a href="index.php?p=Upperintermediate-form">Upper-intermediate</a><br>

<a href="index.php?p=Advanced-form">Advanced</a><br>
<a style="text-decoration: none; border: 2px solid #ccc;" href="index.php?action=logout">Logout</a>       
</div>
<br><br>
<div class="adv">
     
   
       <h1 style="text-align:center;">See these E-books</h1>
       <p style="text-align:center;">We prefer to users to learn english grammar skills by these mentioned books.It can help you to improve your english level. </p>
        <p style="text-align:center;">There is given site link to download these books' electronic version.Tab to the name of the book.</p>
        <div class="box-container">
            <div class="box-1">
                <p><a style="text-decoration: none;"href="https://ru.pdfdrive.com/english-grammar-in-use-d185813573.html"><img  class="image"src="images/test_1/image_10.jpg" alt="Raymond Murphy"><br>English Grammar in Use</a></p>
                <button></button>
            </div>
            <div class="box-2">
                <p><a style="text-decoration: none;"href="https://www.pdfdrive.com/betty-azar-understanding-and-using-english-grammar-e18729571.html"><img class="image" style="width: 180px; height: 250px;"src="images/test_1/image_11.jpg"alt="Azar"><br>Fundamentals of English Grammar</a></p>
            </div>
            <div class="box-3">
                <p><a style="text-decoration: none;"href="https://kupdf.net/download/grammar-scan-diagnostic-test-michael-swanpdf_5a7f4711e2b6f56865597219_pdf"><img class="image" style="width: 180px; height: 250px;"src="images/test_1/image_12.jpg" alt="Grammar scan"><br>Grammar Scan</a></p>
            </div>
          
     
    
    </div>
</div>    

