<?php include 'headersignup.php' ?>

<center><br>
<div class="signup">
    <h2>Sign Up</h2>
    <form class="sign" action="signup.php" method="post">
        <input type="email" name="email" class="form-control" style="width: 35%" placeholder="E-mail" required/><br/>
        <input type="password" name="password" class="form-control" style="width: 35%" placeholder="Password" required/><br/>
        <input type="password" name="confirm" class="form-control" style="width: 35%" placeholder="Confirm"required/><br/>
        <input type="text" name="name" class="form-control" style="width: 35%" placeholder="Name" required/><br/>
        <input type="text" name="mobile" class="form-control" style="width: 35%" placeholder="Mobile" required/><br/>
        <input type="text" name="address" class="form-control" style="width: 35%" placeholder="Address" required/><br/>
        <p>Create an account to get the benefits of first order discount, check out faster, keep more than one address, track orders, and more</p>
        <button type="submit" name="sub">Create Account</button><br/>
        <p>Have any account? <a href="login.php" style="color: #303030;">Login</a></p><br><br>
    </form>
    </div>
</center>

<?php
if(isset($_POST["sub"]))
    {
        if($_POST["password"]==$_POST["confirm"]){
            $con=new mysqli("localhost", "root", "", "uas_wd");
            
            $st_check=$con->prepare("select * from users where email=?");
            $st_check->bind_param("s", $_POST["email"]);
            $st_check->execute();
            $rs=$st_check->get_result();
            if($rs->num_rows>0)
                echo "<script>alert('E-mail already used');</script>";
            else {
                $st=$con->prepare("insert into users(email, password, name, mobile, address) 
                values(?,?,?,?,?)");
                $st->bind_param("sssss", $_POST["email"], $_POST["password"], $_POST["name"], 
                $_POST["mobile"], $_POST["address"]);
                $st->execute();
                $_SESSION["user"]=$_POST["email"];
                echo "<script>window. location='login.php';</script>";
            }
        }
        else
            echo "<script>alert('Password Not Match');</script>";
    
    }
?>


<?php include 'footer.php' ?>