<?php
include 'connection.php';

function create($name,$price,$date){   // add a data inside the database
    $conn = connect_database(); // convert function connect_databse() to a variable
    $sql = "INSERT INTO items(item_name,item_price,item_date_delivered)VALUES('$name','$price','$date')"; // a string (a sql string)
    $result = $conn->query($sql); // !! important, why? because this is the responsible of executing/making work/run variable $sql.

    if($result == TRUE){
            echo "item added successfully"; // display message if working properly
    }else{
            die('ERROR: '.$conn->error); // display error if query/sql dont work
    }
}

function read(){  // retrieve or get a data from the database
        $conn = connect_database();
        $sql = "SELECT * FROM items";
        $result = $conn->query($sql); 

        if($result->num_rows>0){  //this line means "is the table data more than 0?" /"if there is at least 1 data"
                $container = array(); // holder of the data from the table
                while($rows = $result->fetch_assoc()){
                        $container[] = $rows;
                }
                return $container;
        }else{
                return FALSE;
        }
}

function update($id,$name,$price,$date){  //update/edit a data that is inside the database
        $conn = connect_database();
        $sql = "UPDATE items SET item_name = '$name', item_price = '$price', item_date_delivered = '$date' WHERE item_id= '$id'";
        $result = $conn->query($sql);

        if($result == TRUE){
                header('location:dashboard.php');
        }else{
                return FALSE;
        }
}

function delete($id){  //delete a data in the database
        $conn = connect_database();
        $sql = "DELETE FROM items WHERE item_id= '$id'";
        $result = $conn->query($sql);

        if($result == TRUE){
                header('location: dashboard.php');
        }else{
                return FALSE;
        }
}




// users table----------------------------------------------------
function create_user($fullname,$age,$location,$username,$password,$email){
        $conn = connect_database();
        $sql = "INSERT INTO users(fullname,age,location,username,password,email)VALUES('$fullname','$age','$location','$username','$password','$email')";
        $result = $conn->query($sql);

        if($result == TRUE ){
                echo "<p class='lead text-center'>added user succussfully</p>";
        }else{
                die('ERROR:  '.$conn->error);
        }
}
function display_users(){    //read
        $conn = connect_database();
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if($result->num_rows>0){
                $container = array();
                while($rows = $result->fetch_assoc()){
                        $container[] = $rows;
                }
                return $container;
        }else{
                return FALSE;
        }
}

function update_user($id2,$fullname,$age,$location,$username,$password,$email){
        $conn = connect_database();
        $sql = "UPDATE users SET fullname='$fullname', age='$age', location='$location', username='$username', password='$password', email='$email' WHERE user_id='$id2'";
        $result = $conn->query($sql);

        if($result == TRUE){
                header('location:table.php');
        }else{
                return FALSE;
        }

}
function delete_user($id2){
        $conn = connect_database();
        $sql = "DELETE FROM users WHERE user_id='$id2'";
        $result = $conn->query($sql);

        if($result == TRUE){
                header('location:table.php');
        }else{
                return FALSE;
        }
}

?>