<?php 
include "header.php";

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');
echo "Date du jour : ", strftime("%A %d %B %Y");


?>

<body>
<br>
<a href="bordeaux.php">Bordeaux</a>
<br>
<a href="paris.php">Paris</a>
</body>