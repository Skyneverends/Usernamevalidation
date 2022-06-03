<?php
$usernameVar=$_GET["username"];
if (!preg_match("/^[a-zA-Z]*$/",$usernameVar)) 
{
$usernameError="Only latter and whitespace are allowed.";
 echo "".$usernameError;
}
else 
echo "Username is ".$usernameVar;

?>

<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="GET">
Username: <input type="text" name="username" /> <br />

<input type="submit"/>
</form>
</body>
</html>
