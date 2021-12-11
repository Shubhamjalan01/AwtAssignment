<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/HomePage.css">
    <script src="./func.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to student Information Centre
      </p>
      <a href="Logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <h2 style="text-align: center;">My Favorite Sports Person</h2><br>
<div style="text-align: center;">
    <a href="https://en.wikipedia.org/wiki/Sachin_Tendulkar">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo-LuObiXlSLAdbdzOha2g4MjRLLxX6XIj9g&usqp=CAU" alt="sportsman" width="20%">
    </a>  
    <a href="https://en.wikipedia.org/wiki/Virat_Kohli">
    <img src="https://cdn.wionews.com/sites/default/files/styles/story_page/public/2021/12/10/225880-kohli-afp-31.png" alt="sportsman" width="20%">
    </a>
    <a href="https://en.wikipedia.org/wiki/Mary_Kom">
    <img src="https://img.olympicchannel.com/images/image/private/t_16-9_3200/primary/u4jtjhkfoppz8xnmcss5" alt="sportsman" width="20%">
    </a>
    <a href="https://en.wikipedia.org/wiki/Viswanathan_Anand">
    <img src="https://www.recruitment.guru/wp-content/uploads/2017/09/chess.jpg" alt="sportsman" width="20%">
    </a>
    <a href="https://en.wikipedia.org/wiki/Neeraj_Chopra">
    <img src="https://images.news18.com/ibnlive/uploads/2021/08/1628426758_neeraj-chopra-1200x800.jpg?impolicy=website&width=510&height=356" alt="sportsman" width="20%">
    </a>
  </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
