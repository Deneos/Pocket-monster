<!DOCTYPE html>
<html>
<head>
	<title>Pocket-Monster : cr&eacute;ation d'un Monstre</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>Pocket-Monster</h1>
	<h3>&Eacute;tape 3 : </h3>

	<p>Vous avez cr&eacute;e la famille  "<?php echo $_POST['familly_name'] ; ?>" .</p>
	 
	<p>Pour changer le nom de la famille, <a href="famillyform.php">clique ici</a> pour revenir &agrave; l'&eacute;tape 2.</p>
	<form action='"...".php' method='post' enctype="multipart/form-data">
		<h2> Cr&eacute;ation d'un Monstre : </h2>
		<p>
			<label>Nom du Monstre :</label>
			<input type="text" name = 'monster_name' maxlength='10' required>
		</p>	
		<p>
			<label>Photo du Monstre :</label>
			<input type="file" name="monster_avatar" required>
		</p>
		<p>
			<label>Famille :</label>
			<input type="text" name = 'familly_name' maxlength='10' required>
		</p>
		<p>
			<label>Sexe :</label>
			Homme : <input type="checkbox" name="sex_male">
			Femme : <input type="checkbox" name="sex_female">
		</p>	
		<center><input type="submit" name="envoyer" value="Cr&eacute;er un Monstre"></center>
	</form>
</body>
</html>