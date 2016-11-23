<?php

  // [1.] Connect to MySQL Server
  $con = mysqli_connect( "localhost", "kiddogra", "KaitlinHuss14!" , "kiddogra_minerals" );

  // [2.] Check connection
  // If successful, continue...
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$action = $_POST["action"];
$mineral_id = $_POST["mineral_id"];
$mineral_name = $_POST["mineral_name"];
$mineral_composition = $_POST["mineral_composition"];
$mineral_class = $_POST["mineral_class"];
$mineral_letter = $_POST["mineral_letter"];
$mineral_color = $_POST["mineral_color"];
$mineral_fracture= $_POST["mineral_fracture"];
$mineral_mohs= $_POST["mineral_mohs"];

// table headers
$tableHeaderColor = "<table class='table-condensed'>
  <tr>
    <td style='background:#f4f3ee; color: black;'>Name</td>
    <td style='background:#f4f3ee; color: black;'>Group</td>
    <td style='background:#f4f3ee; color: black;'>Class</td>
    <td style='background:#f4f3ee; color: black;'>Color</td>
    <td style='background:#f4f3ee; color: black;'>Mohs</td>
    <td style='background:#f4f3ee; color: black;'>Fracture</td>
    <td style='background:#f4f3ee; color: black;'>Cleavage</td>
</tr>";

$tableHeaderComposition = "<table class='table-condensed'>
  <tr>
    <td style='background:#f4f3ee; color: black;'>Name</td>
    <td style='background:#f4f3ee; color: black;'>Group</td>
    <td style='background:#f4f3ee; color: black;'>Class</td>
    <td style='background:#f4f3ee; color: black;'>Composition</td>
    <td style='background:#f4f3ee; color: black;'>Mohs</td>
    <td style='background:#f4f3ee; color: black;'>Fracture</td>
    <td style='background:#f4f3ee; color: black;'>Cleavage</td>
</tr>";

/***************************************************
******************** SHOW ALL ******************
****************************************************/
if ($action == "showAll") {
  $query = "SELECT * FROM minerals";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
}

/***************************************************
******************** SEARCH ID ******************
****************************************************
if ($mineral_id != null) {
  $query = "SELECT * FROM minerals WHERE id = '$mineral_id'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo "<table class='table-condensed'>
    <tr>
      <td style='background:#f4f3ee; color: black;'>Name</td>
      <td style='background:#f4f3ee; color: black;'>Group</td>
      <td style='background:#f4f3ee; color: black;'>Class</td>
      <td style='background:#f4f3ee; color: black;'>Mohs</td>
      <td style='background:#f4f3ee; color: black;'>Fracture</td>
      <td style='background:#f4f3ee; color: black;'>Cleavage</td>
  </tr>";

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
}

/***************************************************
******************** SEARCH NAME ******************
****************************************************/
if ($mineral_name != null) {
  $query = "SELECT * FROM minerals WHERE name LIKE '%$mineral_name%'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
echo "</table";
}

/***************************************************
*********** SEARCH LETTER ******************
****************************************************/
if ($mineral_letter != null) {
  $query = "SELECT * FROM minerals WHERE name LIKE '$mineral_letter%'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
echo "</table";
}

/***************************************************
*********** SEARCH COMPOSITION ******************
****************************************************/
if ($mineral_composition!= null) {
  $query = "SELECT * FROM minerals WHERE composition LIKE '%$mineral_composition%'"; 
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderComposition;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['composition'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
echo "</table";
}

/***************************************************
*********** SEARCH CLASS ******************
****************************************************/
if ($mineral_class!= null) {
  $query = "SELECT * FROM minerals WHERE class = '$mineral_class'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
  }

/***************************************************
*********** SEARCH COLOR ******************
****************************************************/
if ($mineral_color != null) {
  $query = "SELECT * FROM minerals WHERE color = '$mineral_color'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
  }

/***************************************************
*********** SEARCH FRACTURE ******************
****************************************************/
if ($mineral_fracture != null) {
  $query = "SELECT * FROM minerals WHERE fracture = '$mineral_fracture'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
  }

/***************************************************
*********** SEARCH MOHS ******************
****************************************************/
if ($mineral_mohs != null) {
  $query = "SELECT * FROM minerals WHERE mohs = '$mineral_mohs'";
  $show = mysqli_query($con, $query) or die ("Error");
  echo $tableHeaderColor;

  while($row = mysqli_fetch_array($show)) {
    echo "<tr><td><p style='font-size: 12px; color: #e0c7b0;'>"
    . $row['name'] .
    "</td><td><p style='font-size: 12px;'>"
    . $row['group'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['class'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['color'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['mohs'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['fracture'] .
    "</p></td><td><p style='font-size: 12px;'>"
    . $row['cleavage'] .
    "</p></td></tr>";
  }
  echo "</table";
  }

	// [4.] Close the MySQL Connection
	mysqli_close( $con );

?>
