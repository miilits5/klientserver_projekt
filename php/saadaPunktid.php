
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $mn = $_POST['mn'];
    $p = $_POST['p'];
    $kp = $_POST['kp'];

    echo $mn;
    echo $p;
    echo $kp;

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");

    $sql="INSERT INTO ttihhano_projekt_punktid_alg (nimi, punktid, kuupaev) VALUES ('".$mn."', '".$p."' , '".$kp."')";
    echo $sql;
    $result = $l->query($sql);
    echo $result;

mysqli_close($l)
?>
