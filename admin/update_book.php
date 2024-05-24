<?php include 'header.php' ?>
<body>
    
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <?php include 'menu.php' ?>
        <div class="col-sm-8 text-left">
            <h1>Book Management</h1>
            <h3>Update Data</h3>
        
    <?php
    if(isset($_GET["id"]))
    {
        //tangkap data dari method get ke variabel 
        $id=$_GET["id"];;
        //connection
        $con=new mysqli("localhost", "root", "", "uas_wd");
        $st=$con->prepare("select * from barang where id='$id'");
        $st->execute();
        $rs=$st->get_result();
        $row=$rs->fetch_assoc();
    }
    ?>
    <form class="w3-container" action="update_book.php" method="post" enctype="multipart/form-data">
        <label class="w3-text-black">ID</label>
        <input type="w3-input w3-border w3-light-grey" type="text" name="id" value="<?php echo $row["id"]?>">

        <label class="w3-text-black">Name</label>
        <input type="w3-input w3-border w3-light-grey" type="text" name="name" value="<?php echo $row["name"]?>">

        <label class="w3-text-black">Price</label>
        <input type="w3-input w3-border w3-light-grey" type="text" name="price" value="<?php echo $row["price"]?>">

        <label class="w3-text-black">Image</label>
        <input type="w3-input w3-border w3-light-grey" type="file" name="image">

        <input class="w3-btn w3-blue-grey" type="submit" name="submit" value="Update">
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            //tangkap data dari method post ke variabel
            $id=$_POST["id"];
            $name=$_POST["name"];
            $price=$_POST["price"];
            if ($_FILES["image"]["name"] == null){
              $con=new mysqli("localhost", "root", "", "uas_wd");
              $st=$con->prepare("update barang set id=?, name=?, price=? where id='$id'");
              $st->bind_param("isd", $id, $name, $price);
              $st->execute();
              echo "<script>window.location='book.php';</script>";
            } else {
              $image=basename($_FILES["image"]["name"]);
              $image_dir="img/".$image;
              move_uploaded_file($_FILES["image"]["tmp_name"], $image_dir);
              //connection
              $con=new mysqli("localhost", "root", "", "uas_wd");
              $st=$con->prepare("update barang set id=?, name=?, price=?, image=? where id='$id'");
              $st->bind_param("isds", $id, $name, $price, $image);
              $st->execute();
              echo "<script>window.location='book.php';</script>";
            }
        }
    ?>
        </div>
    
    </div>
</div>

<?php include 'footer.php' ?>