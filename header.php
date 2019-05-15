<head>
<title>mdr</title>
</head>
<?php 

date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');
echo "Date du jour : ", strftime("%A %d %B %Y");

$heure = date("H:i");

if ( ($heure>20 and $heure<=23) or ( ($heure >=0) and ($heure <8)))
{
    echo "<style>body{background-color: #3f3f3f;}}</style>";
    echo "<style>text{color : white;}}</style>";
}else
{
   echo" <style>body{background-color: white;}</style>";
    echo "<style>p{color : black ;}}</style>";
}


?>
