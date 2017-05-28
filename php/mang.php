<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>i244 Projekt</title>
    <link rel="stylesheet" href="../css/mang.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <p id="tekst">Vajuta nuppu 10 sekundi jooksul võimalikult palju. </p>
    <script src="../js/mang.js"></script>
	<div class="wrapper">
    <button id="nupp0" onclick="startTimer()">Alusta Mängu</button><br>
    <button class="peidusNupp" id="nupp" onclick="lisaPunkt()">Lisa 1 punkt</button><br>
    <button class="peidusNupp" id="nupp2" onclick="salvesta()">Salvesta punktid</button><br>
	</div>
    <form action="../php/postKommentaar.php" id="kommentaariVorm" class="peidusVorm" method="POST" target="_self">
      <p>Nimi: </p><input id="postnimi" name="nimi" type="text" readonly /></input><br><br><br>
      <p>Hinnang mängule: </p>
      <select name="hinne">
          <option value="1">1 - Igav</option>
          <option value="2">2 - Hakkab looma</option>
          <option value="3" selected="selected">3 - Normaalne</option>
          <option value="4">4 - Päris hea</option>
          <option value="5">5 - Lemmik mäng</option>
      </select><br>
      <textarea name="kommentaar" rows="4" cols="50" maxlength="254" onfocus="clearContents(this);">Kommentaar</textarea><br>
      <button id="nupp3" onclick="salvestaKomm()">Salvesta kommentaar</button>

    </form>

</body>

</html>
