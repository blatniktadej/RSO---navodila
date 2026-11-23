<?php
require "poveza.php";

$rezultat = $povezava->query("SELECT * FROM prijave ORDER BY datum DESC");
?>
<!DOCTYPE html>
<html lang="sl">
<head><meta charset="UTF-8"><title>Prijave</title></head>
<body>

<h1>Seznam prijav</h1>

<table border="1" cellpadding="8">
  <tr><th>Ime</th><th>Priimek</th><th>E-pošta</th><th>Sporočilo</th><th>Datum</th></tr>

  <?php while ($vrstica = $rezultat->fetch_assoc()) { ?>
    <tr>
      <td><?php echo htmlspecialchars($vrstica["ime"]); ?></td>
      <td><?php echo htmlspecialchars($vrstica["priimek"]); ?></td>
      <td><?php echo htmlspecialchars($vrstica["email"]); ?></td>
      <td><?php echo htmlspecialchars($vrstica["sporocilo"]); ?></td>
      <td><?php echo $vrstica["datum"]; ?></td>
    </tr>
  <?php } ?>

</table>

</body>
</html>