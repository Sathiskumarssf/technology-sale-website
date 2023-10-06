<?php
  session_start();
  $hostname ="localhost";
  $username ="root";
  $password ="";
  $dbname ="abc";

  $conn =new mysqli($hostname,$username,$password,$dbname);
  
  
    
  if(isset($_POST["btn"])){
    $email =$_POST["email"];
    $password = $_POST["password"];
    $name =$_POST["name"];
    $phone_nu =$_POST["no"];
    $sql ="INSERT INTO user_details (email,password,name,phone_number) VALUES('$email','$password','$name','$phone_nu')";

     if(!empty($email)&& !empty($password)&&  !empty($name) &&!empty($phone_nu)){
      if((strlen($password)) >=8 && (strlen($phone_nu) ) ==10){
         mysqli_query($conn,$sql);
         header("location:sathis.php");
      }else{
         header("location:show.html");
      }
     }else{
        echo '<script>alert("You shoud fill all the blanks!");</script>';
     }
  }

  if(isset($_POST["login"])){
    $checkemail =$_POST["enteremail"];
    $checkpassword =$_POST["enterpassword"];

    $sql1 = "SELECT * FROM user_details";
    $admin = "SELECT * FROM admin_details";
    $super_admin="SELECT * FROM super_admin";

$result = mysqli_query($conn, $sql1);
$admin_result = mysqli_query($conn, $admin);
$super_admin_result = mysqli_query($conn, $super_admin);

   if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["email"] === $checkemail && $row["password"] === $checkpassword) {
             $_SESSION["name"] =$row["name"];
             $_SESSION["email"]=$row["email"];
             $_SESSION["phone_nu"]=$row["phone_number"];
            header("location: user.php");
        }
    }
}

if ($admin_result->num_rows > 0) {
    while ($admin_row = mysqli_fetch_assoc($admin_result)) { // Use a different variable name here
        if ($admin_row["email"] === $checkemail && $admin_row["password"] === $checkpassword) {
            $_SESSION["name"] =$admin_row["name"];
             $_SESSION["email"]=$admin_row["email"];
             $_SESSION["phone_nu"]=$admin_row["password"];
            header("location: admin.php");
        }
    }
}
if ($super_admin_result->num_rows > 0) {
    while ($super_admin_row = mysqli_fetch_assoc($super_admin_result)) { // Use a different variable name here
        if ($super_admin_row["email"] === $checkemail && $super_admin_row["password"] === $checkpassword) {
             $_SESSION["name"] =$super_admin_row["name"];
             $_SESSION["email"]=$super_admin_row["email"];
             $_SESSION["phone_nu"]=$super_admin_row["password"];
            header("location: super_admin.php");
        }
    }
}


}
  



  
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="main.css">
</head>
  
<body>
    <form action="main.php" method="post">
       
    <div  class="main-page">
        
        <ul class="discription">
            <li><a class="location" href="https://www.google.com/maps/place/Kithul+Kanda+Mountain+Resort/@6.8583321,80.0973705,17z/data=!3m1!4b1!4m9!3m8!1s0x3ae252d4d9ec542d:0xd5a752faec4b6cc5!5m2!4m1!1i2!8m2!3d6.8583321!4d80.0973705!16s%2Fg%2F1jglyw94m?entry=ttu">Location</a></li>
            <li><a class="pass" href="https://mail.google.com/mail/u/0/#inbox">Gmail</a></li>
            <li><a class="about" href="">AboutAS</a></li>
            <li><a class="fb" href="https://www.facebook.com/sathiskumar.sathis.1612147">Facebook</a></li>
           
        </ul>
    <div ><img class="imag"  src="https://tse1.mm.bing.net/th?id=OIP.sY33jsRijWxBNY3_hA8XYAHaEK&pid=Api&P=0&h=220" alt="" srcset=""></div>
     
     <div class="content" id="content">
       <h1 class="dise">WE ARE SELLING technology ITEMS <BR></BR>&You can but through our website</h1>
       <h3 class="dise2" style="color: #fff;margin-left:20px">You have a account:</h3> <button id="show"><span></span>Sign In</button><br>
       <h3 class="dise3" style="color: #fff;">You don't have a account:</h3> <button id="creat" ><span></span>Sign Up</button>
     </div>

     <div class="collect" id="collect">
        <button id="back">back</button>
        <div class="collect-1">
            <h1>wel come dear customer</h1>
             <h2>you have a account </h2>
            <h3>you could login</h3>
        </div>
       <label for="email" class="label">Enter your email: </label>
       <input type="email" name="enteremail" id="input1"><br><br>
       <label for="password">Enter your pasword: </label>
       <input type="password" name="enterpassword" id="input2"><br>
      <button class="login" name="login">login</button>
     </div>
    <form action="" method="post">
    <div class="creat-aco" id="creat-aco">
        <button id="back1">back</button>
        <div class="collect-1">
            <h1>wel come dear customer</h1>
            <h2>you don't have account </h2>
            <h3>you could create it</h3>
        </div>
       <label for="email" class="labelemail">Enter your email: </label>
       <input type="email" name="email" id="input5"><br><br>
       <label for="password" id="pass1">Enter your pasword: </label>
       <input type="password" name="password" id="pass2"><br><br>
       <label for="name" >Enter your name  : </label>
       <input type="text"  name="name" id="name"><br><br>
       <label for="no">Your phone number: </label>
       <input type="number" name="no" id="no">
      <button class="create-btn" id="create-btn" name="btn">creat acount</button>
     </div>
    </form>
    </div>
    </form>
     
</body>
    <script>
        document.getElementById("show").onclick= function show(){
            document.getElementById("collect").style.height='50%';
            document.getElementById("collect").style.display='block';
            document.getElementById("content").style.display='none'
            event.preventDefault();
        }
        document.getElementById("back").onclick= function back(){
            document.getElementById("collect").style.height='0px';
            document.getElementById("collect").style.display='none';
            document.getElementById("content").style.display='block';
            event.preventDefault();
        }

        document.getElementById("creat").onclick= function show1(){
            document.getElementById("creat-aco").style.height='60%';
            document.getElementById("creat-aco").style.display='block';
            document.getElementById("content").style.display='none';
            event.preventDefault();
        }

     
        document.getElementById("back1").onclick= function show1(){
            document.getElementById("creat-aco").style.height='0px';
            document.getElementById("creat-aco").style.display='none';
            document.getElementById("content").style.display='block';
            event.preventDefault();
        }

       let s= document.getElementById("pass2");
       let s2 =document.getElementById("no")
        s.addEventListener('mouseenter',add);
       s2.addEventListener('mouseenter',add1);
        function add(){
        document.getElementById("pass2").placeholder = 'the length >  8';
       
        }
        function add1(){
        document.getElementById("no").placeholder = 'the length = 10 && like "07..."';
      
        }
       

    </script>
</html>


