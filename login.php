<?php include 'headerlogin.php' ?>


<center>
    <div class="login">
    <h2>Login</h2>
    <form class="login-form" action="login.php" method="post">
        <input type="email" name="email" class="form-control" style="width: 35%" placeholder="E-mail" required/><br/>
        <input type="password" name="password" class="form-control" style="width: 35%" placeholder="Password" required/><br/>
        <button type="submit" name="sub">Login</button><br/>
        <a href="#">Forgot your password?</a><br><br>
        <a style="color: #303030" href="signup.php">Sign Up</a>
    </form>
    </br></br>
    </div>
</center>

<?php
    if(isset($_POST["sub"]))
    {
            $con=new mysqli("localhost", "root", "", "uas_wd");
            $st_check=$con->prepare("select * from users where email=? and password=?");
            $st_check->bind_param("ss", $_POST["email"], $_POST["password"]);
            $st_check->execute();
            $rs=$st_check->get_result();
            if($rs->num_rows==0)
                echo "<script>alert('Login fail');</script>";
            else
                $_SESSION["user"]=$_POST["email"];
                $_SESSION["user"]=$_POST["password"];
                echo "<script>window. location='menu.php';</script>";
    }
?>

<br>
<br>
<?php include 'footer.php' ?>