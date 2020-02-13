<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>$_POST</title>
</head>
<body>
<a href="index.php">Strona główna</a><br /><br />
    <form action="akcja.php" method="post" id="form" />
		<input type="text" value="tresc" name="tresc" />
		<input type="submit" />
	</form>
	<script>
	document.forms["form"].submit();
	
	</script>
</body>
</html>