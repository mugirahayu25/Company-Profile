<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        /* Gaya untuk body */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9; /* Latar belakang abu-abu terang */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Menggunakan tinggi penuh layar */
            text-align: center;
            flex-direction: column;
        }

        /* Gaya untuk container utama */
        .container {
            background: #ffffff; /* Latar belakang putih untuk kotak */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            width: 100%;
            max-width: 500px; /* Batas maksimal lebar form */
            box-sizing: border-box;
        }

        /* Gaya untuk heading */
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* Gaya untuk link */
        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 20px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Gaya untuk input fields */
        input[type="text"],
        input[type="number"],
        input[type="file"],
        input[type="submit"] {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Agar padding dihitung dalam lebar total */
        }

        /* Gaya untuk tombol submit */
        input[type="submit"] {
            background-color: #4CAF50; /* Warna hijau */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Placeholder warna abu-abu */
        input::placeholder {
            color: #888;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk</h1>
        <a href="show.php">Lihat data produk</a>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Input nama produk" required>
            <input type="number" name="price" placeholder="Input harga produk" required>
            <input type="file" name="image" required>
            <input type="submit" value="Simpan" name="submit">
        </form>
    </div>
</body>
</html>
