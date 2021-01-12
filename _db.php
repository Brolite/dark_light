<?php

$success = false;
require "./_links.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = "otp";
$connect = mysqli_connect($servername, $username, $password, $database);


if (!$connect) {
    die("connection failed: " . mysqli_connect_error());
?>
    <script>
        swal("Error", "Failed to Connect", "error");
    </script>
<?php } else {
    echo 'Database Connected';
?>
    <script>
        // swal("Success", "Database Connected", "success");
    </script>
<?php
}
?>