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

  h3 {
       font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; align-items: center;
      }

  .search {
    background-image: linear-gradient(to right, #fff, #e9cfb4);
    color: #303030;
    border-color: #af4e00;
    position: center;
    padding: 75px 192px 25px 192px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  .input-group .form-control {
    border-color: #af4e00;
    box-shadow: 0;
  }

  .input-group .form-control {
    border-color: #af4e00;
  }
 
  .btn-danger {
    background-color: #af4e00;
    border-color: #af4e00;
  }

  .btn-danger:hover{
    background-color: transparent;
    color: #af4e00;
  }

  .gambar img {
    margin-bottom: 10px;
  }

  .grab h2 {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: #303030;
    letter-spacing: 1px;
    margin-bottom: 30px;
    text-align: center;
  }
  
  .col-sm-1 {
    width: 208px;
    padding-right: 10px;
    text-align: center;
  }

  .col-sm-1 p {
    text-align: center;
  }

  .thumbnail {
    letter-spacing: 1px;
    font-size: 12px;
    text-align: center;
    padding-bottom: 30px;
    position: center;
    border: 5;
    border-radius: 0;
  }
  .thumbnail img {
    width: 90%;
    height: 100%;
    margin-bottom: 20px;
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
          if(isset($_SESSION["user"]))
            echo '<li><a href="#">HOME</a></li>';
        ?>
        <?php 
          if(!isset($_SESSION["user"]))
            echo '<li><a href="login.php">LOGIN</a></li>';
        ?>
        <li><a href="#produk">PRODUCTS</a></li>
        <?php 
          if(isset($_SESSION["user"]))
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

<div class="search">
<form>
    <div class="input-group">
      <input type="search" class="form-control" size="50" placeholder="Search" required>
      <div class="input-group-btn">
        <button onclick="window.location.href='menu.php'" type="button" class="btn btn-danger">Search</button>
      </div>
    </div>
  </form>
</div>

<div class="gambar">
  <img style="width: 100%;" src="image/menursz.png" alt="foto">
</div>

<div id="produk" >
<div class="grab">
  <h2>GRAB YOURS!</h2>
</div>
</div>
