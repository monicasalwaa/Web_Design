<?php include 'header.php' ?>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
  <div class="col-sm-8">
    <h2>About Us</h2>
    <h3>D'Monique</h3><p>D'Monique is one of the fastest growing grab-and-go store cake and dessert in Indonesia. The idea of D' Monique started because the founders have the mission to spread their passion for premium cake and dessert brand from Indonesia to the rest of the world.
    </p><br>
    <p>D' Monique Store's journey began in 2015, at which time our founders started a business selling premium Cheese Cake to relatives and neighbors with a Repeat Order system.
       With only 1 mixer and oven, now D'Monique is well known throughout Indonesia through its online sales.</p><br>
    <p>The concept of Premium Cake is what makes D' Monique Store go viral and be known by the public. Starting with just posting on Instagram, the content created attracted thousands and even millions of people to follow D' Monique's Instagram. The D'Monique store was first opened in 2016 specifically for purchases via online applications, now D'Monique has its own shop and produces 3,000 premium cakes and desserts every day.</p>
    
    <br><button onclick="window.location.href='contact.php'" class="btn btn-default btn-lg">Get in Touch</button>
  </div>
  <div class="col-sm-4">
      <img style="padding-right: 0px;" src="image/cc2rbg.png" alt="foto" />
  </div>
  </div>
</div>

<!-- Container (Menu Section) -->
<div id="products" class="container-fluid text-center">
  <h2>OUR PRODUCTS</h2>
  <h4>What we offer</h4>
  <div class="row slideanim">
    <div class="col-sm-4">
      <div class="serv">
      <img src="image/2.png" alt="foto">
      </div>
      <h4>All Cakes</h4>
      <p>Premium cakes made with love!</p>
    </div>
    <div class="col-sm-4">
      <div class="serv">
      <img src="image/3.png" alt="foto">
      </div>
      <h4>Wedding Cakes</h4>
      <p>Make your sweetest day with the sweetest!</p>
    </div>
    <div class="col-sm-4">
    <div class="serv">
      <img src="image/4.png" alt="foto">
    </div>
      <h4>Birthday Cakes</h4>
      <p>Celebrate your birthday with this beautiful cake!</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
    <div class="serv">
      <img src="image/5..png" alt="foto">
    </div>
      <h4>Pastry</h4>
      <p>Enjoy your day by eat pastry from us!</p>
    </div>
    <div class="col-sm-4">
    <div class="serv">
      <img src="image/6.png" alt="foto">
    </div>
      <h4>Desserts</h4>
      <p>Bring back your mood with this one! </p>
    </div>
    <div class="col-sm-4">
    <div class="serv">
      <img src="image/7.png" alt="foto">
    </div>
      <h4 style="color:#303030;">Cookies</h4>
      <p>Crispy on the edge, chewy in the middle cookie!</p>
    </div>
  </div>
</div><br>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <br>
  <h2>What they say about us?</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Soo delicious!"<br><span>Salma</span></h4>
      </div>
      <div class="item">
        <h4>"Semua cakenya enak, pengiriman cepat & aman. Terima kasih D'Monique!"<br><span>Talitha</span></h4>
      </div>
      <div class="item">
        <h4>"Enak banget! Next mau order lagi!"<br><span>Syafira</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Best Sellers</h2>
    <h4>This is our best for you!</h4><br>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Strawberry Cheesecake</h1>
        </div>
        <div class="panel-body">
          <img style="width: 300px; height: 300px;" src="image/sc1rbg.png" alt="foto">
        </div>
        <div class="panel-footer">
          <h3>IDR 35.000</h3>
          <button onclick="window.location.href='login.php'" class="btn btn-lg">Order</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Matcha Mousse Cake</h1>
        </div>
        <div class="panel-body">
        <img style="width: 300px; height: 300px;" src="image/matcharbg.png" alt="foto">
        </div>
        <div class="panel-footer">
          <h3>IDR 38.000</h3>
          <button onclick="window.location.href='login.php'" class="btn btn-lg">Order</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Floral Birthday Cake</h1>
        </div>
        <div class="panel-body">
        <img style="width: 300px; height: 300px;" src="image/bdyrbg.png" alt="foto">
        </div>
        <div class="panel-footer">
          <h3>IDR 250.000</h3>
          <button onclick="window.location.href='login.php'" class="btn btn-lg">Order</button>
        </div>
      </div>      
    </div>    
  </div>
</div>



<?php include 'footer.php' ?>
