<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Cek apakah ID produk ada
if (!isset($id) || empty($id)) {
    die("ID produk tidak valid.");
}

// Ambil data produk berdasarkan ID menggunakan prepared statement
$stmt = $db_connect->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id); // 'i' untuk integer
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Produk tidak ditemukan.");
}

if (isset($_POST['update'])) {
    // Mendapatkan data dari form
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Misalkan gambar URL, jika Anda ingin upload file, ini perlu penanganan berbeda

    // Menggunakan prepared statement untuk mengupdate data produk
    $stmt_update = $db_connect->prepare("UPDATE products SET name = ?, price = ?, image = ? WHERE id = ?");
    $stmt_update->bind_param("sssi", $name, $price, $image, $id);
    $stmt_update->execute();

    // Redirect ke halaman data produk setelah berhasil update
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama Produk:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']); ?>" required><br><br>

        <label>Harga:</label>
        <input type="text" name="price" value="<?= htmlspecialchars($row['price']); ?>" required><br><br>

        <label>Gambar URL:</label>
        <input type="text" name="image" value="<?= htmlspecialchars($row['image']); ?>"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali ke Data Produk</a>
</body>
</html>
