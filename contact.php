<html>
    <head>
        <style>     
 body {
  font-family: Arial, Helvetica, sans-serif;
  background:url('images/test_1/image_8.jpg');  
  background-size:1300px 500px;
  background-repeat: no-repeat;
 }



/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 18px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  
  background-color: #f2f2f2;
  padding: 0px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}       
    
    




</style>
</head>
<body>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br>
  <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Tash">Tashkent city</option>
          <option value="Tash reg">Tashkent region</option>
          <option value="Nam">Namangan</option>
          <option value="Sam">Samarqand</option>
          <option value="bukh">Bukhara</option>
          <option value="Nav">Navoiy</option>
          <option value="Surx">Surxandaryo</option>
          <option value="Xor">Xorazm</option>
          <option value="And">Andijan</option>
          <option value="Fer">Fergana</option>
          <option value="Qash">Qashqadaryo</option>
          <option value="Jiz">Jizzax</option>
          
        </select>
        <label for="number">Phone number</label>
        <input type="text" name="phonenumber" placeholder="Your phone number...">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Your email...">
        <label for="subject">I would like to know</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>

