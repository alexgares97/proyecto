<?php


// Database Connection String
// 1. Create a database connection
$connection = mysqli_connect('127.0.0.1','','');

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, 'wikiDb');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}

?>

 
<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM liam WHERE Description LIKE '%".$term."%'"; 
$r_query = mysqli_query($sql); 

while ($row = mysqli_fetch_array($r_query)){  

echo '<br /> Code: ' .$row['titulo'];  

}  

}
?>
?>
