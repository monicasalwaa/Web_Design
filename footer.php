<footer>
  <div class="container">
    <div class="row">
    <a style="align-items: center;" href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
      <div class="col-md-4">
        <h3>D' Monique</h3>
        <ul>
          <li><a href="#">Join Our Team</a></li>
          <li><a href="#">Shipping Policy</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Contact</h3>
        <ul>
          <li>Mobile: +6281221541696</li>
          <li>E-mail: dmonique@gmail.com</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Follow Us</h3>
        <ul class="social-icons">
          <li class="icon-instagram"><a href="https://www.instagram.com/?__coig_restricted=1"><img src="//cdn.shopify.com/s/files/1/0609/6250/4937/t/15/assets/logo-instagram.svg?v=49243943437604108991671089728" loading="lazy" height="24" width="24" alt="search-icon"></a></li>
          <li class="icon-twitter"><a href="#"><img src="image/twitterr.png" loading="lazy" height="30" width="30" alt="search-icon"></a></li>
          <li class="icon-telegram"><a href="#"><img src="image/telegramrbg.png" loading="lazy" height="27" width="27" alt="search-icon"></a></li>
          <li class="icon-user"><a href="login.php"><img src="//cdn.shopify.com/s/files/1/0609/6250/4937/t/15/assets/user-icon.svg?v=8216163104448293751671089728" loading="lazy" height="24" width="24" alt="user-icon"></a></li>
        </ul>
      </div>
    </div><br>
    <div class="copy" style="text-align: center; font-size: 13px;">
      <p class="copyright-text">&copy; 2022 All Rights Reserved by <a href="#">D'Monique</a></p>
    </div>
  </div>
</footer>

<style>
  @font-face /*perintah untuk memanggil font eksternal*/
  {
    font-family: 'playlistff'; /*memberikan nama bebas untuk font*/
    src: url('PlaylistFF/PlaylistScript.otf');/*memanggil file font eksternalnya di folder PlaylistFF*/
  }

  .col-md-4 h3 {
    font-family: 'playlistff';
  }

    footer {
      background-image: linear-gradient(to right, #fff, #e9cfb4);
      color: #303030;
      padding: 30px 0;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      
    }

    .container {
      max-width: 100%;
      margin: auto;
      padding-left: 0px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .col-md-4 {
      flex: 2 0 30%;
      max-width: 100%;
      text-align: center;
    }

    h3 {
      margin-bottom: 15px;
      color: #af4e00;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
    }

    .col-md-4 li a {
      color: #303030;
    }

    .social-icons li{
      display: inline-block;
      margin-right: 12px;
    }

    .social-icons li a {
      color: #fff;
      font-size: 30px;
    }

    @media (max-width: 991px) {
      .col-md-4 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    @media (max-width: 767px) {
      .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
      }
    }
</style>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>