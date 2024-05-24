<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>D'MONIQUE STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="stephanie_4" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
  .navbar {
    margin-bottom: 30px;
    background-image: linear-gradient(to right, #fff, #e9cfb4);
    z-index: 9999;
    border: 0;
    font-size: 13px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  .navbar li {
    padding-top: 10px;
  }

  .navbar li a, .navbar  {
    color: #af4e00 !important;
  }

  .navbar-brand {
    background-image: url('image/logo.png');
    width: 60px;
    height: 70px;
    background-position: center;
    background-size: 60px;
    background-repeat: no-repeat;
  }

  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #e9cfb4 !important;
    background-color: #fff !important;
    background-size: 70px;
    border-radius: 25px;
  }

  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }

  .signup {
    font-family:'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
  }

  .signup h2 {
    font-size: 40px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-top: 50px;
    margin-bottom: 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .sign {
    padding-top: 50px;
    gap: 10px;
    margin: 0px;
    place-items: center;
  }

  .sign input {
    width: 240px;
    background: transparent;
    border: 0px;
    border-bottom: 1px solid #000;
    font-size: 15px;
    padding: 10px;
  }

  .sign > :is(input, button) {
    height: 40px;
    outline: none;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  .sign button {
    cursor: pointer;
    width: 200px;
    height: 40px;
    margin-top: 10px;
    margin-bottom: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background: #af4e00;
    color: #fff;
    border: 0;
    border-radius: 5px;
    font-size: 15px;
    letter-spacing: 1px;
  }

  .sign p{
    color: #af4e00;
    font-size: 14px;
    text-align: center;
  }

  .sign a {
    color: #fff;
    font-size: 14px;
    text-align: center;
    text-decoration: none; 
  }

  .sign button:hover {
    border: 1px solid #af4e00;
    background-color: transparent !important;
    color: #af4e00;
  }

  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #af4e00;
  }
  
  </style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset=60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <?php 
          if(!isset($_SESSION["user"]))
            echo '<li><a href="index.php">HOME</a></li>';
        ?>
        <li><a href="#products">PRODUCTS</a></li>
        <?php 
          if(!isset($_SESSION["user"]))
            echo '<li><a href="login.php">LOGIN</a></li>';
        ?>
        <?php 
          if(!isset($_SESSION["user"]))
            echo '<li><a href="contact.php">CONTACT</a></li>';
        ?>
        <?php 
          if(isset($_SESSION["user"]))
            echo '<li><a href="logout.php">LOGOUT</a></li>';
        ?>
      </ul>
    </div>
  </div>
</nav>

