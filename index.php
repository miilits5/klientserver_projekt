<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>i244 Projekt</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>
    <div class="start-page">
        <div class="form">
            <form class="start-form">
                <p class="message"><a href="php/mang.php">Mäng</a></p>
                <p class="message"><?php echo 'Teie PHP versioon: ' . phpversion();?><p>
            </form>
        </div>
    </div>
    <div class="score-page">
      <div class="form">
        <form class="score-form">
        <p class="message">Punktid:</p>
        <?php include 'php/databaas.php';?>
      </form>
      </div>
      </div>
      <p>
        <a href="http://validator.w3.org/check?uri=referer">
          <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
        </a>
      </p>
</body>

</html>
