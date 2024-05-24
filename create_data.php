<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Data to MySQL</title>
</head>

<body>
    <form action="create_data.php" method="post">
        <input type="text" name="id" placeholder="ID"/><br>
        <input type="text" name="name" placeholder="Cake Name"/><br>
        <input type="text" name="price" placeholder="Cake Price"/><br>
        <input type="submit" name="submit" placeholder="Add"/><br>
    </form>
    <?php
        if(isset($_POST["submit"])) 
        {
            //tangkap data dari method post ke variabel
            $id=$_POST["id"];
            $name=$_POST["name"];
            $price=$_POST["price"];
            //connectiom
            $con=new mysqli("localhost", "root", "", "uas_wd");
            $st=$con->prepare("insert into barang values(?,?,?)");
            $st->bind_param("isd", $id, $name, $price);
            $st->execute();
        }
    ?>
</body>
</html>