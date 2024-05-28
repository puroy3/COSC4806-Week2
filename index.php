<?php 
/*
$films = array(
  "Comedy" => array (
    0 => "Pink Panther",
    1 => "Johnny English",
    2 => "Tommy Boy"),
  "Action" => array (
    0 => "Die Hard",
    1 => "Expendables"),
  "Epic" => array (
    0 => "The Lord of the Rings"),
  "Romance" => array (
    0 => "Romeo and Juliet")
);

echo $films["Comedy"][0];

echo "<pre>";
print_r ($films);

foreach ($films as $key => $value) {
  echo "<h2>$key</h2>";
  foreach ($value as $film) {
    echo "<p>".$film."</p>";
  }
}
  */

$employees = array(
  array(
    "name" => "Dave Punk",
    "phone" => "5689741523",
    "email" => "davepunk@gmail.com",
  ),
  array(
    "name" => "Monty Smite",
    "phone" => "2584369721",
    "email" => "montysmith@gmail.com",
  ),
  array(
    "name" => "John Flinch",
    "phone" => "9875147536",
    "email" => "johnflinch@gmail.com",
  ),
);

echo "<table border=1>
<tr>
  <th>Name</th>
  <th>Phone</th>
  <th>Email</th>
</tr>" ;

foreach ($employees as $value) {
  echo "<tr>";
  foreach ($value as $person) {
    echo "<td>".$person."</td>";
  }
  echo "</tr>";
}

echo "</table>"

?>