<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //SQL yang tidak aman
    $sql    = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "Login berhasil sebagai : " . $user;
    } else {
        echo "Login gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Demo</title>
</head>
<body>
    <h1>LOGIN (belum secure)</h1>
    <form method="post">
        <label>Username :</label>
        <input type="text" name="username"> <br>
        
        <label>Password :</label>
        <input type="text" name="password"> <br>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>