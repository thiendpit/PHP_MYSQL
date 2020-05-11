<?php 

include_once("./db.php");


function showAllData() {
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("SQL query failed.");
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['user_id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser() {
    global $conn;
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
    
        $query = "UPDATE users SET user_name='$username', user_pass='$password' WHERE user_id=$id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query failed " . mysqli_error($conn));
        }
    }
}

function deleteUser() {
    global $conn;

    if(isset($_POST['submit'])) {
        $id_delete = $_POST['id'];
        $query = "DELETE FROM users WHERE user_id=$id_delete";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query failed " . mysqli_error($conn));
        }
    }
}

?>