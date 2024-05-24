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
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'playlistff'; /*memberikan nama bebas untuk font*/
    src: url('PlaylistFF/PlaylistScript.otf');/*memanggil file font eksternalnya di folder PlaylistFF*/
  }

  .jumbotron h1 {
    font-family: 'playlistff';
  }

  .col-sm-8  h3 {
    color: #303030;
    font-family: 'playlistff';
  }
  
  h1
  {
    font-family: 'playlistff';
  }
</style>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    background-image: linear-gradient(to right, #fff, #e9cfb4);
  }
  h2 {
    font-size: 40px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 20px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: bold;
    letter-spacing: 1px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 10px;
  }  
  .jumbotron {
    background-image: linear-gradient(to right, #fff, #e9cfb4);
    color: #000;
    padding-left: 60px;
    padding-top: 90px;
    text-align: justify;
    font-size: 15px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  .jumbotron p {
    color: #af4e00;
    padding-right: 5px;
  }

  .jumbotron h1 {
    text-align: justify;
    padding-right: 50px;
  }

  .desc h1 {
    font-size: 100px;
  }

  .jumbotron img {
    float: right;
    padding-right: 0px;
    padding-top: 0px;
  }

  .jumbotron button {
    width: 150px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    padding: 12px 20px;
    border-radius: 10px;
    background-color: white;
    color: #af4e00;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 1px;
  }

  .jumbotron button:hover {
    transition: 0.2s ease-in-out;
    color: #959c9c;
    background-color: white;
  }

  .container-fluid {
    padding-left: 60px;
    padding-top: 43px;
    padding-right: 60px;
  }

  .container-fluid .col-sm-4 img{
   padding-left: 13px;
  }

  .bg-grey {
    background-color: #fff;
  }

  .col-sm-8 p {
    text-align: justify;
  }

  .col-sm-8  h2 {
    color: #303030;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }

  .col-sm-8 .btn-lg {
    background-color: #af4e00;
    color: #fff;
  }

  .col-sm-8 .btn-lg:hover {
    border: 1px solid #af4e00;
    background-color: #fff !important;
    color: #af4e00;
  }

  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #af4e00;
  }
  .carousel-indicators li {
    border-color: #af4e00;
  }
  .carousel-indicators li.active {
    background-color: #af4e00;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #af4e00; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }

  .panel-footer .btn:hover {
    border: 1px solid #af4e00;
    background-color: #fff !important;
    color: #af4e00;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #af4e00 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #af4e00;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
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
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #af4e00;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }

    .col-sm-4 img {
      width: 100px;
      height: 100px;
    }

    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
      background-color: #af4e00;
      color: #fff;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
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
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#products">PRODUCTS</a></li>
        <?php 
          if(!isset($_SESSION["user"]))
            echo '<li><a href="login.php">LOGIN</a></li>';
        ?>
        <li><a href="#pricing">PRICING</a></li>
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

<div class="jumbotron">
  <img src="image/cc4rbg.png" alt="foto">
  <div class="desc">
    <h1>Receive 20% off your first order as a member!</h1><br>
    <p>For our desserts we always use premium ingredients. 
      Our products are 100% handmade</p>
  </div>
  <button onclick="window.location.href='login.php'">READ  MORE</button>
</div>

