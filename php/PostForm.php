<!DOCTYPE html>
<html>

<body>
    <a href="../index.php">Home</a>
    <p>Welcome to our awesome feedback page!</p>
    <p>Did you like the service?</p>

  <form action="/PostForm.php" method="post" target="_self">
        <select name="feedback">
            <option value="2">I liked it a lot</option>
            <option value="1">It was OK</option>
            <option value="0">I did not like it</option>
        </select>
        <br>
        <p>Please elaborate: </p>
        <textarea name="text" id="textarea" cols="45" rows="5"></textarea>
        <br>
        <input type="submit" value="Submit">
  </form>

</body>

</html>
