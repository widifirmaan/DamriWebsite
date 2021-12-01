<php?
$conf = APPPARTH.'config/database.php';
$conn = new mysqli($conf['hostname'], $conf['username'], $conf['password']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
}
?>