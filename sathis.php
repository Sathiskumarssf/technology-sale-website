<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <style>
    *{
        margin: 0%;
        padding: 0%;
    }

    .main{
        background: url("white-bokeh-effect-black-background.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100vw;
        height: 100vh;
        text-align: center;
        justify-content: center;
        align-items: center;

    }

    .btn{
        color: black;
        background-color: blue;
        width: 150px;
        height: 30px;
        border: 1px solid white;
        border-radius: 10px;
        margin-top: 80px;
    }

    .btn:hover{
        background-color: cornflowerblue;
    }
  </style>
<body>
    <div class="main">
          <h1 style="color: yellow;">you sucssfully create a count you can login now</h1><br>
          <h2 style="color: yellow;">
            you can view and purcharse our protect now throught our main page 
          </h2>
          <button onclick="load()" class="btn">back to home</button>
    </div>
</body>
<script>
    function load(){
        window.location.href= "main.php"
    }
</script>
</html>

