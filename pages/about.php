<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <script src="https://kit.fontawesome.com/c8e4d183c2.js"crossorigin="anonymous"></script>
        <style>
           body{
    background-color: #f6f5f5;
    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 95vh;
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSSVlczooV92KID7cBdTsTkHQZ9gfAdtvLVjg&usqp=CAU");
    background-repeat: no-repeat;
    background-size: cover;
   
}



.logo{
    font-family:monospace; 
    /*font-family: cursive;*/
    /*font-family: system-ui;*/
    font-size: 22px;
    
    color: #000000;
  
}
.active{
    font-weight: bold;
    color: #2d2a2a;
}
.text-container p:nth-child(1){
    color: whitesmoke;
    font-family: cursive;
    font-weight: bold;
    font-size: 22px;
}
.text-container p:nth-child(2){
    color: whitesmoke;
    font-family: cursive;
    font-weight: bold;
    font-size: 60px;
    letter-spacing: 1px;
}
.text-container p:nth-child(3){
    color: whitesmoke;
    font-family: cursive;
    font-size: 30px;
   line-height: 30px;
}
.text-container p{
    line-height: 0px;
    margin: 45px 0px 25px;
}
.text-container{
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-10%,-40%);
    
}
.text-container button{
    font-size: 14px;
    font-weight: bold;
    margin: 0px 10px;
    border-radius: 10px;
    width: 130px;
    height: 42px;
    outline: none;
}
.hire-btn{
    border: 2px solid #373636;
    color: #373636;
}
.down-cv{
    border: none;
    color: #FFFFFF;
    background-color: #0b0b0b;
}
button:active{
    transform: scale(1.1);
}
.photo{
    height: 400px;
    left: 70%;
    bottom: 150px;
    position: absolute;
    transform: translateX(-70%);
    
}
.about-container{
    background-color: #FFFFFF;
    width: 80%;
    height: 330px;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: flex;
    margin: -7% auto 2px auto;
    position: relative;
    justify-content: space-evenly;
    align-items: center;
    
}
.about-container img{
    height: 250px;
}
.about-text{
    width: 550px;
}
.about-text p:nth-child(1){
    font-size: 23px;
    font-weight: bold;
    color: #403e3e;
}
.about-text p:nth-child(2){
    color: #3e3d3d;
    font-size: 13px;
    font-weight: bold;
    line-height: 5px;
}
.about-text p:nth-child(3),
.about-text p:nth-child(4),
.about-text p:nth-child(5){
    color: #7e7d7d;
    font-size: 16px;
    font-family: calibri;
}
.about-text button{
    width: 120px;
    height: 40px;
    color: #FFFFFF;
    font-family: calibri;
    background-color: #262525;
    
}.contact-me p:nth-child(1){
    font-family: cursive;
    color: #FFFFFF;
    line-height:none;
    font-size:30px;
    text-align: center;
    margin: 10px 0px;
}
.contact-me p:nth-child(2){
    font-family: cursive;
    color: #FFFFFF;
    line-height:none;
    font-size:30px;
    text-align: center;
    margin: 10px 0px;
    
}
.contact-me{
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flag_black_white_5x3.svg/1200px-Flag_black_white_5x3.svg.png");
    width: 100%;
    height: 350px;
    padding: 5px;
    margin: 5px;
}
footer{
    height: 300px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    position: relative;
}
footer p{
    font-family: cursive;
    font-weight: bold;
    color: #191919;
    font-size: 15px;
    line-height: 10px;    
}
footer a{
    width:40px;
    height: 40px;
    justify-content: center;
    align-items: center;
    background-color: #e6e3e3;
    margin: 20px 10px;
    border-radius: 50%;
}
  



social-icons a{
    width:40px;
    height: 40px;
    justify-content: center;
    align-items: center;
    background-color: #e6e3e3;
    margin: 20px 10px;     
    border-radius: 50%;
   
    
}
.social-icons i{
    width: 16px;
    height: 20px;
    color:#2b2b2b; 
  
    justify-content: space-between
}
.social-icons a:hover,
.a-social-b a:hover{
    background-color: #000000;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);

}
.social-icons a:hover i{
    background-color: #ffffff; 
    box-shadow :2px 2px 12px rgba(0,0,0,0.2);

}
.a-social-b{
    position: fixed;
    top:50%;
    right: 0px;
    transform: translateY(-50%);
}
.a-social-b a{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    margin: 0px;
    padding: 0px;
    background-color: #ffffff;
    border: 1px solid #cbcbcb;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);
}
.a-social-b i{
    color: #2b2b2b;
    font-size: 20px;
} 
        </style>  
    </head>
    <body>
        <br><br><br><br><br><br><br><br><br><br>
         <br><br><br><br><br><br><br><br><br><br>
         <br><br>
        
                
            <div class="text-container">
                <p>Hello,</p>
                <p>I'm Jamoliddin</p>
                <p>I'm full stack web programmer</p>
                <button class="hire-btn">Hire me</button>
                <button class="down-cv"><a style="text-decoration:none;"href="/images/test_1/CV.pdf/">Download CV</a></button>
            </div>
        <br><br> <br><br> <br><br>
        
        
        <div class="about-container">
           <img src="/images/test_1/image_13.jpg">
            <div class="about-text">
                <p>About Me</p>
                <p>Full Stack Web Programmer</p>
                <p>Hello,my name is Jamoliddin Sunnatov.I am a full stack web programmer.I know how to work with php,mysql,html,css and javascript .If you have any project or if you want make a website you can contact me.You really like my work.If you don't,I will change this until you like.I try to give you satisfaction result. </p>
                <p>I'm at the age of 19.</p>
                <p>I'm second year student in IT field at Amity University in Tashkent.</p>
                <button>Hire me</button>
                <button><a style="text-decoration:none;"href="/images/test_1/CV.pdf/">Download CV</a></button>
            </div>
           
        </div><br>
        <br><br>
        
        <div class="contact-me">
        
        <p>If you have any idea on your mind</p>    
        <p>Wanna get in touch or talk about a project?Feel free to contact me via email at  <a href="https://email:jamoliddin.sunnatov@mail.ru">jamoliddin.sunnatov@mail.ru</a> 
or contact via other platforms.</p>
       
        <footer>
            <div class="social-icons">
                <a href="https://www.facebook.com/jamoloddin.sunnatov"><i class="fab fa-facebook-f"></i></a>
                <a href="https://t.me/jamol0811"><i class="fab fa-telegram"></i></a>
                <a href="https://instagram.com/jamol_0811?igshid=13xw0vmuuowhn"><i class="fab fa-instagram"></i></a>
                <a href="https://email:jamoliddin.sunnatov@mail.ru"><i class="fas fa-at"></i></a>
                   
                
            </div>
        </footer>
            </div>
        <div class="a-social-b">
             <a href="https://www.facebook.com/jamoloddin.sunnatov"><i class="fab fa-facebook-f"></i></a>
             <a href="https://t.me/jamol0811"><i class="fab fa-telegram"></i></a>
             <a href="https://instagram.com/jamol_0811?igshid=13xw0vmuuowhn"><i class="fab fa-instagram"></i></a>
             <a href="https://email:jamoliddin.sunnatov@mail.ru"><i class="fas fa-at"></i></a>
                   
        </div>
        
        
