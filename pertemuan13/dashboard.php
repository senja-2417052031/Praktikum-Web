<?php
session_start();

if (!isset($_SESSION['nama'])) {
    header("Location: auth.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['nama']); ?>!</h2>
    <a href="logout.php"><button>Logout</button></a>
</body>

</html>
