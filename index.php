<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
<style>
  /* * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Times New Roman', Times, serif;
      text-decoration: none;
    } */

    html {
      font-size: 62.5%;
      /*1 rem =10 px*/
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
  </style>
    </head>
    <header class="header">
        <img src="logo.png" alt="logo" class="logo">
        <nav class="navbar">
          <ul class="heads" style="color:blue;">
            <li><a class="anchor" href="home.html">home</a></li>
            <li><a class="anchor" href="buy.html">buy</a></li>
            <li><a class="anchor" href="http://localhost/filess/index.php">sell</a></li>
            <li><a class="anchor" href="about.html">About</a></li>
            <li><a href="buy.html"> <button style="background-color: #337ab7; color: white;" class="bl">BOOK NOW</button></a></li>
          </ul>
    
        </nav>
      </header>
    <body>
   
        <div class="container d-flex justify-content-center
        align-items-center"
        style="min-height:100vh ">
<form method="POST" class="border shadow p-3 rounded"
        style="width:400px">
          <h1 id ="in" style="margin-bottom:50px" class="text-center">LOGIN PLEASE</h1>
          <?php
        $conn=mysqli_connect("localhost","root","","user_info");
        if(isset($_POST['n3'])){
         $name=$_POST['n1'];
         $pass=$_POST['n2'];
         $a="select * from users where NAME='$name' and PASSWORD='$pass'";
         //echo $a;
       $res=$conn->query($a);
       
         if($res->num_rows>0)
        {
          $r="select link from users where  NAME='$name'";
          $res=mysqli_query($conn,$r);
          $row=mysqli_fetch_assoc($res);
          //  echo "<a href='".$row['link']."'>DASHBOARD</a>";
          header("Location:".$row['link']." ");
        }
        else{
          echo"<script>alert('userNotfound')</script>";
        }
      }
        ?>
          <div class="mb-3">
                  <label for="exampleInputEmail1"  class="form-label">Username</label>
                  <input type="text" class="form-control" name="n1" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Password</label>
                   <input type="password" class="form-control" name="n2" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" name="n3" class="btn btn-primary">Submit</button>
</form>
    </div>
    </body>
</html>