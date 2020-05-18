<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>live update</title>
<meta name="description" content="example-SUM()- php MySQL examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>

details > summary {
  padding: 4px;
  width: 200px;
  background-color: Black;
  color:white;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}

details > summary1 {
  padding: 4px;
  width: 100px;
  background-color: Black;
  color:white;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}


details > p {
  background-color: white;
  color:black;
  padding: 4px;
  width: 100px;
  margin: 0;
  box-shadow: 1px 1px 2px #bbbbbb;
}
	body {
  background-image: url("/coronaran/client/7.jpg");
  background-color: Red;
  height: 500px;
  background-position: 1008*67;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

</head>
<body >
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 color: Bisque>Corona virus in madurai</h2>
<table class='table table-bordered'>
<details>

<summary>Confirmed</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(new_cases) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(new_cases)'] . " cases</p>";
}
?>

</details>


<br>

<details>

<summary>Recovery</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(new_recovery) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(new_recovery)'] . " cases</p>";
}
?>

</details>


<br>

<details>

<summary>Deaths</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(new_dead) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(new_dead)'] . " cases</p>";
}
?>

</details>


<br>

</tbody></table>

        

<details>		
<summary>Corona virus area wise </summary><br>
<details>

<summary>Periyar</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(periyar) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(periyar)'] . " cases</p>";
}
?>

</details>





<details>

<summary>Arapalayam</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(arapalayam) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(arapalayam)'] . " cases</p>";
}
?>

</details>


<details>

<summary>Matuthavani</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(matuthavani) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(matuthavani)'] . " cases</p>";
}
?>

</details>




<details>

<summary>Koripalayam</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(koripalayam) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(koripalayam)'] . " cases</p>";
}
?>

</details>

 

<details>

<summary>Therkuvasal</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(therkuvasal) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(therkuvasal)'] . " cases</p>";
}
?>

</details>

 

<details>

<summary>Thiruparankunram</summary>
<?php

include "../connection.php";

foreach($conn->query('SELECT SUM(thiruparankunram) 
FROM corona_case') as $row) {
echo "<p>" . $row['SUM(thiruparankunram)'] . " cases</p>";
}
?>

</details>


<br>
</details>


</tbody></table>
		
		
		