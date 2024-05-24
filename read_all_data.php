<!DOCTYPE html>
<html lang="en">
<head>
    <title>Read Data to MySQL</title>
</head>

<body>
    <?php
            //connectiom
            $con=new mysqli("localhost", "root", "", "uas_wd");
            $st=$con->prepare("select * from barang");
            $st->execute();
            $rs=$st->get_result();
            while($row=$rs->fetch_assoc()) {
                echo $row["id"] . "<br>";
                echo $row["name"] . "<br>";
                echo $row["price"] . "<br>";
             }
    ?>
</body>
</html>