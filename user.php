
<?php 
  session_start();
  $hostname ="localhost";
  $username ="root";
  $password ="";
  $dbname ="abc";

  $conn =new mysqli($hostname,$username,$password,$dbname);
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>
   body {
    margin: 0%;
    padding: 0%;
  }

  .background{
    background-color: white;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100vw;
    height: 100vh;
  }

  .logo{
    position: relative;
    width: 100%;
    height: 10%;
    background-color: darkslategray;
    margin-top: 0%;
  }

  .image{
    position: absolute;
    width: 10%;
    left: 1%;
    height: 100%;
    
  }

  .profile{
    position: absolute;
    right: 5%;
     top: 5%;
     width: 80px;
     height: 70%;
     background-color: white;
     border-radius: 10%;
     cursor: pointer;
  }
  .user_inform{
      position: absolute;
      right: 10%;
      top: 10%;
      height: 0%;
      display: none;
      background-color: palevioletred;
      padding-top: 10px;
      margin-bottom: 10px;
      padding-left: 10px;
      padding-right: 10px;
      text-align: center;
      border-radius: 5%;
    }

    .photo1{
      width: 35%;
      height: 70%;
      position: absolute;
      top: 20%;
      right: 10%;
      border-radius: 10px;
      background-color: white;
    }

    .photo1 img{
      width: 100%;
      height: 100%;
      border-radius: 20px;
    }

    .sale_items{
      font-size: 40px;
      margin-left: 5%;
      margin-top: 20%;
    }

    #back_user_details{
      position: absolute;
      left: 0%;
      top: 0%;
    }
  .search{
    position: absolute;
    right: 10%;
     top: 5%;
     width: 80px;
     height: 70%;
     background-color: white;
     border-radius: 10%;
     cursor: pointer;
  }

  .wel{
    color: black;
    font-size: 50px;
    margin-top: 2%;
    margin-left: 10%;
  }

  

   #phone_page{
      font-size: 40px;
      margin-left: 5%;
      
    }

    #phone_items {
            display: flex; /* Number of columns */
            flex-wrap: wrap;
            column-gap: 5px; /* Gap between columns */
        }

        #labpage_page{
          font-size: 40px;
          margin-left: 5%;
        }

        #lab_iterms{
          display: flex; /* Number of columns */
            flex-wrap: wrap;
            column-gap: 5px; /* Gap between columns */
        }

        .alb {
             /* Space between items */
            height: 30%;
            width: 20%;
            text-align: center;
            margin-top: 7%;
           background-color: antiquewhite;
           border-radius: 10%;
           align-items: center;
           justify-content: center;
           margin-left: 30px;
        }

        .alb img {
            width: 90%; /* Ensure images don't exceed column width */
            height: auto;
            height: 90%;
            margin-left: 0%;
             border-radius: 20px;
        }

        #phone_link{
          
            display: inline-block;
            padding: 10px 20px;
            background-color: #0074d9; /* Button background color */
            color: #fff; /* Button text color */
            text-decoration: none;
            border: 1px solid #0074d9; /* Button border */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Add a hover effect */
        
        }

        #phone_link:hover {
            background-color: #0056b3; /* Change background color on hover */
        }


        #lab_link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0074d9; /* Button background color */
            color: #fff; /* Button text color */
            text-decoration: none;
            border: 1px solid #0074d9; /* Button border */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Add a hover effect */
        }

       #lab_link:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

                
        .star{
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 0;
     }


li{
    padding-top: 5px;
}

.fa{
    font-size: 20px;
    transform-origin: 0.4s;
    margin: 3px;
   }

.checked{
    color: orange;
   }

.fa:hover{
    transform: scale(1.3);
    transition: .6s;
}

  #buy{
    background-color: #0074d9;
    font-size: 40px;
    width: 30%;
    border-radius: 20px;
    cursor: pointer;
  }

  #buy:hover{
    background-color: lightskyblue;
  }   

  @media(max-width:568px ){
    .image{
      width: 20%;
    }

    .user_inform{
       width: 50%;
       height: 30%;
    }

    .user_inform h2{
      font-size: 20px;
    } 

    .search,.profile{
      width: 50px;
      
    }
    
    .search{
      right: 20%;
    }
    .wel{
      font-size: 30px;
    }
    .sale_items{
      position: absolute;
      font-size: 25px;
      top: 60%;
    }

    .alb{
      width: 80%;
    }

   #lab_link {
   position: absolute;
    top: 90%;
   }
   #phone_link {
   position: absolute;
    top: 90%;
    left: 25%;
   }


   .photo1{
      height: 40%;
      width: 50%;
    }

    #buy{
      width: 100px;
    }
    
  }
  @media(max-width:768px) and (min-width:569px ){
    .image{
      width: 20%;
    }

    .search,.profile{
      width: 70px;
      
    }

    #buy{
      width: 100px;
    }

    #add_iterms{
      top: 90%;
    }
    .search{
      right: 20%;
    }

    .wel{
      font-size: 30px;
    }
    .sale_items{
      position: absolute;
      font-size: 35px;
      top: 65%;
    }
    #lab_link {
   position: absolute;
    top: 90%;
   }
    #phone_link {
   position: absolute;
    top: 90%;
    left: 15%;
   }

   .alb{
      width: 40%;
    }

    .photo1{
      height: 45%;
      width: 60%;
      top: 27%;
    }
  }

  @media(min-width:769px){
    .image{
      width: 20%;
    }

    .search,.profile{
      width: 70px;
      
    }

    #buy{
      width: 100px;
    }

    #add_iterms{
      top: 90%;
    }
    .search{
      right: 20%;
    }

    .wel{
      font-size: 30px;
    }
    .sale_items{
      position: absolute;
      font-size: 35px;
      
    }
    #lab_link {
   position: absolute;
    top: 90%;
   }
    #phone_link {
   position: absolute;
    top: 90%;
    left: 15%;
   }

   .alb{
        width: 27%;
    }

    .photo1{
      height: 50%;
      width: 30%;
      top: 27%;
    }
    
   
  }

  </style>
