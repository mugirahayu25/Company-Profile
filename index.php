<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
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
            text-align: center; /* Menjaga teks berada di tengah */
        }

        /* Gaya untuk form container */
        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            width: 100%;
            max-width: 400px; /* Batas maksimal lebar form */
            box-sizing: border-box; /* Agar padding tidak mempengaruhi lebar */
        }

        /* Gaya untuk heading */
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        /* Gaya untuk input dan button */
        input[type="email"],
        input[type="password"],
        button {
            display: block;
            width: 100%; /* Memastikan input dan tombol memiliki lebar 100% */
            padding: 12px;
            margin: 10px 0;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Agar padding dihitung dalam lebar total */
        }

        /* Gaya untuk tombol login */
        button {
            background-color: #4CAF50; /* Warna hijau */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect untuk tombol login */
        button:hover {
            background-color: #45a049;
        }

        /* Placeholder warna abu-abu */
        input::placeholder {
            color: #888;
        }
    </style>
</head>
<body>
    <form action="./backend/login.php" method="POST">
        <h1>Ini halaman login</h1>
        <input type="email" name="email" id="email" placeholder="Email" required/>
        <input type="password" name="password" id="password" placeholder="Password" required/>
        <button type="submit">Login</button>
    </form>
</body>
</html>
