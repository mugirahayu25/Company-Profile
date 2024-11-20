<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan file CSS -->
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
