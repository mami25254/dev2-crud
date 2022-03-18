<?php
include 'functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col12 bg-warning">
            <h1 class="text-center text-white">User Dashboard</h1></div>
    </div>
</div>

<div class="container">

    <form action="" method="post">
        Fullname
        <input type="text" name="fullname" class="form-control" placeholder="Enter your Full Name"><br>
        Age
        <input type="text" name="age" class="form-control" placeholder="Enter your Age"><br>
        Location
        <input type="text" name="location" class="form-control" placeholder="Enter your Location"><br>
        Username
        <input type="text" name="username" class="form-control" placeholder="Enter your Username"><br>
        Password
        <input type="password" name="password" class="form-control" placeholder="Enter your Password"><br>
        Email
        <input type="text" name="email" class="form-control" placeholder="Enter your Email"><br>

        <button type="submit" name="save_table" class="btn btn-outline-primary form-control">Save Table</button>        
    </form>

</div>



    <?php
        if(isset($_POST['save_table'])){
            $Fullname = $_POST['fullname'];
            $Age = $_POST['age'];
            $Location = $_POST['location'];
            $Username = $_POST['username'];
            $Password = $_POST['password'];
            $Email = $_POST['email'];
        

        create_user($Fullname,$Age,$Location,$Username,$Password,$Email);
        }
    
    ?>


        <table class="table table-bordered my-5">
            <thead class="table-info">
                <tr>
                    <th>Fullname</th>
                    <th>Age</th>
                    <th>Location</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(display_users() as $row): ?>
                    <tr>
                        <td><?php echo $row['fullname']?></td>
                        <td><?php echo $row['age']?></td>
                        <td><?php echo $row['location']?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><a href="updateuser.php?id2=<?php echo $row['user_id']?>"class="btn btn-info">Update</a></td>
                        <td><a href="delete.php?id2=<?php echo $row['user_id']?>"class="btn btn-danger">Delete</a></td>                       
                    </tr>
                <?php endforeach ;?>
            </tbody>
        </table> 
</div>        



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>