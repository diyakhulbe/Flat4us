<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['con'];
    $age = $_POST['age'];
    $addres = $_POST['address'];
    $gender = $_POST['gender'];
    $conn = mysqli_connect("localhost", "root", "", "data");
    $insert = "INSERT INTO info values('$name','$email','$contact','$age','$gender','$addres')";

    if ($conn->query($insert)) {
        echo"<script>alert('we will contact u shortly')</script>";
    }
    mysqli_close($conn);
}
?>

<html>
    <head>
        <title>
            Registration Form
            
        </title>
        <link rel="stylesheet" herf="b1.css">
        <style>* {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
          }
      
          html {
            font-size: 62.5%;
            /* /1 rem =10 px/ */
          }
      
          .header {
            padding: 0 4.8rem;
            height: 10rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* color: rgba(249, 249, 247, 0.555); */
            background-color:#337ab7;
          }
      
          .header .logo {
            /* align-items:left; */
            padding: 0em;
            height: 8rem;
            /* width:20rem; */
            text-decoration: none;
          }
      
          .navbar {
            text-decoration: none;
          }
      
          .navbar ul {
            list-style: none;
            display: flex;
            gap: 4rem;
            text-transform: uppercase;
            text-decoration: none;
      
          }
      
          .anchor:link,
          .anchor:visited {
            display: inline-block;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 500;
            color:white;
            font-style: bold;
          }
      
          .anchor:hover,
          .anchor:active {
            color: rgb(10, 204, 253);
            transition: all 0.3s;
          }
      
          body {
            background-color: #E8E3D3;
      
          }
section{
    justify-content: center;
    display: flex;
    
    padding: 30px; 
}
div{
    width: 400px;
    /* height: 350px; */
    margin-top: 1cm;
    border:2px black solid;
    box-shadow: 2px;
    box-shadow: 10px 10px 10px 1px;
    font-size: 2rem;
}
form{
    padding:0.2cm 0.2cm 0.2cm 0.2cm;

}

input {
    width: 370px;
    height: 30px;
    border-radius: 0.5rem;
    text-transform: capitalize;
    
}
#g1{
    width: 30px;
    height: 12px;
}
        </style>
    </head>
    <body>
  <header class="header">
    <img src="logo.png" alt="logo" class="logo">
    <nav class="navbar">
      <ul class="heads" style="color:blue;">
        <li><a class="anchor" href="home.html">home</a></li>
        <li><a class="anchor" href="buy.html">buy</a></li>
        <li><a class="anchor" href="shttp://localhost/filess/index.php">sell</a></li>
        <li><a class="anchor" href="About.html">About</a></li>
        <li><a href="buy.html"> <button style="background-color: #337ab7; color: white;" class="bl">BOOK NOW</button></a></li>
      </ul>

    </nav></header>
    <div style="display:flex;justify-content:center;margin-left:39%">
    
<form method="POST" id="f1">
    <h1 style="text-align: center;"><b>REGISTRATION FORM:</b></h1>
    <br><br>
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" required name="name"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" required name="email"><br><br>
    <label for="contact">Contact:</label><br>
    <input type="text" id="contact" required name="con"><br><br>
    <label for="age">Age:</label><br>
    <input type="number" id="age" required name="age"><br><br>
    <label for="gender">Gender:</label><br>
    <input type="radio" id="g1" name="gender" value="male" name="gender"> Male
    <input type="radio" id="g1" name="gender" value="female" name="gender">Female
    <input type="radio" id="g1" name="gender" value="Other" name="gender">Other<br><br>
    <label for="address">Address:</label><br>
    <input type="textarea" rows="9" cols="70" id="address" name="address" required><br><br>
    <input type="submit" style="
                margin-left: 45%;
                text-align: center;
                height:30px;
                width: 50px;cursor:pointer">

</form>    
</div>
<br>
      <br>
      <div style="background-color:#FBF7F2;text-align:center;color:#86A999;font-size: 2rem; width:100%">
        Contact us as at: www.flat4us@gmail.com
        Phone no.: 1234******
      </div>
<br>
</body>
</html>