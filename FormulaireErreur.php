<!Doctype>
<html>

	<head>

		<title> Connexion Client </title>
		<h1> Connexion Client </h1>
	</head>

	<body> 

		<p>	<b>Accès compte client</b> </p>
		<font color='red'> Identifiant/mot de passe incorrect </font>
		<form action="" method="post">
			<p>
				<label for="User_name"> Nom d'utilisateur : </label>
				<input type="text" name="pseudo" id="User_name" value="<?php echo set_value('pseudo'); ?>" /> <!--On réaffiche son pseudo si il y eu une erreur de mdp -->
				<?php echo form_error('pseudo'); ?> <!--on affiche l'erreur si il y en a une pour le pseudo -->
			</p>
			<!-- Idem pour le mot de passe -->
			<p>
				<label for="password"> Mot de passe : </label> 
				<input type="password" name="password" id="password" />

				<?php echo form_error('password'); ?>
			</p>
			<p>
				<input type="submit" value="Valider"/>
			</p>
		</form>

	</body>

</html>