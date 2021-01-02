<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8" />
	
	
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
 
	<h1>Welcome to test form</h1>
        <p>You are given 20 questions</p>
        <?php 
include ("include/countdowntimer.php");

?>
        	
	<form action="Uresult.php" method="post" id="quiz">
		
            <ol style="font-size: 20px;">
            
                <li>
                
                    <h3>You______ another job pretty soon. I have a feeling that you're going to get fired before long.</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 'd better to start to look for </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) would have started to look for</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)'d better start looking for</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)had better to start looking for</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>______, he went to collect his payment.</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)Having finished his work successfully</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)As long as the work is completed with success</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)Despite the fact that the work was successfully completed</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)The work have been completed </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>I was under the impression that you, too, ______ along with us. I am sorry that you aren't.</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)supposed to have come</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)were supposed to come</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)supposed to come </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)were supposed to have come</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>I'm simply surprised at your lack of authority over him. Why can't you _____ him eat his dinner?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) make </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) ask</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) tell</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) force </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Have you heard the great news, Ali? The man, .______ refused your proposal last year, has been arrested for embezzlement of government funds.</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) whose daughter</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)whom </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)when he</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) who have repeatedly</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>I daresay this man is _____to stealing. He's never going to give it up.</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A)vulnerable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)adamant</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)unyielding</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D)addicted</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>What a smart suit that is you've got on. It _____cost you a fortune to buy.</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                        <label for="question-7-answers-A">A)needn't have</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B)ought to have</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) should have</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) must have</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Turkland was _____ a republic on October 29th, 1923.</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                        <label for="question-8-answers-A">A)prohibited</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                        <label for="question-8-answers-B">B)proclaimed</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                        <label for="question-8-answers-C">C)professed</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                        <label for="question-8-answers-D">D)prosecuted</label>
                    </div>
                
                </li>
                 <li>
                
                    <h3>You _____it. I was going to do it anyway.</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                        <label for="question-9-answers-A">A)mustn't do</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                        <label for="question-9-answers-B">B)would have done</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
                        <label for="question-9-answers-C">C)needn't have done</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
                        <label for="question-9-answers-D">D)didn't do</label>
                    </div>
                
                </li>
                <li>
                   <h3>A little boy would rather_____.</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                        <label for="question-10-answers-A">A)plays than studies</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B)play than study </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C)to play than to study</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D)playing than studying</label>
                    </div>
                
                </li>
                <li> 
                    <h3>I _____eat all this food.</h3>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                        <label for="question-11-answers-A">A)'d better not</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                        <label for="question-11-answers-B">B)would better not to</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                        <label for="question-11-answers-C">C) better not to</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-11-answers-D" value="D" />
                        <label for="question-11-answers-D">D)'d not better</label>
                    </div>
                
                </li>
                <li>
                    <h3>How he manages to keep going is________me.</h3>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                        <label for="question-12-answers-A">A)behind</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                        <label for="question-12-answers-B">B)below</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" />
                        <label for="question-12-answers-C">C)beyond</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                        <label for="question-12-answers-D">D)beside</label>
                    </div>
                
                </li>
                <li>
                    <h3>______I don’t see her tomorrow, I am sure that I will run into her before the week is over.</h3>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                        <label for="question-13-answers-A">A)Even if</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                        <label for="question-13-answers-B">B)In spite of</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />
                        <label for="question-13-answers-C">C)despite</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />
                        <label for="question-13-answers-D">D)when</label>
                    </div>
                
                </li>
                <li>
                    <h3>How unkind of him to ________ to help you!</h3>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                        <label for="question-14-answers-A">A) ignore</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                        <label for="question-14-answers-B">B) refuse</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />
                        <label for="question-14-answers-C">C)agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />
                        <label for="question-14-answers-D">D)deny</label>
                    </div>
                
                </li>
                <li>
                    <h3>If the boss sees you doing that, you’ll get into ________.</h3>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                        <label for="question-15-answers-A">A)problem</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                        <label for="question-15-answers-B">B)trouble</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />
                        <label for="question-15-answers-C">C)struggle</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />
                        <label for="question-15-answers-D">D) mess</label>
                    </div>
                
                </li>
                <li>
                    <h3>I'm now going to give you 10 ______ tips for running a really successful web site.</h3>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                        <label for="question-16-answers-A">A)valueless</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                        <label for="question-16-answers-B">B)unprofitable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />
                        <label for="question-16-answers-C">C) invalueable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />
                        <label for="question-16-answers-D">D) worthless</label>
                    </div>
                
                </li>
                 <li>
                    <h3>You should be ________ of yourself for behaving so badly.</h3>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                        <label for="question-17-answers-A">A)ashamed</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-17-answers-B">B) disgusted</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                        <label for="question-17-answers-C">C) confused</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                        <label for="question-17-answers-D">D)embarrassed</label>
                    </div>
                
                </li>
                <li>
                    <h3>Why are you arresting me? I haven’t done anything ________.</h3>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                        <label for="question-18-answers-A">A)fault</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-18-answers-B">B) wrong</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                        <label for="question-18-answers-C">C) crime</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                        <label for="question-18-answers-D">D)error</label>
                    </div>
                
                </li>
                <li>
                    <h3>Benjamin Franklin ________ the lightning conductor.</h3>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                        <label for="question-19-answers-A">A)discovered</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-19-answers-B">B) found</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                        <label for="question-19-answers-C">C)invented</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                        <label for="question-19-answers-D">D)solved</label>
                    </div>
                
                </li>
                <li>
                    <h3>There was a sudden ________ of lightning, which lit up the whole street.</h3>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                        <label for="question-20-answers-A">A)flash</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-20-answers-B">B) spark</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                        <label for="question-20-answers-C">C)fire</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                        <label for="question-20-answers-D">D)split</label>
                    </div>
                
                </li>
            
            
            </ol>
            
            <input style="margin: 50px;" type="submit" value="Submit" class="submitbtn" />
		
		</form>
	
	</div>
 
 
</body>
 
</html>