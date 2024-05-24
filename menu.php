<?php include 'headermenu.php' ?>
    <div class="container-fluid text-center">
        <div class="row text-center">
        <center>
        <?php 
            //connection
            $con=new mysqli("localhost", "root", "", "uas_wd");
            $st=$con->prepare("select * from barang");
            $st->execute();
            $rs=$st->get_result();
            while($row=$rs->fetch_assoc())
            {
                echo '<div class="col-sm-1">
                <div class="thumbnail">
                <img src="admin/img/'.$row["image"].'" 
                width="400" height="300"/>
                <p style="text-align: center"><strong>'.$row["name"].'</strong></p>
                <p style="font-size: 14px">Rp '.$row["price"].'</p>
                <a href="add_item.php?id='.$row["id"].'" style="font-size: 14px; background-color: #af4e00; color: #fff" class="btn btn-default btn-lg">Add</a>
                </div>
                </div>';
            }
        ?>
        </center>
        <div style="width: 99.6%" class="col-sm-6">
            <table style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; align-items: center; color: #000; border-color: #000;" width="100%" border="1">
                <tr>
                    <th style="text-align: center; padding: 10px; background-color: #af4e00; color: #FFFFFF">Name</th>
                    <th style="text-align: center; padding: 10px; background-color: #af4e00; color: #FFFFFF">Price</th>
                    <th style="text-align: center; padding: 10px; background-color: #af4e00; color: #FFFFFF">Qty</th>
                    <th style="text-align: center; padding: 10px; background-color: #af4e00; color: #FFFFFF">Sub Total</th>
                    <th style="text-align: center; padding: 10px; background-color: #af4e00; color: #FFFFFF">Remove</th>
                </tr>
    <?php
    $con=new mysqli("localhost", "root", "", "uas_wd");
    $st=$con->prepare("select barang.id, qty, name, price from barang inner join temp_order 
    on barang.id=temp_order.itemid where email=?");
    $st->bind_param("s", $_SESSION["user"]);
    $st->execute();
    $rs=$st->get_result();
    $total=0;
    while($row=$rs->fetch_assoc())
    {
        echo '<tr>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["price"].'</td>';
        echo '<td>'.$row["qty"].'</td>';
        echo '<td>'.$row["price"]*$row["qty"].'</td>';
        echo '<td><a href="delete_item.php?id='.$row["id"].'">
        <span class="glyphicon glyphicon-trash"></span></a></td>';
        echo '</tr>';
        $total = $total + ($row["price"]*$row["qty"]);
    }
    ?>
            </table>
            <?php
                echo '<h3 style="color: #303030">Total Payment Rp '.$total.'</h3>';
            ?>
            <form action="add_order.php" method="post">
                <input type="submit" value="Order Now" class="btn btn-danger" />
            </form><br><br>
        </div>

        </div>
    </div>

<?php include 'footer.php' ?>