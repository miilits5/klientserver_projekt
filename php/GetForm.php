<!DOCTYPE html>
<html>
<body>
<a href="../index.php">Home</a>
<p>Who are you?</p>

<form action="/GetForm.php" method="get" target="_self">
  <table border=1>
  <tr><td>First name</td><td><input type="text" name="fname"></td></tr>
  <tr><td>Last name</td><td><input type="text" name="lname"></td></tr>
  <tr><td>Birth date</td><td><input type="date" name="bdate"></td></tr>
  <tr><td>Address</td><td><input type="text" name="address"></td></tr>
  <tr><td>Eye color</td><td><input type="color" name="eyecol"></td></tr>
  <tr><td>Accept terms & conditions</td><td><input type="checkbox" name="terms"></td></tr>

  <tr><td colspan=2><input type="submit" value="Submit"></td></tr>
  </table>
</form>



</body>
</html>
