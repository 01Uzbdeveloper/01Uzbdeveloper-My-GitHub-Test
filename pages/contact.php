<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bizning 1-sahifamiz</title>
        <meta name="author" content="Jamoliddin">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ingliz tili haqida">
        <meta name="keywords" content="futbol so'zining ma'nosi,ilk jahon chempionati,UFA ">
        <link rel='stylesheet' href=''>
        <link rel='sylesheet' href="/home/murod/Downloads/fontawesome-free-5.14.0-desktop/svgs">
        <link rel='stylesheet' href="/home/murod/.cache/.fr-ek2lss/bootstrap-3.4.1-dist/css/bootstap.css">
        <script src="jquery-3.3.1.min.js"></script>
        <style>
           
            .container-fluid{
                width: 95%;
                margin: 20px 20px 0px 10px;
              
                height:80%;
                
            }
            #myForm table{
                
                margin: 10px auto;
                width: 55%;
            }
            .formlabel{
                text-align: right;
                font-weight: bolder;
                font-size: 130%;
            }
            #myForm table td:first-child{
                width: 200px;
            }
            .formelement{
                padding: 10px;
            }
            .formtitle{
                font-size: 2.5em;
                font-weight: bold;
                text-align: center;
                color: white;
                font-family: sans-serif;
            }
            img{
                width: 100%;
            }
            
        </style>
    </head>
    <body>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQyoMdwtPu4QFTxadCWFgY95MEumwiaVuZ3Og&usqp=CAU" alt="contact_page">
        <div class="container-fluid">
            <form id="myForm">
                <div class="formtitle">Contact Form</div>
                <div id="progressbar"></div>
                    <table>
                    <tr>
                        <td class="formlabel">First Name:</td>
                        <td class="formelement"><input name="first_name" required="required" class="form-control" placeholder="Your first name" type="text"></td>
                    </tr>
                    <tr>
                        <td class="formlabel">Last Name:</td>
                        <td class="formelement"><input name="last_name" required="required" class="form-control" placeholder="Your last name" type="text"></td>
                    </tr>
                    <tr>
                        <td class="formlabel">Email Address:</td>
                        <td class="formelement"><input name="email" required="required" class="form-control" placeholder="Your email address" type="email"></td>
                    </tr>
                    <tr>
                        <td class="formlabel">Select your location:</td>
                        <td class="formelement">
                            <select  name="location" required="required">
                                <option>Tashkent</option>
                                <option>Andijan</option>
                                <option>Namangan</option>
                                <option>Samarkhand</option>
                                <option>Bukhara</option>
                                <option>Navoiy</option>
                                <option>Tashkent region</option>
                                <option>Surkhanndaryo</option>
                                <option>Khorezm</option>
                                <option>Ferghana</option>
                                <option>Qashqadaryo</option>
                                <option>Jizzakh</option>   
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="formlabel">
                            Gender:
                        </td>
                        <td class="formelement">
                            Select a gender:
                            <fieldset>
                                
                                <label for="radio_male">Male</label>
                                <input type="checkbox" name="gender"  id="radio_male">
                                <label for="radio_female">Female</label>
                                <input type="checkbox" name="gender"  id="radio_female">
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td class="formlabel">
                            Education:
                        </td>
                        <td class="formelement">
                            Select Your Highest degree: 
                            <fieldset>
                                
                                <label for="edu_level">High school</label>
                                <input type="checkbox" name="edu" id="high_school">
                                <label for="edu_level">College/Lyceum</label>
                                <input type="checkbox" name="edu" id="college_lyceum">
                                <label for="edu_level">Bachelor</label>
                                <input type="checkbox" name="edu" id="bachelor">
                                <label for="edu_level">Masters</label>
                                <input type="checkbox" name="edu" id="masters">
                            </fieldset>
                        </td>
                    </tr>
                    <tr> 
                        <td colspan="2" style="text-align: center;">
                            <button class="btn btn-dark" name="reset" value="Reset">Reset</button>
                            <button class="btn btn-info"  name="submit">Submit</button>
                </table>
            </form>
            
        </div>
        <br>
    <a style="text-decoration: none; border: 2px solid #ccc;" href="index.php?action=logout">Logout</a> 
    <a style="text-decoration: none; border: 2px solid #ccc;" href="index.php">Back</a>        
    </body>   
