<body>


<?php
require 'connect.php';
$id = isset($_GET['Id']) ? $_GET['Id'] : "";
$sql = "DELETE FROM pttes2 WHERE `tomerID` = $id" ;
mysqli_query($con,$sql);
header('location:index.php');
?>
</body>
