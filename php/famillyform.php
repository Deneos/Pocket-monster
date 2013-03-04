<!DOCTYPE html>
<html>
<head>
	<title>Pocket-Monster : cr&eacute;ation d'une Famille</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1>Pocket-Monster</h1>
	<h3>&Eacute;tape 2 : </h3>

	<p>Bienvenu dans le monde  <?php echo $_POST['world_name'];?> !</p>
	 
	<p>Si tu veux changer le nom du monde, <a href="worldform.php">clique ici</a> pour revenir &agrave; l'&eacute;tape 1.</p>

	<form action='monsterform.php' method='post' enctype="multipart/form-data">
		<h2> Cr&eacute;ation d'une Famille : </h2>
		<p>
			<label>Nom de la Famille :</label>
			<input type="text" name = 'familly_name' maxlength='10' required>
		</p>	
		<p>
			<label>Photo de Famille :</label>
			<input type="file" name="familly_avatar" required>
		</p>
		<p>
			<label>Nombre de membre de la Famille :</label>
			<input type="int" name = 'familly_number' maxlength='2' required>
		</p>	
		<center><input type="submit" name="envoyer" value="Cr&eacute;er la Famille"></center>
	</form>
</body>
</html>