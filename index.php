<?php
if($_POST["message"]) {
    mail("vineet.dhandhania@gmail.com", "Form to email message", $_POST["message"], "From: some@gmail.com");
}
?>
<html>
  <body>
<form method="post" action="index.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
</body>
</html>
