<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
</head>
<body>
    <h1>Obrazec za prijavo:</h1>

    <form action="shrani.php" method="post">
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime">
        <br>
        <label for="priimek">Priimek:</label>
        <input type="text" id="priimek" name="priimek">
        <br>
        <label for="email">Elektronski naslov:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="sporocilo">Sporočilo:</label>
        <textarea name="sporocilo" id="sporocilo" rows="4"></textarea>
        <br>
        <button type="submit">Pošilji</button>


    </form>
    
    
</body>
</html>