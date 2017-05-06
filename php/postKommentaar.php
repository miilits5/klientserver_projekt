<?php
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$n = $_POST['nimi'];
$kom = $_POST['kommentaar'];
$hi = $_POST['hinne'];

$l = mysqli_connect($host, $user, $pass, $db);
mysqli_query($l, "SET CHARACTER SET UTF8") or
        die("Error, ei saa andmebaasi charsetti seatud");

        $sql = "INSERT INTO ttihhano_projekt_punktid (nimi, kommentaar, hinne) VALUES ('".$n."', '".$kom."' , '".$hi."')";
        $result = $l->query($sql);

mysqli_close($l);
header("Location: ../php/kommentaarid2.php");
die();

?>
