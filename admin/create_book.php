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
            <h3>Add Data</h3>
            
            
            <form class="w3-container" action="create_book.php" method="post" enctype="multipart/form-data">
                <label class="w3-text-black">ID</label><br>
                <input class="w3-input w3-border w3-light-grey" type="text" name="id"><br>

                <label class="w3-text-black">Name</label><br>
                <input class="w3-input w3-border w3-light-grey" type="text" name="name"><br>

                <label class="w3-text-black">Price</label><br>
                <input class="w3-input w3-border w3-light-grey" type="text" name="price"><br>

                <label class="w3-text-black">Image</label><br>
                <input class="w3-input w3-border w3-light-grey" type="file" name="image"><br>

                <input class="w3-btn w3-blue-grey" type="submit" name="submit" value="Add">
            </form>
            
            <?php
                if(isset($_POST["submit"]))
                {   
                    //tangkap data dari method post ke variabel
                    $id=$_POST["id"];
                    $name=$_POST["name"];
                    $price=$_POST["price"];
                    $image=basename($_FILES["image"]["name"]);
                    $image_dir="img/".$image;
                    move_uploaded_file($_FILES["image"]["tmp_name"], $image_dir);
                    //connection
                    $con=new mysqli("localhost", "root", "", "uas_wd");
                    $st=$con->prepare("insert into barang values(?,?,?,?)");
                    $st->bind_param("isds", $id, $name, $price, $image);
                    $st->execute();
                    echo "<script>window.location='book.php';</script>";
                }
            ?>
        </div>

    </div>
</div>
<?php include 'footer.php' ?>