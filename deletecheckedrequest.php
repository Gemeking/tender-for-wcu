<?php
$a = mysqli_connect("localhost", "root", "", "tender");

// Check connection
if (!$a) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Check if database is selected
$d = mysqli_select_db($a, "tender");
if (!$d) {
    die('Could not select database: ' . mysqli_error($a));
}

if (isset($_GET['id'])) {
    $rid = $_GET['id']; // No need to escape since it's an integer

    $query = "DELETE FROM request WHERE checked='yes' AND rid='$rid'";

    $res = mysqli_query($a, $query);

    if (!$res) {
        echo '<script type="text/javascript">alert("Error: ' . mysqli_error($a) . '"); window.location=\'approvedrequest.php\';</script>';
    } else {
        echo '<script type="text/javascript">confirm("Are you sure to delete?"); window.location=\'approvedrequest.php\';</script>';
    }
}
?>
