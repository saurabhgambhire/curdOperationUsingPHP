<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "curdopration";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "delete from curd where id=$id";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header('location:displayUser.php');
    }
    else
    {
        echo "<script>alert('Something Went Wrong');</script>";
    }
}

?>