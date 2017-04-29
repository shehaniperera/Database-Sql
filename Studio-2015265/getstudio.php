<?php

mysql_connect ("localhost" , "root" , "")
or die("Access Dinied");

$res = mysql_select_db ("soundspace");

if(!$res){
    echo "Connection Failure";


}

$pagename="New Studio Confirmation";
echo "<title>".$pagename."</title>";
echo "<h2>".$pagename."</h2>";

echo "<body>";

$studioId = $_POST['studioId'];
$studioName = $_POST['studioName'];
$studioAddress = $_POST['studioAddress'];
$studioPCode = $_POST['studioPCode'];
$studioTelNo = $_POST['studioTelNo'];

// display error message if the fields are empty
if (empty($studioId) or empty($studioName) or empty($studioAddress) or empty($studioPCode) or empty($studioTelNo) )
{
	echo "Please ensure all mandatory fields are filled in!";
}


else
{
	//write SQL query
	$query  = "insert into studio (studioId , studioName ,studioAddress , studioPCode , studioTelNo )".
        "values ('$studioId','$studioName','$studioAddress','$studioPCode','$studioTelNo')";
  

  //run SQL query
$result = mysql_query($query) or die(mysql_error());

$re = "select studioName,studioAddress,studioPCode, studioTelNo "
        . "from studio";


}


              
 // query to select all from the database       
$query = mysql_query("SELECT * FROM studio ORDER BY studioId LIMIT 3");

// set array
$array = array();

// look through query
while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row;

  //  display the data
  extract($row);
                echo "<br>";
                echo "<br>";
                echo $studioId .") ";
                echo $studioName;
                echo "<br>";
		echo $studioAddress;
                echo " , ";
		echo $studioPCode;
                echo "<br>";
                echo $studioTelNo;
                echo "<br>";
                echo"_________________________________________";

}

// debug:

	?>
