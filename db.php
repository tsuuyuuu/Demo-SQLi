<?Php
$base_url = 'http://localhost/';

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "sqli_demo";

// koneksi

$conn = new mysqli($servername, $user, $pass, $dbname);

// cek

if ($conn->connect_errno) {
    echo "Gagal koneksi ke database: " . $conn->connect_error;
    exit();
}
?>