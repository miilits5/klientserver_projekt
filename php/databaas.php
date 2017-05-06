<?php

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");

            $sql = "SELECT nimi, punktid, kuupaev FROM ttihhano_projekt_punktid";
            $result = $l->query($sql);

            if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     echo "<p>Nimi: ". $row["nimi"]. " - Punktid: ". $row["punktid"]. " - Kuupaev: ". $row["kuupaev"]. "</p>";
                 }
            } else {
                 echo "Keegi pole veel m2nginud!";
            }
    mysqli_close($l);
?>
