<?php session_start(); 

if(isset($_GET['page'])){
  $page = $_GET['page'].".php";
}else{
  $page = 'mydata.php';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Final Project(PGD107)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="libs/bootstrap.min.css">
  <script src="libs/jquery.min.js"></script>
  <script src="libs/popper.min.js"></script>
  <script src="libs/bootstrap.min.js"></script>
</head>    
<body>
   <div class="container bg-primary text-white">
  <h3>INSTITUTE OF INFORMATION TECHNOLOGY</h3>
  <p>University of Dhaka</p>




<nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" width="60px"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="index.php">HOME</a>
    </li>
	<tr>  </tr>
    <li class="nav-item">
      <a class="nav-link" href="index.php">ABOUT IIT</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        STUDENT CORNER
      </a>
      <div class="dropdown-menu">
       
  <?php
if (!isset($_SESSION['login'])) {   ?> 
     <a class="dropdown-item" href="?page=apply">APPLY</a>   
        <a class="dropdown-item" href="?page=login">LOGIN</a>
         <?php
       }else{  ?>
        <a class="dropdown-item" href="?page=testimonial">TESTIMONIAL</a>
        <a class="dropdown-item" href="action.php?logout">LOG OUT</a>
         <?php }  ?>
      </div>
    </li>

  </ul>


</nav>
</div>

<hr>
  
<div class="container">


  <p style="color: green"><?php
if (isset($_SESSION['apply_message'])) {
 echo $_SESSION['apply_message'];
}
  ?></p>
 <?php  
  include $page;
  ?>
  
   
</div>

</body>
</html>