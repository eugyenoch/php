<?php
// Define the cache file name and expiration time
$cache_file = 'cached_data.txt';
$expiration_time = 60 * 60 * 24 * 5; // 5 days in seconds

// Check if the cached data exists and is not expired
if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $expiration_time) {
  // Read the cached data from the file
  $cached_data = file_get_contents($cache_file);

  // Use the cached data instead of fetching from the database
  $data = unserialize($cached_data);
}
else {
  // Connect to the MySQL database
  $host = 'localhost';
  $user = 'username';
  $password = 'password';
  $database = 'database_name';

  $conn = mysqli_connect($host, $user, $password, $database);

  // Fetch the data from the database
  $query = "SELECT * FROM table_name";
  $result = mysqli_query($conn, $query);

  // Store the data in the cache
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $cached_data = serialize($data);
  file_put_contents($cache_file, $cached_data);

  // Close the MySQL connection
  mysqli_close($conn);
}

// Use the data from the cache
foreach ($data as $row) {
  echo $row['column_name'] . "<br>";
}
?>





