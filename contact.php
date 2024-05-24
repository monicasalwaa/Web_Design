<?php include 'headercontact.php' ?>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>For more information please hit us trough below!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Tasikmalaya</p>
      <p><span class="glyphicon glyphicon-phone"></span> +62 81221541696</p>
      <p><span class="glyphicon glyphicon-envelope"></span> dmonique@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
      <form action="contact.php" method="post">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="btn btn-default pull-right" type="submit" name="submit" value="Send"><br>
      </form>
        
<?php
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $email=$_POST["email"];
            $comments=$_POST["comments"];

            $con=new mysqli("localhost", "root", "", "uas_wd");
            $st=$con->prepare("insert into contact values(?,?,?)");
            $st->bind_param("sss", $name, $email, $comments);
            $st->execute();
            echo "<script>window.location='index.php';</script>";
        }
      ?>
    </div><br><br>
      </div>
    </div>
  </div>
  <!-- Image of location/map -->
<center>
  <iframe style="width: 100%; height: 400px;;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.0440206395572!2d108.2228161098554!3d-7.336408728890793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5742484bded7%3A0x54914b15fea24eef!2sIndonesia%20University%20of%20Education!5e0!3m2!1sen!2sid!4v1640165916876!5m2!1sen!2sid" width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</center><br><br>
</div>

<?php include 'footer.php' ?>