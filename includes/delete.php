<?php
include 'database.php';

$d = $_GET['d'];
$u = $_GET['u'];
$l = $_GET['l'];
$s = $_GET['s'];
$sql = "DELETE FROM score WHERE date = '$d' AND languagename = '$l' AND score = '$s' AND email_id = (SELECT DISTINCT(email_id) FROM signin WHERE username = '$u')";
$result = mysqli_query($conn, $sql);
if($result){
header("Location: ../admin/index_admin.php?success=deleted");
}
 ?>
