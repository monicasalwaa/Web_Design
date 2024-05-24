<?php include 'headercheckout.php' ?>

<h2 class="text-center">CHECK OUT</h2>
<p>Please fill the blank space below correctly!</p>
<center>
<br>
<div class="signup">
    <form class="checkout" action="checkout.php" method="post">
        <input type="text" name="name" class="form-control" style="width: 35%" placeholder="Name" required/><br/>
        <input type="email" name="email" class="form-control" style="width: 35%" placeholder="E-mail" required/><br/>
        <input type="text" name="mobile" class="form-control" style="width: 35%" placeholder="Mobile" required/><br/>
        <input type="date" class="form-control" name="delivery" style="width: 35%;" placeholder="Date" required/><br/>
        <input type="text" name="address" class="form-control" style="width: 35%" placeholder="Address" required/><br/>
        <iframe style="width: 90%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.0440206395572!2d108.2228161098554!3d-7.336408728890793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5742484bded7%3A0x54914b15fea24eef!2sIndonesia%20University%20of%20Education!5e0!3m2!1sen!2sid!4v1640165916876!5m2!1sen!2sid" width="700" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><br>
        <input class="form-control" name="kecamatan" placeholder="Sub-District" type="text" style="width: 35%;" required/><br/>
        <input class="form-control" name="provinsi" placeholder="Province" type="text" style="width: 35%;" required/><br/>
        <input class="form-control" name="negara" placeholder="Country" type="text" style="width: 35%;" required/><br/>
        <textarea class="form-control" name="notes" placeholder="Notes" type="text" style="width: 35%; rows="5"></textarea><br/>
        <select class="form-control" name="metode_bayar" style="width: 35%;" placeholder="Payment Method" required/><br/>
          <option>Payment Method<option>
          <option>BCA</option>
          <option>Mandiri</option>
          <option>BNI</option>
          <option>Gopay</option>
          <option>OVO</option>
          <option>Alfamart</option>
          <option>Indomaret</option>
          <option>Shopee</option>
        </select><br><br>
        <div style="align-items: center;" class="bayar">
          <img src="image/bca.png">
          <img src="image/mandiri.png">
          <img src="image/bni.png">
          <img src="image/gopay.png">
          <img src="image/ovo.png" style="width: 50px; height:30px;">
          <img src="image/alfamart.png">
          <img src="image/indomart.png">
          <img src="image/sopi.png" style="width: 60px; height:40px;"><br><br>
        </div>
        </div>
        <input type="submit" name="submit" value="Done" class="btn btn-danger" />
        </form>
        </center>
        <?php
            if(isset($_POST["submit"]))
            {
                $name=$_POST["name"];
                $email=$_POST["email"];
                $mobile=$_POST["mobile"];
                $delivery=$_POST["delivery"];
                $address=$_POST["address"];
                $kecamatan=$_POST["kecamatan"];
                $provinsi=$_POST["provinsi"];
                $negara=$_POST["negara"];
                $notes=$_POST["notes"];
                $metode_bayar=$_POST["metode_bayar"];

                $con=new mysqli("localhost", "root", "", "uas_wd");
                $st=$con->prepare("insert into checkout values(?,?,?,?,?,?,?,?,?,?)");
                $st->bind_param("ssssssssss", $name, $email, $mobile, $delivery, $address, $kecamatan, $provinsi, $negara, $notes, $metode_bayar);
                $st->execute();
                echo "<script>window.location='selesai.php';</script>";
            }
        ?>
    </div>
  </div>
</div>
</center>

<?php include 'footer.php' ?>