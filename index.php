<html>
<head>
<title>PTTES View Download</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
       <title>PTTES</title>
		<STYLE TYPE="TEXT/CSS"><!--
A:link	{
	text-decoration:none;
	color:#3366cc;
	}
A:hover {
	color:#33ff33;
	}
A:visited	{
text-decoration:none;
}
//--></STYLE>

</head>
<body>
<body bgcolor="#FFFFFF" >
   
	<table width="100%" >
	<tr>
	<td bgcolor=blue><font color="#E6E6E6"size="30"><center>View Download</center></font></td>
	</tr>
	</table>
	<br><br>

<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="100%" >
    <tr>
      <th align ="left" >
      <td><input style ="height:70px; background:#ffffff; width:95%; font-size:20pt;" placeholder="Search : Project Name" name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>"></td>
      <td><input Style ="align:center; height:100px; width:100px;" type="image" src="search.jpg" alt="submit" value="Search"></th></td>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "rklg;biNf";
   $dbName = "mydatabase";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM register WHERE Project LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);
   $row= mysqli_num_rows($query);

?>
<table width="100%" border="0">
  
<?php
$Total = 1;
error_reporting(~E_NOTICE);
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
	
	
?>

  <tr>
    <td><font size = "5" color ="3300FF" ><?php echo $result["Project"];?></font></td>
    <td><font size = "5" color ="3300FF" ><?php echo $result["Date-Time"];?></font></td>
	<td><font size = "5" color ="3300FF" ><?php echo $result["email"];?></font></td>
	</tr>
	
	
	
<?php

}
?>
</table>

<h1><?php echo "Totol Download = ".$row; ?></h1>
<?php
	
mysqli_close($conn);
?>
</body>
</html>