</head>
<body>
    <div class="background" id="background">
       <div class="logo" id="logo">
        <img class="image" src="https://tse1.mm.bing.net/th?id=OIP.sY33jsRijWxBNY3_hA8XYAHaEK&pid=Api&P=0&h=220" alt="" >
        <button class="search" id="black"><ion-icon  name="contrast-outline"></ion-icon></button>
         <button class="profile" id="profile"><ion-icon id="change" name="person-outline"></ion-icon></button>
         
      </div >
       <h1 class="wel" id="wel"> welcome to ABC Dear <?php echo " ". $_SESSION['name']?>! </h1>

       <h2 class="sale_items" id="sale_items">we saling technology <br> items you could order <br> <span> phone,labtop and other iterms</span></h2>
       <div class="photo1">
        <img src="OIP.jpg" alt="" srcset="">
       </div>
       <div class="user_inform" id="user_inform">
        <button id="back_user_details">Back</button>
        <h2><ion-icon name="person-outline"></ion-icon>:<?php echo $_SESSION['name']?></h2>
        <h2><ion-icon name="mail-outline"></ion-icon>:<?php echo $_SESSION['email']?></h2>
        <h2><ion-icon name="call-outline"></ion-icon>:<?php echo $_SESSION['phone_nu']?></h2>
         
       </div>
       <a href="#phone_items" id="phone_link">phone iterms</a>
       <a href="#lab_iterms" id="lab_link">click</a>
    </div>

    <div id="phone_itemsas">
      <h1 id="phone_page"> phone items</h1>
      <section id="phone_items">
    <?php 
          $sql = "SELECT * FROM images where category= 'phone'";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="<?=$images['image_url']?>">
              
              <ul class="star"> 
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
				   <h1 id="phone_name"><?php echo $images['name'] ?></h1>
				   <h1 id="phone_name"><?php echo $images['price'] ."$" ?></h1>
           <button id="buy">buy</button>
             </div>
          		
    <?php } }?>
       </section>
    </div>
    
    <div id="lab_itemsas">
      <h1 id="labpage_page"> leb items</h1>
      <section id="lab_iterms">
    <?php 
          $sql = "SELECT * FROM images where category= 'laptop'";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
              
             <div class="alb">
             	<img src="<?=$images['image_url']?>">
              <ul class="star"> 
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
				   <h1 id="lab_name"><?php echo $images['name'] ?></h1>
           <h1 id="lab_name"><?php echo $images['price'] ."$" ?></h1>
           <button id="buy">buy</button>
             </div>
          		
    <?php } }?>
       </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
     <script>
      
     let x =document.getElementById("black");
    x.addEventListener('click',redark);

      function redark(){
       if( document.getElementById("background").style.backgroundColor=='white'){
        document.getElementById("background").style.backgroundColor="black";
        document.getElementById("black").innerHTML='<ion-icon name="sunny-outline"></ion-icon>';
        document.getElementById("wel").style.color="white";
        document.getElementById("sale_items").style.color="white";
        document.getElementById("phone_page").style.color="white";
        document.getElementById("phone_name").style.color="white";
        document.getElementById("lab_name").style.color="white";
        document.getElementById("labpage_page").style.color="white";
        document.getElementById("lab_itemsas").style.backgroundColor="black";
        document.getElementById("phone_itemsas").style.backgroundColor="black";
       
       }else{
        document.getElementById("background").style.backgroundColor='white';
        document.getElementById("black").innerHTML='<ion-icon  name="contrast-outline"></ion-icon>';
        document.getElementById("wel").style.color="black";
        document.getElementById("sale_items").style.color="black";
        document.getElementById("phone_page").style.color="black";
        document.getElementById("phone_name").style.color="black";
        document.getElementById("lab_name").style.color="black";
        document.getElementById("labpage_page").style.color="black";
        document.getElementById("lab_itemsas").style.backgroundColor="white";
        document.getElementById("phone_itemsas").style.backgroundColor="white";
       
       }
      }

      document.getElementById("profile").onclick= function appear(){
        document.getElementById("user_inform").style.display='block';
        document.getElementById("user_inform").style.height='25%';

      }
      document.getElementById("back_user_details").onclick= function disappear(){
        document.getElementById("user_inform").style.display='none';
        document.getElementById("user_inform").style.height='0%';

      }
      
     
     </script>

</body>


</html>