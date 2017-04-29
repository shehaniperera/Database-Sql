
<?php


$pagename="Add a Studio";
echo "<title>".$pagename."</title>";

echo "<h2>".$pagename."</h2>";

echo "<body>";


//create a html form to capture user input
echo "<form method=post action=getstudio.php>" ;
echo "<table border=0 cellpadding=10>";

// studio id no field
echo "<tr><td>*Studio Id Number</td>";
echo "<td><input type=text name=studioId size=35 ></td></tr>";

// studio name field
echo "<tr><td>*Studio Name </td>";
echo "<td><input type=text name=studioName size=35 ></td></tr>";

// studio address field
echo "<tr><td>*Studio Address </td>";
echo "<td><input type=text name=studioAddress size=35 ></td></tr>";

// studio postcode field
echo "<tr><td>*Studio Postcode</td>";
echo "<td><input type=text name=studioPCode size=35></td></tr>";

// studio tele no field
echo "<tr><td>*Telephone Number </td>";
echo "<td><input type=text name= studioTelNo size=35 ></td></tr>";

// submit button
echo "<tr><td><input type=submit value='Add Dept'></td>";

// clear button
echo "<td><input type=reset value='Clear Form'></td></tr>";

echo "</table>";
echo "</form>" ;

echo "</body>";



?>