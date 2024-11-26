<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            height: 100vh;
            text-align: center;
        }

        /* Gaya untuk form container */
        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            width: 100%;
            max-width: 400px; /* Batas maksimal lebar form */
            box-sizing: border-box;
        }

        /* Gaya untuk heading */
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* Gaya untuk input fields */
        input[type="email"],
        input[type="password"],
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
    <form action="./backend/login.php" method="post">
        <h1>Login</h1>
        <input type="email" name="email" placeholder="Masukkan email anda" required>
        <input type="password" name="password" placeholder="Masukkan password anda" required>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>