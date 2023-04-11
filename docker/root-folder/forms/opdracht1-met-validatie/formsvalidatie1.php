<!DOCTYPE html>
<html>
<body>

<form action="formsvalidatie1.php" method="post">

Name: <input type="text" name="name" required><br>
E-mail: <input type="text" name="email" required><br>
<input type="submit">
</form>

<?php
$name ='';
$email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
} 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



Welcome <?php echo $name; ?><br>
Your email address is: <?php echo $email; ?>

</body>
</html>
