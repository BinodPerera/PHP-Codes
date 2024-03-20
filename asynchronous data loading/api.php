
<?php
// Sample PHP API endpoint
header('Content-Type: application/json');

// Define an array of data (you can replace this with data from a database)
$data = array(
    array('id' => 1, 'name' => 'John'),
    array('id' => 2, 'name' => 'Jane'),
    array('id' => 3, 'name' => 'Doe')
);

// Return the data as JSON
echo json_encode($data);
?>