<?php
include 'functions/functions.php';



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 p-5 bg-info">
                <h1 class="font-monospace text-light text-center">ITEMS DASHBOARD</h1>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <form action="" method="post">
            <input type="text" name="item-name" id="" class="form-control">
            <span class="form-text">ENTER ITEM NAMES</span>

            <input type="text" name="item-price" id="" class="form-control mt-3">
            <span class="form-text">ENTER ITEM PRICE</span>

            <input type="date" name="item-date" id="" class="form-control mt-3">
            <span class="form-text">ENTER ITEM DELIVERY DATE</span>

            <div class="d-grid mt-3">
            <button type="submit" class="btn btn-outline-info" name="btn_save_item">Save Item</button>
            </div>
        </form>

        <?php
            if(isset($_POST['btn_save_item'])){
                $itemName = $_POST['item-name'];
                $itemPrice = $_POST['item-price'];
                $itemDate = $_POST['item-date'];

                    create($itemName,$itemPrice,$itemDate);

            }


        ?>
    </div>

    <div class="container-fluid my-5">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ITEM NAME</th>
                        <th>ITEM PRICE</th>
                        <th>ITEM DELIVERED</th>
                        <th colspan="2">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(read() as $row): ?>
                        <tr>
                            <td><?php echo $row['item_name'] ?></td>
                            <td><?php echo $row['item_price'] ?></td>
                            <td><?php echo $row['item_date_delivered'] ?></td>
                            <td><a href="update.php?id=<?php echo $row['item_id'] ?>" class="btn btn-secondary">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['item_id'] ?>" class="btn btn-danger">Delete</a></td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
    </div>


      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>