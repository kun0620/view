<body>


<?php
require 'connect.php';
$id=$_POST['1'];
$na=$_POST['2'];
$na2=$_POST['3'];
$de=$_POST['5'];
$te=$_POST['7'];
$te2=$_POST['8'];
$o=$_POST['9'];
$mail=$_POST['10'];

switch ($de) {
    case "PSD":
        $did = '1';
        break;
    case "KE":
        $did = '2';
        break;
    case "SHE":
        $did = '3';
        break;
        case "RAI":
            $did = '4';
            break;
        case "SCP":
            $did = '5';
            break;
        case "BD":
            $did = '6';
            break;
            case "HR":
                $did = '7';
                break;
    default:
        $did = '0';
}
$s = "$na $na2 $de";
$sql = "INSERT INTO `pttes2` (`tomerID`, `Name`, `Name2`, `did`, `Dep`, `S`, `Tel1`, `Tel2`, `O1`, `Email`)
 VALUES ('$id', '$na', '$na2','$did','$de', '$s',  '$te', '$te2',' $o', '$mail') ";
mysqli_query($con,$sql);
header('location:index.php');
?>
</body>
