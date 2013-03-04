<!DOCTYPE html>
<html>
<head>
	<title>Pocket-Monster : cr&eacute;ation du Monde</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>Pocket-Monster</h1>
	<h3>&Eacute;tape 1 : </h3>
	<form action='famillyform.php' method='post' enctype="multipart/form-data">
		<h2> Cr&eacute;ation d'un Monde : </h2>
		<p>
			<label>Nom du Monde :</label>
			<input type="text" name = 'world_name' maxlength='10' required>
		</p>	
		<p>
			<label>Background du Monde :</label>
			<input type="file" name="background" required>
		</p>
		<center><input type="submit" name="envoyer" value="Cr&eacute;er le Monde"></center>
	</form>
</body>
</html>