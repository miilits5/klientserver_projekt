<?php

    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");

            $sql = "select b.punktid, a.* from ttihhano_projekt_punktid a, ttihhano_projekt_punktid_alg b where b.nimi = a.nimi ORDER BY a.nimi DESC;";
            $result = $l->query($sql);

            if ($result->num_rows > 0) {
                 while($row = $result->fetch_assoc()) {
                     echo "<div class=komm><p>Nimi: ". $row["nimi"]. "</p><br><p>punktid: ". $row["punktid"]. "</p><br><p>Kuupaev: ". $row["kuupaev"]. "</p><br><p>Hinnang: ". $row["hinne"]. "</p><br><p>Kommentaar: ". $row["kommentaar"]. "</p></div>";
                 }
            } else {
                 echo "Keegi pole veel kommenteerinud!";
            }
    mysqli_close($l);
?>
